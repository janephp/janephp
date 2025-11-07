<?php

namespace Jane\Generated\DigitalOcean\Model;

class NodeStatus extends \ArrayObject
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
     * A string indicating the current status of the node.
     *
     * @var string
     */
    protected $state;
    /**
     * A string indicating the current status of the node.
     *
     * @return string
     */
    public function getState(): string
    {
        return $this->state;
    }
    /**
     * A string indicating the current status of the node.
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
}