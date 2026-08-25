<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class DatabaseStorageAutoscaleParams implements AdditionalPropertiesInterface
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
     * Whether storage autoscaling is enabled for the cluster
     *
     * @var bool
     */
    protected $enabled;
    /**
     * The storage usage threshold percentage that triggers autoscaling. When storage usage exceeds this percentage, additional storage will be added automatically.
     *
     * @var int
     */
    protected $thresholdPercent;
    /**
     * The amount of additional storage to add (in GiB) when autoscaling is triggered
     *
     * @var int
     */
    protected $incrementGib;
    /**
     * Whether storage autoscaling is enabled for the cluster
     *
     * @return bool
     */
    public function getEnabled(): bool
    {
        return $this->enabled;
    }
    /**
     * Whether storage autoscaling is enabled for the cluster
     *
     * @param bool $enabled
     *
     * @return self
     */
    public function setEnabled(bool $enabled): self
    {
        $this->initialized['enabled'] = true;
        $this->enabled = $enabled;
        return $this;
    }
    /**
     * The storage usage threshold percentage that triggers autoscaling. When storage usage exceeds this percentage, additional storage will be added automatically.
     *
     * @return int
     */
    public function getThresholdPercent(): int
    {
        return $this->thresholdPercent;
    }
    /**
     * The storage usage threshold percentage that triggers autoscaling. When storage usage exceeds this percentage, additional storage will be added automatically.
     *
     * @param int $thresholdPercent
     *
     * @return self
     */
    public function setThresholdPercent(int $thresholdPercent): self
    {
        $this->initialized['thresholdPercent'] = true;
        $this->thresholdPercent = $thresholdPercent;
        return $this;
    }
    /**
     * The amount of additional storage to add (in GiB) when autoscaling is triggered
     *
     * @return int
     */
    public function getIncrementGib(): int
    {
        return $this->incrementGib;
    }
    /**
     * The amount of additional storage to add (in GiB) when autoscaling is triggered
     *
     * @param int $incrementGib
     *
     * @return self
     */
    public function setIncrementGib(int $incrementGib): self
    {
        $this->initialized['incrementGib'] = true;
        $this->incrementGib = $incrementGib;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['enabled' => ['enabled', 'getEnabled', 'setEnabled'], 'thresholdPercent' => ['threshold_percent', 'getThresholdPercent', 'setThresholdPercent'], 'incrementGib' => ['increment_gib', 'getIncrementGib', 'setIncrementGib']];
    }
}