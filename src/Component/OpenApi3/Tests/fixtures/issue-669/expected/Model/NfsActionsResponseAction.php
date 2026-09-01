<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class NfsActionsResponseAction implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * The DigitalOcean region slug where the resource is located.
     *
     * @var string
     */
    public string $regionSlug;
    /**
     * The unique identifier of the resource on which the action is being performed.
     *
     * @var string
     */
    public string $resourceId;
    /**
     * The type of resource on which the action is being performed.
     *
     * @var string
     */
    public string $resourceType;
    /**
     * The timestamp when the action was started.
     *
     * @var \DateTime
     */
    public \DateTime $startedAt;
    /**
     * The current status of the action.
     *
     * @var string
     */
    public string $status;
    /**
     * The type of action being performed.
     *
     * @var string
     */
    public string $type;
    public function definedProperties(): array
    {
        return ['regionSlug' => 'region_slug', 'resourceId' => 'resource_id', 'resourceType' => 'resource_type', 'startedAt' => 'started_at', 'status' => 'status', 'type' => 'type'];
    }
}