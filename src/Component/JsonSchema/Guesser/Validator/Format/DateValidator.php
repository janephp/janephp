<?php

namespace Jane\Component\JsonSchema\Guesser\Validator\Format;

use Jane\Component\JsonSchema\Guesser\Guess\ClassGuess;
use Jane\Component\JsonSchema\Guesser\Guess\Property;
use Jane\Component\JsonSchema\Guesser\Validator\ObjectCheckTrait;
use Jane\Component\JsonSchema\Guesser\Validator\ValidatorGuess;
use Jane\Component\JsonSchema\Guesser\Validator\ValidatorInterface;
use Jane\Component\JsonSchema\JsonSchema\Model\JsonSchema;
use Symfony\Component\Validator\Constraints\Date;
use Symfony\Component\Validator\Constraints\DateTime;
use Symfony\Component\Validator\Constraints\NotBlank;

class DateValidator implements ValidatorInterface
{
    use ObjectCheckTrait;

    /**
     * @param string $dateFormat Format of the date to validate against
     */
    public function __construct(
        private readonly string $dateFormat = 'Y-m-d',
    ) {
    }

    public function supports($object): bool
    {
        return $this->checkObject($object) && ((\is_array($object->type ?? null) ? \in_array('string', $object->type ?? null) : 'string' === ($object->type ?? null)) || null === ($object->type ?? null)) && 'date' === ($object->format ?? null);
    }

    /**
     * @param JsonSchema          $object
     * @param ClassGuess|Property $guess
     */
    public function guess($object, string $name, $guess): void
    {
        if ('Y-m-d' === $this->dateFormat) {
            $guess->addValidatorGuess(new ValidatorGuess(Date::class));
        } else {
            // Symfony Date constraint only supports Y-m-d, use the DateTime
            // constraint for custom full-date formats
            $guess->addValidatorGuess(new ValidatorGuess(DateTime::class, [
                'format' => $this->dateFormat,
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
