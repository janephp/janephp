<?php

namespace Docker\Api\Model;

class TaskStatus
{
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
        $this->containerStatus = $containerStatus;
        return $this;
    }
}