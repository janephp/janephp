<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class GpuInfo implements AdditionalPropertiesInterface
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
     * The number of GPUs allocated to the Droplet.
     *
     * @var int
     */
    protected $count;
    /**
     * The model of the GPU.
     *
     * @var string
     */
    protected $model;
    /**
     * @var GpuInfoVram
     */
    protected $vram;
    /**
     * The number of GPUs allocated to the Droplet.
     *
     * @return int
     */
    public function getCount(): int
    {
        return $this->count;
    }
    /**
     * The number of GPUs allocated to the Droplet.
     *
     * @param int $count
     *
     * @return self
     */
    public function setCount(int $count): self
    {
        $this->initialized['count'] = true;
        $this->count = $count;
        return $this;
    }
    /**
     * The model of the GPU.
     *
     * @return string
     */
    public function getModel(): string
    {
        return $this->model;
    }
    /**
     * The model of the GPU.
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
     * @return GpuInfoVram
     */
    public function getVram(): GpuInfoVram
    {
        return $this->vram;
    }
    /**
     * @param GpuInfoVram $vram
     *
     * @return self
     */
    public function setVram(GpuInfoVram $vram): self
    {
        $this->initialized['vram'] = true;
        $this->vram = $vram;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['count' => ['count', 'getCount', 'setCount'], 'model' => ['model', 'getModel', 'setModel'], 'vram' => ['vram', 'getVram', 'setVram']];
    }
}