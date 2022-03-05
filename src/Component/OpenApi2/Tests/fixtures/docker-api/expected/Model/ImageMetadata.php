<?php

namespace Docker\Api\Model;

class ImageMetadata
{
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
        $this->lastTagTime = $lastTagTime;
        return $this;
    }
}