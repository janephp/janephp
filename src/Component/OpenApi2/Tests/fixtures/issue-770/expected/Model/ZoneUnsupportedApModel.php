<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class ZoneUnsupportedApModel
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
     * name of the AP Model
     *
     * @var string
     */
    protected $model;
    /**
     * amount of the AP Model
     *
     * @var int
     */
    protected $amount;
    /**
     * name of the AP Model
     *
     * @return string
     */
    public function getModel(): string
    {
        return $this->model;
    }
    /**
     * name of the AP Model
     *
     * @param string $model
     *
     * @return self
     */
    public function setModel(string $model): self
    {
        $this->initialized['model'] = true;
        $this->model = $model;
        return $this;
    }
    /**
     * amount of the AP Model
     *
     * @return int
     */
    public function getAmount(): int
    {
        return $this->amount;
    }
    /**
     * amount of the AP Model
     *
     * @param int $amount
     *
     * @return self
     */
    public function setAmount(int $amount): self
    {
        $this->initialized['amount'] = true;
        $this->amount = $amount;
        return $this;
    }
}