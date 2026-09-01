<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class ZoneScheduleUpgradeHistory
{
    /**
     * @var string
     */
    public string $id;
    /**
     * Task name
     *
     * @var string
     */
    public string $taskName;
    /**
     * Schedule time in millisecond timestamp
     *
     * @var int
     */
    public int $scheduleTime;
    /**
     * Target version of the firmware upgrade or downgrade process
     *
     * @var string
     */
    public string $targetVersion;
    /**
     * @var list<ZoneScheduleUpgradeZone>
     */
    public array $zoneList;
    /**
     * Error log of schedule upgrade process
     *
     * @var string
     */
    public string $errorLog;
}