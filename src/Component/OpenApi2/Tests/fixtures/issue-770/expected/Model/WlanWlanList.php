<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class WlanWlanList
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
     * @var list<WlanWlanSummary>
     */
    public array $list;
}