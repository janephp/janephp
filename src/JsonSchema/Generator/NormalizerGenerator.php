<?php

namespace Jane\JsonSchema\Generator;

use Jane\JsonSchema\Generator\Context\Context;
use Jane\JsonSchema\Generator\Normalizer\DenormalizerGenerator;
use Jane\JsonSchema\Generator\Normalizer\NormalizerGenerator as NormalizerGeneratorTrait;
use Jane\JsonSchema\Generator\Normalizer\NormalizerNormalizerGenerator;
use Jane\JsonSchema\Schema;
use PhpParser\Node\Expr;
use PhpParser\Node\Name;
use PhpParser\Node\Stmt;
use PhpParser\Parser;

class NormalizerGenerator implements GeneratorInterface
{
    const FILE_TYPE_NORMALIZER = 'normalizer';

    use DenormalizerGenerator;
    use NormalizerGeneratorTrait;
    use NormalizerNormalizerGenerator;
    use PropertyCheckTrait;

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
     * @var bool
     */
    protected $normalizerFactory;

    /**
     * @param Naming $naming       Naming Service
     * @param Parser $parser       PHP Parser
     * @param bool   $useReference Whether to generate the JSON Reference system
     * @param bool   $useCache     Whether to use the CacheableSupportsMethodInterface interface, for >sf 4.1
     */
    public function __construct(Naming $naming, Parser $parser, $useReference = true, $useCacheableSupportsMethod = null, $normalizerFactory = true)
    {
        $this->naming = $naming;
        $this->parser = $parser;
        $this->useReference = $useReference;
        $this->useCacheableSupportsMethod = $this->canUseCacheableSupportsMethod($useCacheableSupportsMethod);
        $this->normalizerFactory = $normalizerFactory;
    }

    /**
     * The naming service.
     *
     * @return Naming
     */
    protected function getNaming()
    {
        return $this->naming;
    }

    /**
     * {@inheritdoc}
     */
    public function generate(Schema $schema, string $className, Context $context)
    {
        $classes = [];

        $normalizers = [];

        foreach ($schema->getClasses() as $class) {
            $modelFqdn = $schema->getNamespace() . '\\Model\\' . $class->getName();

            $methods = [];
            $methods[] = $this->createSupportsDenormalizationMethod($modelFqdn);
            $methods[] = $this->createSupportsNormalizationMethod($modelFqdn);
            $methods[] = $this->createDenormalizeMethod($modelFqdn, $context, $class);
            $methods[] = $this->createNormalizeMethod($modelFqdn, $context, $class);

            if ($this->useCacheableSupportsMethod) {
                $methods[] = $this->createHasCacheableSupportsMethod();
            }

            $normalizerClass = $this->createNormalizerClass(
                $class->getName() . 'Normalizer',
                $methods,
                $this->useCacheableSupportsMethod
            );
            $classes[] = $normalizerClass->name;

            $useStmts = [
                new Stmt\Use_([new Stmt\UseUse(new Name('Jane\JsonSchemaRuntime\Reference'))]),
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

        if ($this->normalizerFactory) {
            @trigger_error(sprintf('The "NormalizerFactory" class is deprecated since Jane 5.3, use "LazyNormalizer" instead.'), E_USER_DEPRECATED);

            $schema->addFile(new File(
                $schema->getDirectory() . '/Normalizer/NormalizerFactory.php',
                new Stmt\Namespace_(new Name($schema->getNamespace() . '\\Normalizer'), [
                    $this->createNormalizerFactoryClass($classes),
                ]),
                self::FILE_TYPE_NORMALIZER
            ));
        } else {
            $schema->addFile(new File(
                $schema->getDirectory() . '/Normalizer/LazyNormalizer.php',
                new Stmt\Namespace_(new Name($schema->getNamespace() . '\\Normalizer'), $this->createNormalizerNormalizerClass($normalizers)),
                self::FILE_TYPE_NORMALIZER
            ));
        }
    }

    protected function canUseCacheableSupportsMethod(?bool $useCacheableSupportsMethod): bool
    {
        return
            true === $useCacheableSupportsMethod ||
            (null === $useCacheableSupportsMethod && class_exists('Symfony\Component\Serializer\Normalizer\CacheableSupportsMethodInterface'));
    }

    protected function createNormalizerFactoryClass(array $classes)
    {
        $statements = [
            new Stmt\Expression(new Expr\Assign(new Expr\Variable('normalizers'), new Expr\Array_())),
            new Stmt\Expression(new Expr\Assign(new Expr\ArrayDimFetch(new Expr\Variable('normalizers')), new Expr\New_(new Name('\Symfony\Component\Serializer\Normalizer\ArrayDenormalizer')))),
        ];

        if ($this->useReference) {
            $statements[] = new Stmt\Expression(new Expr\Assign(new Expr\ArrayDimFetch(new Expr\Variable('normalizers')), new Expr\New_(new Name('\Jane\JsonSchemaRuntime\Normalizer\ReferenceNormalizer'))));
        }

        foreach ($classes as $class) {
            $statements[] = new Stmt\Expression(new Expr\Assign(new Expr\ArrayDimFetch(new Expr\Variable('normalizers')), new Expr\New_($class)));
        }

        $statements[] = new Stmt\Return_(new Expr\Variable('normalizers'));

        return new Stmt\Class_('NormalizerFactory', [
            'stmts' => [
                new Stmt\ClassMethod('create', [
                    'type' => Stmt\Class_::MODIFIER_STATIC | Stmt\Class_::MODIFIER_PUBLIC,
                    'stmts' => $statements,
                ]),
            ],
        ]);
    }

    protected function createNormalizerNormalizerClass(array $normalizers)
    {
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
            'LazyNormalizer',
            $methods,
            $this->useCacheableSupportsMethod
        );

        $useStmts = [
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
