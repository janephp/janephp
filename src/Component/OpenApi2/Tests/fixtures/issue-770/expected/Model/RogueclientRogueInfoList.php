<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class RogueclientRogueInfoList
{
    /**
     * Total Rogue Clients count.
     *
     * @var int
     */
    public int $rawDataTotalCount;
    /**
     * Total Rogue Clients count in this response.
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
     * Indicator of whether there are more Rogue Clients after the current displayed list
     *
     * @var bool
     */
    public bool $hasMore;
    /**
     * Index of the first Rogue AP returned out of the complete Rogue Client list
     *
     * @var int
     */
    public int $firstIndex;
    /**
     * @var list<RogueclientRogueInfo>
     */
    public array $list;
}