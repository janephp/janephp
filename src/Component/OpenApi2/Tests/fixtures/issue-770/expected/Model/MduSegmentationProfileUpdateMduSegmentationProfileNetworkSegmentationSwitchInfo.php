<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Issue770\Model;

class MduSegmentationProfileUpdateMduSegmentationProfileNetworkSegmentationSwitchInfo
{
    /**
     * @var list<string>
     */
    public array $switchGroupList;
    /**
     * @var list<MduSegmentationProfileDistributionSwitchObj>
     */
    public array $distributionSwitches;
    /**
     * @var list<MduSegmentationProfileAccessSwitchObj>
     */
    public array $accessSwitches;
    /**
     * Default set to false means check overlay-gateway config and reboot needed first, if set true will overwrite Distribution Switch's exist overlay-gateway config or reboot Switches after set up forwarding profile.
     *
     * @var bool
     */
    public bool $forceOverwriteReboot;
}