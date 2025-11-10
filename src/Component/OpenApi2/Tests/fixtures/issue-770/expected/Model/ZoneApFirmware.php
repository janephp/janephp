<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class ZoneApFirmware
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
     * version of the AP firmare
     *
     * @var string
     */
    protected $firmwareVersion;
    /**
     * summary of the AP Model is unsupported for AP firmware version.
     *
     * @var list<ZoneUnsupportedApModel>
     */
    protected $unsupportedApModelSummary;
    /**
     * version of the AP firmare is supported for Upgrade or Downgrade.
     *
     * @var bool
     */
    protected $supported;
    /**
     * version of the AP firmare
     *
     * @return string
     */
    public function getFirmwareVersion(): string
    {
        return $this->firmwareVersion;
    }
    /**
     * version of the AP firmare
     *
     * @param string $firmwareVersion
     *
     * @return self
     */
    public function setFirmwareVersion(string $firmwareVersion): self
    {
        $this->initialized['firmwareVersion'] = true;
        $this->firmwareVersion = $firmwareVersion;
        return $this;
    }
    /**
     * summary of the AP Model is unsupported for AP firmware version.
     *
     * @return list<ZoneUnsupportedApModel>
     */
    public function getUnsupportedApModelSummary(): array
    {
        return $this->unsupportedApModelSummary;
    }
    /**
     * summary of the AP Model is unsupported for AP firmware version.
     *
     * @param list<ZoneUnsupportedApModel> $unsupportedApModelSummary
     *
     * @return self
     */
    public function setUnsupportedApModelSummary(array $unsupportedApModelSummary): self
    {
        $this->initialized['unsupportedApModelSummary'] = true;
        $this->unsupportedApModelSummary = $unsupportedApModelSummary;
        return $this;
    }
    /**
     * version of the AP firmare is supported for Upgrade or Downgrade.
     *
     * @return bool
     */
    public function getSupported(): bool
    {
        return $this->supported;
    }
    /**
     * version of the AP firmare is supported for Upgrade or Downgrade.
     *
     * @param bool $supported
     *
     * @return self
     */
    public function setSupported(bool $supported): self
    {
        $this->initialized['supported'] = true;
        $this->supported = $supported;
        return $this;
    }
}