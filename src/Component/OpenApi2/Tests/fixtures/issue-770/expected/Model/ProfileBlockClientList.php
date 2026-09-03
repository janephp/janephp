<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Issue770\Model;

class ProfileBlockClientList
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
     * @var list<ProfileBlockClientListListItem>
     */
    public array $list;
}