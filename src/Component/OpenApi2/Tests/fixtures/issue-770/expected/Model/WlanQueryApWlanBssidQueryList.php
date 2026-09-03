<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Issue770\Model;

class WlanQueryApWlanBssidQueryList
{
    /**
     * Index of first index in current page
     *
     * @var int
     */
    public int $firstIndex;
    /**
     * Has more data or not
     *
     * @var bool
     */
    public bool $hasMore;
    /**
     * Total matched AP count
     *
     * @var int
     */
    public int $totalCount;
    /**
     * @var CommonRbacMetadata
     */
    public CommonRbacMetadata $extra;
    /**
     * @var list<WlanQueryApWlanBssid>
     */
    public array $list;
}