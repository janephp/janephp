<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class IndoorMapIndoorMapSummaryList
{
    /**
     * Total indoor maps count
     *
     * @var int
     */
    public int $totalCount;
    /**
     * Indicates whether there are more indoor maps after the list that is currently displayed
     *
     * @var bool
     */
    public bool $hasMore;
    /**
     * Index of the first indoorMapList returned out of the complete indoor maps list
     *
     * @var int
     */
    public int $firstIndex;
    /**
     * @var CommonRbacMetadata
     */
    public CommonRbacMetadata $extra;
    /**
     * @var list<IndoorMapIndoorMapSummary>
     */
    public array $list;
}