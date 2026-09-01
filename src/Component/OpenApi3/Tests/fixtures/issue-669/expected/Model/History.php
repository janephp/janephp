<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class History implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * The unique identifier of the history event.
     *
     * @var string
     */
    public string $historyEventId;
    /**
     * The current number of Droplets in the autoscale pool.
     *
     * @var int
     */
    public int $currentInstanceCount;
    /**
     * The target number of Droplets for the autoscale pool after the scaling event.
     *
     * @var int
     */
    public int $desiredInstanceCount;
    /**
     * The reason for the scaling event.
     *
     * @var string
     */
    public string $reason;
    /**
     * The status of the scaling event.
     *
     * @var string
     */
    public string $status;
    /**
     * The creation time of the history event in ISO8601 combined date and time format.
     *
     * @var \DateTime
     */
    public \DateTime $createdAt;
    /**
     * The last updated time of the history event in ISO8601 combined date and time format.
     *
     * @var \DateTime
     */
    public \DateTime $updatedAt;
    public function definedProperties(): array
    {
        return ['historyEventId' => 'history_event_id', 'currentInstanceCount' => 'current_instance_count', 'desiredInstanceCount' => 'desired_instance_count', 'reason' => 'reason', 'status' => 'status', 'createdAt' => 'created_at', 'updatedAt' => 'updated_at'];
    }
}