<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class ProfileIpsecProfileList
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
     * @var list<ProfileIpsecProfile>
     */
    public array $list;
    /**
     * @var CommonRbacMetadata
     */
    public CommonRbacMetadata $extra;
}