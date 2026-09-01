<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ProductChargeItem implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * Amount of the charge
     *
     * @var string
     */
    public string $amount;
    /**
     * Description of the charge
     *
     * @var string
     */
    public string $name;
    /**
     * Number of times the charge was applied
     *
     * @var string
     */
    public string $count;
    public function definedProperties(): array
    {
        return ['amount' => 'amount', 'name' => 'name', 'count' => 'count'];
    }
}