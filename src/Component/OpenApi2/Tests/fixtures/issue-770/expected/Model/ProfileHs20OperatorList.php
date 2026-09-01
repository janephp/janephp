<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class ProfileHs20OperatorList
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
     * @var list<ProfileHs20Operator>
     */
    public array $list;
    /**
     * @var CommonRbacMetadata
     */
    public CommonRbacMetadata $extra;
}