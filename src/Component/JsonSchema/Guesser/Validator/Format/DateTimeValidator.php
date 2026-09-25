<?php

namespace Jane\Component\JsonSchema\Guesser\Validator\Format;

use Jane\Component\JsonSchema\Guesser\Guess\ClassGuess;
use Jane\Component\JsonSchema\Guesser\Guess\DateTimeType;
use Jane\Component\JsonSchema\Guesser\Guess\Property;
use Jane\Component\JsonSchema\Guesser\Validator\ObjectCheckTrait;
use Jane\Component\JsonSchema\Guesser\Validator\ValidatorGuess;
use Jane\Component\JsonSchema\Guesser\Validator\ValidatorInterface;
use Jane\Component\JsonSchema\JsonSchema\Model\JsonSchema;
use Symfony\Component\Validator\Constraints\DateTime;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\Regex;

class DateTimeValidator implements ValidatorInterface
{
    use ObjectCheckTrait;

    /**
     * @param string      $outputDateFormat Format of date to use when normalized
     * @param string|null $inputDateFormat  Format of date to use when denormalized
     */
    public function __construct(
        private readonly string $outputDateFormat = \DateTimeInterface::RFC3339,
        private readonly ?string $inputDateFormat = null,
    ) {
    }

    public function supports($object): bool
    {
        return $this->checkObject($object) && ((\is_array($object->getType()) ? \in_array('string', $object->getType()) : 'string' === $object->getType()) || null === $object->getType()) && 'date-time' === $object->getFormat();
    }

    /**
     * @param JsonSchema          $object
     * @param ClassGuess|Property $guess
     */
    public function guess($object, string $name, $guess): void
    {
        $dateFormat = $this->inputDateFormat ?? $this->outputDateFormat;

        if (\DateTimeInterface::RFC3339 === $dateFormat) {
            // The generated denormalizer for the default RFC 3339 format is lenient
            // (see DateTimeType::generateLenientFallbackStatements): it also accepts a
            // `Z` designator and fractional seconds that the strict
            // \DateTimeInterface::RFC3339 format cannot parse. Symfony's DateTime
            // constraint validates a single strict format and would reject those
            // same values, so a format-shape check is used instead to keep the
            // validator and the denormalizer in sync. Calendar-invalid values
            // ("2026-02-30T00:00:00Z") still fail: the regex only accepts the RFC 3339
            // shape, and the denormalizer reports them with a clean
            // InvalidDateException when a bare `new \DateTime` cannot parse them.
            $guess->addValidatorGuess(new ValidatorGuess(Regex::class, [
                'pattern' => DateTimeType::RFC3339_LENIENT_PATTERN,
            ]));
        } else {
            $guess->addValidatorGuess(new ValidatorGuess(DateTime::class, [
                'format' => $dateFormat,
            ]));
        }

        // Symfony date constraints consider empty strings valid, but JSON Schema requires
        // every string (including "") to match the format, so empty strings must be rejected.
        $options = [];
        if ($this->isNullable($object)) {
            // Using an integer as a replacement boolean value is most likely to break as soon as
            // \Symfony\Component\Validator\Constraints\NotBlank::$allowNull is strongly typed.
            // Currently we can not use 'bool' here, because \Jane\Component\JsonSchema\Generator\ValidatorGenerator::generateConstraint()
            // does not handle them. This seems to be an issue with nikic/php-parser not being able to provide support
            // for it.
            $options = ['allowNull' => 1];
        }
        $guess->addValidatorGuess(new ValidatorGuess(NotBlank::class, $options));
    }
}
