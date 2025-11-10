<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class CommonMyRuckusConfig
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
     * My.Ruckus support for tunnel-wlan/vlan
     *
     * @var bool
     */
    protected $aclForTunnelWlanAndVlanEnable;
    /**
     * My.Ruckus support for tunnel-wlan/vlan
     *
     * @return bool
     */
    public function getAclForTunnelWlanAndVlanEnable(): bool
    {
        return $this->aclForTunnelWlanAndVlanEnable;
    }
    /**
     * My.Ruckus support for tunnel-wlan/vlan
     *
     * @param bool $aclForTunnelWlanAndVlanEnable
     *
     * @return self
     */
    public function setAclForTunnelWlanAndVlanEnable(bool $aclForTunnelWlanAndVlanEnable): self
    {
        $this->initialized['aclForTunnelWlanAndVlanEnable'] = true;
        $this->aclForTunnelWlanAndVlanEnable = $aclForTunnelWlanAndVlanEnable;
        return $this;
    }
}