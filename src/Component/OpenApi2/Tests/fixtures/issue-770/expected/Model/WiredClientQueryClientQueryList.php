<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class WiredClientQueryClientQueryList
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
     * @var list<WiredClientQueryCreateClientQuery>
     */
    public array $list;
}