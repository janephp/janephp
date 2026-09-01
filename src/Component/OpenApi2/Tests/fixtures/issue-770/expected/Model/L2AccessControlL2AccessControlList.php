<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class L2AccessControlL2AccessControlList
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
     * @var list<L2AccessControlL2AccessControl>
     */
    public array $list;
}