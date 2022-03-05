<?php

namespace Docker\Api\Model;

class ThrottleDevice
{
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
        $this->rate = $rate;
        return $this;
    }
}