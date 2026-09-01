<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class KafkaTopicBase implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * The name of the Kafka topic.
     *
     * @var string
     */
    public string $name;
    /**
     * The number of nodes to replicate data across the cluster.
     *
     * @var int
     */
    public int $replicationFactor;
    /**
     * The number of partitions available for the topic. On update, this value can only be increased.
     *
     * @var int
     */
    public int $partitionCount;
    public function definedProperties(): array
    {
        return ['name' => 'name', 'replicationFactor' => 'replication_factor', 'partitionCount' => 'partition_count'];
    }
}