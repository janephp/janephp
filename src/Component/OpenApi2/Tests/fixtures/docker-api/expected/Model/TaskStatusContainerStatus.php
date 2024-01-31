<?php

namespace Docker\Api\Model;

class TaskStatusContainerStatus
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
    protected $containerID;
    /**
     * 
     *
     * @var int
     */
    protected $pID;
    /**
     * 
     *
     * @var int
     */
    protected $exitCode;
    /**
     * 
     *
     * @return string
     */
    public function getContainerID() : string
    {
        return $this->containerID;
    }
    /**
     * 
     *
     * @param string $containerID
     *
     * @return self
     */
    public function setContainerID(string $containerID) : self
    {
        $this->initialized['containerID'] = true;
        $this->containerID = $containerID;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getPID() : int
    {
        return $this->pID;
    }
    /**
     * 
     *
     * @param int $pID
     *
     * @return self
     */
    public function setPID(int $pID) : self
    {
        $this->initialized['pID'] = true;
        $this->pID = $pID;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getExitCode() : int
    {
        return $this->exitCode;
    }
    /**
     * 
     *
     * @param int $exitCode
     *
     * @return self
     */
    public function setExitCode(int $exitCode) : self
    {
        $this->initialized['exitCode'] = true;
        $this->exitCode = $exitCode;
        return $this;
    }
}