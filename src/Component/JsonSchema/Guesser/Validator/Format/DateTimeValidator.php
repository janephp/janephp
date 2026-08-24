<?php

namespace Jane\Component\JsonSchema\Guesser\Validator\Format;

use Jane\Component\JsonSchema\Guesser\Guess\ClassGuess;
use Jane\Component\JsonSchema\Guesser\Guess\Property;
use Jane\Component\JsonSchema\Guesser\Validator\ObjectCheckTrait;
use Jane\Component\JsonSchema\Guesser\Validator\ValidatorGuess;
use Jane\Component\JsonSchema\Guesser\Validator\ValidatorInterface;
use Jane\Component\JsonSchema\JsonSchema\Model\JsonSchema;
use Symfony\Component\Validator\Constraints\DateTime;

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
        $guess->addValidatorGuess(new ValidatorGuess(DateTime::class, [
            'format' => $this->inputDateFormat ?? $this->outputDateFormat,
        ]));
    }
}
