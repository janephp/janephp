<?php

namespace PicturePark\API\Model;

class BusinessProcessState
{
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * State of the business process
     *
     * @var string
     */
    protected $state;
    /**
     * Date and time of when the state transition was performed.
     *
     * @var \DateTime
     */
    protected $timestamp;
    /**
     * Eventual error associated to the state transition.
     *
     * @var mixed|null
     */
    protected $error;
    /**
     * State of the business process
     *
     * @return string
     */
    public function getState(): string
    {
        return $this->state;
    }
    /**
     * State of the business process
     *
     * @param string $state
     *
     * @return self
     */
    public function setState(string $state): self
    {
        $this->initialized['state'] = true;
        $this->state = $state;
        return $this;
    }
    /**
     * Date and time of when the state transition was performed.
     *
     * @return \DateTime
     */
    public function getTimestamp(): \DateTime
    {
        return $this->timestamp;
    }
    /**
     * Date and time of when the state transition was performed.
     *
     * @param \DateTime $timestamp
     *
     * @return self
     */
    public function setTimestamp(\DateTime $timestamp): self
    {
        $this->initialized['timestamp'] = true;
        $this->timestamp = $timestamp;
        return $this;
    }
    /**
     * Eventual error associated to the state transition.
     *
     * @return mixed
     */
    public function getError()
    {
        return $this->error;
    }
    /**
     * Eventual error associated to the state transition.
     *
     * @param mixed $error
     *
     * @return self
     */
    public function setError($error): self
    {
        $this->initialized['error'] = true;
        $this->error = $error;
        return $this;
    }
}