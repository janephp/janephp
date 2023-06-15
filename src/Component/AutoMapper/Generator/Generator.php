<?php

namespace Jane\Component\AutoMapper\Generator;

use Jane\Component\AutoMapper\AutoMapperRegistryInterface;
use Jane\Component\AutoMapper\Exception\CompileException;
use Jane\Component\AutoMapper\Exception\ReadOnlyTargetException;
use Jane\Component\AutoMapper\Extractor\WriteMutator;
use Jane\Component\AutoMapper\GeneratedMapper;
use Jane\Component\AutoMapper\MapperContext;
use Jane\Component\AutoMapper\MapperGeneratorMetadataInterface;
use Jane\Component\AutoMapper\Transformer\AssignedByReferenceTransformerInterface;
use Jane\Component\AutoMapper\Transformer\DependentTransformerInterface;
use PhpParser\Node\Arg;
use PhpParser\Node\Expr;
use PhpParser\Node\Name;
use PhpParser\Node\Param;
use PhpParser\Node\Scalar;
use PhpParser\Node\Stmt;
use PhpParser\Parser;
use PhpParser\ParserFactory;
use Symfony\Component\Serializer\Mapping\ClassDiscriminatorResolverInterface;

/**
 * Generates code for a mapping class.
 *
 * @author Joel Wurtz <jwurtz@jolicode.com>
 */
final class Generator
{
    private $parser;

    private $classDiscriminator;

    private $allowReadOnlyTargetToPopulate;

    public function __construct(Parser $parser = null, ClassDiscriminatorResolverInterface $classDiscriminator = null, bool $allowReadOnlyTargetToPopulate = false)
    {
        $this->parser = $parser ?? (new ParserFactory())->create(ParserFactory::PREFER_PHP7);
        $this->classDiscriminator = $classDiscriminator;
        $this->allowReadOnlyTargetToPopulate = $allowReadOnlyTargetToPopulate;
    }

    /**
     * Generate Class AST given metadata for a mapper.
     *
     * @throws CompileException
     */
    public function generate(MapperGeneratorMetadataInterface $mapperGeneratorMetadata): Stmt\Class_
    {
        $propertiesMapping = $mapperGeneratorMetadata->getPropertiesMapping();

        $uniqueVariableScope = new UniqueVariableScope();
        $sourceInput = new Expr\Variable($uniqueVariableScope->getUniqueName('value'));
        $result = new Expr\Variable($uniqueVariableScope->getUniqueName('result'));
        $hashVariable = new Expr\Variable($uniqueVariableScope->getUniqueName('sourceHash'));
        $contextVariable = new Expr\Variable($uniqueVariableScope->getUniqueName('context'));
        $constructStatements = [];
        $addedDependencies = [];
        $canHaveCircularDependency = $mapperGeneratorMetadata->canHaveCircularReference() && 'array' !== $mapperGeneratorMetadata->getSource();

        $statements = [
            new Stmt\If_(new Expr\BinaryOp\Identical(new Expr\ConstFetch(new Name('null')), $sourceInput), [
                'stmts' => [new Stmt\Return_($sourceInput)],
            ]),
        ];

        if ($canHaveCircularDependency) {
            $statements[] = new Stmt\Expression(new Expr\Assign($hashVariable, new Expr\BinaryOp\Concat(new Expr\FuncCall(new Name('spl_object_hash'), [
                new Arg($sourceInput),
            ]),
                new Scalar\String_($mapperGeneratorMetadata->getTarget())
            )));
            $statements[] = new Stmt\If_(new Expr\StaticCall(new Name\FullyQualified(MapperContext::class), new Name('shouldHandleCircularReference'), [
                new Arg($contextVariable),
                new Arg($hashVariable),
                new Arg(new Expr\PropertyFetch(new Expr\Variable('this'), 'circularReferenceLimit')),
            ]), [
                'stmts' => [
                    new Stmt\Return_(new Expr\StaticCall(new Name\FullyQualified(MapperContext::class), 'handleCircularReference', [
                        new Arg($contextVariable),
                        new Arg($hashVariable),
                        new Arg($sourceInput),
                        new Arg(new Expr\PropertyFetch(new Expr\Variable('this'), 'circularReferenceLimit')),
                        new Arg(new Expr\PropertyFetch(new Expr\Variable('this'), 'circularReferenceHandler')),
                    ])),
                ],
            ]);
        }

        [$createObjectStmts, $inConstructor, $constructStatementsForCreateObjects, $injectMapperStatements] = $this->getCreateObjectStatements($mapperGeneratorMetadata, $result, $contextVariable, $sourceInput, $uniqueVariableScope);
        $constructStatements = array_merge($constructStatements, $constructStatementsForCreateObjects);

        $targetToPopulate = new Expr\ArrayDimFetch($contextVariable, new Scalar\String_(MapperContext::TARGET_TO_POPULATE));
        $statements[] = new Stmt\Expression(new Expr\Assign($result, new Expr\BinaryOp\Coalesce(
            $targetToPopulate,
            new Expr\ConstFetch(new Name('null'))
        )));
        if (!$this->allowReadOnlyTargetToPopulate && $mapperGeneratorMetadata->isTargetReadOnlyClass()) {
            $statements[] = new Stmt\If_(
                new Expr\BinaryOp\BooleanAnd(
                    new Expr\BooleanNot(new Expr\BinaryOp\Coalesce(new Expr\ArrayDimFetch($contextVariable, new Scalar\String_(MapperContext::ALLOW_READONLY_TARGET_TO_POPULATE)), new Expr\ConstFetch(new Name('false')))),
                    new Expr\FuncCall(new Name('is_object'), [new Arg(new Expr\BinaryOp\Coalesce($targetToPopulate, new Expr\ConstFetch(new Name('null'))))])
                ), [
                'stmts' => [new Stmt\Expression(new Expr\Throw_(new Expr\New_(new Name(ReadOnlyTargetException::class))))],
            ]);
        }

        $statements[] = new Stmt\If_(new Expr\BinaryOp\Identical(new Expr\ConstFetch(new Name('null')), $result), [
            'stmts' => $createObjectStmts,
        ]);

        foreach ($propertiesMapping as $propertyMapping) {
            if (!$propertyMapping->getTransformer() instanceof DependentTransformerInterface) {
                continue;
            }

            foreach ($propertyMapping->getTransformer()->getDependencies() as $dependency) {
                if (isset($addedDependencies[$dependency->getName()])) {
                    continue;
                }

                $injectMapperStatements[] = new Stmt\Expression(new Expr\Assign(
                    new Expr\ArrayDimFetch(new Expr\PropertyFetch(new Expr\Variable('this'), 'mappers'), new Scalar\String_($dependency->getName())),
                    new Expr\MethodCall(new Expr\Variable('autoMapperRegistry'), 'getMapper', [
                        new Arg(new Scalar\String_($dependency->getSource())),
                        new Arg(new Scalar\String_($dependency->getTarget())),
                    ])
                ));
                $addedDependencies[$dependency->getName()] = true;
            }
        }

        $addedDependenciesStatements = [];
        if ($addedDependencies) {
            if ($canHaveCircularDependency) {
                $addedDependenciesStatements[] = new Stmt\Expression(new Expr\Assign(
                    $contextVariable,
                    new Expr\StaticCall(new Name\FullyQualified(MapperContext::class), 'withReference', [
                        new Arg($contextVariable),
                        new Arg($hashVariable),
                        new Arg($result),
                    ])
                ));
            }

            $addedDependenciesStatements[] = new Stmt\Expression(new Expr\Assign(
                $contextVariable,
                new Expr\StaticCall(new Name\FullyQualified(MapperContext::class), 'withIncrementedDepth', [
                    new Arg($contextVariable),
                ])
            ));
        }

        $duplicatedStatements = [];
        $setterStatements = [];
        foreach ($propertiesMapping as $propertyMapping) {
            if ($propertyMapping->shouldIgnoreProperty()) {
                continue;
            }

            $transformer = $propertyMapping->getTransformer();

            $fieldValueVariable = new Expr\Variable($uniqueVariableScope->getUniqueName('fieldValue'));
            $sourcePropertyAccessor = new Expr\Assign($fieldValueVariable, $propertyMapping->getReadAccessor()->getExpression($sourceInput));

            [$output, $propStatements] = $transformer->transform($fieldValueVariable, $result, $propertyMapping, $uniqueVariableScope);

            $extractCallback = $propertyMapping->getReadAccessor()->getExtractCallback($mapperGeneratorMetadata->getSource());

            if (null !== $extractCallback) {
                $constructStatements[] = new Stmt\Expression(new Expr\Assign(
                    new Expr\ArrayDimFetch(new Expr\PropertyFetch(new Expr\Variable('this'), 'extractCallbacks'), new Scalar\String_($propertyMapping->getProperty())),
                    $extractCallback
                ));
            }

            if (null === $propertyMapping->getWriteMutator()) {
                continue;
            }

            if ($propertyMapping->getWriteMutator()->getType() !== WriteMutator::TYPE_ADDER_AND_REMOVER) {
                $writeExpression = $propertyMapping->getWriteMutator()->getExpression($result, $output, $transformer instanceof AssignedByReferenceTransformerInterface ? $transformer->assignByRef() : false);
                if (null === $writeExpression) {
                    continue;
                }

                $propStatements[] = new Stmt\Expression($writeExpression);
            }

            $hydrateCallback = $propertyMapping->getWriteMutator()->getHydrateCallback($mapperGeneratorMetadata->getTarget());

            if (null !== $hydrateCallback) {
                $constructStatements[] = new Stmt\Expression(new Expr\Assign(
                    new Expr\ArrayDimFetch(new Expr\PropertyFetch(new Expr\Variable('this'), 'hydrateCallbacks'), new Scalar\String_($propertyMapping->getProperty())),
                    $hydrateCallback
                ));
            }

            $conditions = [];

            if ($propertyMapping->checkExists()) {
                if (\stdClass::class === $mapperGeneratorMetadata->getSource()) {
                    $conditions[] = new Expr\FuncCall(new Name('property_exists'), [
                        new Arg($sourceInput),
                        new Arg(new Scalar\String_($propertyMapping->getProperty())),
                    ]);
                }

                if ('array' === $mapperGeneratorMetadata->getSource()) {
                    $conditions[] = new Expr\FuncCall(new Name('array_key_exists'), [
                        new Arg(new Scalar\String_($propertyMapping->getProperty())),
                        new Arg($sourceInput),
                    ]);
                }
            }

            if ($mapperGeneratorMetadata->shouldCheckAttributes()) {
                $conditions[] = new Expr\StaticCall(new Name\FullyQualified(MapperContext::class), 'isAllowedAttribute', [
                    new Arg($contextVariable),
                    new Arg(new Scalar\String_($propertyMapping->getProperty())),
                    new Arg($sourcePropertyAccessor),
                ]);
            }

            if (null !== $propertyMapping->getSourceGroups()) {
                $conditions[] = new Expr\BinaryOp\BooleanAnd(
                    new Expr\BinaryOp\NotIdentical(
                        new Expr\ConstFetch(new Name('null')),
                        new Expr\BinaryOp\Coalesce(
                            new Expr\ArrayDimFetch($contextVariable, new Scalar\String_(MapperContext::GROUPS)),
                            new Expr\Array_()
                        )
                    ),
                    new Expr\FuncCall(new Name('array_intersect'), [
                        new Arg(new Expr\BinaryOp\Coalesce(
                            new Expr\ArrayDimFetch($contextVariable, new Scalar\String_(MapperContext::GROUPS)),
                            new Expr\Array_()
                        )),
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
                        new Expr\BinaryOp\Coalesce(
                            new Expr\ArrayDimFetch($contextVariable, new Scalar\String_(MapperContext::GROUPS)),
                            new Expr\Array_()
                        )
                    ),
                    new Expr\FuncCall(new Name('array_intersect'), [
                        new Arg(new Expr\BinaryOp\Coalesce(
                            new Expr\ArrayDimFetch($contextVariable, new Scalar\String_(MapperContext::GROUPS)),
                            new Expr\Array_()
                        )),
                        new Arg(new Expr\Array_(array_map(function (string $group) {
                            return new Expr\ArrayItem(new Scalar\String_($group));
                        }, $propertyMapping->getTargetGroups()))),
                    ])
                );
            }

            if (null !== $propertyMapping->getMaxDepth()) {
                $conditions[] = new Expr\BinaryOp\SmallerOrEqual(
                    new Expr\BinaryOp\Coalesce(
                        new Expr\ArrayDimFetch($contextVariable, new Scalar\String_(MapperContext::DEPTH)),
                        new Expr\ConstFetch(new Name('0'))
                    ),
                    new Scalar\LNumber($propertyMapping->getMaxDepth())
                );
            }

            if ($conditions) {
                $condition = array_shift($conditions);

                while ($conditions) {
                    $condition = new Expr\BinaryOp\BooleanAnd($condition, array_shift($conditions));
                }

                $propStatements = [new Stmt\If_($condition, [
                    'stmts' => $propStatements,
                ])];
            }

            $propInConstructor = \in_array($propertyMapping->getProperty(), $inConstructor, true);
            foreach ($propStatements as $propStatement) {
                if ($propInConstructor) {
                    $duplicatedStatements[] = $propStatement;
                } else {
                    $setterStatements[] = $propStatement;
                }
            }
        }

        if (\count($duplicatedStatements) > 0 && \count($inConstructor)) {
            $statements[] = new Stmt\Else_(array_merge($addedDependenciesStatements, $duplicatedStatements));
        } else {
            foreach ($addedDependenciesStatements as $statement) {
                $statements[] = $statement;
            }
        }

        foreach ($setterStatements as $propStatement) {
            $statements[] = $propStatement;
        }

        $statements[] = new Stmt\Return_($result);

        $mapMethod = new Stmt\ClassMethod('map', [
            'flags' => Stmt\Class_::MODIFIER_PUBLIC,
            'params' => [
                new Param(new Expr\Variable($sourceInput->name)),
                new Param(new Expr\Variable('context'), new Expr\Array_(), 'array'),
            ],
            'byRef' => true,
            'stmts' => $statements,
            'returnType' => \PHP_VERSION_ID >= 80000 ? 'mixed' : null,
        ]);

        $constructMethod = new Stmt\ClassMethod('__construct', [
            'flags' => Stmt\Class_::MODIFIER_PUBLIC,
            'stmts' => $constructStatements,
        ]);

        $classStmts = [$constructMethod, $mapMethod];

        if (\count($injectMapperStatements) > 0) {
            $classStmts[] = new Stmt\ClassMethod('injectMappers', [
                'flags' => Stmt\Class_::MODIFIER_PUBLIC,
                'params' => [
                    new Param(new Expr\Variable('autoMapperRegistry'), null, new Name\FullyQualified(AutoMapperRegistryInterface::class)),
                ],
                'returnType' => 'void',
                'stmts' => $injectMapperStatements,
            ]);
        }

        return new Stmt\Class_(new Name($mapperGeneratorMetadata->getMapperClassName()), [
            'flags' => Stmt\Class_::MODIFIER_FINAL,
            'extends' => new Name\FullyQualified(GeneratedMapper::class),
            'stmts' => $classStmts,
        ]);
    }

    private function getCreateObjectStatements(MapperGeneratorMetadataInterface $mapperMetadata, Expr\Variable $result, Expr\Variable $contextVariable, Expr\Variable $sourceInput, UniqueVariableScope $uniqueVariableScope): array
    {
        $target = $mapperMetadata->getTarget();
        $source = $mapperMetadata->getSource();

        if ('array' === $target) {
            return [[new Stmt\Expression(new Expr\Assign($result, new Expr\Array_()))], [], [], []];
        }

        if (\stdClass::class === $target && \stdClass::class === $source) {
            return [[new Stmt\Expression(new Expr\Assign($result, new Expr\FuncCall(new Name('unserialize'), [new Arg(new Expr\FuncCall(new Name('serialize'), [new Arg($sourceInput)]))])))], [], [], []];
        } elseif (\stdClass::class === $target) {
            return [[new Stmt\Expression(new Expr\Assign($result, new Expr\New_(new Name(\stdClass::class))))], [], [], []];
        }

        $reflectionClass = new \ReflectionClass($target);
        $targetConstructor = $reflectionClass->getConstructor();
        $createObjectStatements = [];
        $inConstructor = [];
        $constructStatements = [];
        $injectMapperStatements = [];
        $classDiscriminatorMapping = 'array' !== $target && null !== $this->classDiscriminator ? $this->classDiscriminator->getMappingForClass($target) : null;

        if (null !== $classDiscriminatorMapping && null !== ($propertyMapping = $mapperMetadata->getPropertyMapping($classDiscriminatorMapping->getTypeProperty()))) {
            [$output, $createObjectStatements] = $propertyMapping->getTransformer()->transform($propertyMapping->getReadAccessor()->getExpression($sourceInput), $result, $propertyMapping, $uniqueVariableScope);

            foreach ($classDiscriminatorMapping->getTypesMapping() as $typeValue => $typeTarget) {
                $mapperName = 'Discriminator_Mapper_' . $source . '_' . $typeTarget;

                $injectMapperStatements[] = new Stmt\Expression(new Expr\Assign(
                    new Expr\ArrayDimFetch(new Expr\PropertyFetch(new Expr\Variable('this'), 'mappers'), new Scalar\String_($mapperName)),
                    new Expr\MethodCall(new Expr\Variable('autoMapperRegistry'), 'getMapper', [
                        new Arg(new Scalar\String_($source)),
                        new Arg(new Scalar\String_($typeTarget)),
                    ])
                ));
                $createObjectStatements[] = new Stmt\If_(new Expr\BinaryOp\Identical(
                    new Scalar\String_($typeValue),
                    $output
                ), [
                    'stmts' => [
                        new Stmt\Return_(new Expr\MethodCall(new Expr\ArrayDimFetch(
                            new Expr\PropertyFetch(new Expr\Variable('this'), 'mappers'),
                            new Scalar\String_($mapperName)
                        ), 'map', [
                            new Arg($sourceInput),
                            new Expr\Variable('context'),
                        ])),
                    ],
                ]);
            }
        }

        $propertiesMapping = $mapperMetadata->getPropertiesMapping();

        if (null !== $targetConstructor && $mapperMetadata->hasConstructor()) {
            $constructArguments = [];

            foreach ($propertiesMapping as $propertyMapping) {
                if (null === $propertyMapping->getWriteMutatorConstructor() || null === ($parameter = $propertyMapping->getWriteMutatorConstructor()->getParameter())) {
                    continue;
                }

                $constructVar = new Expr\Variable($uniqueVariableScope->getUniqueName('constructArg'));

                [$output, $propStatements] = $propertyMapping->getTransformer()->transform($propertyMapping->getReadAccessor()->getExpression($sourceInput), $constructVar, $propertyMapping, $uniqueVariableScope);
                $constructArguments[$parameter->getPosition()] = new Arg($constructVar);

                $propStatements[] = new Stmt\Expression(new Expr\Assign($constructVar, $output));
                $createObjectStatements[] = new Stmt\If_(new Expr\StaticCall(new Name\FullyQualified(MapperContext::class), 'hasConstructorArgument', [
                    new Arg($contextVariable),
                    new Arg(new Scalar\String_($target)),
                    new Arg(new Scalar\String_($propertyMapping->getProperty())),
                ]), [
                    'stmts' => [
                        new Stmt\Expression(new Expr\Assign($constructVar, new Expr\StaticCall(new Name\FullyQualified(MapperContext::class), 'getConstructorArgument', [
                            new Arg($contextVariable),
                            new Arg(new Scalar\String_($target)),
                            new Arg(new Scalar\String_($propertyMapping->getProperty())),
                        ]))),
                    ],
                    'else' => new Stmt\Else_($propStatements),
                ]);

                $inConstructor[] = $propertyMapping->getProperty();
            }

            foreach ($targetConstructor->getParameters() as $constructorParameter) {
                if (!\array_key_exists($constructorParameter->getPosition(), $constructArguments) && $constructorParameter->isDefaultValueAvailable()) {
                    $constructVar = new Expr\Variable($uniqueVariableScope->getUniqueName('constructArg'));

                    $createObjectStatements[] = new Stmt\If_(new Expr\StaticCall(new Name\FullyQualified(MapperContext::class), 'hasConstructorArgument', [
                        new Arg($contextVariable),
                        new Arg(new Scalar\String_($target)),
                        new Arg(new Scalar\String_($constructorParameter->getName())),
                    ]), [
                        'stmts' => [
                            new Stmt\Expression(new Expr\Assign($constructVar, new Expr\StaticCall(new Name\FullyQualified(MapperContext::class), 'getConstructorArgument', [
                                new Arg($contextVariable),
                                new Arg(new Scalar\String_($target)),
                                new Arg(new Scalar\String_($constructorParameter->getName())),
                            ]))),
                        ],
                        'else' => new Stmt\Else_([
                            new Stmt\Expression(new Expr\Assign($constructVar, $this->getValueAsExpr($constructorParameter->getDefaultValue()))),
                        ]),
                    ]);

                    $constructArguments[$constructorParameter->getPosition()] = new Arg($constructVar);
                }
            }

            ksort($constructArguments);

            $createObjectStatements[] = new Stmt\Expression(new Expr\Assign($result, new Expr\New_(new Name\FullyQualified($target), $constructArguments)));
        } elseif (null !== $targetConstructor && $mapperMetadata->isTargetCloneable()) {
            $constructStatements[] = new Stmt\Expression(new Expr\Assign(
                new Expr\PropertyFetch(new Expr\Variable('this'), 'cachedTarget'),
                new Expr\MethodCall(new Expr\New_(new Name\FullyQualified(\ReflectionClass::class), [
                    new Arg(new Scalar\String_($target)),
                ]), 'newInstanceWithoutConstructor')
            ));
            $createObjectStatements[] = new Stmt\Expression(new Expr\Assign($result, new Expr\Clone_(new Expr\PropertyFetch(new Expr\Variable('this'), 'cachedTarget'))));
        } elseif (null !== $targetConstructor) {
            $constructStatements[] = new Stmt\Expression(new Expr\Assign(
                new Expr\PropertyFetch(new Expr\Variable('this'), 'cachedTarget'),
                new Expr\New_(new Name\FullyQualified(\ReflectionClass::class), [
                    new Arg(new Scalar\String_($target)),
                ])
            ));
            $createObjectStatements[] = new Stmt\Expression(new Expr\Assign($result, new Expr\MethodCall(
                new Expr\PropertyFetch(new Expr\Variable('this'), 'cachedTarget'),
                'newInstanceWithoutConstructor'
            )));
        } else {
            $createObjectStatements[] = new Stmt\Expression(new Expr\Assign($result, new Expr\New_(new Name\FullyQualified($target))));
        }

        return [$createObjectStatements, $inConstructor, $constructStatements, $injectMapperStatements];
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
