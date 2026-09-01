<?php

namespace Jane\Component\OpenApi2\Tests\EnumAsObjects\Model;

class Item
{
    /**
     * The status of an item
     *
     * @var ItemStatus
     */
    public ItemStatus $status;
    /**
     * The priority level of an item
     *
     * @var Priority
     */
    public Priority $priority;
}