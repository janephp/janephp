<?php

namespace Docker\Api\Model;

class ContainerState
{
    /**
     * @var array
     */
    protected $initialized = array();
    public function isInitialized($property) : bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
    * String representation of the container state. Can be one of "created",
    "running", "paused", "restarting", "removing", "exited", or "dead".
    
    *
    * @var string
    */
    protected $status;
    /**
    * Whether this container is running.
    
    Note that a running container can be _paused_. The `Running` and `Paused`
    booleans are not mutually exclusive:
    
    When pausing a container (on Linux), the freezer cgroup is used to suspend
    all processes in the container. Freezing the process requires the process to
    be running. As a result, paused containers are both `Running` _and_ `Paused`.
    
    Use the `Status` field instead to determine if a container's state is "running".
    
    *
    * @var bool
    */
    protected $running;
    /**
     * Whether this container is paused.
     *
     * @var bool
     */
    protected $paused;
    /**
     * Whether this container is restarting.
     *
     * @var bool
     */
    protected $restarting;
    /**
     * Whether this container has been killed because it ran out of memory.
     *
     * @var bool
     */
    protected $oOMKilled;
    /**
     * 
     *
     * @var bool
     */
    protected $dead;
    /**
     * The process ID of this container
     *
     * @var int
     */
    protected $pid;
    /**
     * The last exit code of this container
     *
     * @var int
     */
    protected $exitCode;
    /**
     * 
     *
     * @var string
     */
    protected $error;
    /**
     * The time when this container was last started.
     *
     * @var string
     */
    protected $startedAt;
    /**
     * The time when this container last exited.
     *
     * @var string
     */
    protected $finishedAt;
    /**
     * Health stores information about the container's healthcheck results.
     *
     * @var Health
     */
    protected $health;
    /**
    * String representation of the container state. Can be one of "created",
    "running", "paused", "restarting", "removing", "exited", or "dead".
    
    *
    * @return string
    */
    public function getStatus() : string
    {
        return $this->status;
    }
    /**
    * String representation of the container state. Can be one of "created",
    "running", "paused", "restarting", "removing", "exited", or "dead".
    
    *
    * @param string $status
    *
    * @return self
    */
    public function setStatus(string $status) : self
    {
        $this->initialized['status'] = true;
        $this->status = $status;
        return $this;
    }
    /**
    * Whether this container is running.
    
    Note that a running container can be _paused_. The `Running` and `Paused`
    booleans are not mutually exclusive:
    
    When pausing a container (on Linux), the freezer cgroup is used to suspend
    all processes in the container. Freezing the process requires the process to
    be running. As a result, paused containers are both `Running` _and_ `Paused`.
    
    Use the `Status` field instead to determine if a container's state is "running".
    
    *
    * @return bool
    */
    public function getRunning() : bool
    {
        return $this->running;
    }
    /**
    * Whether this container is running.
    
    Note that a running container can be _paused_. The `Running` and `Paused`
    booleans are not mutually exclusive:
    
    When pausing a container (on Linux), the freezer cgroup is used to suspend
    all processes in the container. Freezing the process requires the process to
    be running. As a result, paused containers are both `Running` _and_ `Paused`.
    
    Use the `Status` field instead to determine if a container's state is "running".
    
    *
    * @param bool $running
    *
    * @return self
    */
    public function setRunning(bool $running) : self
    {
        $this->initialized['running'] = true;
        $this->running = $running;
        return $this;
    }
    /**
     * Whether this container is paused.
     *
     * @return bool
     */
    public function getPaused() : bool
    {
        return $this->paused;
    }
    /**
     * Whether this container is paused.
     *
     * @param bool $paused
     *
     * @return self
     */
    public function setPaused(bool $paused) : self
    {
        $this->initialized['paused'] = true;
        $this->paused = $paused;
        return $this;
    }
    /**
     * Whether this container is restarting.
     *
     * @return bool
     */
    public function getRestarting() : bool
    {
        return $this->restarting;
    }
    /**
     * Whether this container is restarting.
     *
     * @param bool $restarting
     *
     * @return self
     */
    public function setRestarting(bool $restarting) : self
    {
        $this->initialized['restarting'] = true;
        $this->restarting = $restarting;
        return $this;
    }
    /**
     * Whether this container has been killed because it ran out of memory.
     *
     * @return bool
     */
    public function getOOMKilled() : bool
    {
        return $this->oOMKilled;
    }
    /**
     * Whether this container has been killed because it ran out of memory.
     *
     * @param bool $oOMKilled
     *
     * @return self
     */
    public function setOOMKilled(bool $oOMKilled) : self
    {
        $this->initialized['oOMKilled'] = true;
        $this->oOMKilled = $oOMKilled;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getDead() : bool
    {
        return $this->dead;
    }
    /**
     * 
     *
     * @param bool $dead
     *
     * @return self
     */
    public function setDead(bool $dead) : self
    {
        $this->initialized['dead'] = true;
        $this->dead = $dead;
        return $this;
    }
    /**
     * The process ID of this container
     *
     * @return int
     */
    public function getPid() : int
    {
        return $this->pid;
    }
    /**
     * The process ID of this container
     *
     * @param int $pid
     *
     * @return self
     */
    public function setPid(int $pid) : self
    {
        $this->initialized['pid'] = true;
        $this->pid = $pid;
        return $this;
    }
    /**
     * The last exit code of this container
     *
     * @return int
     */
    public function getExitCode() : int
    {
        return $this->exitCode;
    }
    /**
     * The last exit code of this container
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
    /**
     * 
     *
     * @return string
     */
    public function getError() : string
    {
        return $this->error;
    }
    /**
     * 
     *
     * @param string $error
     *
     * @return self
     */
    public function setError(string $error) : self
    {
        $this->initialized['error'] = true;
        $this->error = $error;
        return $this;
    }
    /**
     * The time when this container was last started.
     *
     * @return string
     */
    public function getStartedAt() : string
    {
        return $this->startedAt;
    }
    /**
     * The time when this container was last started.
     *
     * @param string $startedAt
     *
     * @return self
     */
    public function setStartedAt(string $startedAt) : self
    {
        $this->initialized['startedAt'] = true;
        $this->startedAt = $startedAt;
        return $this;
    }
    /**
     * The time when this container last exited.
     *
     * @return string
     */
    public function getFinishedAt() : string
    {
        return $this->finishedAt;
    }
    /**
     * The time when this container last exited.
     *
     * @param string $finishedAt
     *
     * @return self
     */
    public function setFinishedAt(string $finishedAt) : self
    {
        $this->initialized['finishedAt'] = true;
        $this->finishedAt = $finishedAt;
        return $this;
    }
    /**
     * Health stores information about the container's healthcheck results.
     *
     * @return Health
     */
    public function getHealth() : Health
    {
        return $this->health;
    }
    /**
     * Health stores information about the container's healthcheck results.
     *
     * @param Health $health
     *
     * @return self
     */
    public function setHealth(Health $health) : self
    {
        $this->initialized['health'] = true;
        $this->health = $health;
        return $this;
    }
}