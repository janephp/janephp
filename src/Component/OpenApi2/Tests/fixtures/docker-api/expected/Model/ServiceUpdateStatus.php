<?php

namespace Docker\Api\Model;

class ServiceUpdateStatus
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
        $this->initialized['state'] = true;
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
        $this->initialized['startedAt'] = true;
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
        $this->initialized['completedAt'] = true;
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
        $this->initialized['message'] = true;
        $this->message = $message;
        return $this;
    }
}