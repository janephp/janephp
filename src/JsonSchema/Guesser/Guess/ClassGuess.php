<?php

namespace Jane\JsonSchema\Guesser\Guess;

class ClassGuess
{
    /**
     * @var string Name of the class
     */
    private $name;

    /**
     * @var mixed Object link to the generation
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

    public function __construct($object, string $reference, string $name, array $extensionsObject = [])
    {
        $this->name = $name;
        $this->object = $object;
        $this->reference = $reference;
        $this->extensionsObject = $extensionsObject;
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

    /**
     * @return array
     */
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
}
