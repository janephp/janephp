<?php

namespace Jane\Generated\DigitalOcean\Model;

class ResponseKafkaTopics extends \ArrayObject
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
}