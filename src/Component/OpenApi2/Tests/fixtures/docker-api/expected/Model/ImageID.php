<?php

namespace Docker\Api\Model;

class ImageID
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
    protected $iD;
    /**
     * 
     *
     * @return string
     */
    public function getID() : string
    {
        return $this->iD;
    }
    /**
     * 
     *
     * @param string $iD
     *
     * @return self
     */
    public function setID(string $iD) : self
    {
        $this->initialized['iD'] = true;
        $this->iD = $iD;
        return $this;
    }
}