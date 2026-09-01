<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class GpuInfoVram implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * The amount of VRAM allocated to the GPU.
     *
     * @var int
     */
    public int $amount;
    /**
     * The unit of measure for the VRAM.
     *
     * @var string
     */
    public string $unit;
    public function definedProperties(): array
    {
        return ['amount' => 'amount', 'unit' => 'unit'];
    }
}