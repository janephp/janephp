<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class ZoneScheduleUpgradeTaskConfig
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
    protected $id;
    /**
     * Task name
     *
     * @var string
     */
    protected $taskName;
    /**
     * Schedule time in millisecond timestamp, task will be process in every halt hour (exp: 1:00, 1:30 ...)
     *
     * @var int
     */
    protected $scheduleTime;
    /**
     * Target version of the firmware upgrade or downgrade process
     *
     * @var string
     */
    protected $targetVersion;
    /**
     * The task process status
     *
     * @var string
     */
    protected $status;
    /**
     * @var list<ZoneScheduleUpgradeZone>
     */
    protected $zoneList;
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
     * Task name
     *
     * @return string
     */
    public function getTaskName(): string
    {
        return $this->taskName;
    }
    /**
     * Task name
     *
     * @param string $taskName
     *
     * @return self
     */
    public function setTaskName(string $taskName): self
    {
        $this->initialized['taskName'] = true;
        $this->taskName = $taskName;
        return $this;
    }
    /**
     * Schedule time in millisecond timestamp, task will be process in every halt hour (exp: 1:00, 1:30 ...)
     *
     * @return int
     */
    public function getScheduleTime(): int
    {
        return $this->scheduleTime;
    }
    /**
     * Schedule time in millisecond timestamp, task will be process in every halt hour (exp: 1:00, 1:30 ...)
     *
     * @param int $scheduleTime
     *
     * @return self
     */
    public function setScheduleTime(int $scheduleTime): self
    {
        $this->initialized['scheduleTime'] = true;
        $this->scheduleTime = $scheduleTime;
        return $this;
    }
    /**
     * Target version of the firmware upgrade or downgrade process
     *
     * @return string
     */
    public function getTargetVersion(): string
    {
        return $this->targetVersion;
    }
    /**
     * Target version of the firmware upgrade or downgrade process
     *
     * @param string $targetVersion
     *
     * @return self
     */
    public function setTargetVersion(string $targetVersion): self
    {
        $this->initialized['targetVersion'] = true;
        $this->targetVersion = $targetVersion;
        return $this;
    }
    /**
     * The task process status
     *
     * @return string
     */
    public function getStatus(): string
    {
        return $this->status;
    }
    /**
     * The task process status
     *
     * @param string $status
     *
     * @return self
     */
    public function setStatus(string $status): self
    {
        $this->initialized['status'] = true;
        $this->status = $status;
        return $this;
    }
    /**
     * @return list<ZoneScheduleUpgradeZone>
     */
    public function getZoneList(): array
    {
        return $this->zoneList;
    }
    /**
     * @param list<ZoneScheduleUpgradeZone> $zoneList
     *
     * @return self
     */
    public function setZoneList(array $zoneList): self
    {
        $this->initialized['zoneList'] = true;
        $this->zoneList = $zoneList;
        return $this;
    }
}