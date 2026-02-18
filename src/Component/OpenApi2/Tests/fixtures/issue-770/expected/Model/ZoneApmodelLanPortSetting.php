<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class ZoneApmodelLanPortSetting
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
     * @var string
     */
    protected $portName;
    /**
     * @var bool
     */
    protected $enabled;
    /**
     * @var CommonGenericRef
     */
    protected $ethPortProfile;
    /**
     * @return string
     */
    public function getPortName(): string
    {
        return $this->portName;
    }
    /**
     * @param string $portName
     *
     * @return self
     */
    public function setPortName(string $portName): self
    {
        $this->initialized['portName'] = true;
        $this->portName = $portName;
        return $this;
    }
    /**
     * @return bool
     */
    public function getEnabled(): bool
    {
        return $this->enabled;
    }
    /**
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
     * @return CommonGenericRef
     */
    public function getEthPortProfile(): CommonGenericRef
    {
        return $this->ethPortProfile;
    }
    /**
     * @param CommonGenericRef $ethPortProfile
     *
     * @return self
     */
    public function setEthPortProfile(CommonGenericRef $ethPortProfile): self
    {
        $this->initialized['ethPortProfile'] = true;
        $this->ethPortProfile = $ethPortProfile;
        return $this;
    }
}