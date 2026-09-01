<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class VpcMember implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * The name of the resource.
     *
     * @var string
     */
    public string $name;
    /**
     * The uniform resource name (URN) for the resource in the format do:resource_type:resource_id.
     *
     * @var string
     */
    public string $urn;
    /**
     * A time value given in ISO8601 combined date and time format that represents when the resource was created.
     *
     * @var string
     */
    public string $createdAt;
    public function definedProperties(): array
    {
        return ['name' => 'name', 'urn' => 'urn', 'createdAt' => 'created_at'];
    }
}