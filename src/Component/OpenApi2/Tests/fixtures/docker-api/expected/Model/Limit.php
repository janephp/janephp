<?php

namespace Docker\Api\Model;

class Limit
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
     * Limits the maximum number of PIDs in the container. Set `0` for unlimited.
     *
     * @var int
     */
    protected $pids = 0;
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
        $this->initialized['nanoCPUs'] = true;
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
        $this->initialized['memoryBytes'] = true;
        $this->memoryBytes = $memoryBytes;
        return $this;
    }
    /**
     * Limits the maximum number of PIDs in the container. Set `0` for unlimited.
     *
     * @return int
     */
    public function getPids() : int
    {
        return $this->pids;
    }
    /**
     * Limits the maximum number of PIDs in the container. Set `0` for unlimited.
     *
     * @param int $pids
     *
     * @return self
     */
    public function setPids(int $pids) : self
    {
        $this->initialized['pids'] = true;
        $this->pids = $pids;
        return $this;
    }
}