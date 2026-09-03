<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Issue770\Model;

class ProfileFirewallProfileArray
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
     * @var list<ProfileFirewallProfile>
     */
    public array $list;
}