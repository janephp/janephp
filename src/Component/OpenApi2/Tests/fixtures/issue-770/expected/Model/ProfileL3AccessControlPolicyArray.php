<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Issue770\Model;

class ProfileL3AccessControlPolicyArray
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
     * @var list<ProfileL3AccessControlPolicy>
     */
    public array $list;
}