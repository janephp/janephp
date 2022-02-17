<?php

namespace Jane\Component\JsonSchema\Guesser\Validator\Numeric;

use Jane\Component\JsonSchema\Guesser\Guess\ClassGuess;
use Jane\Component\JsonSchema\Guesser\Guess\Property;
use Jane\Component\JsonSchema\Guesser\Validator\ValidatorGuess;
use Jane\Component\JsonSchema\Guesser\Validator\ValidatorInterface;
use Jane\Component\JsonSchema\JsonSchema\Model\JsonSchema;
use Symfony\Component\Validator\Constraints\LessThan;

class ExclusiveMaximumValidator implements ValidatorInterface
{
    public function supports($object): bool
    {
        return $object instanceof JsonSchema && (\is_array($object->getType()) ? (\in_array('integer', $object->getType()) || \in_array('number', $object->getType())) : ('integer' === $object->getType() || 'number' === $object->getType())) && is_numeric($object->getExclusiveMaximum());
    }

    /**
     * @param JsonSchema          $object
     * @param ClassGuess|Property $guess
     */
    public function guess($object, string $name, $guess): void
    {
        $guess->addValidatorGuess(new ValidatorGuess(LessThan::class, [
            'value' => $object->getExclusiveMaximum(),
        ]));
    }
}
