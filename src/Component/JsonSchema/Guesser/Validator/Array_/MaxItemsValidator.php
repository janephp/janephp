<?php

namespace Jane\Component\JsonSchema\Guesser\Validator\Array_;

use Jane\Component\JsonSchema\Guesser\Guess\ClassGuess;
use Jane\Component\JsonSchema\Guesser\Guess\Property;
use Jane\Component\JsonSchema\Guesser\Validator\ObjectCheckTrait;
use Jane\Component\JsonSchema\Guesser\Validator\ValidatorGuess;
use Jane\Component\JsonSchema\Guesser\Validator\ValidatorInterface;
use Jane\Component\JsonSchema\JsonSchema\Model\JsonSchema;
use Symfony\Component\Validator\Constraints\Count;

class MaxItemsValidator implements ValidatorInterface
{
    use ObjectCheckTrait;

    public function supports($object): bool
    {
        return $this->checkObject($object) && (\is_array($object->type ?? null) ? \in_array('array', $object->type ?? null) : 'array' === ($object->type ?? null)) && null !== ($object->maxItems ?? null);
    }

    /**
     * @param JsonSchema          $object
     * @param ClassGuess|Property $guess
     */
    public function guess($object, string $name, $guess): void
    {
        $guess->addValidatorGuess(new ValidatorGuess(Count::class, [
            'max' => ($object->maxItems ?? null),
            'maxMessage' => 'This array has too much values. It should have {{ limit }} values or less.',
        ]));
    }
}
