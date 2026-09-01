<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class EventManagementEventDataList
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
    public int $rawDataTotalCount;
    /**
     * @var list<EventManagementSingleEventSetting>
     */
    public array $list;
}