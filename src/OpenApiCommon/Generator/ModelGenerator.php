<?php

namespace Jane\OpenApiCommon\Generator;

use Jane\JsonSchema\Generator\ModelGenerator as BaseModelGenerator;
use Jane\JsonSchema\Guesser\Guess\ClassGuess as BaseClassGuess;
use Jane\JsonSchema\Guesser\Guess\Property;
use Jane\OpenApiCommon\Generator\Model\ClassGenerator;
use Jane\OpenApiCommon\Guesser\Guess\ClassGuess;
use Jane\OpenApiCommon\Guesser\Guess\MultipleClass;
use PhpParser\Node\Stmt;

class ModelGenerator extends BaseModelGenerator
{
    use ClassGenerator;

    protected function doCreateClassMethods(BaseClassGuess $classGuess, Property $property, string $namespace, bool $required): array
    {
        $methods = [];
        $methods[] = $this->createGetter($property, $namespace, $required);
        $methods[] = $this->createSetter($property, $namespace, $required, $classGuess instanceof MultipleClass ? false : true);

        return $methods;
    }

    protected function doCreateModel(BaseClassGuess $class, array $properties, array $methods): Stmt\Class_
    {
        $extends = null;
        if ($class instanceof ClassGuess &&
            $class->getMultipleClass() instanceof MultipleClass) {
            $extends = $this->getNaming()->getClassName($class->getMultipleClass()->getName());
        }

        $classModel = $this->createModel(
            $class->getName(),
            $properties,
            $methods,
            \count($class->getExtensionsType()) > 0,
            $class->isDeprecated(),
            $extends
        );

        return $classModel;
    }
}
