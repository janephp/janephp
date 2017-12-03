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

    /**
     * @var Naming The naming service
     */
    protected $naming;

    /**
     * @var bool Whether to generate the JSON Reference system
     */
    protected $useReference;

    /**
     * @param Naming $naming       Naming Service
     * @param bool   $useReference Whether to generate the JSON Reference system
     */
    public function __construct(Naming $naming, $useReference = true)
    {
        $this->naming = $naming;
        $this->useReference = $useReference;
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
     * Generate a set of files given a schema.
     *
     * @param Schema  $schema    Schema to generate from
     * @param string  $className Class to generate
     * @param Context $context   Context for generation
     *
     * @return File[]
     */
    public function generate($schema, $className, Context $context)
    {
        $files = [];
        $classes = [];

        foreach ($schema->getClasses() as $class) {
            $methods = [];
            $modelFqdn = $schema->getNamespace() . '\\Model\\' . $class->getName();
            $methods[] = $this->createSupportsDenormalizationMethod($modelFqdn);
            $methods[] = $this->createSupportsNormalizationMethod($modelFqdn);
            $methods[] = $this->createDenormalizeMethod($modelFqdn, $context, $class->getProperties());
            $methods[] = $this->createNormalizeMethod($modelFqdn, $context, $class->getProperties());

            $normalizerClass = $this->createNormalizerClass(
                $class->getName() . 'Normalizer',
                $methods
            );
            $classes[] = $normalizerClass->name;

            $namespace = new Stmt\Namespace_(new Name($schema->getNamespace() . '\\Normalizer'), [
                new Stmt\Use_([new Stmt\UseUse(new Name('Jane\JsonSchemaRuntime\Reference'))]),
                new Stmt\Use_([new Stmt\UseUse(new Name('Symfony\Component\Serializer\Exception\InvalidArgumentException'))]),
                new Stmt\Use_([new Stmt\UseUse(new Name('Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface'))]),
                new Stmt\Use_([new Stmt\UseUse(new Name('Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait'))]),
                new Stmt\Use_([new Stmt\UseUse(new Name('Symfony\Component\Serializer\Normalizer\DenormalizerInterface'))]),
                new Stmt\Use_([new Stmt\UseUse(new Name('Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface'))]),
                new Stmt\Use_([new Stmt\UseUse(new Name('Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait'))]),
                new Stmt\Use_([new Stmt\UseUse(new Name('Symfony\Component\Serializer\Normalizer\NormalizerInterface'))]),
                $normalizerClass,
            ]);
            $files[] = new File($schema->getDirectory() . '/Normalizer/' . $class->getName() . 'Normalizer.php', $namespace, self::FILE_TYPE_NORMALIZER);
        }

        $files[] = new File(
            $schema->getDirectory() . '/Normalizer/NormalizerFactory.php',
            new Stmt\Namespace_(new Name($schema->getNamespace() . '\\Normalizer'), [
                $this->createNormalizerFactoryClass($classes),
            ]),
            self::FILE_TYPE_NORMALIZER
        );

        return $files;
    }

    protected function createNormalizerFactoryClass($classes)
    {
        $statements = [
            new Expr\Assign(new Expr\Variable('normalizers'), new Expr\Array_()),
            new Expr\Assign(new Expr\ArrayDimFetch(new Expr\Variable('normalizers')), new Expr\New_(new Name('\Symfony\Component\Serializer\Normalizer\ArrayDenormalizer'))),
        ];

        if ($this->useReference) {
            $statements[] = new Expr\Assign(new Expr\ArrayDimFetch(new Expr\Variable('normalizers')), new Expr\New_(new Name('\Jane\JsonSchemaRuntime\Normalizer\ReferenceNormalizer')));
        }

        foreach ($classes as $class) {
            $statements[] = new Expr\Assign(new Expr\ArrayDimFetch(new Expr\Variable('normalizers')), new Expr\New_($class));
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
