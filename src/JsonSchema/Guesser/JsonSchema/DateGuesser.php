<?php

namespace Jane\JsonSchema\Guesser\JsonSchema;

use Jane\JsonSchema\Guesser\Guess\DateType;
use Jane\JsonSchema\Guesser\Guess\Type;
use Jane\JsonSchema\Guesser\GuesserInterface;
use Jane\JsonSchema\Guesser\TypeGuesserInterface;
use Jane\JsonSchema\JsonSchema\Model\JsonSchema;
use Jane\JsonSchema\Registry\Registry;

class DateGuesser implements GuesserInterface, TypeGuesserInterface
{
    /** @var string Format of date to use */
    private $dateFormat;

    /**
     * Indicator whether to use DateTime or DateTimeInterface as type hint.
     *
     * @var bool
     */
    private $preferInterface;

    public function __construct(string $dateFormat = 'Y-m-d', ?bool $preferInterface = null)
    {
        $this->dateFormat = $dateFormat;
        $this->preferInterface = $preferInterface;
    }

    /**
     * {@inheritdoc}
     */
    public function supportObject($object): bool
    {
        $class = $this->getSchemaClass();

        return ($object instanceof $class) && 'string' === $object->getType() && 'date' === $object->getFormat();
    }

    /**
     * {@inheritdoc}
     */
    public function guessType($object, string $name, string $reference, Registry $registry): Type
    {
        return new DateType($object, $this->dateFormat, $this->preferInterface);
    }

    protected function getSchemaClass(): string
    {
        return JsonSchema::class;
    }
}
