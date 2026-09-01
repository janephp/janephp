<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Issue770\Model;

class RogueInfoRogueInfoList
{
    /**
     * Total Rogue APs count.
     *
     * @var int
     */
    public int $rawDataTotalCount;
    /**
     * Total Rogue APs count in this response.
     *
     * @var int
     */
    public int $totalCount;
    /**
     * Any additional response data.
     *
     * @var mixed
     */
    public $extra;
    /**
     * Indicator of whether there are more Rogue AP after the current displayed list
     *
     * @var bool
     */
    public bool $hasMore;
    /**
     * Index of the first Rogue AP returned out of the complete Rogue AP list
     *
     * @var int
     */
    public int $firstIndex;
    /**
     * @var list<RogueInfoRogueInfo>
     */
    public array $list;
}