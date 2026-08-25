<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ResponseMonitoringListDestinations implements AdditionalPropertiesInterface
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
     * @var list<DestinationOmitCredentials>
     */
    protected $destinations;
    /**
     * @return list<DestinationOmitCredentials>
     */
    public function getDestinations(): array
    {
        return $this->destinations;
    }
    /**
     * @param list<DestinationOmitCredentials> $destinations
     *
     * @return self
     */
    public function setDestinations(array $destinations): self
    {
        $this->initialized['destinations'] = true;
        $this->destinations = $destinations;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['destinations' => ['destinations', 'getDestinations', 'setDestinations']];
    }
}