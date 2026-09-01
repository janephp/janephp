<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class ApApListEntry
{
    /**
     * Total AP count
     *
     * @var int
     */
    public int $totalCount;
    /**
     * Indicates whether there are more APs after the list that is currently displayed
     *
     * @var bool
     */
    public bool $hasMore;
    /**
     * Index of the first AP returned out of the complete AP list
     *
     * @var int
     */
    public int $firstIndex;
    /**
     * @var list<ApApListEntryListItem>
     */
    public array $list;
}