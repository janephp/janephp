<?php

namespace Jane\Component\OpenApi31\JsonSchema\Model;

class Example
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
    protected $summary;
    /**
     * @var string|null
     */
    protected $description;
    /**
     * @var string|null
     */
    protected $externalValue;

    public function getSummary(): ?string
    {
        return $this->summary;
    }

    public function setSummary(?string $summary): self
    {
        $this->initialized['summary'] = true;
        $this->summary = $summary;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->initialized['description'] = true;
        $this->description = $description;

        return $this;
    }

    public function getExternalValue(): ?string
    {
        return $this->externalValue;
    }

    public function setExternalValue(?string $externalValue): self
    {
        $this->initialized['externalValue'] = true;
        $this->externalValue = $externalValue;

        return $this;
    }
}
