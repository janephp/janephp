<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class ApApLinemanSummary
{
    /**
     * Total AP count
     *
     * @var int
     */
    public int $totalCount;
    /**
     * Indicates if there are more APs after the currently displayed list
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
     * @var list<ApApLinemanSummaryListItem>
     */
    public array $list;
}