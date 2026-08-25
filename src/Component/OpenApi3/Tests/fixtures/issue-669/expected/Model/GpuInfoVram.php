<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class GpuInfoVram implements AdditionalPropertiesInterface
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
     * The amount of VRAM allocated to the GPU.
     *
     * @var int
     */
    protected $amount;
    /**
     * The unit of measure for the VRAM.
     *
     * @var string
     */
    protected $unit;
    /**
     * The amount of VRAM allocated to the GPU.
     *
     * @return int
     */
    public function getAmount(): int
    {
        return $this->amount;
    }
    /**
     * The amount of VRAM allocated to the GPU.
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
     * The unit of measure for the VRAM.
     *
     * @return string
     */
    public function getUnit(): string
    {
        return $this->unit;
    }
    /**
     * The unit of measure for the VRAM.
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
    public function definedProperties(): array
    {
        return ['amount' => ['amount', 'getAmount', 'setAmount'], 'unit' => ['unit', 'getUnit', 'setUnit']];
    }
}