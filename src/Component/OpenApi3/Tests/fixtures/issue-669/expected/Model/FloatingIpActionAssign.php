<?php

namespace Jane\Generated\DigitalOcean\Model;

class FloatingIpActionAssign extends FloatingIPsAction
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
     * The ID of the Droplet that the floating IP will be assigned to.
     *
     * @var int
     */
    protected $dropletId;
    /**
     * The ID of the Droplet that the floating IP will be assigned to.
     *
     * @return int
     */
    public function getDropletId(): int
    {
        return $this->dropletId;
    }
    /**
     * The ID of the Droplet that the floating IP will be assigned to.
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
    public function definedProperties(): array
    {
        return array_merge(parent::definedProperties(), ['dropletId' => ['droplet_id', 'getDropletId', 'setDropletId']]);
    }
}