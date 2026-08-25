<?php

namespace Jane\Component\OpenApiCommon\Generator;

use Jane\Component\JsonSchema\Generator\Model\ClassGenerator;
use Jane\Component\JsonSchema\Generator\ModelGenerator as BaseModelGenerator;
use Jane\Component\JsonSchema\Guesser\Guess\ClassGuess as BaseClassGuess;
use Jane\Component\JsonSchema\Guesser\Guess\Property;
use Jane\Component\JsonSchema\Registry\Schema;
use Jane\Component\OpenApiCommon\Guesser\Guess\ClassGuess;
use Jane\Component\OpenApiCommon\Guesser\Guess\ParentClass;
use PhpParser\Node;
use PhpParser\Node\Name;
use PhpParser\Node\Stmt;

class ModelGenerator extends BaseModelGenerator
{
    use ClassGenerator;

    protected function doCreateClassMethods(BaseClassGuess $classGuess, Property $property, string $namespace, bool $strict): array
    {
        $methods = [];
        $methods[] = $this->createGetter($property, $namespace, $strict);
        $methods[] = $this->createSetter($property, $namespace, $strict, !$classGuess instanceof ParentClass);

        return $methods;
    }

    /**
     * @param Node[] $properties
     * @param Node[] $methods
     *
     * @return array{0: Stmt\Class_, 1: array<Stmt\Use_>} The model class and the use statements to prepend in its namespace
     */
    protected function doCreateModel(Schema $schema, BaseClassGuess $class, array $properties, array $methods): array
    {
        $extends = null;
        if ($class instanceof ClassGuess
            && $class->getParentClass() instanceof ParentClass) {
            $parentClass = $class->getParentClass();
            $parentClassName = $this->getNaming()->getClassName($parentClass->getName());

            if ($parentClass->getSubNamespace() === $class->getSubNamespace()) {
                // same sub-namespace: the relative class name resolves to the parent
                $extends = $parentClassName;
            } elseif (null !== $parentClass->getModelNamespace()) {
                // different sub-namespace: reference the parent by its fully qualified name
                $extends = '\\' . $parentClass->getModelNamespace() . '\\' . $parentClassName;
            } else {
                $extends = $parentClassName;
            }
        }

        $hasExtensions = \count($class->getExtensionsType()) > 0;
        // When an ancestor already carries the extensions runtime (trait), re-using it here would fork its
        // private storage: descendants only merge their own properties into `definedProperties()` instead.
        $ancestorHasExtensions = $this->ancestorHasExtensions($schema, $class);
        $useExtensionsRuntime = $hasExtensions && !$ancestorHasExtensions;

        $runtimeTraitFqcn = null;
        $runtimeInterfaceFqcn = null;
        $useStmts = [];

        if ($useExtensionsRuntime) {
            $runtimeTraitFqcn = $this->naming->getRuntimeClassFQCN($schema->getNamespace(), [], 'AdditionalAndPatternProperties');
            $runtimeInterfaceFqcn = $this->naming->getRuntimeClassFQCN($schema->getNamespace(), [], 'AdditionalPropertiesInterface');
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
                $useExtensionsRuntime,
                $class->isDeprecated(),
                $extends,
                $runtimeTraitFqcn,
                $runtimeInterfaceFqcn,
                $useExtensionsRuntime || $ancestorHasExtensions ? $this->createDefinedPropertiesMap($class) : [],
                $ancestorHasExtensions,
            ),
            $useStmts,
        ];
    }

    /**
     * Whether any ancestor in the inheritance chain carries additional / pattern properties.
     */
    private function ancestorHasExtensions(Schema $schema, BaseClassGuess $class): bool
    {
        if (!$class instanceof ClassGuess) {
            return false;
        }

        $parent = $class->getParentClass();

        while (null !== $parent) {
            $parentGuess = $schema->getClass($parent->getReference()) ?? $parent;

            if (\count($parentGuess->getExtensionsType()) > 0) {
                return true;
            }

            $parent = $parentGuess instanceof ClassGuess ? $parentGuess->getParentClass() : null;
        }

        return false;
    }
}
