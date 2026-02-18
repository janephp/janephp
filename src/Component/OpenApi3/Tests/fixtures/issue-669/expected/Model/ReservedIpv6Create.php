<?php

namespace Jane\Generated\DigitalOcean\Model;

class ReservedIpv6Create extends \ArrayObject
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
     * The slug identifier for the region the reserved IPv6 will be reserved to.
     *
     * @var string
     */
    protected $regionSlug;
    /**
     * The slug identifier for the region the reserved IPv6 will be reserved to.
     *
     * @return string
     */
    public function getRegionSlug(): string
    {
        return $this->regionSlug;
    }
    /**
     * The slug identifier for the region the reserved IPv6 will be reserved to.
     *
     * @param string $regionSlug
     *
     * @return self
     */
    public function setRegionSlug(string $regionSlug): self
    {
        $this->initialized['regionSlug'] = true;
        $this->regionSlug = $regionSlug;
        return $this;
    }
}