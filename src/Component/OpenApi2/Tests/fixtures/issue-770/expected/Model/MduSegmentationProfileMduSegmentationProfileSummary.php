<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class MduSegmentationProfileMduSegmentationProfileSummary
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
    protected $id;
    /**
     * @var string
     */
    protected $domainId;
    /**
     * @var string
     */
    protected $name;
    /**
     * @var list<MduSegmentationProfileMduProfileDpInfoSummary>
     */
    protected $dpInfoList;
    /**
     * @var list<MduSegmentationProfileMduProfileApGroupInfo>
     */
    protected $apGroupInfoList;
    /**
     * @var MduSegmentationProfileMduSegmentationProfileSummaryNetworkSegmentationSwitchInfo
     */
    protected $networkSegmentationSwitchInfo;
    /**
     * @var MduSegmentationProfileMduSegmentationProfileSummaryReviewData
     */
    protected $reviewData;
    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    /**
     * @param string $id
     *
     * @return self
     */
    public function setId(string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;
        return $this;
    }
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
     * @return list<MduSegmentationProfileMduProfileDpInfoSummary>
     */
    public function getDpInfoList(): array
    {
        return $this->dpInfoList;
    }
    /**
     * @param list<MduSegmentationProfileMduProfileDpInfoSummary> $dpInfoList
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
     * @return MduSegmentationProfileMduSegmentationProfileSummaryNetworkSegmentationSwitchInfo
     */
    public function getNetworkSegmentationSwitchInfo(): MduSegmentationProfileMduSegmentationProfileSummaryNetworkSegmentationSwitchInfo
    {
        return $this->networkSegmentationSwitchInfo;
    }
    /**
     * @param MduSegmentationProfileMduSegmentationProfileSummaryNetworkSegmentationSwitchInfo $networkSegmentationSwitchInfo
     *
     * @return self
     */
    public function setNetworkSegmentationSwitchInfo(MduSegmentationProfileMduSegmentationProfileSummaryNetworkSegmentationSwitchInfo $networkSegmentationSwitchInfo): self
    {
        $this->initialized['networkSegmentationSwitchInfo'] = true;
        $this->networkSegmentationSwitchInfo = $networkSegmentationSwitchInfo;
        return $this;
    }
    /**
     * @return MduSegmentationProfileMduSegmentationProfileSummaryReviewData
     */
    public function getReviewData(): MduSegmentationProfileMduSegmentationProfileSummaryReviewData
    {
        return $this->reviewData;
    }
    /**
     * @param MduSegmentationProfileMduSegmentationProfileSummaryReviewData $reviewData
     *
     * @return self
     */
    public function setReviewData(MduSegmentationProfileMduSegmentationProfileSummaryReviewData $reviewData): self
    {
        $this->initialized['reviewData'] = true;
        $this->reviewData = $reviewData;
        return $this;
    }
}