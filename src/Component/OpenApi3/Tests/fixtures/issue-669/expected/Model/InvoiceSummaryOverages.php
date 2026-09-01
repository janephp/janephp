<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class InvoiceSummaryOverages implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * Name of the charge
     *
     * @var string
     */
    public string $name;
    /**
     * Total amount charged in USD
     *
     * @var string
     */
    public string $amount;
    public function definedProperties(): array
    {
        return ['name' => 'name', 'amount' => 'amount'];
    }
}