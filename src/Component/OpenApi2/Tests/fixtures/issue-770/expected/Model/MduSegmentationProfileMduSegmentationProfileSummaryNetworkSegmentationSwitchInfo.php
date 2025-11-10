<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class MduSegmentationProfileMduSegmentationProfileSummaryNetworkSegmentationSwitchInfo
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
     * @var list<MduSegmentationProfileSwitchGroups>
     */
    protected $groups;
    /**
     * @var list<MduSegmentationProfileDistributionSwitchObj>
     */
    protected $distributionSwitches;
    /**
     * @var list<MduSegmentationProfileAccessSwitchObj>
     */
    protected $accessSwitches;
    /**
     * @return list<MduSegmentationProfileSwitchGroups>
     */
    public function getGroups(): array
    {
        return $this->groups;
    }
    /**
     * @param list<MduSegmentationProfileSwitchGroups> $groups
     *
     * @return self
     */
    public function setGroups(array $groups): self
    {
        $this->initialized['groups'] = true;
        $this->groups = $groups;
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
}