<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class KafkaTopicPartition implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * Size of the topic partition in bytes.
     *
     * @var int
     */
    public int $size;
    /**
     * An identifier for the partition.
     *
     * @var int
     */
    public int $id;
    /**
     * The number of nodes that are in-sync (have the latest data) for the given partition
     *
     * @var int
     */
    public int $inSyncReplicas;
    /**
     * The earliest consumer offset amongst consumer groups.
     *
     * @var int
     */
    public int $earliestOffset;
    /**
     * @var list<KafkaTopicPartitionConsumerGroupsItem>|null
     */
    public ?array $consumerGroups;
    public function definedProperties(): array
    {
        return ['size' => 'size', 'id' => 'id', 'inSyncReplicas' => 'in_sync_replicas', 'earliestOffset' => 'earliest_offset', 'consumerGroups' => 'consumer_groups'];
    }
}