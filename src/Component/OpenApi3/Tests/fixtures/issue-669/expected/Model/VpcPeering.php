<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class VpcPeering implements AdditionalPropertiesInterface
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
    /**
     * An array of the two peered VPCs IDs.
     *
     * @var list<string>
     */
    public array $vpcIds;
    /**
     * The name of the VPC peering. Must be unique within the team and may only contain alphanumeric characters and dashes.
     *
     * @var string
     */
    public string $name;
    public function definedProperties(): array
    {
        return ['id' => 'id', 'createdAt' => 'created_at', 'status' => 'status', 'vpcIds' => 'vpc_ids', 'name' => 'name'];
    }
}