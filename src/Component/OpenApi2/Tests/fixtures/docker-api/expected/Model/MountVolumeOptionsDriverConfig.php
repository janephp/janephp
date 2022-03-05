<?php

namespace Docker\Api\Model;

class MountVolumeOptionsDriverConfig
{
    /**
     * Name of the driver to use to create the volume.
     *
     * @var string
     */
    protected $name;
    /**
     * key/value map of driver specific options.
     *
     * @var string[]
     */
    protected $options;
    /**
     * Name of the driver to use to create the volume.
     *
     * @return string
     */
    public function getName() : string
    {
        return $this->name;
    }
    /**
     * Name of the driver to use to create the volume.
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
     * key/value map of driver specific options.
     *
     * @return string[]
     */
    public function getOptions() : iterable
    {
        return $this->options;
    }
    /**
     * key/value map of driver specific options.
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