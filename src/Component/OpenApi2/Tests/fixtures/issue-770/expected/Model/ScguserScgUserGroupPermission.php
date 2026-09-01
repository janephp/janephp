<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Issue770\Model;

class ScguserScgUserGroupPermission
{
    /**
     * Resource type
     *
     * @var string
     */
    public string $resource;
    /**
     * Access level
     *
     * @var string
     */
    public string $access;
    /**
     * Resource display name
     *
     * @var string
     */
    public string $display;
    /**
     * Resource items
     *
     * @var list<ScguserScgUserGroupPermissionItemsItem>
     */
    public array $items;
    /**
     * Descriptions of Resource items
     *
     * @var list<string>
     */
    public array $itemsDescription;
    /**
     * Resource id list
     *
     * @var list<string>
     */
    public array $ids;
}