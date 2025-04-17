<?php

namespace Jane\Component\OpenApiCommon\Guesser\Guess;

class ParentClass extends ClassGuess
{
    protected $discriminator;

    protected $childEntries;

    public function __construct(ClassGuess $classGuess, string $discriminator, array $childEntries = [])
    {
        parent::__construct($classGuess->getObject(), $classGuess->getReference(), $classGuess->getName(), $classGuess->getExtensionsObject());
        $this->setParentClass($classGuess->getParentClass());
        $this->setProperties($classGuess->getProperties());
        $this->setExtensionsType($classGuess->getExtensionsType());
        $this->setConstraints($classGuess->getConstraints());

        $this->discriminator = $discriminator;
        $this->childEntries = $childEntries;
    }

    public function setDiscriminator(string $discriminator): self
    {
        $this->discriminator = $discriminator;

        return $this;
    }

    public function getDiscriminator(): string
    {
        return $this->discriminator;
    }

    public function addChildEntry(string $className, string $reference, ?string $discriminatorValue = null): self
    {
        $this->childEntries[$discriminatorValue ?? $className] = [$className, $reference];

        return $this;
    }

    public function getChildReferences(): array
    {
        return array_column($this->childEntries, 1);
    }

    /**
     * @return string[]
     */
    public function getChildEntryKeys(): array
    {
        return array_keys($this->childEntries);
    }

    public function getChildEntryClassNameByKey(string $key): ?string
    {
        if (!\array_key_exists($key, $this->childEntries)) {
            return null;
        }

        return $this->childEntries[$key][0];
    }
}
