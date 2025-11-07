<?php

namespace Jane\Generated\DigitalOcean\Model;

class ResponseMonitoringListDestinations extends \ArrayObject
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
}