<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class V2VpcPeeringsPostBody implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * The name of the VPC peering. Must be unique within the team and may only contain alphanumeric characters and dashes.
     *
     * @var string
     */
    public string $name;
    /**
     * An array of the two peered VPCs IDs.
     *
     * @var list<string>
     */
    public array $vpcIds;
    public function definedProperties(): array
    {
        return ['name' => 'name', 'vpcIds' => 'vpc_ids'];
    }
}