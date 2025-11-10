<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class WlanWlanVlan
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
     * Access VLAN ID
     *
     * @var int
     */
    protected $accessVlan = 1;
    /**
     * Indicates whether the AAA VLAN settings can be overriden or not
     *
     * @var bool
     */
    protected $aaaVlanOverride;
    /**
     * Indicates whether Q-in-Q is allowed at the core network or not
     *
     * @var bool
     */
    protected $coreQinQEnabled;
    /**
     * Core SVLAN ID. This only applies when core Q-in-Q is enabled
     *
     * @var int
     */
    protected $coreSVlan;
    /**
     * @var CommonGenericRef
     */
    protected $vlanPooling;
    /**
     * Access VLAN ID
     *
     * @return int
     */
    public function getAccessVlan(): int
    {
        return $this->accessVlan;
    }
    /**
     * Access VLAN ID
     *
     * @param int $accessVlan
     *
     * @return self
     */
    public function setAccessVlan(int $accessVlan): self
    {
        $this->initialized['accessVlan'] = true;
        $this->accessVlan = $accessVlan;
        return $this;
    }
    /**
     * Indicates whether the AAA VLAN settings can be overriden or not
     *
     * @return bool
     */
    public function getAaaVlanOverride(): bool
    {
        return $this->aaaVlanOverride;
    }
    /**
     * Indicates whether the AAA VLAN settings can be overriden or not
     *
     * @param bool $aaaVlanOverride
     *
     * @return self
     */
    public function setAaaVlanOverride(bool $aaaVlanOverride): self
    {
        $this->initialized['aaaVlanOverride'] = true;
        $this->aaaVlanOverride = $aaaVlanOverride;
        return $this;
    }
    /**
     * Indicates whether Q-in-Q is allowed at the core network or not
     *
     * @return bool
     */
    public function getCoreQinQEnabled(): bool
    {
        return $this->coreQinQEnabled;
    }
    /**
     * Indicates whether Q-in-Q is allowed at the core network or not
     *
     * @param bool $coreQinQEnabled
     *
     * @return self
     */
    public function setCoreQinQEnabled(bool $coreQinQEnabled): self
    {
        $this->initialized['coreQinQEnabled'] = true;
        $this->coreQinQEnabled = $coreQinQEnabled;
        return $this;
    }
    /**
     * Core SVLAN ID. This only applies when core Q-in-Q is enabled
     *
     * @return int
     */
    public function getCoreSVlan(): int
    {
        return $this->coreSVlan;
    }
    /**
     * Core SVLAN ID. This only applies when core Q-in-Q is enabled
     *
     * @param int $coreSVlan
     *
     * @return self
     */
    public function setCoreSVlan(int $coreSVlan): self
    {
        $this->initialized['coreSVlan'] = true;
        $this->coreSVlan = $coreSVlan;
        return $this;
    }
    /**
     * @return CommonGenericRef
     */
    public function getVlanPooling(): CommonGenericRef
    {
        return $this->vlanPooling;
    }
    /**
     * @param CommonGenericRef $vlanPooling
     *
     * @return self
     */
    public function setVlanPooling(CommonGenericRef $vlanPooling): self
    {
        $this->initialized['vlanPooling'] = true;
        $this->vlanPooling = $vlanPooling;
        return $this;
    }
}