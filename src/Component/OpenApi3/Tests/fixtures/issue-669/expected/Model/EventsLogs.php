<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class EventsLogs implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * ID of the particular event.
     *
     * @var string
     */
    public string $id;
    /**
     * The name of cluster.
     *
     * @var string
     */
    public string $clusterName;
    /**
     * Type of the event.
     *
     * @var string
     */
    public string $eventType;
    /**
     * The time of the generation of a event.
     *
     * @var string
     */
    public string $createTime;
    public function definedProperties(): array
    {
        return ['id' => 'id', 'clusterName' => 'cluster_name', 'eventType' => 'event_type', 'createTime' => 'create_time'];
    }
}