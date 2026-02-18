<?php

namespace Jane\Component\JsonSchema\Guesser\Validator;

use Jane\Component\JsonSchema\Guesser\Guess\ClassGuess;
use Jane\Component\JsonSchema\Guesser\Guess\Property;

class ChainValidator implements ValidatorInterface
{
    /** @var array<ValidatorInterface> */
    private array $validators = [];

    public function addValidator(ValidatorInterface $validator): void
    {
        $this->validators[] = $validator;
    }

    public function supports($object): bool
    {
        return false;
    }

    /**
     * @param ClassGuess|Property $guess
     */
    public function guess($object, string $name, $guess): void
    {
        foreach ($this->validators as $validator) {
            if ($validator->supports($object)) {
                $validator->guess($object, $name, $guess);
            }
        }
    }
}
