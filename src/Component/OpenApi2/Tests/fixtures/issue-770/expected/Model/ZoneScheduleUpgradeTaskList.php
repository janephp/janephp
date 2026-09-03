<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Issue770\Model;

class ZoneScheduleUpgradeTaskList
{
    /**
     * @var int
     */
    public int $totalCount;
    /**
     * @var bool
     */
    public bool $hasMore;
    /**
     * @var int
     */
    public int $firstIndex;
    /**
     * @var list<ZoneScheduleUpgradeTaskConfig>
     */
    public array $list;
}