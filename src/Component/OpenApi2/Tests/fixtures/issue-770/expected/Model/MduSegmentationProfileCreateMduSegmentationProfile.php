<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class MduSegmentationProfileCreateMduSegmentationProfile
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
    protected $domainId;
    /**
     * @var string
     */
    protected $name;
    /**
     * @var list<MduSegmentationProfileMduProfileDpInfo>
     */
    protected $dpInfoList;
    /**
     * @var list<MduSegmentationProfileMduProfileApGroupInfo>
     */
    protected $apGroupInfoList;
    /**
     * @var MduSegmentationProfileCreateMduSegmentationProfileNetworkSegmentationSwitchInfo
     */
    protected $networkSegmentationSwitchInfo;
    /**
     * @return string
     */
    public function getDomainId(): string
    {
        return $this->domainId;
    }
    /**
     * @param string $domainId
     *
     * @return self
     */
    public function setDomainId(string $domainId): self
    {
        $this->initialized['domainId'] = true;
        $this->domainId = $domainId;
        return $this;
    }
    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;
        return $this;
    }
    /**
     * @return list<MduSegmentationProfileMduProfileDpInfo>
     */
    public function getDpInfoList(): array
    {
        return $this->dpInfoList;
    }
    /**
     * @param list<MduSegmentationProfileMduProfileDpInfo> $dpInfoList
     *
     * @return self
     */
    public function setDpInfoList(array $dpInfoList): self
    {
        $this->initialized['dpInfoList'] = true;
        $this->dpInfoList = $dpInfoList;
        return $this;
    }
    /**
     * @return list<MduSegmentationProfileMduProfileApGroupInfo>
     */
    public function getApGroupInfoList(): array
    {
        return $this->apGroupInfoList;
    }
    /**
     * @param list<MduSegmentationProfileMduProfileApGroupInfo> $apGroupInfoList
     *
     * @return self
     */
    public function setApGroupInfoList(array $apGroupInfoList): self
    {
        $this->initialized['apGroupInfoList'] = true;
        $this->apGroupInfoList = $apGroupInfoList;
        return $this;
    }
    /**
     * @return MduSegmentationProfileCreateMduSegmentationProfileNetworkSegmentationSwitchInfo
     */
    public function getNetworkSegmentationSwitchInfo(): MduSegmentationProfileCreateMduSegmentationProfileNetworkSegmentationSwitchInfo
    {
        return $this->networkSegmentationSwitchInfo;
    }
    /**
     * @param MduSegmentationProfileCreateMduSegmentationProfileNetworkSegmentationSwitchInfo $networkSegmentationSwitchInfo
     *
     * @return self
     */
    public function setNetworkSegmentationSwitchInfo(MduSegmentationProfileCreateMduSegmentationProfileNetworkSegmentationSwitchInfo $networkSegmentationSwitchInfo): self
    {
        $this->initialized['networkSegmentationSwitchInfo'] = true;
        $this->networkSegmentationSwitchInfo = $networkSegmentationSwitchInfo;
        return $this;
    }
}