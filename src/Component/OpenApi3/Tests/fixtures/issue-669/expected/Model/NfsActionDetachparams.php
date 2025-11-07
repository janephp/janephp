<?php

namespace Jane\Generated\DigitalOcean\Model;

class NfsActionDetachparams extends \ArrayObject
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
     * The ID of the VPC from which the NFS share will be detached
     *
     * @var string
     */
    protected $vpcId;
    /**
     * The ID of the VPC from which the NFS share will be detached
     *
     * @return string
     */
    public function getVpcId(): string
    {
        return $this->vpcId;
    }
    /**
     * The ID of the VPC from which the NFS share will be detached
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