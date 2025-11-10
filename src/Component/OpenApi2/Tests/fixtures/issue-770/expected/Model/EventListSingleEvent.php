<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class EventListSingleEvent
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
     * @var string
     */
    protected $activity;
    /**
     * @var string
     */
    protected $category;
    /**
     * @var int
     */
    protected $eventCode;
    /**
     * @var string
     */
    protected $eventType;
    /**
     * @var string
     */
    protected $id;
    /**
     * @var int
     */
    protected $insertionTime;
    /**
     * @var string
     */
    protected $severity;
    /**
     * @return string
     */
    public function getActivity(): string
    {
        return $this->activity;
    }
    /**
     * @param string $activity
     *
     * @return self
     */
    public function setActivity(string $activity): self
    {
        $this->initialized['activity'] = true;
        $this->activity = $activity;
        return $this;
    }
    /**
     * @return string
     */
    public function getCategory(): string
    {
        return $this->category;
    }
    /**
     * @param string $category
     *
     * @return self
     */
    public function setCategory(string $category): self
    {
        $this->initialized['category'] = true;
        $this->category = $category;
        return $this;
    }
    /**
     * @return int
     */
    public function getEventCode(): int
    {
        return $this->eventCode;
    }
    /**
     * @param int $eventCode
     *
     * @return self
     */
    public function setEventCode(int $eventCode): self
    {
        $this->initialized['eventCode'] = true;
        $this->eventCode = $eventCode;
        return $this;
    }
    /**
     * @return string
     */
    public function getEventType(): string
    {
        return $this->eventType;
    }
    /**
     * @param string $eventType
     *
     * @return self
     */
    public function setEventType(string $eventType): self
    {
        $this->initialized['eventType'] = true;
        $this->eventType = $eventType;
        return $this;
    }
    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    /**
     * @param string $id
     *
     * @return self
     */
    public function setId(string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;
        return $this;
    }
    /**
     * @return int
     */
    public function getInsertionTime(): int
    {
        return $this->insertionTime;
    }
    /**
     * @param int $insertionTime
     *
     * @return self
     */
    public function setInsertionTime(int $insertionTime): self
    {
        $this->initialized['insertionTime'] = true;
        $this->insertionTime = $insertionTime;
        return $this;
    }
    /**
     * @return string
     */
    public function getSeverity(): string
    {
        return $this->severity;
    }
    /**
     * @param string $severity
     *
     * @return self
     */
    public function setSeverity(string $severity): self
    {
        $this->initialized['severity'] = true;
        $this->severity = $severity;
        return $this;
    }
}