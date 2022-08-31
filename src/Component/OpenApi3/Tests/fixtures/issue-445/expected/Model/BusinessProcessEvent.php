<?php

namespace PicturePark\API\Model;

class BusinessProcessEvent extends ApplicationEvent
{
    /**
     * 
     *
     * @var \DateTime
     */
    protected $timestamp;
    /**
     * 
     *
     * @var string
     */
    protected $kind;
    /**
     * 
     *
     * @var string|null
     */
    protected $businessProcessId;
    /**
     * 
     *
     * @var mixed|null
     */
    protected $lifeCycle;
    /**
     * 
     *
     * @var string|null
     */
    protected $state;
    /**
     * 
     *
     * @return \DateTime
     */
    public function getTimestamp() : \DateTime
    {
        return $this->timestamp;
    }
    /**
     * 
     *
     * @param \DateTime $timestamp
     *
     * @return self
     */
    public function setTimestamp(\DateTime $timestamp) : self
    {
        $this->timestamp = $timestamp;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getKind() : string
    {
        return $this->kind;
    }
    /**
     * 
     *
     * @param string $kind
     *
     * @return self
     */
    public function setKind(string $kind) : self
    {
        $this->kind = $kind;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getBusinessProcessId() : ?string
    {
        return $this->businessProcessId;
    }
    /**
     * 
     *
     * @param string|null $businessProcessId
     *
     * @return self
     */
    public function setBusinessProcessId(?string $businessProcessId) : self
    {
        $this->businessProcessId = $businessProcessId;
        return $this;
    }
    /**
     * 
     *
     * @return mixed
     */
    public function getLifeCycle()
    {
        return $this->lifeCycle;
    }
    /**
     * 
     *
     * @param mixed $lifeCycle
     *
     * @return self
     */
    public function setLifeCycle($lifeCycle) : self
    {
        $this->lifeCycle = $lifeCycle;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getState() : ?string
    {
        return $this->state;
    }
    /**
     * 
     *
     * @param string|null $state
     *
     * @return self
     */
    public function setState(?string $state) : self
    {
        $this->state = $state;
        return $this;
    }
}