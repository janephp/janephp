<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class ZoneScheduleUpgradeCreateTaskConfig
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
     * @var list<ZoneScheduleUpgradeCreateTaskConfigZoneListItem>
     */
    protected $zoneList;
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
     * @return list<ZoneScheduleUpgradeCreateTaskConfigZoneListItem>
     */
    public function getZoneList(): array
    {
        return $this->zoneList;
    }
    /**
     * @param list<ZoneScheduleUpgradeCreateTaskConfigZoneListItem> $zoneList
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