<?php

namespace Jane\Component\OpenApi31\JsonSchema\Model;

class SecurityScheme
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
     * @var mixed|null
     */
    protected $type;
    /**
     * @var string|null
     */
    protected $description;

    public function getType()
    {
        return $this->type;
    }

    public function setType($type): self
    {
        $this->initialized['type'] = true;
        $this->type = $type;

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
