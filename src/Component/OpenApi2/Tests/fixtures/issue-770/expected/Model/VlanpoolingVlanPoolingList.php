<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Issue770\Model;

class VlanpoolingVlanPoolingList
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
     * @var list<VlanpoolingVlanPoolingListListItem>
     */
    public array $list;
}