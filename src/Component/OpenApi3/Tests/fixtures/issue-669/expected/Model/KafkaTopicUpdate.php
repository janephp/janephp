<?php

namespace Jane\Generated\DigitalOcean\Model;

class KafkaTopicUpdate extends \ArrayObject
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
     * @var KafkaTopicConfig
     */
    protected $config;
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