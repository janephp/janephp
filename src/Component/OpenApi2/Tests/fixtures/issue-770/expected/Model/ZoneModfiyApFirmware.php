<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class ZoneModfiyApFirmware
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
     * new version of the AP firmare
     *
     * @var string
     */
    protected $firmwareVersion;
    /**
     * new version of the AP firmare
     *
     * @return string
     */
    public function getFirmwareVersion(): string
    {
        return $this->firmwareVersion;
    }
    /**
     * new version of the AP firmare
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
}