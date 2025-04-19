<?php

namespace Jane\Component\JsonSchema\Guesser\Guess;

class ClassGuess
{
    use ValidatorGuessTrait;

    /** @var array<Property> */
    private array $properties = [];
    /** @var array<string> */
    private array $required = [];
    /** @var array<Type> */
    private array $extensionsType = [];
    private array $constraints = [];

    /**
     * @param object $object Object link to the generation
     * @param string $name   Name of the class
     */
    public function __construct(
        private readonly object $object,
        private readonly string $reference,
        private readonly string $name,
        private readonly array $extensionsObject = [],
        private readonly bool $deprecated = false,
    ) {
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

    /**
     * @return Property[]
     */
    public function getLocalProperties(): array
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
