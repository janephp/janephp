<?php

namespace Jane\Generated\DigitalOcean\Model;

class NfsAction extends \ArrayObject
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
     * The type of action to initiate for the NFS share (such as resize or snapshot).
     *
     * @var string
     */
    protected $type;
    /**
     * The DigitalOcean region slug (e.g. atl1, nyc2) where the NFS snapshot resides.
     *
     * @var string
     */
    protected $region;
    /**
     * The type of action to initiate for the NFS share (such as resize or snapshot).
     *
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }
    /**
     * The type of action to initiate for the NFS share (such as resize or snapshot).
     *
     * @param string $type
     *
     * @return self
     */
    public function setType(string $type): self
    {
        $this->initialized['type'] = true;
        $this->type = $type;
        return $this;
    }
    /**
     * The DigitalOcean region slug (e.g. atl1, nyc2) where the NFS snapshot resides.
     *
     * @return string
     */
    public function getRegion(): string
    {
        return $this->region;
    }
    /**
     * The DigitalOcean region slug (e.g. atl1, nyc2) where the NFS snapshot resides.
     *
     * @param string $region
     *
     * @return self
     */
    public function setRegion(string $region): self
    {
        $this->initialized['region'] = true;
        $this->region = $region;
        return $this;
    }
}