<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class Resource implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * The uniform resource name (URN) for the resource in the format do:resource_type:resource_id.
     *
     * @var string
     */
    public string $urn;
    /**
     * A time value given in ISO8601 combined date and time format that represents when the project was created.
     *
     * @var \DateTime
     */
    public \DateTime $assignedAt;
    /**
     * The links object contains the `self` object, which contains the resource relationship.
     *
     * @var ResourceLinks
     */
    public ResourceLinks $links;
    /**
     * The status of assigning and fetching the resources.
     *
     * @var string
     */
    public string $status;
    public function definedProperties(): array
    {
        return ['urn' => 'urn', 'assignedAt' => 'assigned_at', 'links' => 'links', 'status' => 'status'];
    }
}