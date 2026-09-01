<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class AaaServerQueryAaaServerQueryList
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
     * @var list<AaaServerQueryCreateAaaServer>
     */
    public array $list;
}