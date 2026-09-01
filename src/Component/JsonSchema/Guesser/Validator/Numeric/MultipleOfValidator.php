<?php

namespace Jane\Component\JsonSchema\Guesser\Validator\Numeric;

use Jane\Component\JsonSchema\Guesser\Guess\ClassGuess;
use Jane\Component\JsonSchema\Guesser\Guess\Property;
use Jane\Component\JsonSchema\Guesser\Validator\ObjectCheckTrait;
use Jane\Component\JsonSchema\Guesser\Validator\ValidatorGuess;
use Jane\Component\JsonSchema\Guesser\Validator\ValidatorInterface;
use Jane\Component\JsonSchema\JsonSchema\Model\JsonSchema;
use Symfony\Component\Validator\Constraints\DivisibleBy;

class MultipleOfValidator implements ValidatorInterface
{
    use ObjectCheckTrait;

    public function supports($object): bool
    {
        return $this->checkObject($object) && (\is_array($object->type ?? null) ? (\in_array('integer', $object->type ?? null) || \in_array('number', $object->type ?? null)) : ('integer' === ($object->type ?? null) || 'number' === ($object->type ?? null))) && is_numeric($object->multipleOf ?? null) && ((int) ($object->multipleOf ?? null)) > 0;
    }

    /**
     * @param JsonSchema          $object
     * @param ClassGuess|Property $guess
     */
    public function guess($object, string $name, $guess): void
    {
        $guess->addValidatorGuess(new ValidatorGuess(DivisibleBy::class, [
            'value' => ($object->multipleOf ?? null),
        ]));
    }
}
