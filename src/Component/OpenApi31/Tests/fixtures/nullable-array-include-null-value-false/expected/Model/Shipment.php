<?php

namespace Jane\Component\OpenApi31\Tests\Expected\NullableArrayIncludeNullValueFalse\Model;

use Jane\Component\OpenApi31\Tests\Expected\NullableArrayIncludeNullValueFalse\Runtime\AdditionalAndPatternProperties;
use Jane\Component\OpenApi31\Tests\Expected\NullableArrayIncludeNullValueFalse\Runtime\AdditionalPropertiesInterface;
class Shipment implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var list<ShippedItem>|null
     */
    public ?array $shippedItems;
    /**
     * @var list<string>|null
     */
    public ?array $tags;
    public function definedProperties(): array
    {
        return ['shippedItems' => 'shipped_items', 'tags' => 'tags'];
    }
}