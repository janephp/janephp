<?php

namespace Jane\Generated\DigitalOcean\Model;

class NfsActionAttachParams extends \ArrayObject
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
     * The ID of the VPC to which the NFS share will be attached
     *
     * @var string
     */
    protected $vpcId;
    /**
     * The ID of the VPC to which the NFS share will be attached
     *
     * @return string
     */
    public function getVpcId(): string
    {
        return $this->vpcId;
    }
    /**
     * The ID of the VPC to which the NFS share will be attached
     *
     * @param string $vpcId
     *
     * @return self
     */
    public function setVpcId(string $vpcId): self
    {
        $this->initialized['vpcId'] = true;
        $this->vpcId = $vpcId;
        return $this;
    }
}