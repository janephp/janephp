<?php

namespace Jane\Component\OpenApi31\Tests\Expected\Issue966\Model;

use Jane\Component\OpenApi31\Tests\Expected\Issue966\Runtime\AdditionalAndPatternProperties;
use Jane\Component\OpenApi31\Tests\Expected\Issue966\Runtime\AdditionalPropertiesInterface;
class Order implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var OrderProductData
     */
    public OrderProductData $productData;
    /**
     * @var OrderProduct
     */
    public OrderProduct $product;
    public function definedProperties(): array
    {
        return ['productData' => 'product_data', 'product' => 'product'];
    }
}