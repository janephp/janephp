<?php

namespace Jane\JsonSchema\Generator;

use Jane\JsonSchema\Generator\Context\Context;
use Jane\JsonSchema\Generator\Normalizer\DenormalizerGenerator;
use Jane\JsonSchema\Generator\Normalizer\JaneObjectNormalizerGenerator;
use Jane\JsonSchema\Generator\Normalizer\NormalizerGenerator as NormalizerGeneratorTrait;
use Jane\JsonSchema\Registry\Schema;
use PhpParser\Node\Expr;
use PhpParser\Node\Name;
use PhpParser\Node\Stmt;
use PhpParser\Parser;

class NormalizerGenerator implements GeneratorInterface
{
    const FILE_TYPE_NORMALIZER = 'normalizer';

    use DenormalizerGenerator;
    use NormalizerGeneratorTrait;
    use JaneObjectNormalizerGenerator;

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
     * @var array A list of model FQCN which should be overrided when generating the normalizer
     */
    protected $overrideModelFqcns;

    /**
     * @param Naming $naming       Naming Service
     * @param Parser $parser       PHP Parser
     * @param bool   $useReference Whether to generate the JSON Reference system
     * @param bool   $useCache     Whether to use the CacheableSupportsMethodInterface interface, for >sf 4.1
     */
    public function __construct(Naming $naming, Parser $parser, bool $useReference = true, bool $useCacheableSupportsMethod = null, bool $skipNullValues = true, array $overrideModelFqcns = [])
    {
        $this->naming = $naming;
        $this->parser = $parser;
        $this->useReference = $useReference;
        $this->useCacheableSupportsMethod = $this->canUseCacheableSupportsMethod($useCacheableSupportsMethod);
        $this->skipNullValues = $skipNullValues;
        $this->overrideModelFqcns = $overrideModelFqcns;
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

            if (isset($this->overrideModelFqcns[$modelFqdn])) {
                $modelFqdn = $this->overrideModelFqcns[$modelFqdn];
            }

            $methods = [];
            $methods[] = $this->createSupportsDenormalizationMethod($modelFqdn);
            $methods[] = $this->createSupportsNormalizationMethod($modelFqdn);
            $methods[] = $this->createDenormalizeMethod($modelFqdn, $context, $class);
            $methods[] = $this->createNormalizeMethod($modelFqdn, $context, $class, $this->skipNullValues);

            if ($this->useCacheableSupportsMethod) {
                $methods[] = $this->createHasCacheableSupportsMethod();
            }

            $normalizerClass = $this->createNormalizerClass(
                $class->getName() . 'Normalizer',
                $methods,
                $this->useCacheableSupportsMethod
            );

            $useStmts = [
                new Stmt\Use_([new Stmt\UseUse(new Name('Jane\JsonSchemaRuntime\Reference'))]),
                new Stmt\Use_([new Stmt\UseUse(new Name('Jane\JsonSchemaRuntime\Normalizer\CheckArray'))]),
                new Stmt\Use_([new Stmt\UseUse(new Name('Symfony\Component\Serializer\Exception\InvalidArgumentException'))]),
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

            $useStmts[] = $normalizerClass;

            $namespace = new Stmt\Namespace_(new Name($schema->getNamespace() . '\\Normalizer'), $useStmts);

            $normalizers[$modelFqdn] = $schema->getNamespace() . '\\Normalizer\\' . $class->getName() . 'Normalizer';

            $schema->addFile(new File($schema->getDirectory() . '/Normalizer/' . $normalizerClass->name . '.php', $namespace, self::FILE_TYPE_NORMALIZER));
        }

        $schema->addFile(new File(
            $schema->getDirectory() . '/Normalizer/JaneObjectNormalizer.php',
            new Stmt\Namespace_(new Name($schema->getNamespace() . '\\Normalizer'), $this->createJaneObjectNormalizerClass($normalizers)),
            self::FILE_TYPE_NORMALIZER
        ));
    }

    protected function canUseCacheableSupportsMethod(?bool $useCacheableSupportsMethod): bool
    {
        return
            true === $useCacheableSupportsMethod ||
            (null === $useCacheableSupportsMethod && class_exists('Symfony\Component\Serializer\Normalizer\CacheableSupportsMethodInterface'));
    }

    protected function createJaneObjectNormalizerClass(array $normalizers): array
    {
        if ($this->useReference) {
            $normalizers['\\Jane\\JsonSchemaRuntime\\Reference'] = '\\Jane\\JsonSchemaRuntime\\Normalizer\\ReferenceNormalizer';
        }

        $properties = [];
        $propertyName = $this->getNaming()->getPropertyName('normalizers');
        $propertyStmt = new Stmt\PropertyProperty($propertyName);
        $propertyStmt->default = $this->parser->parse('<?php ' . var_export($normalizers, true) . ';')[0]->expr;
        $properties[] = $propertyStmt;
        $propertyStmt = new Stmt\PropertyProperty('normalizersCache');
        $propertyStmt->default = new Expr\Array_();
        $properties[] = $propertyStmt;

        $methods = [];
        $methods[] = new Stmt\Property(Stmt\Class_::MODIFIER_PROTECTED, $properties);
        $methods[] = $this->createBaseNormalizerSupportsDenormalizationMethod();
        $methods[] = $this->createBaseNormalizerSupportsNormalizationMethod();
        $methods[] = $this->createBaseNormalizerNormalizeMethod();
        $methods[] = $this->createBaseNormalizerDenormalizeMethod();
        $methods[] = $this->createBaseNormalizerGetNormalizer();
        $methods[] = $this->createBaseNormalizerInitNormalizerMethod();

        if ($this->useCacheableSupportsMethod) {
            $methods[] = $this->createHasCacheableSupportsMethod();
        }

        $normalizerClass = $this->createNormalizerClass(
            'JaneObjectNormalizer',
            $methods,
            $this->useCacheableSupportsMethod
        );

        $useStmts = [
            new Stmt\Use_([new Stmt\UseUse(new Name('Jane\JsonSchemaRuntime\Normalizer\CheckArray'))]),
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

        return array_merge($useStmts, [$normalizerClass]);
    }
}
