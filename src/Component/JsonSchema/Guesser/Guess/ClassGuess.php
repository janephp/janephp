<?php

namespace Jane\Component\JsonSchema\Guesser\Guess;

class ClassGuess
{
    /**
     * @var string Name of the class
     */
    private $name;

    /**
     * @var object Object link to the generation
     */
    private $object;

    /**
     * @var Property[]
     */
    private $properties = [];

    private $reference;

    private $extensionsObject;

    /** @var Type[] */
    private $extensionsType = [];

    private $constraints = [];

    /** @var bool */
    private $deprecated;

    public function __construct(object $object, string $reference, string $name, array $extensionsObject = [], bool $deprecated = false)
    {
        $this->name = $name;
        $this->object = $object;
        $this->reference = $reference;
        $this->extensionsObject = $extensionsObject;
        $this->deprecated = $deprecated;
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

    /**
     * @return Property[]
     */
    public function getProperties(): array
    {
        return $this->properties;
    }

    public function setProperties(array $properties): void
    {
        $this->properties = $properties;
    }

    /**
     * @return Type[]
     */
    public function getExtensionsType(): array
    {
        return $this->extensionsType;
    }

    /**
     * @param Type[] $extensionsType
     */
    public function setExtensionsType(array $extensionsType): void
    {
        $this->extensionsType = $extensionsType;
    }

    public function getExtensionsObject(): array
    {
        return $this->extensionsObject;
    }

    public function getConstraints(): array
    {
        return $this->constraints;
    }

    public function setConstraints($constraints): void
    {
        $this->constraints = $constraints;
    }

    public function isDeprecated(): bool
    {
        return $this->deprecated;
    }
}
