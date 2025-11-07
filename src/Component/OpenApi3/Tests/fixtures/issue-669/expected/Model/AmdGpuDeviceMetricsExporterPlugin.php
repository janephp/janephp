<?php

namespace Jane\Generated\DigitalOcean\Model;

class AmdGpuDeviceMetricsExporterPlugin extends \ArrayObject
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
     * Indicates whether the AMD Device Metrics Exporter is enabled.
     *
     * @var bool
     */
    protected $enabled;
    /**
     * Indicates whether the AMD Device Metrics Exporter is enabled.
     *
     * @return bool
     */
    public function getEnabled(): bool
    {
        return $this->enabled;
    }
    /**
     * Indicates whether the AMD Device Metrics Exporter is enabled.
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
}