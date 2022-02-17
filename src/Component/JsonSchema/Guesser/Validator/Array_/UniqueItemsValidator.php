<?php

namespace Jane\Component\JsonSchema\Guesser\Validator\Array_;

use Jane\Component\JsonSchema\Guesser\Guess\ClassGuess;
use Jane\Component\JsonSchema\Guesser\Guess\Property;
use Jane\Component\JsonSchema\Guesser\Validator\ValidatorGuess;
use Jane\Component\JsonSchema\Guesser\Validator\ValidatorInterface;
use Jane\Component\JsonSchema\JsonSchema\Model\JsonSchema;
use Symfony\Component\Validator\Constraints\Unique;

class UniqueItemsValidator implements ValidatorInterface
{
    public function supports($object): bool
    {
        return $object instanceof JsonSchema && (\is_array($object->getType()) ? \in_array('array', $object->getType()) : 'array' === $object->getType()) && null !== $object->getUniqueItems();
    }

    /**
     * @param JsonSchema          $object
     * @param ClassGuess|Property $guess
     */
    public function guess($object, string $name, $guess): void
    {
        if (!$object->getUniqueItems()) {
            return;
        }

        $guess->addValidatorGuess(new ValidatorGuess(Unique::class));
    }
}
