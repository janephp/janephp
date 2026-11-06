<?php

namespace Jane\Component\OpenApi31\Tests\Expected\NullableArrayIncludeNullValueFalse\Model;

use Jane\Component\OpenApi31\Tests\Expected\NullableArrayIncludeNullValueFalse\Runtime\AdditionalAndPatternProperties;
use Jane\Component\OpenApi31\Tests\Expected\NullableArrayIncludeNullValueFalse\Runtime\AdditionalPropertiesInterface;
class ShippedItem implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var int
     */
    public int $quantity;
    public function definedProperties(): array
    {
        return ['quantity' => 'quantity'];
    }
}