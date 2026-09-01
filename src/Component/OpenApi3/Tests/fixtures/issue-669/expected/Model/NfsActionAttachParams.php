<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class NfsActionAttachParams implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * The ID of the VPC to which the NFS share will be attached
     *
     * @var string
     */
    public string $vpcId;
    public function definedProperties(): array
    {
        return ['vpcId' => 'vpc_id'];
    }
}