<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class KafkaTopicPartitionConsumerGroupsItem implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * Name of the consumer group.
     *
     * @var string
     */
    public string $groupName;
    /**
     * The current offset of the consumer group.
     *
     * @var int
     */
    public int $offset;
    public function definedProperties(): array
    {
        return ['groupName' => 'group_name', 'offset' => 'offset'];
    }
}