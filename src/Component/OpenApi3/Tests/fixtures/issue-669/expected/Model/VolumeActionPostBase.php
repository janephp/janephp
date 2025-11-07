<?php

namespace Jane\Generated\DigitalOcean\Model;

class VolumeActionPostBase extends \ArrayObject
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
     * The volume action to initiate.
     *
     * @var string
     */
    protected $type;
    /**
     * The slug identifier for the region where the resource will initially be  available.
     *
     * @var string
     */
    protected $region;
    /**
     * The volume action to initiate.
     *
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }
    /**
     * The volume action to initiate.
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
     * The slug identifier for the region where the resource will initially be  available.
     *
     * @return string
     */
    public function getRegion(): string
    {
        return $this->region;
    }
    /**
     * The slug identifier for the region where the resource will initially be  available.
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