<?php

namespace Docker\Api\Model;

class MountPoint
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
     * 
     *
     * @var string
     */
    protected $type;
    /**
     * 
     *
     * @var string
     */
    protected $name;
    /**
     * 
     *
     * @var string
     */
    protected $source;
    /**
     * 
     *
     * @var string
     */
    protected $destination;
    /**
     * 
     *
     * @var string
     */
    protected $driver;
    /**
     * 
     *
     * @var string
     */
    protected $mode;
    /**
     * 
     *
     * @var bool
     */
    protected $rW;
    /**
     * 
     *
     * @var string
     */
    protected $propagation;
    /**
     * 
     *
     * @return string
     */
    public function getType() : string
    {
        return $this->type;
    }
    /**
     * 
     *
     * @param string $type
     *
     * @return self
     */
    public function setType(string $type) : self
    {
        $this->initialized['type'] = true;
        $this->type = $type;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getName() : string
    {
        return $this->name;
    }
    /**
     * 
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
     * 
     *
     * @return string
     */
    public function getSource() : string
    {
        return $this->source;
    }
    /**
     * 
     *
     * @param string $source
     *
     * @return self
     */
    public function setSource(string $source) : self
    {
        $this->initialized['source'] = true;
        $this->source = $source;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getDestination() : string
    {
        return $this->destination;
    }
    /**
     * 
     *
     * @param string $destination
     *
     * @return self
     */
    public function setDestination(string $destination) : self
    {
        $this->initialized['destination'] = true;
        $this->destination = $destination;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getDriver() : string
    {
        return $this->driver;
    }
    /**
     * 
     *
     * @param string $driver
     *
     * @return self
     */
    public function setDriver(string $driver) : self
    {
        $this->initialized['driver'] = true;
        $this->driver = $driver;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getMode() : string
    {
        return $this->mode;
    }
    /**
     * 
     *
     * @param string $mode
     *
     * @return self
     */
    public function setMode(string $mode) : self
    {
        $this->initialized['mode'] = true;
        $this->mode = $mode;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getRW() : bool
    {
        return $this->rW;
    }
    /**
     * 
     *
     * @param bool $rW
     *
     * @return self
     */
    public function setRW(bool $rW) : self
    {
        $this->initialized['rW'] = true;
        $this->rW = $rW;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getPropagation() : string
    {
        return $this->propagation;
    }
    /**
     * 
     *
     * @param string $propagation
     *
     * @return self
     */
    public function setPropagation(string $propagation) : self
    {
        $this->initialized['propagation'] = true;
        $this->propagation = $propagation;
        return $this;
    }
}