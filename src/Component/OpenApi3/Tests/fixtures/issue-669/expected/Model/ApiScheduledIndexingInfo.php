<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ApiScheduledIndexingInfo implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * Created at timestamp
     *
     * @var \DateTime
     */
    public \DateTime $createdAt;
    /**
     * Days for execution (day is represented same as in a cron expression, e.g. Monday begins with 1 )
     *
     * @var list<int>
     */
    public array $days;
    /**
     * Deleted at timestamp (if soft deleted)
     *
     * @var \DateTime
     */
    public \DateTime $deletedAt;
    /**
     * Whether the schedule is currently active
     *
     * @var bool
     */
    public bool $isActive;
    /**
     * Knowledge base uuid associated with this schedule
     *
     * @var string
     */
    public string $knowledgeBaseUuid;
    /**
     * Last time the schedule was executed
     *
     * @var \DateTime
     */
    public \DateTime $lastRanAt;
    /**
     * Next scheduled run
     *
     * @var \DateTime
     */
    public \DateTime $nextRunAt;
    /**
     * Scheduled time of execution (HH:MM:SS format)
     *
     * @var string
     */
    public string $time;
    /**
     * Updated at timestamp
     *
     * @var \DateTime
     */
    public \DateTime $updatedAt;
    /**
     * Unique identifier for the scheduled indexing entry
     *
     * @var string
     */
    public string $uuid;
    public function definedProperties(): array
    {
        return ['createdAt' => 'created_at', 'days' => 'days', 'deletedAt' => 'deleted_at', 'isActive' => 'is_active', 'knowledgeBaseUuid' => 'knowledge_base_uuid', 'lastRanAt' => 'last_ran_at', 'nextRunAt' => 'next_run_at', 'time' => 'time', 'updatedAt' => 'updated_at', 'uuid' => 'uuid'];
    }
}