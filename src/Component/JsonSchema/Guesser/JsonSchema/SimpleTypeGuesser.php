<?php

namespace Jane\Component\JsonSchema\Guesser\JsonSchema;

use Jane\Component\JsonSchema\Guesser\Guess\Type;
use Jane\Component\JsonSchema\Guesser\GuesserInterface;
use Jane\Component\JsonSchema\Guesser\TypeGuesserInterface;
use Jane\Component\JsonSchema\JsonSchema\Model\JsonSchema;
use Jane\Component\JsonSchema\Registry\Registry;

class SimpleTypeGuesser implements GuesserInterface, TypeGuesserInterface
{
    protected $typesSupported = [
        'boolean',
        'integer',
        'number',
        'string',
        'null',
    ];

    protected $phpTypesMapping = [
        'boolean' => 'bool',
        'integer' => 'int',
        'number' => 'float',
        'string' => 'string',
        'null' => 'null',
    ];

    protected $excludeFormat = [
        'string' => [
            'date-time',
        ],
    ];

    /**
     * {@inheritdoc}
     */
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

    /**
     * {@inheritdoc}
     */
    public function guessType($object, string $name, string $reference, Registry $registry): Type
    {
        return new Type($object, $this->phpTypesMapping[$object->getType()]);
    }
}
