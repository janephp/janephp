<?php

namespace Jane\Component\JsonSchema\Guesser\JsonSchema;

use Jane\Component\JsonSchema\Guesser\Guess\DateType;
use Jane\Component\JsonSchema\Guesser\Guess\Type;
use Jane\Component\JsonSchema\Guesser\GuesserInterface;
use Jane\Component\JsonSchema\Guesser\TypeGuesserInterface;
use Jane\Component\JsonSchema\JsonSchema\Model\JsonSchema;
use Jane\Component\JsonSchema\Registry\Registry;

class DateGuesser implements GuesserInterface, TypeGuesserInterface
{
    /**
     * @param string    $dateFormat      Format of date to use
     * @param bool|null $preferInterface indicator whether to use DateTime or DateTimeInterface as type hint
     */
    public function __construct(
        private string $dateFormat = 'Y-m-d',
        private ?bool $preferInterface = null,
    ) {
    }

    public function supportObject($object): bool
    {
        $class = $this->getSchemaClass();

        return ($object instanceof $class) && 'string' === $object->getType() && 'date' === $object->getFormat();
    }

    public function guessType($object, string $name, string $reference, Registry $registry): Type
    {
        return new DateType($object, $this->dateFormat, $this->preferInterface);
    }

    protected function getSchemaClass(): string
    {
        return JsonSchema::class;
    }
}
