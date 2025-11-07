<?php

namespace Jane\Generated\DigitalOcean\Model;

class VolumeActionPostDetach extends \ArrayObject
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
     * The unique identifier for the Droplet the volume will be attached or detached from.
     *
     * @var int
     */
    protected $dropletId;
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
    /**
     * The unique identifier for the Droplet the volume will be attached or detached from.
     *
     * @return int
     */
    public function getDropletId(): int
    {
        return $this->dropletId;
    }
    /**
     * The unique identifier for the Droplet the volume will be attached or detached from.
     *
     * @param int $dropletId
     *
     * @return self
     */
    public function setDropletId(int $dropletId): self
    {
        $this->initialized['dropletId'] = true;
        $this->dropletId = $dropletId;
        return $this;
    }
}