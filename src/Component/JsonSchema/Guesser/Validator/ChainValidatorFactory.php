<?php

namespace Jane\Component\JsonSchema\Guesser\Validator;

use Jane\Component\JsonSchema\Generator\Naming;
use Jane\Component\JsonSchema\Registry\Registry;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;

class ChainValidatorFactory
{
    /** @var list<ValidatorInterface> */
    private static array $customValidators = [];

    private static string $fullDateFormat = 'Y-m-d';

    private static string $dateTimeOutputFormat = \DateTimeInterface::RFC3339;

    private static ?string $dateTimeInputFormat = null;

    public static function addValidator(ValidatorInterface $validator): void
    {
        self::$customValidators[] = $validator;
    }

    /**
     * Configure the date formats used by the built-in date & date-time format
     * validators. Must mirror the `full-date-format`, `date-format` and
     * `date-input-format` options given to the type guessers.
     */
    public static function setDateFormats(string $fullDateFormat, string $dateTimeOutputFormat, ?string $dateTimeInputFormat): void
    {
        self::$fullDateFormat = $fullDateFormat;
        self::$dateTimeOutputFormat = $dateTimeOutputFormat;
        self::$dateTimeInputFormat = $dateTimeInputFormat;
    }

    public static function resetCustomValidators(): void
    {
        self::$customValidators = [];
        self::$fullDateFormat = 'Y-m-d';
        self::$dateTimeOutputFormat = \DateTimeInterface::RFC3339;
        self::$dateTimeInputFormat = null;
    }

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
        $chainValidator->addValidator(new Array_\ItemsValidator($chainValidator));
        // Object
        $chainValidator->addValidator(new Object_\SubObjectValidator($denormalizer, $naming, $registry));
        $chainValidator->addValidator(new Object_\MaxPropertiesValidator());
        $chainValidator->addValidator(new Object_\MinPropertiesValidator());
        // Format
        $chainValidator->addValidator(new Format\DateValidator(self::$fullDateFormat));
        $chainValidator->addValidator(new Format\DateTimeValidator(self::$dateTimeOutputFormat, self::$dateTimeInputFormat));
        $chainValidator->addValidator(new Format\EmailValidator());
        $chainValidator->addValidator(new Format\HostnameValidator());
        $chainValidator->addValidator(new Format\IPv4Validator());
        $chainValidator->addValidator(new Format\IPv6Validator());
        $chainValidator->addValidator(new Format\UuidValidator());

        // Custom validators emit their constraints before the generic Type/NotNull fallbacks below
        foreach (self::$customValidators as $validator) {
            $chainValidator->addValidator($validator);
        }

        // Others
        $chainValidator->addValidator(new Any\TypeValidator());
        $chainValidator->addValidator(new Any\EnumValidator());
        $chainValidator->addValidator(new Any\NotNullValidator());
        $chainValidator->addValidator(new Any\ConstValidator());

        return $chainValidator;
    }
}
