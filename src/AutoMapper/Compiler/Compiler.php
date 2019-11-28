<?php

namespace Jane\AutoMapper\Compiler;

use Jane\AutoMapper\Context;
use Jane\AutoMapper\Mapper;
use Jane\AutoMapper\MapperConfigurationInterface;
use function Jane\isPhpParser4;
use function Jane\parserExpression;
use function Jane\parserVariable;
use PhpParser\Node\Arg;
use PhpParser\Node\Expr;
use PhpParser\Node\Name;
use PhpParser\Node\Param;
use PhpParser\Node\Scalar;
use PhpParser\Node\Stmt;
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

        if (\count($propertiesMapping) === 0) {
            throw new \RuntimeException('No properties to compile');
        }

        $uniqueVariableScope = new UniqueVariableScope();
        $sourceInput = new Expr\Variable($uniqueVariableScope->getUniqueName('value'));
        $result = new Expr\Variable($uniqueVariableScope->getUniqueName('result'));
        $hashVariable = new Expr\Variable($uniqueVariableScope->getUniqueName('sourceHash'));
        $contextVariable = new Expr\Variable($uniqueVariableScope->getUniqueName('context'));
        $statements = [];
        $constructStatements = [];

        if ($mapperConfiguration->getSource() !== 'array') {
            $statements[] = parserExpression(new Expr\Assign($hashVariable, new Expr\BinaryOp\Concat(new Expr\FuncCall(new Name('spl_object_hash'), [
                new Arg($sourceInput),
            ]),
                new Scalar\String_($mapperConfiguration->getTarget())
            )));
            $statements[] = new Stmt\If_(new Expr\FuncCall(new Name('array_key_exists'), [
                new Arg($hashVariable),
                new Arg(new Expr\MethodCall($contextVariable, 'getRegistry')),
            ]), [
                'stmts' => [
                    new Stmt\Return_(new Expr\ArrayDimFetch(new Expr\MethodCall($contextVariable, 'getRegistry'), $hashVariable)),
                ],
            ]);
        }

        if ($mapperConfiguration->getTarget() === 'array') {
            $statements[] = parserExpression(new Expr\Assign($result, new Expr\Array_()));
        } elseif ($mapperConfiguration->getTarget() === \stdClass::class) {
            $statements[] = parserExpression(new Expr\Assign($result, new Expr\New_(new Name(\stdClass::class))));
        } elseif ($mapperConfiguration->shouldDisabledTargetConstructor()) {
            if ($mapperConfiguration->isTargetCloneable()) {
                $constructStatements[] = parserExpression(new Expr\Assign(
                    new Expr\PropertyFetch(new Expr\Variable('this'), 'cachedTarget'),
                    new Expr\MethodCall(new Expr\New_(new Name(\ReflectionClass::class), [
                        new Arg(new Scalar\String_($mapperConfiguration->getTarget())),
                    ]), 'newInstanceWithoutConstructor')
                ));
                $statements[] = parserExpression(new Expr\Assign($result, new Expr\Clone_(new Expr\PropertyFetch(new Expr\Variable('this'), 'cachedTarget'))));
            } else {
                $constructStatements[] = parserExpression(new Expr\Assign(
                    new Expr\PropertyFetch(new Expr\Variable('this'), 'cachedTarget'),
                    new Expr\New_(new Name(\ReflectionClass::class), [
                        new Arg(new Scalar\String_($mapperConfiguration->getTarget())),
                    ])
                ));
                $statements[] = parserExpression(new Expr\Assign($result, new Expr\MethodCall(
                    new Expr\PropertyFetch(new Expr\Variable('this'), 'cachedTarget'),
                    'newInstanceWithoutConstructor'
                )));
            }
        } else {
            $constructArguments = [];
            $reflectionClass = new \ReflectionClass($mapperConfiguration->getTarget());
            $constructor = $reflectionClass->getConstructor();

            if ($constructor !== null) {
                /** @var PropertyMapping $propertyMapping */
                foreach ($propertiesMapping as $propertyMapping) {
                    if ($propertyMapping->getWriteMutator()->getParameter() === null) {
                        continue;
                    }

                    [$output, $propStatements] = $propertyMapping->getTransformer()->transform($propertyMapping->getReadAccessor()->getExpression($sourceInput), $uniqueVariableScope);
                    $constructArguments[$propertyMapping->getWriteMutator()->getParameter()->getPosition()] = new Arg($output);

                    $statements = array_merge(
                        $statements,
                        $propStatements
                    );
                }

                foreach ($constructor->getParameters() as $constructorParameter) {
                    if (!\array_key_exists($constructorParameter->getPosition(), $constructArguments)) {
                        $constructArguments[$constructorParameter->getPosition()] = new Arg($this->getValueAsExpr($constructorParameter->getDefaultValue()));
                    }
                }
            }

            $statements[] = parserExpression(new Expr\Assign($result, new Expr\New_(new Name($mapperConfiguration->getTarget()), $constructArguments)));
        }

        if ($mapperConfiguration->getSource() !== 'array') {
            $statements[] = parserExpression(new Expr\AssignRef(
                new Expr\ArrayDimFetch(new Expr\MethodCall($contextVariable, 'getRegistry'), $hashVariable),
                $result
            ));
        }

        /** @var PropertyMapping $propertyMapping */
        foreach ($propertiesMapping as $propertyMapping) {
            [$output, $propStatements] = $propertyMapping->getTransformer()->transform($propertyMapping->getReadAccessor()->getExpression($sourceInput), $uniqueVariableScope);
            $writeExpression = $propertyMapping->getWriteMutator()->getExpression($result, $output);

            if ($writeExpression === null) {
                continue;
            }

            $propStatements[] = parserExpression($writeExpression);
            $conditions = [];

            $extractCallback = $propertyMapping->getReadAccessor()->getExtractCallback($mapperConfiguration->getSource());
            $hydrateCallback = $propertyMapping->getWriteMutator()->getHydrateCallback($mapperConfiguration->getTarget());

            if (null !== $extractCallback) {
                $constructStatements[] = parserExpression(new Expr\Assign(
                    new Expr\ArrayDimFetch(new Expr\PropertyFetch(new Expr\Variable('this'), 'extractCallbacks'), new Scalar\String_($propertyMapping->getProperty())),
                    $extractCallback
                ));
            }

            if (null !== $hydrateCallback) {
                $constructStatements[] = parserExpression(new Expr\Assign(
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

        $mapmethod = new Stmt\ClassMethod('map', [
            'type' => Stmt\Class_::MODIFIER_PUBLIC,
            'params' => [
                new Param(parserVariable($sourceInput->name)),
                new Param(parserVariable('context'), null, new Name\FullyQualified(Context::class)),
            ],
            'stmts' => $statements,
        ]);

        $constructMethod = new Stmt\ClassMethod('__construct', [
            'type' => Stmt\Class_::MODIFIER_PUBLIC,
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
                $mapmethod,
            ],
        ]);
    }

    private function getValueAsExpr($value)
    {
        $expr = $this->parser->parse('<?php ' . var_export($value, true) . ';')[0];

        if (isPhpParser4() &&
            $expr instanceof Stmt\Expression) {
            return $expr->expr;
        }

        return $expr;
    }
}
