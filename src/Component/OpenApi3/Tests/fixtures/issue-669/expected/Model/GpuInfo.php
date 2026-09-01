<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class GpuInfo implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * The number of GPUs allocated to the Droplet.
     *
     * @var int
     */
    public int $count;
    /**
     * The model of the GPU.
     *
     * @var string
     */
    public string $model;
    /**
     * @var GpuInfoVram
     */
    public GpuInfoVram $vram;
    public function definedProperties(): array
    {
        return ['count' => 'count', 'model' => 'model', 'vram' => 'vram'];
    }
}