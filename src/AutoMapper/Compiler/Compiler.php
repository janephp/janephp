<?php

namespace Jane\AutoMapper\Compiler;

use Jane\AutoMapper\AutoMapperInterface;
use Jane\AutoMapper\Context;
use Jane\AutoMapper\Mapper;
use Jane\AutoMapper\MapperConfigurationInterface;
use PhpParser\Node\Arg;
use PhpParser\Node\Expr;
use PhpParser\Node\Name;
use PhpParser\Node\Param;
use PhpParser\Node\Stmt;
use PhpParser\Node\Scalar;
use PhpParser\Parser;
use PhpParser\ParserFactory;

class Compiler
{
    private $parser;

    public function __construct(Parser $parser = null)
    {
        $this->parser = $parser ?? (new ParserFactory())->create(ParserFactory::PREFER_PHP7);
    }

    public function compile(MapperConfigurationInterface $mapperConfiguration)
    {
        $propertiesMapping = $mapperConfiguration->getPropertiesMapping();

        $uniqueVariableScope = new UniqueVariableScope();
        $sourceInput = new Expr\Variable($uniqueVariableScope->getUniqueName('value'));
        $result = new Expr\Variable($uniqueVariableScope->getUniqueName('result'));
        $hashVariable = new Expr\Variable($uniqueVariableScope->getUniqueName('sourceHash'));
        $contextVariable = new Expr\Variable($uniqueVariableScope->getUniqueName('context'));
        $constructStatements = [];
        $injectMapperStatements = [];
        $addedDependencies = [];
        $inConstructor = [];
        $reflectionClass = $mapperConfiguration->getTarget() === 'array' ? null : new \ReflectionClass($mapperConfiguration->getTarget());
        $targetConstructor = $reflectionClass ? $reflectionClass->getConstructor() : null;

        $statements = [
            new Stmt\If_(new Expr\BinaryOp\Identical(new Expr\ConstFetch(new Name('null')), $sourceInput), [
                'stmts' => [new Stmt\Return_(new Expr\ConstFetch(new Name('null')))],
            ]),
        ];

        if ($mapperConfiguration->getSource() !== 'array') {
            $statements[] = new Stmt\Expression(new Expr\Assign($hashVariable, new Expr\BinaryOp\Concat(new Expr\FuncCall(new Name('spl_object_hash'), [
                new Arg($sourceInput),
            ]),
                new Scalar\String_($mapperConfiguration->getTarget())
            )));
            $statements[] = new Stmt\If_(new Expr\MethodCall($contextVariable, new Name('hasReference'), [
                new Arg($hashVariable),
            ]), [
                'stmts' => [
                    new Stmt\Return_(new Expr\MethodCall($contextVariable, 'getReference', [
                        new Arg($hashVariable),
                    ])),
                ],
            ]);
        }

        if ($mapperConfiguration->getTarget() === 'array') {
            $statements[] = new Stmt\Expression(new Expr\Assign($result, new Expr\Array_()));
        } elseif ($mapperConfiguration->getTarget() === \stdClass::class) {
            $statements[] = new Stmt\Expression(new Expr\Assign($result, new Expr\New_(new Name(\stdClass::class))));
        } elseif ($targetConstructor !== null && $mapperConfiguration->hasConstructor()) {
            $constructArguments = [];

            /** @var PropertyMapping $propertyMapping */
            foreach ($propertiesMapping as $propertyMapping) {
                if ($propertyMapping->getWriteMutator()->getParameter() === null) {
                    continue;
                }

                [$output, $propStatements] = $propertyMapping->getTransformer()->transform($propertyMapping->getReadAccessor()->getExpression($sourceInput), $uniqueVariableScope);
                $constructArguments[$propertyMapping->getWriteMutator()->getParameter()->getPosition()] = new Arg($output);

                $constructStatements = array_merge(
                    $constructStatements,
                    $propStatements
                );

                $inConstructor[] = $propertyMapping->getProperty();
            }

            foreach ($targetConstructor->getParameters() as $constructorParameter) {
                if (!array_key_exists($constructorParameter->getPosition(), $constructArguments) && $constructorParameter->isDefaultValueAvailable()) {
                    $constructArguments[$constructorParameter->getPosition()] = new Arg($this->getValueAsExpr($constructorParameter->getDefaultValue()));
                }
            }

            $statements[] = new Stmt\Expression(new Expr\Assign($result, new Expr\New_(new Name($mapperConfiguration->getTarget()), $constructArguments)));
        } elseif ($targetConstructor !== null && $mapperConfiguration->isTargetCloneable()) {
            $constructStatements[] = new Stmt\Expression(new Expr\Assign(
                new Expr\PropertyFetch(new Expr\Variable('this'), 'cachedTarget'),
                new Expr\MethodCall(new Expr\New_(new Name(\ReflectionClass::class), [
                    new Arg(new Scalar\String_($mapperConfiguration->getTarget())),
                ]), 'newInstanceWithoutConstructor')
            ));
            $statements[] = new Stmt\Expression(new Expr\Assign($result, new Expr\Clone_(new Expr\PropertyFetch(new Expr\Variable('this'), 'cachedTarget'))));
        } elseif ($targetConstructor !== null) {
            $constructStatements[] = new Stmt\Expression(new Expr\Assign(
                new Expr\PropertyFetch(new Expr\Variable('this'), 'cachedTarget'),
                new Expr\New_(new Name(\ReflectionClass::class), [
                    new Arg(new Scalar\String_($mapperConfiguration->getTarget())),
                ])
            ));
            $statements[] = new Stmt\Expression(new Expr\Assign($result, new Expr\MethodCall(
                new Expr\PropertyFetch(new Expr\Variable('this'), 'cachedTarget'),
                'newInstanceWithoutConstructor'
            )));
        } else {
            $statements[] = new Stmt\Expression(new Expr\Assign($result, new Expr\New_(new Name($mapperConfiguration->getTarget()))));
        }

        foreach ($propertiesMapping as $propertyMapping) {
            $transformer = $propertyMapping->getTransformer();

            foreach ($transformer->getDependencies() as $dependency) {
                if (isset($addedDependencies[$dependency->getName()])) {
                    continue;
                }

                $injectMapperStatements[] = new Stmt\Expression(new Expr\Assign(
                    new Expr\ArrayDimFetch(new Expr\PropertyFetch(new Expr\Variable('this'), 'mappers'), new Scalar\String_($dependency->getName())),
                    new Expr\MethodCall(new Expr\Variable('autoMapper'), 'getMapper', [
                        new Arg(new Scalar\String_($dependency->getSource())),
                        new Arg(new Scalar\String_($dependency->getTarget())),
                    ])
                ));
                $addedDependencies[$dependency->getName()] = true;
            }
        }

        if (\count($addedDependencies) > 0) {
            if ($mapperConfiguration->getSource() !== 'array') {
                $statements[] = new Stmt\Expression(new Expr\Assign(
                    $contextVariable,
                    new Expr\MethodCall($contextVariable, 'withReference', [
                        new Arg($hashVariable),
                        new Arg($result),
                    ])
                ));
            }

            $statements[] = new Stmt\Expression(new Expr\Assign(
                $contextVariable,
                new Expr\MethodCall($contextVariable, 'withIncrementedDepth')
            ));
        }

        /** @var PropertyMapping $propertyMapping */
        foreach ($propertiesMapping as $propertyMapping) {
            $transformer = $propertyMapping->getTransformer();

            if (\in_array($propertyMapping->getProperty(), $inConstructor, true)) {
                continue;
            }

            [$output, $propStatements] = $transformer->transform($propertyMapping->getReadAccessor()->getExpression($sourceInput), $uniqueVariableScope);
            $writeExpression = $propertyMapping->getWriteMutator()->getExpression($result, $output);

            if ($writeExpression === null) {
                continue;
            }

            $propStatements[] = new Stmt\Expression($writeExpression);
            $conditions = [];

            $extractCallback = $propertyMapping->getReadAccessor()->getExtractCallback($mapperConfiguration->getSource());
            $hydrateCallback = $propertyMapping->getWriteMutator()->getHydrateCallback($mapperConfiguration->getTarget());

            if (null !== $extractCallback) {
                $constructStatements[] = new Stmt\Expression(new Expr\Assign(
                    new Expr\ArrayDimFetch(new Expr\PropertyFetch(new Expr\Variable('this'), 'extractCallbacks'), new Scalar\String_($propertyMapping->getProperty())),
                    $extractCallback
                ));
            }

            if (null !== $hydrateCallback) {
                $constructStatements[] = new Stmt\Expression(new Expr\Assign(
                    new Expr\ArrayDimFetch(new Expr\PropertyFetch(new Expr\Variable('this'), 'hydrateCallbacks'), new Scalar\String_($propertyMapping->getProperty())),
                    $hydrateCallback
                ));
            }

            if ($propertyMapping->checkExists()) {
                if ($mapperConfiguration->getSource() === \stdClass::class) {
                    $conditions[] = new Expr\FuncCall(new Name('property_exists'), [
                        new Arg($sourceInput),
                        new Arg(new Scalar\String_($propertyMapping->getProperty())),
                    ]);
                }

                if ($mapperConfiguration->getSource() === 'array') {
                    $conditions[] = new Expr\FuncCall(new Name('array_key_exists'), [
                        new Arg(new Scalar\String_($propertyMapping->getProperty())),
                        new Arg($sourceInput),
                    ]);
                }
            }

            if (null !== $propertyMapping->getSourceGroups()) {
                $conditions[] = new Expr\BinaryOp\BooleanAnd(
                    new Expr\BinaryOp\NotIdentical(
                        new Expr\ConstFetch(new Name('null')),
                        new Expr\MethodCall(new Expr\Variable('context'), 'getGroups')
                    ),
                    new Expr\FuncCall(new Name('array_intersect'), [
                        new Arg(new Expr\MethodCall(new Expr\Variable('context'), 'getGroups')),
                        new Arg(new Expr\Array_(array_map(function (string $group) {
                            return new Expr\ArrayItem(new Scalar\String_($group));
                        }, $propertyMapping->getSourceGroups()))),
                    ])
                );
            }

            if (null !== $propertyMapping->getTargetGroups()) {
                $conditions[] = new Expr\BinaryOp\BooleanAnd(
                    new Expr\BinaryOp\NotIdentical(
                        new Expr\ConstFetch(new Name('null')),
                        new Expr\MethodCall(new Expr\Variable('context'), 'getGroups')
                    ),
                    new Expr\FuncCall(new Name('array_intersect'), [
                        new Arg(new Expr\MethodCall(new Expr\Variable('context'), 'getGroups')),
                        new Arg(new Expr\Array_(array_map(function (string $group) {
                            return new Expr\ArrayItem(new Scalar\String_($group));
                        }, $propertyMapping->getTargetGroups()))),
                    ])
                );
            }

            if (null !== $propertyMapping->getMaxDepth()) {
                $conditions[] = new Expr\BinaryOp\SmallerOrEqual(
                    new Expr\MethodCall($contextVariable, 'getDepth'),
                    new Scalar\LNumber($propertyMapping->getMaxDepth())
                );
            }

            if (\count($conditions) > 0) {
                $condition = array_shift($conditions);

                while (\count($conditions) > 0) {
                    $condition = new Expr\BinaryOp\BooleanAnd($condition, array_shift($conditions));
                }

                $propStatements = [new Stmt\If_($condition, [
                    'stmts' => $propStatements,
                ])];
            }

            $statements = array_merge(
                $statements,
                $propStatements
            );
        }

        $statements[] = new Stmt\Return_($result);

        $mapMethod = new Stmt\ClassMethod('map', [
            'flags' => Stmt\Class_::MODIFIER_PUBLIC,
            'params' => [
                new Param(new Expr\Variable($sourceInput->name)),
                new Param(new Expr\Variable('context'), null, new Name\FullyQualified(Context::class)),
            ],
            'stmts' => $statements,
        ]);

        $injectMappersMethod = new Stmt\ClassMethod('injectMappers', [
            'flags' => Stmt\Class_::MODIFIER_PUBLIC,
            'params' => [
                new Param(new Expr\Variable('autoMapper'), null, new Name\FullyQualified(AutoMapperInterface::class)),
            ],
            'stmts' => $injectMapperStatements,
        ]);

        $constructMethod = new Stmt\ClassMethod('__construct', [
            'flags' => Stmt\Class_::MODIFIER_PUBLIC,
            'stmts' => $constructStatements,
        ]);

        return new Stmt\Class_(new Name($mapperConfiguration->getMapperClassName()), [
            'flags' => Stmt\Class_::MODIFIER_FINAL,
            'extends' => new Name\FullyQualified(Mapper::class),
            'stmts' => [
                new Stmt\Property(Stmt\Class_::MODIFIER_PROTECTED, [
                    new Stmt\PropertyProperty('hash', new Scalar\String_($mapperConfiguration->getModificationHash())),
                ]),
                $constructMethod,
                $mapMethod,
                $injectMappersMethod,
            ],
        ]);
    }

    /**
     * @param MapperDependency[] $dependencies
     */
    private function getConstructor($dependencies): Stmt\ClassMethod
    {
        if (\count($dependencies) === 0) {
            return null;
        }

        foreach ($dependencies as $dependency) {
        }
    }

    private function getValueAsExpr($value)
    {
        $expr = $this->parser->parse('<?php ' . var_export($value, true) . ';')[0];

        if ($expr instanceof Stmt\Expression) {
            return $expr->expr;
        }

        return $expr;
    }
}
