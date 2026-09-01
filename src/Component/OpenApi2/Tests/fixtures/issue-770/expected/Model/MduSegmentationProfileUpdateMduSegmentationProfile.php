<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Issue770\Model;

class MduSegmentationProfileUpdateMduSegmentationProfile
{
    /**
     * @var string
     */
    public string $domainId;
    /**
     * @var string
     */
    public string $name;
    /**
     * @var list<MduSegmentationProfileMduProfileDpInfo>
     */
    public array $dpInfoList;
    /**
     * @var list<MduSegmentationProfileMduProfileApGroupInfo>
     */
    public array $apGroupInfoList;
    /**
     * @var MduSegmentationProfileUpdateMduSegmentationProfileNetworkSegmentationSwitchInfo
     */
    public MduSegmentationProfileUpdateMduSegmentationProfileNetworkSegmentationSwitchInfo $networkSegmentationSwitchInfo;
}