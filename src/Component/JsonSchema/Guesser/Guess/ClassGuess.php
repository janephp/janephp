<?php

namespace Jane\Component\JsonSchema\Guesser\Guess;

class ClassGuess
{
    use ValidatorGuessTrait;

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

    private $required = [];

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

    public function getProperty(string $name): ?Property
    {
        foreach ($this->properties as $property) {
            if ($name === $property->getName()) {
                return $property;
            }
        }

        return null;
    }

    public function isRequired(string $propertyName): bool
    {
        return \in_array($propertyName, $this->required);
    }

    /**
     * @param string[] $required
     */
    public function setRequired(array $required): void
    {
        $this->required = $required;
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

    public function hasValidatorGuesses(): bool
    {
        if (\count($this->getValidatorGuesses()) > 0) {
            return true;
        }

        foreach ($this->properties as $property) {
            if (\count($property->getValidatorGuesses()) > 0) {
                return true;
            }
        }

        return false;
    }

    public function getPropertyValidatorGuesses(): array
    {
        $validatorGuesses = [];
        foreach ($this->properties as $property) {
            $validatorGuesses[$property->getName()] = $property->getValidatorGuesses();
        }

        return $validatorGuesses;
    }
}
