<?php

namespace Jane\Generated\DigitalOcean\Model;

class KafkaTopicPartition extends \ArrayObject
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
     * Size of the topic partition in bytes.
     *
     * @var int
     */
    protected $size;
    /**
     * An identifier for the partition.
     *
     * @var int
     */
    protected $id;
    /**
     * The number of nodes that are in-sync (have the latest data) for the given partition
     *
     * @var int
     */
    protected $inSyncReplicas;
    /**
     * The earliest consumer offset amongst consumer groups.
     *
     * @var int
     */
    protected $earliestOffset;
    /**
     * @var list<KafkaTopicPartitionConsumerGroupsItem>|null
     */
    protected $consumerGroups;
    /**
     * Size of the topic partition in bytes.
     *
     * @return int
     */
    public function getSize(): int
    {
        return $this->size;
    }
    /**
     * Size of the topic partition in bytes.
     *
     * @param int $size
     *
     * @return self
     */
    public function setSize(int $size): self
    {
        $this->initialized['size'] = true;
        $this->size = $size;
        return $this;
    }
    /**
     * An identifier for the partition.
     *
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }
    /**
     * An identifier for the partition.
     *
     * @param int $id
     *
     * @return self
     */
    public function setId(int $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;
        return $this;
    }
    /**
     * The number of nodes that are in-sync (have the latest data) for the given partition
     *
     * @return int
     */
    public function getInSyncReplicas(): int
    {
        return $this->inSyncReplicas;
    }
    /**
     * The number of nodes that are in-sync (have the latest data) for the given partition
     *
     * @param int $inSyncReplicas
     *
     * @return self
     */
    public function setInSyncReplicas(int $inSyncReplicas): self
    {
        $this->initialized['inSyncReplicas'] = true;
        $this->inSyncReplicas = $inSyncReplicas;
        return $this;
    }
    /**
     * The earliest consumer offset amongst consumer groups.
     *
     * @return int
     */
    public function getEarliestOffset(): int
    {
        return $this->earliestOffset;
    }
    /**
     * The earliest consumer offset amongst consumer groups.
     *
     * @param int $earliestOffset
     *
     * @return self
     */
    public function setEarliestOffset(int $earliestOffset): self
    {
        $this->initialized['earliestOffset'] = true;
        $this->earliestOffset = $earliestOffset;
        return $this;
    }
    /**
     * @return list<KafkaTopicPartitionConsumerGroupsItem>|null
     */
    public function getConsumerGroups(): ?array
    {
        return $this->consumerGroups;
    }
    /**
     * @param list<KafkaTopicPartitionConsumerGroupsItem>|null $consumerGroups
     *
     * @return self
     */
    public function setConsumerGroups(?array $consumerGroups): self
    {
        $this->initialized['consumerGroups'] = true;
        $this->consumerGroups = $consumerGroups;
        return $this;
    }
}