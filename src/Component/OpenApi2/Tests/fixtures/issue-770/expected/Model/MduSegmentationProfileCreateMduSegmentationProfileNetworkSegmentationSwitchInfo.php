<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class MduSegmentationProfileCreateMduSegmentationProfileNetworkSegmentationSwitchInfo
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
     * @var list<string>
     */
    protected $switchGroupList;
    /**
     * @var list<MduSegmentationProfileDistributionSwitchObj>
     */
    protected $distributionSwitches;
    /**
     * @var list<MduSegmentationProfileAccessSwitchObj>
     */
    protected $accessSwitches;
    /**
     * Default set to false means check overlay-gateway config and reboot needed first, if set true will overwrite Distribution Switch's exist overlay-gateway config or reboot Switches after set up forwarding profile.
     *
     * @var bool
     */
    protected $forceOverwriteReboot;
    /**
     * @return list<string>
     */
    public function getSwitchGroupList(): array
    {
        return $this->switchGroupList;
    }
    /**
     * @param list<string> $switchGroupList
     *
     * @return self
     */
    public function setSwitchGroupList(array $switchGroupList): self
    {
        $this->initialized['switchGroupList'] = true;
        $this->switchGroupList = $switchGroupList;
        return $this;
    }
    /**
     * @return list<MduSegmentationProfileDistributionSwitchObj>
     */
    public function getDistributionSwitches(): array
    {
        return $this->distributionSwitches;
    }
    /**
     * @param list<MduSegmentationProfileDistributionSwitchObj> $distributionSwitches
     *
     * @return self
     */
    public function setDistributionSwitches(array $distributionSwitches): self
    {
        $this->initialized['distributionSwitches'] = true;
        $this->distributionSwitches = $distributionSwitches;
        return $this;
    }
    /**
     * @return list<MduSegmentationProfileAccessSwitchObj>
     */
    public function getAccessSwitches(): array
    {
        return $this->accessSwitches;
    }
    /**
     * @param list<MduSegmentationProfileAccessSwitchObj> $accessSwitches
     *
     * @return self
     */
    public function setAccessSwitches(array $accessSwitches): self
    {
        $this->initialized['accessSwitches'] = true;
        $this->accessSwitches = $accessSwitches;
        return $this;
    }
    /**
     * Default set to false means check overlay-gateway config and reboot needed first, if set true will overwrite Distribution Switch's exist overlay-gateway config or reboot Switches after set up forwarding profile.
     *
     * @return bool
     */
    public function getForceOverwriteReboot(): bool
    {
        return $this->forceOverwriteReboot;
    }
    /**
     * Default set to false means check overlay-gateway config and reboot needed first, if set true will overwrite Distribution Switch's exist overlay-gateway config or reboot Switches after set up forwarding profile.
     *
     * @param bool $forceOverwriteReboot
     *
     * @return self
     */
    public function setForceOverwriteReboot(bool $forceOverwriteReboot): self
    {
        $this->initialized['forceOverwriteReboot'] = true;
        $this->forceOverwriteReboot = $forceOverwriteReboot;
        return $this;
    }
}