<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class KafkaTopicVerbose implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * The name of the Kafka topic.
     *
     * @var string
     */
    public string $name;
    /**
     * The state of the Kafka topic.
     *
     * @var string
     */
    public string $state;
    /**
     * The number of nodes to replicate data across the cluster.
     *
     * @var int
     */
    public int $replicationFactor;
    /**
     * @var list<KafkaTopicPartition>
     */
    public array $partitions;
    /**
     * @var KafkaTopicConfig
     */
    public KafkaTopicConfig $config;
    public function definedProperties(): array
    {
        return ['name' => 'name', 'state' => 'state', 'replicationFactor' => 'replication_factor', 'partitions' => 'partitions', 'config' => 'config'];
    }
}