<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ResponseReservedIpAction implements AdditionalPropertiesInterface
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
     * @var ResponseReservedIpActionAction
     */
    protected $action;
    /**
     * @return ResponseReservedIpActionAction
     */
    public function getAction(): ResponseReservedIpActionAction
    {
        return $this->action;
    }
    /**
     * @param ResponseReservedIpActionAction $action
     *
     * @return self
     */
    public function setAction(ResponseReservedIpActionAction $action): self
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