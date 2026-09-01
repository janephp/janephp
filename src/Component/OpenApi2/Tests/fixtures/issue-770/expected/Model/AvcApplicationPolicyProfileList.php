<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class AvcApplicationPolicyProfileList
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
     * @var list<AvcApplicationPolicyProfile>
     */
    public array $list;
}