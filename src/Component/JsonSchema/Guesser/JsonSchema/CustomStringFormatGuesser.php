<?php

declare(strict_types=1);

namespace Jane\Component\JsonSchema\Guesser\JsonSchema;

use Jane\Component\JsonSchema\Guesser\Guess\CustomObjectType;
use Jane\Component\JsonSchema\Guesser\Guess\Type;
use Jane\Component\JsonSchema\Guesser\GuesserInterface;
use Jane\Component\JsonSchema\Guesser\TypeGuesserInterface;
use Jane\Component\JsonSchema\JsonSchema\Model\JsonSchema;
use Jane\Component\JsonSchema\Registry\Registry;

use function array_key_exists;

class CustomStringFormatGuesser implements GuesserInterface, TypeGuesserInterface
{
    /**
     * @var array
     */
    private $mapping;

    public function __construct(array $mapping)
    {
        $this->mapping = $mapping;
    }

    public function supportObject($object): bool
    {
        $class = $this->getSchemaClass();

        return ($object instanceof $class) && 'string' === $object->getType() && array_key_exists(
                $object->getFormat(),
                $this->mapping
            );
    }

    public function guessType($object, string $name, string $reference, Registry $registry): Type
    {
        return new CustomObjectType($object, $this->mapping[$object->getFormat()], []);
    }

    protected function getSchemaClass(): string
    {
        return JsonSchema::class;
    }
}
