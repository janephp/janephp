<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Issue770\Model;

class AlarmListAlarmQueryResultList
{
    /**
     * @var int
     */
    public int $firstIndex;
    /**
     * @var bool
     */
    public bool $hasMore;
    /**
     * @var int
     */
    public int $totalCount;
    /**
     * @var list<AlarmListSingleAlarm>
     */
    public array $list;
    /**
     * @var int
     */
    public int $rawDataTotalCount;
}