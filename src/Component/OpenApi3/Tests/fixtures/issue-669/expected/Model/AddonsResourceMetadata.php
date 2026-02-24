<?php

namespace Jane\Generated\DigitalOcean\Model;

class AddonsResourceMetadata extends \ArrayObject
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
     * The name of the metadata item to be set.
     *
     * @var string
     */
    protected $name;
    /**
     * The value to be set for the metadata item, which can be a string or boolean.
     *
     * @var mixed
     */
    protected $value;
    /**
     * The name of the metadata item to be set.
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * The name of the metadata item to be set.
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
    /**
     * The value to be set for the metadata item, which can be a string or boolean.
     *
     * @return mixed
     */
    public function getValue()
    {
        return $this->value;
    }
    /**
     * The value to be set for the metadata item, which can be a string or boolean.
     *
     * @param mixed $value
     *
     * @return self
     */
    public function setValue($value): self
    {
        $this->initialized['value'] = true;
        $this->value = $value;
        return $this;
    }
}