<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class MduSegmentationProfileMduSegmentationProfileSummary
{
    /**
     * @var string
     */
    public string $id;
    /**
     * @var string
     */
    public string $domainId;
    /**
     * @var string
     */
    public string $name;
    /**
     * @var list<MduSegmentationProfileMduProfileDpInfoSummary>
     */
    public array $dpInfoList;
    /**
     * @var list<MduSegmentationProfileMduProfileApGroupInfo>
     */
    public array $apGroupInfoList;
    /**
     * @var MduSegmentationProfileMduSegmentationProfileSummaryNetworkSegmentationSwitchInfo
     */
    public MduSegmentationProfileMduSegmentationProfileSummaryNetworkSegmentationSwitchInfo $networkSegmentationSwitchInfo;
    /**
     * @var MduSegmentationProfileMduSegmentationProfileSummaryReviewData
     */
    public MduSegmentationProfileMduSegmentationProfileSummaryReviewData $reviewData;
}