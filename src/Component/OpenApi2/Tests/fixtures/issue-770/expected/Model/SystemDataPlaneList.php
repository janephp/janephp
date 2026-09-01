<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class SystemDataPlaneList
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
     * @var list<SystemDataPlaneListListItem>
     */
    public array $list;
}