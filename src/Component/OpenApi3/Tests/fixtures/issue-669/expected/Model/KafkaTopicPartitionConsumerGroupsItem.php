<?php

namespace Jane\Generated\DigitalOcean\Model;

class KafkaTopicPartitionConsumerGroupsItem extends \ArrayObject
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
     * Name of the consumer group.
     *
     * @var string
     */
    protected $groupName;
    /**
     * The current offset of the consumer group.
     *
     * @var int
     */
    protected $offset;
    /**
     * Name of the consumer group.
     *
     * @return string
     */
    public function getGroupName(): string
    {
        return $this->groupName;
    }
    /**
     * Name of the consumer group.
     *
     * @param string $groupName
     *
     * @return self
     */
    public function setGroupName(string $groupName): self
    {
        $this->initialized['groupName'] = true;
        $this->groupName = $groupName;
        return $this;
    }
    /**
     * The current offset of the consumer group.
     *
     * @return int
     */
    public function getOffset(): int
    {
        return $this->offset;
    }
    /**
     * The current offset of the consumer group.
     *
     * @param int $offset
     *
     * @return self
     */
    public function setOffset(int $offset): self
    {
        $this->initialized['offset'] = true;
        $this->offset = $offset;
        return $this;
    }
}