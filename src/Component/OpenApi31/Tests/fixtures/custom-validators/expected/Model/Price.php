<?php

namespace Jane\Component\OpenApi31\Tests\Expected\Model;

use Jane\Component\OpenApi31\Tests\Expected\Runtime\AdditionalAndPatternProperties;
use Jane\Component\OpenApi31\Tests\Expected\Runtime\AdditionalPropertiesInterface;
class Price implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var string
     */
    public string $amount;
    /**
     * @var string
     */
    public string $currency;
    /**
     * @var float
     */
    public float $discount;
    /**
     * @var string
     */
    public string $comment;
    public function definedProperties(): array
    {
        return ['amount' => 'amount', 'currency' => 'currency', 'discount' => 'discount', 'comment' => 'comment'];
    }
}