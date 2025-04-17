<?php

namespace Jane\Component\JsonSchema\Guesser\Guess;

class Property
{
    use ValidatorGuessTrait;

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

    private $object;

    /**
     * @var bool
     */
    private $nullable;

    /**
     * @var bool
     */
    private $required;

    /**
     * @var string
     */
    private $description;

    private $default;

    /**
     * @var string Used for generate class properties
     */
    private $phpName;

    /** @var bool */
    private $readOnly;

    /** @var bool */
    private $deprecated = false;

    /**
     * @var string Used for generate getter/setter name
     */
    private $accessorName;

    public function __construct(object $object, string $name, string $reference, bool $nullable = false, bool $required = false, ?Type $type = null, ?string $description = null, mixed $default = null, ?bool $readOnly = null)
    {
        $this->name = $name;
        $this->object = $object;
        $this->reference = $reference;
        $this->nullable = $nullable;
        $this->required = $required;
        $this->type = $type;
        $this->description = $description;
        $this->default = $default;
        $this->readOnly = $readOnly ?? false;
    }

    public function setPhpName(string $name): void
    {
        $this->phpName = $name;
    }

    public function getPhpName(): string
    {
        return $this->phpName;
    }

    public function setAccessorName(string $name): void
    {
        $this->accessorName = $name;
    }

    public function getAccessorName(): string
    {
        return $this->accessorName;
    }

    public function getObject(): object
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

    public function isRequired(): bool
    {
        return $this->required;
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
