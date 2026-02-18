<?php

namespace Jane\Generated\DigitalOcean\Model;

class V2VpcsVpcIdPeeringsPostBody extends \ArrayObject
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
     * The name of the VPC peering. Must be unique and may only contain alphanumeric characters, dashes, and periods.
     *
     * @var string
     */
    protected $name;
    /**
     * The ID of the VPC to peer with.
     *
     * @var string
     */
    protected $vpcId;
    /**
     * The name of the VPC peering. Must be unique and may only contain alphanumeric characters, dashes, and periods.
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * The name of the VPC peering. Must be unique and may only contain alphanumeric characters, dashes, and periods.
     *
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;
        return $this;
    }
    /**
     * The ID of the VPC to peer with.
     *
     * @return string
     */
    public function getVpcId(): string
    {
        return $this->vpcId;
    }
    /**
     * The ID of the VPC to peer with.
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