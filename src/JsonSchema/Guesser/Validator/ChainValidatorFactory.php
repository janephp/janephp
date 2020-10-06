<?php

namespace Jane\JsonSchema\Guesser\Validator;

class ChainValidatorFactory
{
    public static function create(): ValidatorInterface
    {
        $chainValidator = new ChainValidator();
        $chainValidator->addValidator(new EnumValidator());

        return $chainValidator;
    }
}
