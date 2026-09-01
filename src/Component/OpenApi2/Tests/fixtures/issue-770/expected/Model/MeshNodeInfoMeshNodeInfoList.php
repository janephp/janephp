<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class MeshNodeInfoMeshNodeInfoList
{
    /**
     * MeshNodeInfos count.
     *
     * @var int
     */
    public int $rawDataTotalCount;
    /**
     * MeshNodeInfos count in this response.
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
     * Indicator of whether there are more MeshNodeInfo after the current displayed list
     *
     * @var bool
     */
    public bool $hasMore;
    /**
     * Index of the first MeshNodeInfo returned out of the complete Rogue AP list
     *
     * @var int
     */
    public int $firstIndex;
    /**
     * @var list<MeshNodeInfoMeshNodeInfo>
     */
    public array $list;
}