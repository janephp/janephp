<?php

namespace Jane\Generated\DigitalOcean\Model;

class StatusMessages extends \ArrayObject
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
     * Status information about the cluster which impacts it's lifecycle.
     *
     * @var string
     */
    protected $message;
    /**
     * A timestamp in ISO8601 format that represents when the status message was emitted.
     *
     * @var \DateTime
     */
    protected $timestamp;
    /**
     * Status information about the cluster which impacts it's lifecycle.
     *
     * @return string
     */
    public function getMessage(): string
    {
        return $this->message;
    }
    /**
     * Status information about the cluster which impacts it's lifecycle.
     *
     * @param string $message
     *
     * @return self
     */
    public function setMessage(string $message): self
    {
        $this->initialized['message'] = true;
        $this->message = $message;
        return $this;
    }
    /**
     * A timestamp in ISO8601 format that represents when the status message was emitted.
     *
     * @return \DateTime
     */
    public function getTimestamp(): \DateTime
    {
        return $this->timestamp;
    }
    /**
     * A timestamp in ISO8601 format that represents when the status message was emitted.
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
}