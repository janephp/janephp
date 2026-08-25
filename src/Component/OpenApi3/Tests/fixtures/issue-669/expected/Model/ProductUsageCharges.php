<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ProductUsageCharges implements AdditionalPropertiesInterface
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
     * Description of usage charges
     *
     * @var string
     */
    protected $name;
    /**
     * Total amount charged
     *
     * @var string
     */
    protected $amount;
    /**
     * List of amount, and grouped aggregates by resource type.
     *
     * @var list<ProductChargeItem>
     */
    protected $items;
    /**
     * Description of usage charges
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * Description of usage charges
     *
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;
        return $this;
    }
    /**
     * Total amount charged
     *
     * @return string
     */
    public function getAmount(): string
    {
        return $this->amount;
    }
    /**
     * Total amount charged
     *
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
     * List of amount, and grouped aggregates by resource type.
     *
     * @return list<ProductChargeItem>
     */
    public function getItems(): array
    {
        return $this->items;
    }
    /**
     * List of amount, and grouped aggregates by resource type.
     *
     * @param list<ProductChargeItem> $items
     *
     * @return self
     */
    public function setItems(array $items): self
    {
        $this->initialized['items'] = true;
        $this->items = $items;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['name' => ['name', 'getName', 'setName'], 'amount' => ['amount', 'getAmount', 'setAmount'], 'items' => ['items', 'getItems', 'setItems']];
    }
}