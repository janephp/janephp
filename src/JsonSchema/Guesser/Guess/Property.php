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

    /**
     * @var mixed
     */
    private $default;

    /**
     * @var string
     */
    private $phpName;

    /** @var bool */
    private $readOnly;

    /** @var bool */
    private $deprecated = false;

    public function __construct($object, string $name, string $reference, bool $nullable = false, Type $type = null, string $description = null, $default = null, ?bool $readOnly = null)
    {
        $this->name = $name;
        $this->object = $object;
        $this->reference = $reference;
        $this->nullable = $nullable;
        $this->type = $type;
        $this->description = $description;
        $this->default = $default;
        $this->readOnly = $readOnly ?? false;
    }

    public function setPhpName(string $name)
    {
        $this->phpName = $name;
    }

    public function getPhpName(): string
    {
        return $this->phpName;
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

    public function getDefault()
    {
        return $this->default;
    }

    public function isReadOnly(): bool
    {
        return $this->readOnly;
    }

    public function setDeprecated(bool $deprecated): void
    {
        $this->deprecated = $deprecated;
    }

    public function isDeprecated(): bool
    {
        return $this->deprecated;
    }
}
