<?php

namespace Jane\Component\JsonSchema\Guesser\JsonSchema;

use Jane\Component\JsonSchema\Guesser\Guess\DateTimeType;
use Jane\Component\JsonSchema\Guesser\Guess\Type;
use Jane\Component\JsonSchema\Guesser\GuesserInterface;
use Jane\Component\JsonSchema\Guesser\TypeGuesserInterface;
use Jane\Component\JsonSchema\JsonSchema\Model\JsonSchema;
use Jane\Component\JsonSchema\Registry\Registry;

class DateTimeGuesser implements GuesserInterface, TypeGuesserInterface
{
    /**
     * @param string      $outputDateFormat Format of date to use when normalized
     * @param string|null $inputDateFormat  Format of date to use when denormalized
     */
    public function __construct(
        private readonly string $outputDateFormat = \DateTime::RFC3339,
        private readonly ?string $inputDateFormat = null,
        private readonly ?bool $preferInterface = null,
    ) {
    }

    public function supportObject($object): bool
    {
        $class = $this->getSchemaClass();

        if (!($object instanceof $class)) {
            return false;
        }

        return $this->supportsType($object->getType()) && 'date-time' === $object->getFormat();
    }

    private function supportsType(mixed $type): bool
    {
        if (\is_string($type)) {
            return 'string' === $type;
        }

        if (!\is_array($type)) {
            return false;
        }

        return ['string'] === array_values(array_diff($type, ['null']));
    }

    public function guessType($object, string $name, string $reference, Registry $registry): Type
    {
        return new DateTimeType($object, $this->outputDateFormat, $this->inputDateFormat, $this->preferInterface);
    }

    protected function getSchemaClass(): string
    {
        return JsonSchema::class;
    }
}
