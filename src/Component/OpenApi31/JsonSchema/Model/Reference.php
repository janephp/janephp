<?php

namespace Jane\Component\OpenApi31\JsonSchema\Model;

class Reference
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
    protected $dollarRef;
    /**
     * @var string|null
     */
    protected $summary;
    /**
     * @var string|null
     */
    protected $description;

    public function getDollarRef(): ?string
    {
        return $this->dollarRef;
    }

    public function setDollarRef(?string $dollarRef): self
    {
        $this->initialized['dollarRef'] = true;
        $this->dollarRef = $dollarRef;

        return $this;
    }

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
}
