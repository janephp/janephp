<?php

namespace Jane\Component\OpenApi31\Tests\EnumAsObjects\Model;

use Jane\Component\OpenApi31\Tests\EnumAsObjects\Runtime\AdditionalAndPatternProperties;
use Jane\Component\OpenApi31\Tests\EnumAsObjects\Runtime\AdditionalPropertiesInterface;
class Item implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
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
    public function definedProperties(): array
    {
        return ['status' => 'status', 'priority' => 'priority'];
    }
}