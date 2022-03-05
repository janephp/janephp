<?php

namespace Docker\Api\Model;

class ResourceObject
{
    /**
     * 
     *
     * @var int
     */
    protected $nanoCPUs;
    /**
     * 
     *
     * @var int
     */
    protected $memoryBytes;
    /**
    * User-defined resources can be either Integer resources (e.g, `SSD=3`) or
    String resources (e.g, `GPU=UUID1`).
    
    *
    * @var GenericResourcesItem[]
    */
    protected $genericResources;
    /**
     * 
     *
     * @return int
     */
    public function getNanoCPUs() : int
    {
        return $this->nanoCPUs;
    }
    /**
     * 
     *
     * @param int $nanoCPUs
     *
     * @return self
     */
    public function setNanoCPUs(int $nanoCPUs) : self
    {
        $this->nanoCPUs = $nanoCPUs;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getMemoryBytes() : int
    {
        return $this->memoryBytes;
    }
    /**
     * 
     *
     * @param int $memoryBytes
     *
     * @return self
     */
    public function setMemoryBytes(int $memoryBytes) : self
    {
        $this->memoryBytes = $memoryBytes;
        return $this;
    }
    /**
    * User-defined resources can be either Integer resources (e.g, `SSD=3`) or
    String resources (e.g, `GPU=UUID1`).
    
    *
    * @return GenericResourcesItem[]
    */
    public function getGenericResources() : array
    {
        return $this->genericResources;
    }
    /**
    * User-defined resources can be either Integer resources (e.g, `SSD=3`) or
    String resources (e.g, `GPU=UUID1`).
    
    *
    * @param GenericResourcesItem[] $genericResources
    *
    * @return self
    */
    public function setGenericResources(array $genericResources) : self
    {
        $this->genericResources = $genericResources;
        return $this;
    }
}