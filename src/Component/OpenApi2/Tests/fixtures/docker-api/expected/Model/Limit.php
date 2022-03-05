<?php

namespace Docker\Api\Model;

class Limit
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
        $this->pids = $pids;
        return $this;
    }
}