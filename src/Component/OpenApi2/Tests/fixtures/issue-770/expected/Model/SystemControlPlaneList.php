<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Issue770\Model;

class SystemControlPlaneList
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
     * @var list<SystemControlPlaneListListItem>
     */
    public array $list;
}