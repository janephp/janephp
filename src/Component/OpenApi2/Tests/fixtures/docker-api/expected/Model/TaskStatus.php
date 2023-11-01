<?php

namespace Docker\Api\Model;

class TaskStatus
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
    protected $timestamp;
    /**
     * 
     *
     * @var string
     */
    protected $state;
    /**
     * 
     *
     * @var string
     */
    protected $message;
    /**
     * 
     *
     * @var string
     */
    protected $err;
    /**
     * 
     *
     * @var TaskStatusContainerStatus
     */
    protected $containerStatus;
    /**
     * 
     *
     * @return string
     */
    public function getTimestamp() : string
    {
        return $this->timestamp;
    }
    /**
     * 
     *
     * @param string $timestamp
     *
     * @return self
     */
    public function setTimestamp(string $timestamp) : self
    {
        $this->initialized['timestamp'] = true;
        $this->timestamp = $timestamp;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getState() : string
    {
        return $this->state;
    }
    /**
     * 
     *
     * @param string $state
     *
     * @return self
     */
    public function setState(string $state) : self
    {
        $this->initialized['state'] = true;
        $this->state = $state;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getMessage() : string
    {
        return $this->message;
    }
    /**
     * 
     *
     * @param string $message
     *
     * @return self
     */
    public function setMessage(string $message) : self
    {
        $this->initialized['message'] = true;
        $this->message = $message;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getErr() : string
    {
        return $this->err;
    }
    /**
     * 
     *
     * @param string $err
     *
     * @return self
     */
    public function setErr(string $err) : self
    {
        $this->initialized['err'] = true;
        $this->err = $err;
        return $this;
    }
    /**
     * 
     *
     * @return TaskStatusContainerStatus
     */
    public function getContainerStatus() : TaskStatusContainerStatus
    {
        return $this->containerStatus;
    }
    /**
     * 
     *
     * @param TaskStatusContainerStatus $containerStatus
     *
     * @return self
     */
    public function setContainerStatus(TaskStatusContainerStatus $containerStatus) : self
    {
        $this->initialized['containerStatus'] = true;
        $this->containerStatus = $containerStatus;
        return $this;
    }
}