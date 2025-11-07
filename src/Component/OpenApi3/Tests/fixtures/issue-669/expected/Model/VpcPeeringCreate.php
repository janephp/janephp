<?php

namespace Jane\Generated\DigitalOcean\Model;

class VpcPeeringCreate extends \ArrayObject
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
     * An array of the two peered VPCs IDs.
     *
     * @var list<string>
     */
    protected $vpcIds;
    /**
     * An array of the two peered VPCs IDs.
     *
     * @return list<string>
     */
    public function getVpcIds(): array
    {
        return $this->vpcIds;
    }
    /**
     * An array of the two peered VPCs IDs.
     *
     * @param list<string> $vpcIds
     *
     * @return self
     */
    public function setVpcIds(array $vpcIds): self
    {
        $this->initialized['vpcIds'] = true;
        $this->vpcIds = $vpcIds;
        return $this;
    }
}