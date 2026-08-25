<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ApiCreateScheduledIndexingInputPublic implements AdditionalPropertiesInterface
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
     * Days for execution (day is represented same as in a cron expression, e.g. Monday begins with 1 )
     *
     * @var list<int>
     */
    protected $days;
    /**
     * Knowledge base uuid for which the schedule is created
     *
     * @var string
     */
    protected $knowledgeBaseUuid;
    /**
     * Time of execution (HH:MM) UTC
     *
     * @var string
     */
    protected $time;
    /**
     * Days for execution (day is represented same as in a cron expression, e.g. Monday begins with 1 )
     *
     * @return list<int>
     */
    public function getDays(): array
    {
        return $this->days;
    }
    /**
     * Days for execution (day is represented same as in a cron expression, e.g. Monday begins with 1 )
     *
     * @param list<int> $days
     *
     * @return self
     */
    public function setDays(array $days): self
    {
        $this->initialized['days'] = true;
        $this->days = $days;
        return $this;
    }
    /**
     * Knowledge base uuid for which the schedule is created
     *
     * @return string
     */
    public function getKnowledgeBaseUuid(): string
    {
        return $this->knowledgeBaseUuid;
    }
    /**
     * Knowledge base uuid for which the schedule is created
     *
     * @param string $knowledgeBaseUuid
     *
     * @return self
     */
    public function setKnowledgeBaseUuid(string $knowledgeBaseUuid): self
    {
        $this->initialized['knowledgeBaseUuid'] = true;
        $this->knowledgeBaseUuid = $knowledgeBaseUuid;
        return $this;
    }
    /**
     * Time of execution (HH:MM) UTC
     *
     * @return string
     */
    public function getTime(): string
    {
        return $this->time;
    }
    /**
     * Time of execution (HH:MM) UTC
     *
     * @param string $time
     *
     * @return self
     */
    public function setTime(string $time): self
    {
        $this->initialized['time'] = true;
        $this->time = $time;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['days' => ['days', 'getDays', 'setDays'], 'knowledgeBaseUuid' => ['knowledge_base_uuid', 'getKnowledgeBaseUuid', 'setKnowledgeBaseUuid'], 'time' => ['time', 'getTime', 'setTime']];
    }
}