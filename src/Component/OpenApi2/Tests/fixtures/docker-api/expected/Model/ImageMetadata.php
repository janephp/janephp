<?php

namespace Docker\Api\Model;

class ImageMetadata
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
    protected $lastTagTime;
    /**
     * 
     *
     * @return string
     */
    public function getLastTagTime() : string
    {
        return $this->lastTagTime;
    }
    /**
     * 
     *
     * @param string $lastTagTime
     *
     * @return self
     */
    public function setLastTagTime(string $lastTagTime) : self
    {
        $this->initialized['lastTagTime'] = true;
        $this->lastTagTime = $lastTagTime;
        return $this;
    }
}