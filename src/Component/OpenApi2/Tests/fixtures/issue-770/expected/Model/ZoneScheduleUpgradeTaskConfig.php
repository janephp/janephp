<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Issue770\Model;

class ZoneScheduleUpgradeTaskConfig
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
     * Schedule time in millisecond timestamp, task will be process in every halt hour (exp: 1:00, 1:30 ...)
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
     * The task process status
     *
     * @var string
     */
    public string $status;
    /**
     * @var list<ZoneScheduleUpgradeZone>
     */
    public array $zoneList;
}