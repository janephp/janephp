<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Issue770\Model;

class DpskGetDpskInfoList
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
     * Information list of DPSK
     *
     * @var list<DpskDpskInfoItem>
     */
    public array $list;
}