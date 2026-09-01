<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class VpcPeeringCreate implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * An array of the two peered VPCs IDs.
     *
     * @var list<string>
     */
    public array $vpcIds;
    public function definedProperties(): array
    {
        return ['vpcIds' => 'vpc_ids'];
    }
}