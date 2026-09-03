<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Issue770\Model;

class MeshNeighborInfoMeshNeighborInfoList
{
    /**
     * MeshNeighborInfos count.
     *
     * @var int
     */
    public int $rawDataTotalCount;
    /**
     * MeshNeighborInfos count in this response.
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
     * Indicator of whether there are more MeshNeighborInfo after the current displayed list
     *
     * @var bool
     */
    public bool $hasMore;
    /**
     * Index of the first MeshNeighborInfo returned out of the complete Rogue AP list
     *
     * @var int
     */
    public int $firstIndex;
    /**
     * @var list<MeshNeighborInfoMeshNeighborInfo>
     */
    public array $list;
}