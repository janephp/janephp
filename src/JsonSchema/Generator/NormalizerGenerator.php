<?php

namespace Jane\JsonSchema\Generator;

use Jane\JsonSchema\Generator\Context\Context;
use Jane\JsonSchema\Generator\Normalizer\DenormalizerGenerator;
use Jane\JsonSchema\Generator\Normalizer\NormalizerGenerator as NormalizerGeneratorTrait;
use Jane\JsonSchema\Schema;
use PhpParser\Node\Arg;
use PhpParser\Node\Expr;
use PhpParser\Node\Name;
use PhpParser\Node\Param;
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
    public function __construct(Naming $naming, $parser, $useReference = true, $useCacheableSupportsMethod = null)
    {
        $this->naming = $naming;
        $this->parser = $parser;
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

        $schema->addFile(new File(
            $schema->getDirectory() . '/Normalizer/NormalizerFactory.php',
            new Stmt\Namespace_(new Name($schema->getNamespace() . '\\Normalizer'), [
                $this->createNormalizerFactoryClass($classes),
            ]),
            self::FILE_TYPE_NORMALIZER
        ));


        /**************************
         * BEGIN PROCEDURAL
         */
        $propertyName = $this->getNaming()->getPropertyName('normalizers');
        $propertyStmt = new Stmt\PropertyProperty($propertyName);
        $propertyStmt->default = $this->parser->parse('<?php ' . var_export($normalizers, true) . ';')[0]->expr;
        $methods = [];
        $methods[] = new Stmt\Property(Stmt\Class_::MODIFIER_PROTECTED, [
            $propertyStmt,
        ]);
        $methods[] = $this->createBaseNormalizerSupportsDenormalizationMethod($modelFqdn);
        $methods[] = $this->createBaseNormalizerSupportsNormalizationMethod($modelFqdn);
        $methods[] = $this->createDenormalizeMethod($modelFqdn, $context, $class);
        $methods[] = $this->createNormalizeMethod($modelFqdn, $context, $class);

        if ($this->useCacheableSupportsMethod) {
            $methods[] = $this->createHasCacheableSupportsMethod();
        }

        $normalizerClass = $this->createNormalizerClass(
            'Normalizer',
            $methods,
            $this->useCacheableSupportsMethod
        );
        $classes[] = $normalizerClass->name;

        $useStmts = [
//                new Stmt\Use_([new Stmt\UseUse(new Name('Jane\JsonSchemaRuntime\Reference'))]),
//                new Stmt\Use_([new Stmt\UseUse(new Name('Symfony\Component\Serializer\Exception\InvalidArgumentException'))]),
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

        $schema->addFile(new File($schema->getDirectory() . '/Normalizer/Normalizer.php', $namespace, self::FILE_TYPE_NORMALIZER));

    }

    protected function canUseCacheableSupportsMethod(?bool $useCacheableSupportsMethod): bool
    {
        return
            true === $useCacheableSupportsMethod ||
            (null === $useCacheableSupportsMethod && class_exists('Symfony\Component\Serializer\Normalizer\CacheableSupportsMethodInterface'));
    }

    protected function createNormalizerNormalizerClass($classes)
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

        $methods = [];
        $normalizerClass = $this->createNormalizerClass(
            'Normalizer',
            $methods,
            $this->useCacheableSupportsMethod
        );
        return $normalizerClass;
        return new Stmt\Class_('Normalizer', [
            'stmts' => [
                new Stmt\ClassMethod('create', [
                    'type' => Stmt\Class_::MODIFIER_STATIC | Stmt\Class_::MODIFIER_PUBLIC,
                    'stmts' => $statements,
                ]),
            ],
        ]);
    }
    /**
     * Create method to check if denormalization is supported.
     *
     * @param string $modelFqdn Fully Qualified name of the model class denormalized
     *
     * @return Stmt\ClassMethod
     */
    protected function createBaseNormalizerSupportsDenormalizationMethod()
    {
        return new Stmt\ClassMethod('supportsDenormalization', [
            'type' => Stmt\Class_::MODIFIER_PUBLIC,
            'params' => [
                new Param(new Expr\Variable('data')),
                new Param(new Expr\Variable('type')),
                new Param(new Expr\Variable('format'), new Expr\ConstFetch(new Name('null'))),
            ],
//            'stmts' => [new Stmt\Return_(new Expr\Func \Identical(new Expr\Variable('type'), new Scalar\String_($modelFqdn)))],
            'stmts' => [new Stmt\Return_(new Expr\FuncCall(new Name('array_key_exists'), [

                new Arg(new Expr\Variable('type')),
                new Expr\PropertyFetch(new Expr\Variable('this'), "normalizers")
            ]))]
        ]);
    }
    /**
     * Create method to check if denormalization is supported.
     *
     * @param string $modelFqdn Fully Qualified name of the model class denormalized
     *
     * @return Stmt\ClassMethod
     */
    protected function createBaseNormalizerSupportsNormalizationMethod(string $modelFqdn)
    {
        return new Stmt\ClassMethod('supportsNormalization', [
            'type' => Stmt\Class_::MODIFIER_PUBLIC,
            'params' => [
                new Param(new Expr\Variable('data')),
                new Param(new Expr\Variable('format'), new Expr\ConstFetch(new Name('null'))),
            ],
            'stmts' => [new Stmt\Return_(

                new Expr\BinaryOp\BooleanAnd(
                    new Expr\FuncCall(new Name('is_object'), [new Arg(new Expr\Variable('data'))]),
                    new Expr\FuncCall(new Name('array_key_exists'), [
                        new Expr\FuncCall(new Name('get_class'), [new Arg(new Expr\Variable('data'))]),
                        new Expr\PropertyFetch(new Expr\Variable('this'), "normalizers")
                    ])
//                new Expr\Instanceof_(new Expr\Variable('data'), new Name('\\' . $modelFqdn))
                ))],
        ]);
    }

}
