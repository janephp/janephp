<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class WlanQueryWlanQueryList
{
    /**
     * @var int
     */
    public int $firstIndex;
    /**
     * @var bool
     */
    public bool $hasMore;
    /**
     * @var int
     */
    public int $totalCount;
    /**
     * @var CommonRbacMetadata
     */
    public CommonRbacMetadata $extra;
    /**
     * @var list<WlanQueryCreateWlanQuery>
     */
    public array $list;
}