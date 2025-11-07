<?php

namespace Jane\Generated\DigitalOcean\Model;

class KafkaTopicBase extends \ArrayObject
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
     * The number of nodes to replicate data across the cluster.
     *
     * @var int
     */
    protected $replicationFactor;
    /**
     * The number of partitions available for the topic. On update, this value can only be increased.
     *
     * @var int
     */
    protected $partitionCount;
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
     * The number of partitions available for the topic. On update, this value can only be increased.
     *
     * @return int
     */
    public function getPartitionCount(): int
    {
        return $this->partitionCount;
    }
    /**
     * The number of partitions available for the topic. On update, this value can only be increased.
     *
     * @param int $partitionCount
     *
     * @return self
     */
    public function setPartitionCount(int $partitionCount): self
    {
        $this->initialized['partitionCount'] = true;
        $this->partitionCount = $partitionCount;
        return $this;
    }
}