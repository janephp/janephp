<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ResponseReservedIpv6Action implements AdditionalPropertiesInterface
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
     * @var ResponseReservedIpv6ActionAction
     */
    protected $action;
    /**
     * @return ResponseReservedIpv6ActionAction
     */
    public function getAction(): ResponseReservedIpv6ActionAction
    {
        return $this->action;
    }
    /**
     * @param ResponseReservedIpv6ActionAction $action
     *
     * @return self
     */
    public function setAction(ResponseReservedIpv6ActionAction $action): self
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