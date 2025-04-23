<?php

namespace Jane\Component\JsonSchema\Guesser\JsonSchema;

use Jane\Component\JsonSchema\Guesser\Guess\Type;
use Jane\Component\JsonSchema\Guesser\GuesserInterface;
use Jane\Component\JsonSchema\Guesser\TypeGuesserInterface;
use Jane\Component\JsonSchema\JsonSchema\Model\JsonSchema;
use Jane\Component\JsonSchema\Registry\Registry;

class SimpleTypeGuesser implements GuesserInterface, TypeGuesserInterface
{
    /** @var array<string> */
    protected array $typesSupported = [
        'boolean',
        'integer',
        'number',
        'string',
        'null',
    ];

    /** @var array<string, string> */
    protected array $phpTypesMapping = [
        'boolean' => 'bool',
        'integer' => 'int',
        'number' => 'float',
        'string' => 'string',
        'null' => 'null',
    ];

    /** @var array<string, array<string>> */
    protected array $excludeFormat = [
        'string' => [
            'date-time',
        ],
    ];

    public function supportObject($object): bool
    {
        $class = $this->getSchemaClass();

        return ($object instanceof $class)
            && \in_array($object->getType(), $this->typesSupported)
            && (
                !\in_array($object->getType(), $this->excludeFormat)
                || !\in_array($object->getFormat(), $this->excludeFormat[$object->getType()])
            )
        ;
    }

    protected function getSchemaClass(): string
    {
        return JsonSchema::class;
    }

    public function guessType($object, string $name, string $reference, Registry $registry): Type
    {
        return new Type($object, $this->phpTypesMapping[$object->getType()]);
    }
}
