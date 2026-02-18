<?php

namespace Jane\Generated\DigitalOcean\Model;

class ByoipPrefixUpdate extends \ArrayObject
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
     * Whether the BYOIP prefix should be advertised
     *
     * @var bool
     */
    protected $advertise;
    /**
     * Whether the BYOIP prefix should be advertised
     *
     * @return bool
     */
    public function getAdvertise(): bool
    {
        return $this->advertise;
    }
    /**
     * Whether the BYOIP prefix should be advertised
     *
     * @param bool $advertise
     *
     * @return self
     */
    public function setAdvertise(bool $advertise): self
    {
        $this->initialized['advertise'] = true;
        $this->advertise = $advertise;
        return $this;
    }
}