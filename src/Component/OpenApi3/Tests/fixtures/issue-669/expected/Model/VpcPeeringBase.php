<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class VpcPeeringBase implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * A unique ID that can be used to identify and reference the VPC peering.
     *
     * @var string
     */
    public string $id;
    /**
     * A time value given in ISO8601 combined date and time format.
     *
     * @var \DateTime
     */
    public \DateTime $createdAt;
    /**
     * The current status of the VPC peering.
     *
     * @var string
     */
    public string $status;
    public function definedProperties(): array
    {
        return ['id' => 'id', 'createdAt' => 'created_at', 'status' => 'status'];
    }
}