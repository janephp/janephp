<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ResponseDestination implements AdditionalPropertiesInterface
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
     * @var DestinationOmitCredentials
     */
    protected $destination;
    /**
     * @return DestinationOmitCredentials
     */
    public function getDestination(): DestinationOmitCredentials
    {
        return $this->destination;
    }
    /**
     * @param DestinationOmitCredentials $destination
     *
     * @return self
     */
    public function setDestination(DestinationOmitCredentials $destination): self
    {
        $this->initialized['destination'] = true;
        $this->destination = $destination;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['destination' => ['destination', 'getDestination', 'setDestination']];
    }
}