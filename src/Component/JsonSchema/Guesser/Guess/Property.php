<?php

namespace Jane\Component\JsonSchema\Guesser\Guess;

class Property
{
    use ValidatorGuessTrait;

    /** @var string Used for generate class properties */
    private string $phpName;
    private bool $readOnly;
    private bool $deprecated = false;
    /** @var string Used for generate getter/setter name */
    private string $accessorName;

    public function __construct(
        private readonly object $object,
        private readonly string $name,
        private readonly string $reference,
        private readonly bool $nullable = false,
        private readonly bool $required = false,
        private ?Type $type = null,
        private readonly ?string $description = null,
        private readonly mixed $default = null,
        ?bool $readOnly = null,
    ) {
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
