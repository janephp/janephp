<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ResponseDropletAction implements AdditionalPropertiesInterface
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
     * @var Action
     */
    protected $action;
    /**
     * @return Action
     */
    public function getAction(): Action
    {
        return $this->action;
    }
    /**
     * @param Action $action
     *
     * @return self
     */
    public function setAction(Action $action): self
    {
        $this->initialized['action'] = true;
        $this->action = $action;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['action' => ['action', 'getAction', 'setAction']];
    }
}