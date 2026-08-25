<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ResponseExistingCheckState implements AdditionalPropertiesInterface
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
     * @var State
     */
    protected $state;
    /**
     * @return State
     */
    public function getState(): State
    {
        return $this->state;
    }
    /**
     * @param State $state
     *
     * @return self
     */
    public function setState(State $state): self
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