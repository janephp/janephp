<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class NodeStatus implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
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
    public function definedProperties(): array
    {
        return ['state' => ['state', 'getState', 'setState']];
    }
}