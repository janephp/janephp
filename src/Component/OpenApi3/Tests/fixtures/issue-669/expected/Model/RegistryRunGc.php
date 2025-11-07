<?php

namespace Jane\Generated\DigitalOcean\Model;

class RegistryRunGc extends \ArrayObject
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
     * Type of the garbage collection to run against this registry
     *
     * @var string
     */
    protected $type;
    /**
     * Type of the garbage collection to run against this registry
     *
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }
    /**
     * Type of the garbage collection to run against this registry
     *
     * @param string $type
     *
     * @return self
     */
    public function setType(string $type): self
    {
        $this->initialized['type'] = true;
        $this->type = $type;
        return $this;
    }
}