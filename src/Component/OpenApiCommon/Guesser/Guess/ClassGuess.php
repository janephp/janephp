<?php

namespace Jane\Component\OpenApiCommon\Guesser\Guess;

use Jane\Component\JsonSchema\Guesser\Guess\ClassGuess as BaseClassGuess;
use Jane\Component\JsonSchema\Guesser\Guess\Property;

class ClassGuess extends BaseClassGuess
{
    private ?ParentClass $parentClass = null;

    public function getParentClass(): ?ParentClass
    {
        return $this->parentClass;
    }

    public function setParentClass(?ParentClass $parentClass): void
    {
        $this->parentClass = $parentClass;

        if (null === $parentClass) {
            return;
        }

        // PHP does not let a child class change the type of a property that its parent declares, so
        // the child reads and writes such a property with the type of the parent. A schema can still
        // narrow it, for example with a const for the discriminator value: the type stays the parent's.
        foreach ($this->getProperties() as $property) {
            $parentProperty = $parentClass->getProperty($property->getName());

            if (null !== $parentProperty && $parentProperty->getType() !== $property->getType()) {
                $property->setType($parentProperty->getType());
            }
        }
    }

    public function getLocalProperties(): array
    {
        if (null === $this->parentClass) {
            return $this->getProperties();
        }

        return array_filter( // return only those properties which not present in parent class
            $this->getProperties(),
            function (Property $property): bool {
                return null === $this->parentClass->getProperty($property->getName());
            }
        );
    }
}
