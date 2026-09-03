<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Issue770\Model;

class SciSciEventCode
{
    /**
     * Total SCI accepted event code count
     *
     * @var int
     */
    public int $totalCount;
    /**
     * Indicates whether there are more SCI accepted event codes after the currently displayed list
     *
     * @var bool
     */
    public bool $hasMore;
    /**
     * Index of the first event code returned from the complete event code set
     *
     * @var int
     */
    public int $firstIndex;
    /**
     * @var list<SciSciEventCodeListItem>
     */
    public array $list;
}