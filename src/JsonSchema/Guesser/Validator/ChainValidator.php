<?php

namespace Jane\JsonSchema\Guesser\Validator;

use Jane\JsonSchema\Guesser\Guess\Property;

class ChainValidator implements ValidatorInterface
{
    /**
     * @var ValidatorInterface[]
     */
    private $validators = [];

    public function addValidator(ValidatorInterface $validator): void
    {
        $this->validators[] = $validator;
    }

    public function supports($object): bool
    {
        return false;
    }

    public function guess($object, string $name, Property $property): void
    {
        foreach ($this->validators as $validator) {
            if ($validator->supports($object)) {
                $validator->guess($object, $name, $property);
            }
        }
    }
}
