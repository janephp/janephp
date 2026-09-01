<?php

namespace Jane\Component\JsonSchema\Guesser\Validator\Numeric;

use Jane\Component\JsonSchema\Guesser\Guess\ClassGuess;
use Jane\Component\JsonSchema\Guesser\Guess\Property;
use Jane\Component\JsonSchema\Guesser\Validator\ObjectCheckTrait;
use Jane\Component\JsonSchema\Guesser\Validator\ValidatorGuess;
use Jane\Component\JsonSchema\Guesser\Validator\ValidatorInterface;
use Jane\Component\JsonSchema\JsonSchema\Model\JsonSchema;
use Symfony\Component\Validator\Constraints\LessThan;

class ExclusiveMaximumValidator implements ValidatorInterface
{
    use ObjectCheckTrait;

    public function supports($object): bool
    {
        return $this->checkObject($object) && (\is_array($object->type ?? null) ? (\in_array('integer', $object->type ?? null) || \in_array('number', $object->type ?? null)) : ('integer' === ($object->type ?? null) || 'number' === ($object->type ?? null))) && is_numeric($object->exclusiveMaximum ?? null);
    }

    /**
     * @param JsonSchema          $object
     * @param ClassGuess|Property $guess
     */
    public function guess($object, string $name, $guess): void
    {
        $guess->addValidatorGuess(new ValidatorGuess(LessThan::class, [
            'value' => ($object->exclusiveMaximum ?? null),
        ]));
    }
}
