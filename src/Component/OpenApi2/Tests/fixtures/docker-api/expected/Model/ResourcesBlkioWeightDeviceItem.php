<?php

namespace Docker\Api\Model;

class ResourcesBlkioWeightDeviceItem
{
    /**
     * 
     *
     * @var string
     */
    protected $path;
    /**
     * 
     *
     * @var int
     */
    protected $weight;
    /**
     * 
     *
     * @return string
     */
    public function getPath() : string
    {
        return $this->path;
    }
    /**
     * 
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
     * 
     *
     * @return int
     */
    public function getWeight() : int
    {
        return $this->weight;
    }
    /**
     * 
     *
     * @param int $weight
     *
     * @return self
     */
    public function setWeight(int $weight) : self
    {
        $this->weight = $weight;
        return $this;
    }
}