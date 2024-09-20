<?php

namespace Jane\Component\JsonSchema\Tests\Expected\Model;

class Document
{
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * @var list<Attributes>|null
     */
    protected $attributes;
    /**
     * @return list<Attributes>|null
     */
    public function getAttributes(): ?array
    {
        return $this->attributes;
    }
    /**
     * @param list<Attributes>|null $attributes
     *
     * @return self
     */
    public function setAttributes(?array $attributes): self
    {
        $this->initialized['attributes'] = true;
        $this->attributes = $attributes;
        return $this;
    }
}