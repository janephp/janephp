<?php

namespace Jane\JsonSchema\Guesser\Validator;

use Jane\JsonSchema\Guesser\Guess\Property;
use Jane\JsonSchema\JsonSchema\Model\JsonSchema;
use Symfony\Component\Validator\Constraints\Choice;

class EnumValidator implements ValidatorInterface
{
    public function supports($object): bool
    {
        return $object instanceof JsonSchema && ((\is_array($object->getType()) ? \in_array('string', $object->getType()) : 'string' === $object->getType()) || null === $object->getType()) && null !== $object->getEnum();
    }

    /**
     * @param JsonSchema $object
     */
    public function guess($object, string $name, Property $property): void
    {
        $property->addValidatorGuess(new ValidatorGuess(Choice::class, [
            'choices' => $object->getEnum(),
            'message' => '"{{ value }}" is not part of the set of possible choices for this field: "{{ choices }}".',
        ]));
    }
}
