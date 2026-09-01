<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class IdentityIdentityList
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
     * @var list<IdentityIdentityListListItem>
     */
    public array $list;
}