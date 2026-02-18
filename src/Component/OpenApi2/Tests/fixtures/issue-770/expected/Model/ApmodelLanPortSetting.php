<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class ApmodelLanPortSetting
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
     * When overwriteVlanEnabled is true, vlanUntagId and members will override ethPortProfile
     *
     * @var bool
     */
    protected $overwriteVlanEnabled;
    /**
     * @var int
     */
    protected $vlanUntagId;
    /**
     * @var string
     */
    protected $members;
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
     * When overwriteVlanEnabled is true, vlanUntagId and members will override ethPortProfile
     *
     * @return bool
     */
    public function getOverwriteVlanEnabled(): bool
    {
        return $this->overwriteVlanEnabled;
    }
    /**
     * When overwriteVlanEnabled is true, vlanUntagId and members will override ethPortProfile
     *
     * @param bool $overwriteVlanEnabled
     *
     * @return self
     */
    public function setOverwriteVlanEnabled(bool $overwriteVlanEnabled): self
    {
        $this->initialized['overwriteVlanEnabled'] = true;
        $this->overwriteVlanEnabled = $overwriteVlanEnabled;
        return $this;
    }
    /**
     * @return int
     */
    public function getVlanUntagId(): int
    {
        return $this->vlanUntagId;
    }
    /**
     * @param int $vlanUntagId
     *
     * @return self
     */
    public function setVlanUntagId(int $vlanUntagId): self
    {
        $this->initialized['vlanUntagId'] = true;
        $this->vlanUntagId = $vlanUntagId;
        return $this;
    }
    /**
     * @return string
     */
    public function getMembers(): string
    {
        return $this->members;
    }
    /**
     * @param string $members
     *
     * @return self
     */
    public function setMembers(string $members): self
    {
        $this->initialized['members'] = true;
        $this->members = $members;
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