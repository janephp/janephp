<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ApiCreateScheduledIndexingInputPublic implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * Days for execution (day is represented same as in a cron expression, e.g. Monday begins with 1 )
     *
     * @var list<int>
     */
    public array $days;
    /**
     * Knowledge base uuid for which the schedule is created
     *
     * @var string
     */
    public string $knowledgeBaseUuid;
    /**
     * Time of execution (HH:MM) UTC
     *
     * @var string
     */
    public string $time;
    public function definedProperties(): array
    {
        return ['days' => 'days', 'knowledgeBaseUuid' => 'knowledge_base_uuid', 'time' => 'time'];
    }
}