<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class EventListEventQueryResultList
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
     * @var list<EventListSingleEvent>
     */
    public array $list;
    /**
     * @var int
     */
    public int $rawDataTotalCount;
}