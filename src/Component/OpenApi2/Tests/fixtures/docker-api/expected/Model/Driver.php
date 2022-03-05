<?php

namespace Docker\Api\Model;

class Driver
{
    /**
     * Name of the driver.
     *
     * @var string
     */
    protected $name;
    /**
     * Key/value map of driver-specific options.
     *
     * @var string[]
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
        $this->name = $name;
        return $this;
    }
    /**
     * Key/value map of driver-specific options.
     *
     * @return string[]
     */
    public function getOptions() : iterable
    {
        return $this->options;
    }
    /**
     * Key/value map of driver-specific options.
     *
     * @param string[] $options
     *
     * @return self
     */
    public function setOptions(iterable $options) : self
    {
        $this->options = $options;
        return $this;
    }
}