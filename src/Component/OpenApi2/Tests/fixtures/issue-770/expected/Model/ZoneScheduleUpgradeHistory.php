<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class ZoneScheduleUpgradeHistory
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
     * Schedule time in millisecond timestamp
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
     * @var list<ZoneScheduleUpgradeZone>
     */
    protected $zoneList;
    /**
     * Error log of schedule upgrade process
     *
     * @var string
     */
    protected $errorLog;
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
     * Schedule time in millisecond timestamp
     *
     * @return int
     */
    public function getScheduleTime(): int
    {
        return $this->scheduleTime;
    }
    /**
     * Schedule time in millisecond timestamp
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
    /**
     * Error log of schedule upgrade process
     *
     * @return string
     */
    public function getErrorLog(): string
    {
        return $this->errorLog;
    }
    /**
     * Error log of schedule upgrade process
     *
     * @param string $errorLog
     *
     * @return self
     */
    public function setErrorLog(string $errorLog): self
    {
        $this->initialized['errorLog'] = true;
        $this->errorLog = $errorLog;
        return $this;
    }
}