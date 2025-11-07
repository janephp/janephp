<?php

namespace Jane\Generated\DigitalOcean\Model;

class ClusterReadStatus extends \ArrayObject
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
     * A string indicating the current status of the cluster.
     *
     * @var string
     */
    protected $state;
    /**
     * An optional message providing additional information about the current cluster state.
     *
     * @var string
     */
    protected $message;
    /**
     * A string indicating the current status of the cluster.
     *
     * @return string
     */
    public function getState(): string
    {
        return $this->state;
    }
    /**
     * A string indicating the current status of the cluster.
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
     * An optional message providing additional information about the current cluster state.
     *
     * @return string
     */
    public function getMessage(): string
    {
        return $this->message;
    }
    /**
     * An optional message providing additional information about the current cluster state.
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
}