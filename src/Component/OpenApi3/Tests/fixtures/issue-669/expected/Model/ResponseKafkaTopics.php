<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ResponseKafkaTopics implements AdditionalPropertiesInterface
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
     * @var list<array<string, mixed>>
     */
    protected $topics;
    /**
     * @return list<array<string, mixed>>
     */
    public function getTopics(): array
    {
        return $this->topics;
    }
    /**
     * @param list<array<string, mixed>> $topics
     *
     * @return self
     */
    public function setTopics(array $topics): self
    {
        $this->initialized['topics'] = true;
        $this->topics = $topics;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['topics' => ['topics', 'getTopics', 'setTopics']];
    }
}