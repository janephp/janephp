<?php

namespace Jane\Component\JsonSchema\Guesser\Validator;

use Jane\Component\JsonSchema\Generator\Naming;
use Jane\Component\JsonSchema\Registry\Registry;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;

class ChainValidatorFactory
{
    public static function create(Naming $naming, Registry $registry, DenormalizerInterface $denormalizer): ValidatorInterface
    {
        $chainValidator = new ChainValidator();
        // Numeric
        $chainValidator->addValidator(new Numeric\MultipleOfValidator());
        $chainValidator->addValidator(new Numeric\MaximumValidator());
        $chainValidator->addValidator(new Numeric\ExclusiveMaximumValidator());
        $chainValidator->addValidator(new Numeric\MinimumValidator());
        $chainValidator->addValidator(new Numeric\ExclusiveMinimumValidator());
        // String
        $chainValidator->addValidator(new String_\MinLengthValidator());
        $chainValidator->addValidator(new String_\MaxLengthValidator());
        $chainValidator->addValidator(new String_\PatternValidator());
        // Array
        $chainValidator->addValidator(new Array_\MaxItemsValidator());
        $chainValidator->addValidator(new Array_\MinItemsValidator());
        $chainValidator->addValidator(new Array_\UniqueItemsValidator());
        // Object
        $chainValidator->addValidator(new Object_\SubObjectValidator($denormalizer, $naming, $registry));
        $chainValidator->addValidator(new Object_\MaxPropertiesValidator());
        $chainValidator->addValidator(new Object_\MinPropertiesValidator());
        // Format
        $chainValidator->addValidator(new Format\EmailValidator());
        $chainValidator->addValidator(new Format\HostnameValidator());
        $chainValidator->addValidator(new Format\IPv4Validator());
        $chainValidator->addValidator(new Format\IPv6Validator());
        $chainValidator->addValidator(new Format\UuidValidator());
        // Others
        $chainValidator->addValidator(new Any\TypeValidator());
        $chainValidator->addValidator(new Any\EnumValidator());
        $chainValidator->addValidator(new Any\NotNullValidator());
        $chainValidator->addValidator(new Any\ConstValidator());

        return $chainValidator;
    }
}
