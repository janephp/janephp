<?php

namespace Jane\Generated\DigitalOcean\Model;

class ResponseDestination extends \ArrayObject
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
}