<?php

namespace Jane\Generated\DigitalOcean\Model;

class ApiCreateModelAPIKeyInputPublic extends \ArrayObject
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
     * A human friendly name to identify the key
     *
     * @var string
     */
    protected $name;
    /**
     * A human friendly name to identify the key
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * A human friendly name to identify the key
     *
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;
        return $this;
    }
}