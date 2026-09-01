<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ProductUsageCharges implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * Description of usage charges
     *
     * @var string
     */
    public string $name;
    /**
     * Total amount charged
     *
     * @var string
     */
    public string $amount;
    /**
     * List of amount, and grouped aggregates by resource type.
     *
     * @var list<ProductChargeItem>
     */
    public array $items;
    public function definedProperties(): array
    {
        return ['name' => 'name', 'amount' => 'amount', 'items' => 'items'];
    }
}