<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ResponseKafkaTopic implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * @var KafkaTopicVerbose
     */
    protected $topic;
    /**
     * @return KafkaTopicVerbose
     */
    public function getTopic(): KafkaTopicVerbose
    {
        return $this->topic;
    }
    /**
     * @param KafkaTopicVerbose $topic
     *
     * @return self
     */
    public function setTopic(KafkaTopicVerbose $topic): self
    {
        $this->initialized['topic'] = true;
        $this->topic = $topic;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['topic' => ['topic', 'getTopic', 'setTopic']];
    }
}