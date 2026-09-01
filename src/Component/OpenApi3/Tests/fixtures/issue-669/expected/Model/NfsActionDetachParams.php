<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class NfsActionDetachParams implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * The ID of the VPC from which the NFS share will be detached
     *
     * @var string
     */
    public string $vpcId;
    public function definedProperties(): array
    {
        return ['vpcId' => 'vpc_id'];
    }
}