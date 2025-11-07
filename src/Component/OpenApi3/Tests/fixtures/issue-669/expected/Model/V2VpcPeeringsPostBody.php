<?php

namespace Jane\Generated\DigitalOcean\Model;

class V2VpcPeeringsPostBody extends \ArrayObject
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
     * The name of the VPC peering. Must be unique within the team and may only contain alphanumeric characters and dashes.
     *
     * @var string
     */
    protected $name;
    /**
     * An array of the two peered VPCs IDs.
     *
     * @var list<string>
     */
    protected $vpcIds;
    /**
     * The name of the VPC peering. Must be unique within the team and may only contain alphanumeric characters and dashes.
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * The name of the VPC peering. Must be unique within the team and may only contain alphanumeric characters and dashes.
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