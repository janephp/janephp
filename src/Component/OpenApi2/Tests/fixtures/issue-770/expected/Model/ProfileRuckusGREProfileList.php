<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class ProfileRuckusGREProfileList
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
     * @var list<ProfileRuckusGREProfile>
     */
    public array $list;
    /**
     * @var CommonRbacMetadata
     */
    public CommonRbacMetadata $extra;
}