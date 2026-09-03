<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Issue770\Model;

class ApNeighborAPList
{
    /**
     * Total mesh neighbor APs count
     *
     * @var int
     */
    public int $totalCount;
    /**
     * Indicator of whether there are more Mesh Neighbor APs after the current displayed list
     *
     * @var bool
     */
    public bool $hasMore;
    /**
     * Index of the first Mesh Neighbor AP returned out of the complete Mesh Neighbor AP list
     *
     * @var int
     */
    public int $firstIndex;
    /**
     * @var list<ApNeighborAPListListItem>
     */
    public array $list;
}