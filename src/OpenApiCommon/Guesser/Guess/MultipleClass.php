<?php

namespace Jane\OpenApiCommon\Guesser\Guess;

class MultipleClass extends ClassGuess
{
    protected $discriminator;

    protected $references;

    public function __construct(ClassGuess $classGuess, string $discriminator, array $references = [])
    {
        parent::__construct($classGuess->getObject(), $classGuess->getReference(), $classGuess->getName(), $classGuess->getExtensionsObject());
        $this->setMultipleClass($classGuess->getMultipleClass());
        $this->setProperties($classGuess->getProperties());
        $this->setExtensionsType($classGuess->getExtensionsType());
        $this->setConstraints($classGuess->getConstraints());

        $this->discriminator = $discriminator;
        $this->references = $references;
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

    public function addReference(string $className, string $reference): self
    {
        $this->references[$className] = $reference;

        return $this;
    }

    /**
     * @return string[]
     */
    public function getReferences(): array
    {
        return $this->references;
    }
}
