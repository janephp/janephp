<?php

namespace Jane\Component\JsonSchema\Generator;

use Jane\Component\JsonSchema\Generator\Context\Context;
use Jane\Component\JsonSchema\Generator\Model\ClassGenerator;
use Jane\Component\JsonSchema\Generator\Model\GetterSetterGenerator;
use Jane\Component\JsonSchema\Generator\Model\PropertyGenerator;
use Jane\Component\JsonSchema\Guesser\Guess\ClassGuess;
use Jane\Component\JsonSchema\Guesser\Guess\NonObjectGuessInterface;
use Jane\Component\JsonSchema\Guesser\Guess\Property;
use Jane\Component\JsonSchema\Registry\Schema;
use PhpParser\Node;
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
        foreach ($schema->getClasses() as $class) {
            if ($class instanceof NonObjectGuessInterface) {
                continue;
            }

            $subNamespace = $class->getSubNamespace();
            $namespace = $this->naming->getModelNamespace($schema->getNamespace(), $subNamespace);

            $properties = [];
            $methods = [];

            /** @var Property $property */
            foreach ($class->getLocalProperties() as $property) {
                $properties[] = $this->createProperty($property, $namespace, null, $context->isStrict());
                $methods = array_merge($methods, $this->doCreateClassMethods($class, $property, $namespace, $context->isStrict()));
            }

            [$model, $useStmts] = $this->doCreateModel($schema, $class, $properties, $methods);

            $namespaceStmt = new Stmt\Namespace_(new Name($namespace), array_merge($useStmts, [$model]));
            $schema->addFile(new File($this->naming->getArtifactPath($schema->getDirectory(), 'Model', $subNamespace) . '/' . $class->getName() . '.php', $namespaceStmt, self::FILE_TYPE_MODEL));
        }
    }

    protected function doCreateClassMethods(ClassGuess $classGuess, Property $property, string $namespace, bool $strict): array
    {
        $methods = [];
        $methods[] = $this->createGetter($property, $namespace, $strict);
        $methods[] = $this->createSetter($property, $namespace, $strict);

        return $methods;
    }

    /**
     * Create a model class for the given class guess.
     *
     * @param Node[] $properties
     * @param Node[] $methods
     *
     * @return array{0: Stmt\Class_, 1: array<Stmt\Use_>} The model class and the use statements to prepend in its namespace
     */
    protected function doCreateModel(Schema $schema, ClassGuess $class, array $properties, array $methods): array
    {
        $hasExtensions = \count($class->getExtensionsType()) > 0;

        $runtimeTraitFqcn = null;
        $runtimeInterfaceFqcn = null;
        $useStmts = [];

        if ($hasExtensions) {
            $runtimeTraitFqcn = $this->naming->getRuntimeClassFQCN($schema->getNamespace(), [], 'AdditionalAndPatternProperties');
            $runtimeInterfaceFqcn = $this->naming->getRuntimeClassFQCN($schema->getNamespace(), [], 'AdditionalPropertiesInterface');
            $schema->addRequiredRuntimeFile($runtimeTraitFqcn);
            $schema->addRequiredRuntimeFile($runtimeInterfaceFqcn);
            $useStmts = [
                new Stmt\Use_([new Stmt\UseUse(new Name($runtimeTraitFqcn))]),
                new Stmt\Use_([new Stmt\UseUse(new Name($runtimeInterfaceFqcn))]),
            ];
        }

        return [
            $this->createModel(
                $class->getName(),
                $properties,
                $methods,
                $hasExtensions,
                $class->isDeprecated(),
                runtimeTraitFqcn: $runtimeTraitFqcn,
                runtimeInterfaceFqcn: $runtimeInterfaceFqcn,
                definedProperties: $hasExtensions ? $this->createDefinedPropertiesMap($class) : [],
            ),
            $useStmts,
        ];
    }

    /**
     * Map of PHP property name => [wire name, getter method name, setter method name] for the properties declared by this class.
     *
     * @return array<string, array{0: string, 1: string, 2: string}>
     */
    protected function createDefinedPropertiesMap(ClassGuess $class): array
    {
        $map = [];

        foreach ($class->getLocalProperties() as $property) {
            $map[$property->getPhpName()] = [
                $property->getName(),
                $this->getNaming()->getPrefixedMethodName('get', $property->getAccessorName()),
                $this->getNaming()->getPrefixedMethodName('set', $property->getAccessorName()),
            ];
        }

        return $map;
    }
}
