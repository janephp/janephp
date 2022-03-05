<?php

namespace Docker\Api\Model;

class ExecIdJsonGetResponse200
{
    /**
     * 
     *
     * @var bool
     */
    protected $canRemove;
    /**
     * 
     *
     * @var string
     */
    protected $detachKeys;
    /**
     * 
     *
     * @var string
     */
    protected $iD;
    /**
     * 
     *
     * @var bool
     */
    protected $running;
    /**
     * 
     *
     * @var int
     */
    protected $exitCode;
    /**
     * 
     *
     * @var ProcessConfig
     */
    protected $processConfig;
    /**
     * 
     *
     * @var bool
     */
    protected $openStdin;
    /**
     * 
     *
     * @var bool
     */
    protected $openStderr;
    /**
     * 
     *
     * @var bool
     */
    protected $openStdout;
    /**
     * 
     *
     * @var string
     */
    protected $containerID;
    /**
     * The system process ID for the exec process.
     *
     * @var int
     */
    protected $pid;
    /**
     * 
     *
     * @return bool
     */
    public function getCanRemove() : bool
    {
        return $this->canRemove;
    }
    /**
     * 
     *
     * @param bool $canRemove
     *
     * @return self
     */
    public function setCanRemove(bool $canRemove) : self
    {
        $this->canRemove = $canRemove;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getDetachKeys() : string
    {
        return $this->detachKeys;
    }
    /**
     * 
     *
     * @param string $detachKeys
     *
     * @return self
     */
    public function setDetachKeys(string $detachKeys) : self
    {
        $this->detachKeys = $detachKeys;
        return $this;
    }
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
    /**
     * 
     *
     * @return bool
     */
    public function getRunning() : bool
    {
        return $this->running;
    }
    /**
     * 
     *
     * @param bool $running
     *
     * @return self
     */
    public function setRunning(bool $running) : self
    {
        $this->running = $running;
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
        $this->exitCode = $exitCode;
        return $this;
    }
    /**
     * 
     *
     * @return ProcessConfig
     */
    public function getProcessConfig() : ProcessConfig
    {
        return $this->processConfig;
    }
    /**
     * 
     *
     * @param ProcessConfig $processConfig
     *
     * @return self
     */
    public function setProcessConfig(ProcessConfig $processConfig) : self
    {
        $this->processConfig = $processConfig;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getOpenStdin() : bool
    {
        return $this->openStdin;
    }
    /**
     * 
     *
     * @param bool $openStdin
     *
     * @return self
     */
    public function setOpenStdin(bool $openStdin) : self
    {
        $this->openStdin = $openStdin;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getOpenStderr() : bool
    {
        return $this->openStderr;
    }
    /**
     * 
     *
     * @param bool $openStderr
     *
     * @return self
     */
    public function setOpenStderr(bool $openStderr) : self
    {
        $this->openStderr = $openStderr;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getOpenStdout() : bool
    {
        return $this->openStdout;
    }
    /**
     * 
     *
     * @param bool $openStdout
     *
     * @return self
     */
    public function setOpenStdout(bool $openStdout) : self
    {
        $this->openStdout = $openStdout;
        return $this;
    }
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
        $this->containerID = $containerID;
        return $this;
    }
    /**
     * The system process ID for the exec process.
     *
     * @return int
     */
    public function getPid() : int
    {
        return $this->pid;
    }
    /**
     * The system process ID for the exec process.
     *
     * @param int $pid
     *
     * @return self
     */
    public function setPid(int $pid) : self
    {
        $this->pid = $pid;
        return $this;
    }
}