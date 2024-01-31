<?php

namespace Docker\Api\Model;

class ThrottleDevice
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
     * Device path
     *
     * @var string
     */
    protected $path;
    /**
     * Rate
     *
     * @var int
     */
    protected $rate;
    /**
     * Device path
     *
     * @return string
     */
    public function getPath() : string
    {
        return $this->path;
    }
    /**
     * Device path
     *
     * @param string $path
     *
     * @return self
     */
    public function setPath(string $path) : self
    {
        $this->initialized['path'] = true;
        $this->path = $path;
        return $this;
    }
    /**
     * Rate
     *
     * @return int
     */
    public function getRate() : int
    {
        return $this->rate;
    }
    /**
     * Rate
     *
     * @param int $rate
     *
     * @return self
     */
    public function setRate(int $rate) : self
    {
        $this->initialized['rate'] = true;
        $this->rate = $rate;
        return $this;
    }
}