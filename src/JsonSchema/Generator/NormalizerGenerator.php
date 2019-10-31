<?php

namespace Jane\JsonSchema\Generator;

use Jane\JsonSchema\Generator\Context\Context;
use Jane\JsonSchema\Generator\Normalizer\DenormalizerGenerator;
use Jane\JsonSchema\Generator\Normalizer\NormalizerGenerator as NormalizerGeneratorTrait;
use Jane\JsonSchema\Schema;
use PhpParser\Node\Expr;
use PhpParser\Node\Name;
use PhpParser\Node\Stmt;

class NormalizerGenerator implements GeneratorInterface
{
    const FILE_TYPE_NORMALIZER = 'normalizer';

    use DenormalizerGenerator;
    use NormalizerGeneratorTrait;
    use PropertyCheckTrait;

    /**
     * @var Naming The naming service
     */
    protected $naming;

    /**
     * @var bool Whether to generate the JSON Reference system
     */
    protected $useReference;

    /**
     * @var bool|null Whether to use the CacheableSupportsMethodInterface interface, for >sf 4.1
     */
    protected $useCacheableSupportsMethod;

    /**
     * @param Naming $naming       Naming Service
     * @param bool   $useReference Whether to generate the JSON Reference system
     * @param bool   $useCache     Whether to use the CacheableSupportsMethodInterface interface, for >sf 4.1
     */
    public function __construct(Naming $naming, $useReference = true, $useCacheableSupportsMethod = null)
    {
        $this->naming = $naming;
        $this->useReference = $useReference;
        $this->useCacheableSupportsMethod = $this->canUseCacheableSupportsMethod($useCacheableSupportsMethod);
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

        foreach ($schema->getClasses() as $class) {
            $hasReadOnlyProperty = $this->hasReadOnlyProperty($class);

            $modelFqdn = $schema->getNamespace() . '\\Model\\' . $class->getName();
            $proxyFqdn = sprintf('%s\\Proxy\\%s', $schema->getNamespace(), $this->getNaming()->getProxyName($class->getName()));

            $methods = [];
            $methods[] = $this->createSupportsDenormalizationMethod($modelFqdn, $proxyFqdn, $hasReadOnlyProperty);
            $methods[] = $this->createSupportsNormalizationMethod($modelFqdn, $proxyFqdn, $hasReadOnlyProperty);
            $methods[] = $this->createDenormalizeMethod($modelFqdn, $context, $class, $hasReadOnlyProperty);
            $methods[] = $this->createNormalizeMethod($modelFqdn, $proxyFqdn, $context, $class, $hasReadOnlyProperty);

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

            if ($hasReadOnlyProperty) {
                $useStmts[] = new Stmt\Use_([new Stmt\UseUse(new Name(sprintf('%s\\Proxy\\%s', $schema->getNamespace(), $this->getNaming()->getProxyName($class->getName()))))]);
            }

            $useStmts[] = $normalizerClass;

            $namespace = new Stmt\Namespace_(new Name($schema->getNamespace() . '\\Normalizer'), $useStmts);

            $schema->addFile(new File($schema->getDirectory() . '/Normalizer/' . $normalizerClass->name . '.php', $namespace, self::FILE_TYPE_NORMALIZER));
        }

        $schema->addFile(new File(
            $schema->getDirectory() . '/Normalizer/NormalizerFactory.php',
            new Stmt\Namespace_(new Name($schema->getNamespace() . '\\Normalizer'), [
                $this->createNormalizerFactoryClass($classes),
            ]),
            self::FILE_TYPE_NORMALIZER
        ));
    }

    protected function canUseCacheableSupportsMethod(?bool $useCacheableSupportsMethod): bool
    {
        return
            true === $useCacheableSupportsMethod ||
            (null === $useCacheableSupportsMethod && class_exists('Symfony\Component\Serializer\Normalizer\CacheableSupportsMethodInterface'));
    }

    protected function createNormalizerFactoryClass($classes)
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
}
