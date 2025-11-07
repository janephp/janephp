<?php

namespace Jane\Generated\DigitalOcean\Model;

class ApiScheduledIndexingInfo extends \ArrayObject
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
     * Created at timestamp
     *
     * @var \DateTime
     */
    protected $createdAt;
    /**
     * Days for execution (day is represented same as in a cron expression, e.g. Monday begins with 1 )
     *
     * @var list<int>
     */
    protected $days;
    /**
     * Deleted at timestamp (if soft deleted)
     *
     * @var \DateTime
     */
    protected $deletedAt;
    /**
     * Whether the schedule is currently active
     *
     * @var bool
     */
    protected $isActive;
    /**
     * Knowledge base uuid associated with this schedule
     *
     * @var string
     */
    protected $knowledgeBaseUuid;
    /**
     * Last time the schedule was executed
     *
     * @var \DateTime
     */
    protected $lastRanAt;
    /**
     * Next scheduled run
     *
     * @var \DateTime
     */
    protected $nextRunAt;
    /**
     * Scheduled time of execution (HH:MM:SS format)
     *
     * @var string
     */
    protected $time;
    /**
     * Updated at timestamp
     *
     * @var \DateTime
     */
    protected $updatedAt;
    /**
     * Unique identifier for the scheduled indexing entry
     *
     * @var string
     */
    protected $uuid;
    /**
     * Created at timestamp
     *
     * @return \DateTime
     */
    public function getCreatedAt(): \DateTime
    {
        return $this->createdAt;
    }
    /**
     * Created at timestamp
     *
     * @param \DateTime $createdAt
     *
     * @return self
     */
    public function setCreatedAt(\DateTime $createdAt): self
    {
        $this->initialized['createdAt'] = true;
        $this->createdAt = $createdAt;
        return $this;
    }
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
     * Deleted at timestamp (if soft deleted)
     *
     * @return \DateTime
     */
    public function getDeletedAt(): \DateTime
    {
        return $this->deletedAt;
    }
    /**
     * Deleted at timestamp (if soft deleted)
     *
     * @param \DateTime $deletedAt
     *
     * @return self
     */
    public function setDeletedAt(\DateTime $deletedAt): self
    {
        $this->initialized['deletedAt'] = true;
        $this->deletedAt = $deletedAt;
        return $this;
    }
    /**
     * Whether the schedule is currently active
     *
     * @return bool
     */
    public function getIsActive(): bool
    {
        return $this->isActive;
    }
    /**
     * Whether the schedule is currently active
     *
     * @param bool $isActive
     *
     * @return self
     */
    public function setIsActive(bool $isActive): self
    {
        $this->initialized['isActive'] = true;
        $this->isActive = $isActive;
        return $this;
    }
    /**
     * Knowledge base uuid associated with this schedule
     *
     * @return string
     */
    public function getKnowledgeBaseUuid(): string
    {
        return $this->knowledgeBaseUuid;
    }
    /**
     * Knowledge base uuid associated with this schedule
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
     * Last time the schedule was executed
     *
     * @return \DateTime
     */
    public function getLastRanAt(): \DateTime
    {
        return $this->lastRanAt;
    }
    /**
     * Last time the schedule was executed
     *
     * @param \DateTime $lastRanAt
     *
     * @return self
     */
    public function setLastRanAt(\DateTime $lastRanAt): self
    {
        $this->initialized['lastRanAt'] = true;
        $this->lastRanAt = $lastRanAt;
        return $this;
    }
    /**
     * Next scheduled run
     *
     * @return \DateTime
     */
    public function getNextRunAt(): \DateTime
    {
        return $this->nextRunAt;
    }
    /**
     * Next scheduled run
     *
     * @param \DateTime $nextRunAt
     *
     * @return self
     */
    public function setNextRunAt(\DateTime $nextRunAt): self
    {
        $this->initialized['nextRunAt'] = true;
        $this->nextRunAt = $nextRunAt;
        return $this;
    }
    /**
     * Scheduled time of execution (HH:MM:SS format)
     *
     * @return string
     */
    public function getTime(): string
    {
        return $this->time;
    }
    /**
     * Scheduled time of execution (HH:MM:SS format)
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
    /**
     * Updated at timestamp
     *
     * @return \DateTime
     */
    public function getUpdatedAt(): \DateTime
    {
        return $this->updatedAt;
    }
    /**
     * Updated at timestamp
     *
     * @param \DateTime $updatedAt
     *
     * @return self
     */
    public function setUpdatedAt(\DateTime $updatedAt): self
    {
        $this->initialized['updatedAt'] = true;
        $this->updatedAt = $updatedAt;
        return $this;
    }
    /**
     * Unique identifier for the scheduled indexing entry
     *
     * @return string
     */
    public function getUuid(): string
    {
        return $this->uuid;
    }
    /**
     * Unique identifier for the scheduled indexing entry
     *
     * @param string $uuid
     *
     * @return self
     */
    public function setUuid(string $uuid): self
    {
        $this->initialized['uuid'] = true;
        $this->uuid = $uuid;
        return $this;
    }
}