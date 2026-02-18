<?php

namespace Jane\Generated\DigitalOcean\Model;

class DiskInfoSize extends \ArrayObject
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
     * The amount of space allocated to the disk.
     *
     * @var int
     */
    protected $amount;
    /**
     * The unit of measure for the disk size.
     *
     * @var string
     */
    protected $unit;
    /**
     * The amount of space allocated to the disk.
     *
     * @return int
     */
    public function getAmount(): int
    {
        return $this->amount;
    }
    /**
     * The amount of space allocated to the disk.
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
    /**
     * The unit of measure for the disk size.
     *
     * @return string
     */
    public function getUnit(): string
    {
        return $this->unit;
    }
    /**
     * The unit of measure for the disk size.
     *
     * @param string $unit
     *
     * @return self
     */
    public function setUnit(string $unit): self
    {
        $this->initialized['unit'] = true;
        $this->unit = $unit;
        return $this;
    }
}