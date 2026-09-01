<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class V2VpcsVpcIdPeeringsPostBody implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * The name of the VPC peering. Must be unique and may only contain alphanumeric characters, dashes, and periods.
     *
     * @var string
     */
    public string $name;
    /**
     * The ID of the VPC to peer with.
     *
     * @var string
     */
    public string $vpcId;
    public function definedProperties(): array
    {
        return ['name' => 'name', 'vpcId' => 'vpc_id'];
    }
}