<?php

namespace Jane\JsonSchema\Guesser\Guess;

class Property
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var Type
     */
    private $type;

    /**
     * @var string
     */
    private $reference;

    /**
     * @var mixed
     */
    private $object;

    /**
     * @var bool
     */
    private $nullable;

    /**
     * @var string
     */
    private $description;

    public function __construct($object, string $name, string $reference, bool $nullable = false, Type $type = null, string $description = null)
    {
        $this->name = $name;
        $this->object = $object;
        $this->reference = $reference;
        $this->nullable = $nullable;
        $this->type = $type;
        $this->description = $description;
    }

    public function getObject()
    {
        return $this->object;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getReference(): string
    {
        return $this->reference;
    }

    public function isNullable(): bool
    {
        return $this->nullable;
    }

    public function getType(): Type
    {
        return $this->type;
    }

    public function setType(Type $type): void
    {
        $this->type = $type;
    }

    public function getDescription(): string
    {
        return (string) $this->description;
    }
}
