<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Issue770\Model;

class ProfileHs20ProviderList
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
     * @var list<ProfileHs20Provider>
     */
    public array $list;
    /**
     * @var CommonRbacMetadata
     */
    public CommonRbacMetadata $extra;
}