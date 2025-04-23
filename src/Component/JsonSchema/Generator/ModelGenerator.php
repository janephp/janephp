<?php

namespace Jane\Component\JsonSchema\Generator;

use Jane\Component\JsonSchema\Generator\Context\Context;
use Jane\Component\JsonSchema\Generator\Model\ClassGenerator;
use Jane\Component\JsonSchema\Generator\Model\GetterSetterGenerator;
use Jane\Component\JsonSchema\Generator\Model\PropertyGenerator;
use Jane\Component\JsonSchema\Guesser\Guess\ClassGuess;
use Jane\Component\JsonSchema\Guesser\Guess\Property;
use Jane\Component\JsonSchema\Registry\Schema;
use PhpParser\Node\Name;
use PhpParser\Node\Stmt;
use PhpParser\Parser;

class ModelGenerator implements GeneratorInterface
{
    use ClassGenerator;
    use GetterSetterGenerator;
    use PropertyGenerator;

    public const FILE_TYPE_MODEL = 'model';

    public function __construct(
        protected Naming $naming,
        protected Parser $parser,
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
    protected function getParser(): Parser
    {
        return $this->parser;
    }

    /**
     * Generate a model given a schema.
     */
    public function generate(Schema $schema, string $className, Context $context): void
    {
        $namespace = $schema->getNamespace() . '\\Model';

        foreach ($schema->getClasses() as $class) {
            $properties = [];
            $methods = [];

            /** @var Property $property */
            foreach ($class->getLocalProperties() as $property) {
                $properties[] = $this->createProperty($property, $namespace, null, $context->isStrict());
                $methods = array_merge($methods, $this->doCreateClassMethods($class, $property, $namespace, $context->isStrict()));
            }

            $model = $this->doCreateModel($class, $properties, $methods);

            $namespaceStmt = new Stmt\Namespace_(new Name($namespace), [$model]);
            $schema->addFile(new File($schema->getDirectory() . '/Model/' . $class->getName() . '.php', $namespaceStmt, self::FILE_TYPE_MODEL));
        }
    }

    protected function doCreateClassMethods(ClassGuess $classGuess, Property $property, string $namespace, bool $strict): array
    {
        $methods = [];
        $methods[] = $this->createGetter($property, $namespace, $strict);
        $methods[] = $this->createSetter($property, $namespace, $strict);

        return $methods;
    }

    protected function doCreateModel(ClassGuess $class, array $properties, array $methods): Stmt\Class_
    {
        return $this->createModel(
            $class->getName(),
            $properties,
            $methods,
            \count($class->getExtensionsType()) > 0,
            $class->isDeprecated()
        );
    }
}
