<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ResponseReservedIpv6ActionAction implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * A unique numeric ID that can be used to identify and reference an action.
     *
     * @var int
     */
    public int $id;
    /**
     * The current status of the action. This can be "in-progress", "completed", or "errored".
     *
     * @var string
     */
    public string $status = 'in-progress';
    /**
     * This is the type of action that the object represents. For example, this could be "transfer" to represent the state of an image transfer action.
     *
     * @var string
     */
    public string $type;
    /**
     * A time value given in ISO8601 combined date and time format that represents when the action was initiated.
     *
     * @var \DateTime
     */
    public \DateTime $startedAt;
    /**
     * A time value given in ISO8601 combined date and time format that represents when the action was completed.
     *
     * @var \DateTime|null
     */
    public ?\DateTime $completedAt;
    /**
     * The ID of the resource that the action is being taken on.
     *
     * @var int
     */
    public int $resourceId;
    /**
     * The type of resource that the action is being taken on.
     *
     * @var string
     */
    public string $resourceType;
    /**
     * @var Region
     */
    public Region $region;
    /**
     * The slug identifier for the region the resource is located in.
     *
     * @var string
     */
    public string $regionSlug;
    public function definedProperties(): array
    {
        return ['id' => 'id', 'status' => 'status', 'type' => 'type', 'startedAt' => 'started_at', 'completedAt' => 'completed_at', 'resourceId' => 'resource_id', 'resourceType' => 'resource_type', 'region' => 'region', 'regionSlug' => 'region_slug'];
    }
}