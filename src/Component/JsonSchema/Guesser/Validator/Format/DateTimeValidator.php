<?php

namespace Jane\Component\JsonSchema\Guesser\Validator\Format;

use Jane\Component\JsonSchema\Guesser\Guess\ClassGuess;
use Jane\Component\JsonSchema\Guesser\Guess\Property;
use Jane\Component\JsonSchema\Guesser\Validator\ObjectCheckTrait;
use Jane\Component\JsonSchema\Guesser\Validator\ValidatorGuess;
use Jane\Component\JsonSchema\Guesser\Validator\ValidatorInterface;
use Jane\Component\JsonSchema\JsonSchema\Model\JsonSchema;
use Symfony\Component\Validator\Constraints\DateTime;
use Symfony\Component\Validator\Constraints\NotBlank;

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
        return $this->checkObject($object) && ((\is_array($object->type ?? null) ? \in_array('string', $object->type ?? null) : 'string' === ($object->type ?? null)) || null === ($object->type ?? null)) && 'date-time' === ($object->format ?? null);
    }

    /**
     * @param JsonSchema          $object
     * @param ClassGuess|Property $guess
     */
    public function guess($object, string $name, $guess): void
    {
        $guess->addValidatorGuess(new ValidatorGuess(DateTime::class, [
            'format' => $this->inputDateFormat ?? $this->outputDateFormat,
        ]));

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
