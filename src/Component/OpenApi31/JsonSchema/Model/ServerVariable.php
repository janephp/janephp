<?php

namespace Jane\Component\OpenApi31\JsonSchema\Model;

class ServerVariable
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
     * @var list<string>|null
     */
    protected $enum;
    /**
     * @var string|null
     */
    protected $default;
    /**
     * @var string|null
     */
    protected $description;

    /**
     * @return list<string>|null
     */
    public function getEnum(): ?array
    {
        return $this->enum;
    }

    /**
     * @param list<string>|null $enum
     */
    public function setEnum(?array $enum): self
    {
        $this->initialized['enum'] = true;
        $this->enum = $enum;

        return $this;
    }

    public function getDefault(): ?string
    {
        return $this->default;
    }

    public function setDefault(?string $default): self
    {
        $this->initialized['default'] = true;
        $this->default = $default;

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
