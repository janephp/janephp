<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class DpskDpskQueryList
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
     * @var CommonRbacMetadata
     */
    public CommonRbacMetadata $extra;
    /**
     * Information list of DPSK
     *
     * @var list<DpskDpskQueryListListItem>
     */
    public array $list;
}