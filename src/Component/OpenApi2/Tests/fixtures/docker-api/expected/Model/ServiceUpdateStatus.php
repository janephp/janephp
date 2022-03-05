<?php

namespace Docker\Api\Model;

class ServiceUpdateStatus
{
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
    protected $startedAt;
    /**
     * 
     *
     * @var string
     */
    protected $completedAt;
    /**
     * 
     *
     * @var string
     */
    protected $message;
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
    public function getStartedAt() : string
    {
        return $this->startedAt;
    }
    /**
     * 
     *
     * @param string $startedAt
     *
     * @return self
     */
    public function setStartedAt(string $startedAt) : self
    {
        $this->startedAt = $startedAt;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getCompletedAt() : string
    {
        return $this->completedAt;
    }
    /**
     * 
     *
     * @param string $completedAt
     *
     * @return self
     */
    public function setCompletedAt(string $completedAt) : self
    {
        $this->completedAt = $completedAt;
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
}