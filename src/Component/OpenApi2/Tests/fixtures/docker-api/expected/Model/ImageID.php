<?php

namespace Docker\Api\Model;

class ImageID
{
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
        $this->iD = $iD;
        return $this;
    }
}