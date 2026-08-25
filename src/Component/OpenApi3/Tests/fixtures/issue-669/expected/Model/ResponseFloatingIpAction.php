<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ResponseFloatingIpAction implements AdditionalPropertiesInterface
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
     * @var ResponseFloatingIpActionAction
     */
    protected $action;
    /**
     * @return ResponseFloatingIpActionAction
     */
    public function getAction(): ResponseFloatingIpActionAction
    {
        return $this->action;
    }
    /**
     * @param ResponseFloatingIpActionAction $action
     *
     * @return self
     */
    public function setAction(ResponseFloatingIpActionAction $action): self
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