<?php

namespace Jane\Generated\DigitalOcean\Model;

class KafkaTopicVerbose extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * The name of the Kafka topic.
     *
     * @var string
     */
    protected $name;
    /**
     * The state of the Kafka topic.
     *
     * @var string
     */
    protected $state;
    /**
     * The number of nodes to replicate data across the cluster.
     *
     * @var int
     */
    protected $replicationFactor;
    /**
     * @var list<KafkaTopicPartition>
     */
    protected $partitions;
    /**
     * @var KafkaTopicConfig
     */
    protected $config;
    /**
     * The name of the Kafka topic.
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * The name of the Kafka topic.
     *
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;
        return $this;
    }
    /**
     * The state of the Kafka topic.
     *
     * @return string
     */
    public function getState(): string
    {
        return $this->state;
    }
    /**
     * The state of the Kafka topic.
     *
     * @param string $state
     *
     * @return self
     */
    public function setState(string $state): self
    {
        $this->initialized['state'] = true;
        $this->state = $state;
        return $this;
    }
    /**
     * The number of nodes to replicate data across the cluster.
     *
     * @return int
     */
    public function getReplicationFactor(): int
    {
        return $this->replicationFactor;
    }
    /**
     * The number of nodes to replicate data across the cluster.
     *
     * @param int $replicationFactor
     *
     * @return self
     */
    public function setReplicationFactor(int $replicationFactor): self
    {
        $this->initialized['replicationFactor'] = true;
        $this->replicationFactor = $replicationFactor;
        return $this;
    }
    /**
     * @return list<KafkaTopicPartition>
     */
    public function getPartitions(): array
    {
        return $this->partitions;
    }
    /**
     * @param list<KafkaTopicPartition> $partitions
     *
     * @return self
     */
    public function setPartitions(array $partitions): self
    {
        $this->initialized['partitions'] = true;
        $this->partitions = $partitions;
        return $this;
    }
    /**
     * @return KafkaTopicConfig
     */
    public function getConfig(): KafkaTopicConfig
    {
        return $this->config;
    }
    /**
     * @param KafkaTopicConfig $config
     *
     * @return self
     */
    public function setConfig(KafkaTopicConfig $config): self
    {
        $this->initialized['config'] = true;
        $this->config = $config;
        return $this;
    }
}