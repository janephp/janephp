<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class ProfileAuthenticationProfileList
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
     * @var list<ProfileAuthenticationProfile>
     */
    public array $list;
}