<?php

namespace Jane\JsonSchema\Guesser\JsonSchema;

use Jane\JsonSchema\Guesser\Guess\DateTimeType;
use Jane\JsonSchema\Guesser\Guess\Type;
use Jane\JsonSchema\Guesser\GuesserInterface;
use Jane\JsonSchema\Guesser\TypeGuesserInterface;
use Jane\JsonSchema\Model\JsonSchema;
use Jane\JsonSchema\Registry;

class DateTimeGuesser implements GuesserInterface, TypeGuesserInterface
{
    /** @var string Format of date to use */
    private $dateFormat;

    public function __construct(string $dateFormat = \DateTime::RFC3339)
    {
        $this->dateFormat = $dateFormat;
    }

    /**
     * {@inheritdoc}
     */
    public function supportObject($object): bool
    {
        $class = $this->getSchemaClass();

        return ($object instanceof $class) && 'string' === $object->getType() && 'date-time' === $object->getFormat();
    }

    /**
     * {@inheritdoc}
     */
    public function guessType($object, string $name, string $reference, Registry $registry): Type
    {
        return new DateTimeType($object, $this->dateFormat);
    }

    protected function getSchemaClass(): string
    {
        return JsonSchema::class;
    }
}
