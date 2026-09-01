<?php

namespace Jane\Component\OpenApi31\Tests\Expected\Model;

use Jane\Component\OpenApi31\Tests\Expected\Runtime\AdditionalAndPatternProperties;
use Jane\Component\OpenApi31\Tests\Expected\Runtime\AdditionalPropertiesInterface;
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