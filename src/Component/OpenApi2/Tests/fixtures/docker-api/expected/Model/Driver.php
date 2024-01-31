<?php

namespace Docker\Api\Model;

class Driver
{
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property) : bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * Name of the driver.
     *
     * @var string
     */
    protected $name;
    /**
     * Key/value map of driver-specific options.
     *
     * @var array<string, string>
     */
    protected $options;
    /**
     * Name of the driver.
     *
     * @return string
     */
    public function getName() : string
    {
        return $this->name;
    }
    /**
     * Name of the driver.
     *
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name) : self
    {
        $this->initialized['name'] = true;
        $this->name = $name;
        return $this;
    }
    /**
     * Key/value map of driver-specific options.
     *
     * @return array<string, string>
     */
    public function getOptions() : iterable
    {
        return $this->options;
    }
    /**
     * Key/value map of driver-specific options.
     *
     * @param array<string, string> $options
     *
     * @return self
     */
    public function setOptions(iterable $options) : self
    {
        $this->initialized['options'] = true;
        $this->options = $options;
        return $this;
    }
}