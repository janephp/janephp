<?php

namespace Jane\Generated\DigitalOcean\Model;

class ProductChargeItem extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * Amount of the charge
     *
     * @var string
     */
    protected $amount;
    /**
     * Description of the charge
     *
     * @var string
     */
    protected $name;
    /**
     * Number of times the charge was applied
     *
     * @var string
     */
    protected $count;
    /**
     * Amount of the charge
     *
     * @return string
     */
    public function getAmount(): string
    {
        return $this->amount;
    }
    /**
     * Amount of the charge
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
     * Description of the charge
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * Description of the charge
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
     * Number of times the charge was applied
     *
     * @return string
     */
    public function getCount(): string
    {
        return $this->count;
    }
    /**
     * Number of times the charge was applied
     *
     * @param string $count
     *
     * @return self
     */
    public function setCount(string $count): self
    {
        $this->initialized['count'] = true;
        $this->count = $count;
        return $this;
    }
}