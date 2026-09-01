<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class SystemSmsList
{
    /**
     * Total SMS gateway count
     *
     * @var int
     */
    public int $totalCount;
    /**
     * Indicates whether there are more SMS gateway after the list that is currently displayed
     *
     * @var bool
     */
    public bool $hasMore;
    /**
     * Index of the first SMS gateway returned out of the complete SMS gateway list
     *
     * @var int
     */
    public int $firstIndex;
    /**
     * @var list<SystemSms>
     */
    public array $list;
    /**
     * @var CommonRbacMetadata
     */
    public CommonRbacMetadata $extra;
}