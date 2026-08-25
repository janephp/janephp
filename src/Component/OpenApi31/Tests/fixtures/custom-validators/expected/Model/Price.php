<?php

namespace Jane\Component\OpenApi31\Tests\Expected\Model;

use Jane\Component\OpenApi31\Tests\Expected\Runtime\AdditionalAndPatternProperties;
use Jane\Component\OpenApi31\Tests\Expected\Runtime\AdditionalPropertiesInterface;
class Price implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * @var string
     */
    protected $amount;
    /**
     * @var string
     */
    protected $currency;
    /**
     * @var float
     */
    protected $discount;
    /**
     * @var string
     */
    protected $comment;
    /**
     * @return string
     */
    public function getAmount(): string
    {
        return $this->amount;
    }
    /**
     * @param string $amount
     *
     * @return self
     */
    public function setAmount(string $amount): self
    {
        $this->initialized['amount'] = true;
        $this->amount = $amount;
        return $this;
    }
    /**
     * @return string
     */
    public function getCurrency(): string
    {
        return $this->currency;
    }
    /**
     * @param string $currency
     *
     * @return self
     */
    public function setCurrency(string $currency): self
    {
        $this->initialized['currency'] = true;
        $this->currency = $currency;
        return $this;
    }
    /**
     * @return float
     */
    public function getDiscount(): float
    {
        return $this->discount;
    }
    /**
     * @param float $discount
     *
     * @return self
     */
    public function setDiscount(float $discount): self
    {
        $this->initialized['discount'] = true;
        $this->discount = $discount;
        return $this;
    }
    /**
     * @return string
     */
    public function getComment(): string
    {
        return $this->comment;
    }
    /**
     * @param string $comment
     *
     * @return self
     */
    public function setComment(string $comment): self
    {
        $this->initialized['comment'] = true;
        $this->comment = $comment;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['amount' => ['amount', 'getAmount', 'setAmount'], 'currency' => ['currency', 'getCurrency', 'setCurrency'], 'discount' => ['discount', 'getDiscount', 'setDiscount'], 'comment' => ['comment', 'getComment', 'setComment']];
    }
}