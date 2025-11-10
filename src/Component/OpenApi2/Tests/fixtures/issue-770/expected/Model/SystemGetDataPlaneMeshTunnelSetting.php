<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class SystemGetDataPlaneMeshTunnelSetting
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
     * Data Plane mesh tunnel encrypted.
     *
     * @var bool
     */
    protected $encrypted;
    /**
     * Data Plane mesh tunnel encrypted.
     *
     * @return bool
     */
    public function getEncrypted(): bool
    {
        return $this->encrypted;
    }
    /**
     * Data Plane mesh tunnel encrypted.
     *
     * @param bool $encrypted
     *
     * @return self
     */
    public function setEncrypted(bool $encrypted): self
    {
        $this->initialized['encrypted'] = true;
        $this->encrypted = $encrypted;
        return $this;
    }
}