<?php

namespace Jane\Component\OpenApiCommon\Generator;

use Jane\Component\JsonSchema\Generator\ModelGenerator as BaseModelGenerator;
use Jane\Component\JsonSchema\Guesser\Guess\ClassGuess as BaseClassGuess;
use Jane\Component\JsonSchema\Guesser\Guess\Property;
use Jane\Component\OpenApiCommon\Generator\Model\ClassGenerator;
use Jane\Component\OpenApiCommon\Guesser\Guess\ClassGuess;
use Jane\Component\OpenApiCommon\Guesser\Guess\ParentClass;
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

    protected function doCreateModel(BaseClassGuess $class, array $properties, array $methods): Stmt\Class_
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

        return $this->createModel(
            $class->getName(),
            $properties,
            $methods,
            \count($class->getExtensionsType()) > 0,
            $class->isDeprecated(),
            $extends
        );
    }
}
