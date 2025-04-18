<?php

namespace Jane\Component\JsonSchema\Generator;

use Jane\Component\JsonSchema\Generator\Context\Context;
use Jane\Component\JsonSchema\Generator\Normalizer\DenormalizerGenerator;
use Jane\Component\JsonSchema\Generator\Normalizer\JaneObjectNormalizerGenerator;
use Jane\Component\JsonSchema\Generator\Normalizer\NormalizerGenerator as NormalizerGeneratorTrait;
use Jane\Component\JsonSchema\Registry\Schema;
use PhpParser\Comment;
use PhpParser\Modifiers;
use PhpParser\Node\Expr;
use PhpParser\Node\Identifier;
use PhpParser\Node\Name;
use PhpParser\Node\NullableType;
use PhpParser\Node\Param;
use PhpParser\Node\Stmt;
use PhpParser\Parser;

class NormalizerGenerator implements GeneratorInterface
{
    use DenormalizerGenerator;
    use JaneObjectNormalizerGenerator;
    use NormalizerGeneratorTrait;
    public const FILE_TYPE_NORMALIZER = 'normalizer';

    /**
     * @var Naming The naming service
     */
    protected $naming;

    /**
     * @var Parser PHP Parser
     */
    protected $parser;

    /**
     * @var bool Whether to generate the JSON Reference system
     */
    protected $useReference;

    /**
     * @var bool|null Whether to use the CacheableSupportsMethodInterface interface, for >sf 4.1
     */
    protected $useCacheableSupportsMethod;

    /**
     * @var bool Whether to set property to null when object contains null value for it when property is nullable
     */
    protected $skipNullValues;

    /**
     * @var bool if we handle required fields or not during Normalizer generation
     */
    protected $skipRequiedFields;

    /**
     * @var bool if we run validation or not during normalization/denormalization
     */
    protected $validation;

    /**
     * @var bool include null value in conditions
     */
    protected $includeNullValue;

    /**
     * @param bool $useReference               Whether to generate the JSON Reference system
     * @param bool $useCacheableSupportsMethod Whether to use the CacheableSupportsMethodInterface interface, for >sf 4.1
     * @param bool $skipNullValues             Skip null values or not
     */
    public function __construct(Naming $naming, Parser $parser, bool $useReference = true, ?bool $useCacheableSupportsMethod = null, bool $skipNullValues = true, bool $skipRequiedFields = false, bool $validation = false, bool $includeNullValue = true)
    {
        $this->naming = $naming;
        $this->parser = $parser;
        $this->useReference = $useReference;
        $this->useCacheableSupportsMethod = $useCacheableSupportsMethod;
        $this->skipNullValues = $skipNullValues;
        $this->skipRequiedFields = $skipRequiedFields;
        $this->validation = $validation;
        $this->includeNullValue = $includeNullValue;
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
            $modelFqdn = $schema->getNamespace() . '\\Model\\' . $class->getName();

            $methods = [];
            $methods[] = $this->createSupportsDenormalizationMethod($modelFqdn);
            $methods[] = $this->createSupportsNormalizationMethod($modelFqdn);
            $methods[] = $this->createDenormalizeMethod($modelFqdn, $context, $class);
            $methods[] = $this->createNormalizeMethod($modelFqdn, $context, $class, $this->skipNullValues, $this->skipRequiedFields, $this->includeNullValue);
            $methods[] = $this->createGetSupportedTypesMethod($modelFqdn, $this->useCacheableSupportsMethod);

            if ($this->useCacheableSupportsMethod) {
                $methods[] = $this->createHasCacheableSupportsMethod();
            }

            $symfony7NormalizerClass = $this->createNormalizerClass(
                $class->getName() . 'Normalizer',
                $methods
            );

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

            $namespace = new Stmt\Namespace_(new Name($schema->getNamespace() . '\\Normalizer'), $useStmts);
            $normalizers[$modelFqdn] = $schema->getNamespace() . '\\Normalizer\\' . $symfony7NormalizerClass->name;
            $schema->addFile(new File($schema->getDirectory() . '/Normalizer/' . $symfony7NormalizerClass->name . '.php', $namespace, self::FILE_TYPE_NORMALIZER));
        }

        $schema->addFile(new File(
            $schema->getDirectory() . '/Normalizer/JaneObjectNormalizer.php',
            new Stmt\Namespace_(new Name($schema->getNamespace() . '\\Normalizer'), $this->createJaneObjectNormalizerClass($schema, $normalizers)),
            self::FILE_TYPE_NORMALIZER
        ));
    }

    protected function createJaneObjectNormalizerClass(Schema $schema, array $normalizers): array
    {
        if ($this->useReference) {
            $normalizers['Jane\\Component\\JsonSchemaRuntime\\Reference'] = $this->naming->getRuntimeClassFQCN($schema->getNamespace(), ['Normalizer'], 'ReferenceNormalizer');
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
        $methods[] = $this->createProxyGetSupportedTypesMethod(array_keys($normalizers));

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
     * Create method to return the supported type.
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
     * Create method to return the supported type.
     *
     * @param string[] $modelsFqdn Fully Qualified name of the models class denormalized
     *
     * @return Stmt\ClassMethod
     */
    protected function createProxyGetSupportedTypesMethod(array $modelsFqdn)
    {
        $arrayItems = [];
        foreach ($modelsFqdn as $modelFqdn) {
            $arrayItems[] = new Expr\ArrayItem(
                new Expr\ConstFetch(new Name('false')), // we don't want proxy Normalizer to be cached, never
                new Expr\ClassConstFetch(
                    new Name\FullyQualified($modelFqdn),
                    new Identifier('class')
                ),
            );
        }

        if (isset($arrayItems[0]) && $arrayItems[0] instanceof Expr\ArrayItem) {
            // force the array to be dumped multiline by adding a comment
            $arrayItems[0]->setAttribute('comments', [new Comment('')]);
        }

        return new Stmt\ClassMethod('getSupportedTypes', [
            'flags' => Modifiers::PUBLIC,
            'returnType' => new Identifier('array'),
            'params' => [
                new Param(new Expr\Variable('format'), new Expr\ConstFetch(new Name('null')), new NullableType(new Identifier('string'))),
            ],
            'stmts' => [new Stmt\Return_(new Expr\Array_($arrayItems))],
        ]);
    }
}
