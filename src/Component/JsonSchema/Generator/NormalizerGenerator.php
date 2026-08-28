<?php

namespace Jane\Component\JsonSchema\Generator;

use Jane\Component\JsonSchema\Generator\Context\Context;
use Jane\Component\JsonSchema\Generator\Normalizer\DenormalizerGenerator;
use Jane\Component\JsonSchema\Generator\Normalizer\ExternalNormalizersResolver;
use Jane\Component\JsonSchema\Generator\Normalizer\JaneObjectNormalizerGenerator;
use Jane\Component\JsonSchema\Generator\Normalizer\NormalizerGenerator as NormalizerGeneratorTrait;
use Jane\Component\JsonSchema\Guesser\Guess\NonObjectGuessInterface;
use Jane\Component\JsonSchema\Registry\Schema;
use PhpParser\Comment;
use PhpParser\Modifiers;
use PhpParser\Node\Arg;
use PhpParser\Node\Expr;
use PhpParser\Node\Identifier;
use PhpParser\Node\Name;
use PhpParser\Node\NullableType;
use PhpParser\Node\Param;
use PhpParser\Node\Scalar\LNumber;
use PhpParser\Node\Stmt;
use PhpParser\Parser;

class NormalizerGenerator implements GeneratorInterface
{
    use DenormalizerGenerator;
    use JaneObjectNormalizerGenerator;
    use NormalizerGeneratorTrait;
    public const FILE_TYPE_NORMALIZER = 'normalizer';

    /**
     * @param Naming $naming                     The naming service
     * @param Parser $parser                     PHP Parser
     * @param bool   $useReference               Whether to generate the JSON Reference system
     * @param bool   $useCacheableSupportsMethod Whether to use the CacheableSupportsMethodInterface interface, for >sf 4.1
     * @param bool   $skipNullValues             Skip null values or not
     * @param bool   $skipRequiredFields         if we handle required fields or not during Normalizer generation
     * @param bool   $validation                 if we run validation or not during normalization/denormalization
     * @param bool   $includeNullValue           include null value in conditions
     */
    public function __construct(
        protected Naming $naming,
        protected Parser $parser,
        protected bool $useReference = true,
        protected ?bool $useCacheableSupportsMethod = null,
        protected bool $skipNullValues = true,
        protected bool $skipRequiredFields = false,
        protected bool $validation = false,
        protected bool $includeNullValue = true,
    ) {
    }

    /**
     * The naming service.
     */
    protected function getNaming(): Naming
    {
        return $this->naming;
    }

    /**
     * {@inheritdoc}
     */
    public function generate(Schema $schema, string $className, Context $context): void
    {
        $normalizers = [];

        foreach ($schema->getClasses() as $class) {
            if ($class instanceof NonObjectGuessInterface) {
                continue;
            }

            $subNamespace = $class->getSubNamespace();
            $normalizerNamespace = $this->naming->getNormalizerNamespace($schema->getNamespace(), $subNamespace);
            $modelFqdn = $this->naming->getModelNamespace($schema->getNamespace(), $subNamespace) . '\\' . $class->getName();

            $methods = [];
            $methods[] = $this->createSupportsDenormalizationMethod($modelFqdn);
            $methods[] = $this->createSupportsNormalizationMethod($modelFqdn);
            $methods[] = $this->createDenormalizeMethod($modelFqdn, $context, $class);
            $methods[] = $this->createNormalizeMethod($modelFqdn, $context, $class, $this->skipNullValues, $this->skipRequiredFields, $this->includeNullValue);
            $methods[] = $this->createGetSupportedTypesMethod($modelFqdn, $this->useCacheableSupportsMethod);

            if ($this->useCacheableSupportsMethod) {
                $methods[] = $this->createHasCacheableSupportsMethod();
            }

            $symfony7NormalizerClass = $this->createNormalizerClass(
                $class->getName() . 'Normalizer',
                $methods
            );

            $schema->addRequiredRuntimeFile($this->naming->getRuntimeClassFQCN($schema->getNamespace(), ['Normalizer'], 'CheckArray'));
            $schema->addRequiredRuntimeFile($this->naming->getRuntimeClassFQCN($schema->getNamespace(), ['Normalizer'], 'ValidatorTrait'));
            $schema->addRequiredRuntimeFile($this->naming->getRuntimeClassFQCN($schema->getNamespace(), ['Normalizer'], 'InvalidDateException'));
            $schema->addRequiredRuntimeFile($this->naming->getRuntimeClassFQCN($schema->getNamespace(), ['Normalizer'], 'ValidationException'));
            $schema->addRequiredRuntimeFile($this->naming->getRuntimeClassFQCN($schema->getNamespace(), [], 'JsonObject'));

            $useStmts = [
                new Stmt\Use_([new Stmt\UseUse(new Name('Jane\Component\JsonSchemaRuntime\Reference'))]),
                new Stmt\Use_([new Stmt\UseUse(new Name($this->naming->getRuntimeClassFQCN($schema->getNamespace(), ['Normalizer'], 'CheckArray')))]),
                new Stmt\Use_([new Stmt\UseUse(new Name($this->naming->getRuntimeClassFQCN($schema->getNamespace(), ['Normalizer'], 'ValidatorTrait')))]),
                new Stmt\Use_([new Stmt\UseUse(new Name('Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface'))]),
                new Stmt\Use_([new Stmt\UseUse(new Name('Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait'))]),
                new Stmt\Use_([new Stmt\UseUse(new Name('Symfony\Component\Serializer\Normalizer\DenormalizerInterface'))]),
                new Stmt\Use_([new Stmt\UseUse(new Name('Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface'))]),
                new Stmt\Use_([new Stmt\UseUse(new Name('Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait'))]),
                new Stmt\Use_([new Stmt\UseUse(new Name('Symfony\Component\Serializer\Normalizer\NormalizerInterface'))]),
            ];

            if ($this->useCacheableSupportsMethod) {
                $useStmts[] = new Stmt\Use_([new Stmt\UseUse(new Name('Symfony\Component\Serializer\Normalizer\CacheableSupportsMethodInterface'))]);
            }

            $useStmts = array_merge($useStmts, [$symfony7NormalizerClass]);

            $namespace = new Stmt\Namespace_(new Name($normalizerNamespace), $useStmts);
            $normalizers[$modelFqdn] = $normalizerNamespace . '\\' . $symfony7NormalizerClass->name;
            $schema->addFile(new File($this->naming->getArtifactPath($schema->getDirectory(), 'Normalizer', $subNamespace) . '/' . $symfony7NormalizerClass->name . '.php', $namespace, self::FILE_TYPE_NORMALIZER));
        }

        // Add normalizers of models from other schemas transitively used by this schema's models,
        // so the generated JaneObjectNormalizer can handle them at runtime.
        $normalizers += (new ExternalNormalizersResolver())->resolve($schema, $context->getRegistry());

        $schema->addFile(new File(
            $schema->getDirectory() . '/Normalizer/JaneObjectNormalizer.php',
            new Stmt\Namespace_(new Name($schema->getNamespace() . '\\Normalizer'), $this->createJaneObjectNormalizerClass($schema, $normalizers)),
            self::FILE_TYPE_NORMALIZER
        ));
    }

    protected function createJaneObjectNormalizerClass(Schema $schema, array $normalizers): array
    {
        $schema->addRequiredRuntimeFile($this->naming->getRuntimeClassFQCN($schema->getNamespace(), ['Normalizer'], 'CheckArray'));
        $schema->addRequiredRuntimeFile($this->naming->getRuntimeClassFQCN($schema->getNamespace(), ['Normalizer'], 'ValidatorTrait'));

        if ($this->useReference) {
            $normalizers['Jane\\Component\\JsonSchemaRuntime\\Reference'] = $this->naming->getRuntimeClassFQCN($schema->getNamespace(), ['Normalizer'], 'ReferenceNormalizer');
            $schema->addRequiredRuntimeFile($this->naming->getRuntimeClassFQCN($schema->getNamespace(), ['Normalizer'], 'ReferenceNormalizer'));
        }

        $properties = [];
        $propertyName = $this->getNaming()->getPropertyName('normalizers');
        $properties[] = new Stmt\PropertyProperty(
            $propertyName,
            new Expr\Array_(
                array_map(
                    function ($key, $value) {
                        return new Expr\ArrayItem(
                            new Expr\ClassConstFetch(
                                new Name\FullyQualified($value),
                                new Identifier('class')
                            ),
                            new Expr\ClassConstFetch(
                                new Name\FullyQualified($key),
                                new Identifier('class')
                            ),
                            attributes: ['comments' => [new Comment('')]]
                        );
                    },
                    array_keys($normalizers),
                    $normalizers,
                ),
            )
        );
        $properties[] = new Stmt\PropertyProperty('normalizersCache', new Expr\Array_());

        $methods = [];
        $methods[] = new Stmt\Property(Modifiers::PROTECTED, $properties);
        $methods[] = $this->createBaseNormalizerSupportsDenormalizationMethod();
        $methods[] = $this->createBaseNormalizerSupportsNormalizationMethod();
        $methods[] = $this->createBaseNormalizerNormalizeMethod();
        $methods[] = $this->createBaseNormalizerDenormalizeMethod();
        $methods[] = $this->createBaseNormalizerGetNormalizer();
        $methods[] = $this->createBaseNormalizerInitNormalizerMethod();
        $methods[] = $this->createProxyGetSupportedTypesMethod($propertyName);

        if ($this->useCacheableSupportsMethod) {
            $methods[] = $this->createHasCacheableSupportsMethod();
        }

        $symfony7NormalizerClass = $this->createNormalizerClass(
            'JaneObjectNormalizer',
            $methods
        );

        $useStmts = [
            new Stmt\Use_([new Stmt\UseUse(new Name($this->naming->getRuntimeClassFQCN($schema->getNamespace(), ['Normalizer'], 'CheckArray')))]),
            new Stmt\Use_([new Stmt\UseUse(new Name($this->naming->getRuntimeClassFQCN($schema->getNamespace(), ['Normalizer'], 'ValidatorTrait')))]),
            new Stmt\Use_([new Stmt\UseUse(new Name('Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface'))]),
            new Stmt\Use_([new Stmt\UseUse(new Name('Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait'))]),
            new Stmt\Use_([new Stmt\UseUse(new Name('Symfony\Component\Serializer\Normalizer\DenormalizerInterface'))]),
            new Stmt\Use_([new Stmt\UseUse(new Name('Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface'))]),
            new Stmt\Use_([new Stmt\UseUse(new Name('Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait'))]),
            new Stmt\Use_([new Stmt\UseUse(new Name('Symfony\Component\Serializer\Normalizer\NormalizerInterface'))]),
        ];

        if ($this->useCacheableSupportsMethod) {
            $useStmts[] = new Stmt\Use_([new Stmt\UseUse(new Name('Symfony\Component\Serializer\Normalizer\CacheableSupportsMethodInterface'))]);
        }

        return array_merge($useStmts, [$symfony7NormalizerClass]);
    }

    /**
     * Create a method to return the supported type.
     *
     * @param string $modelFqdn Fully Qualified name of the model class denormalized
     *
     * @return Stmt\ClassMethod
     */
    protected function createGetSupportedTypesMethod(string $modelFqdn, bool $useCacheableSupportsMethod = false)
    {
        return new Stmt\ClassMethod('getSupportedTypes', [
            'flags' => Modifiers::PUBLIC,
            'returnType' => new Identifier('array'),
            'params' => [
                new Param(new Expr\Variable('format'), new Expr\ConstFetch(new Name('null')), new NullableType(new Identifier('string'))),
            ],
            'stmts' => [new Stmt\Return_(new Expr\Array_([
                new Expr\ArrayItem(
                    new Expr\ConstFetch(new Name($useCacheableSupportsMethod ? 'true' : 'false')),
                    new Expr\ClassConstFetch(
                        new Name\FullyQualified($modelFqdn),
                        new Identifier('class')
                    )
                ),
            ]))],
        ]);
    }

    /**
     * Create a method to return the supported types, derived from the normalizers map.
     *
     * @param string $propertyName Name of the property containing the normalizers map
     */
    protected function createProxyGetSupportedTypesMethod(string $propertyName): Stmt\ClassMethod
    {
        return new Stmt\ClassMethod('getSupportedTypes', [
            'flags' => Modifiers::PUBLIC,
            'returnType' => new Identifier('array'),
            'params' => [
                new Param(new Expr\Variable('format'), new Expr\ConstFetch(new Name('null')), new NullableType(new Identifier('string'))),
            ],
            'stmts' => [new Stmt\Return_(new Expr\FuncCall(new Name('array_combine'), [
                new Arg(new Expr\FuncCall(new Name('array_keys'), [
                    new Arg(new Expr\PropertyFetch(new Expr\Variable('this'), $propertyName)),
                ])),
                new Arg(new Expr\FuncCall(new Name('array_fill'), [
                    new Arg(new LNumber(0)),
                    new Arg(new Expr\FuncCall(new Name('count'), [
                        new Arg(new Expr\PropertyFetch(new Expr\Variable('this'), $propertyName)),
                    ])),
                    new Arg(new Expr\ConstFetch(new Name('false'))),
                ])),
            ]))],
        ]);
    }
}
