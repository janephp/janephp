<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class ScguserScgUserGroupPermissionList
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
     * @var list<ScguserScgUserGroupPermission>
     */
    public array $list;
    /**
     * Any additional response data.
     *
     * @var ScguserScgUserGroupPermissionListExtra
     */
    public ScguserScgUserGroupPermissionListExtra $extra;
}