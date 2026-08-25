<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class NfsActionAttachParams implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
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
    public function definedProperties(): array
    {
        return ['vpcId' => ['vpc_id', 'getVpcId', 'setVpcId']];
    }
}