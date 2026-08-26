<?php

namespace Jane\Component\OpenApi31\JsonSchema\Model;

/**
 * Discriminator Object of the OpenAPI vocabulary, supporting inheritance and
 * polymorphism on top of the JSON Schema 2020-12 document model.
 */
class Discriminator
{
    /**
     * @var array
     */
    protected $initialized = [];

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }
    /**
     * @var string|null
     */
    protected $propertyName;
    /**
     * @var array<string, string>|null
     */
    protected $mapping;

    public function getPropertyName(): ?string
    {
        return $this->propertyName;
    }

    public function setPropertyName(?string $propertyName): self
    {
        $this->initialized['propertyName'] = true;
        $this->propertyName = $propertyName;

        return $this;
    }

    public function getMapping(): ?iterable
    {
        return $this->mapping;
    }

    public function setMapping(?iterable $mapping): self
    {
        $this->initialized['mapping'] = true;
        $this->mapping = $mapping;

        return $this;
    }
}
