<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Issue770\Model;

class MduSegmentationProfileAccessSwitchObj
{
    /**
     * Access Switch Id
     *
     * @var string
     */
    public string $id;
    /**
     * Access Switch Name
     *
     * @var string
     */
    public string $name;
    /**
     * VLAN Id for web auth
     *
     * @var int
     */
    public int $vlanId;
    /**
     * Access Switch web auth password label
     *
     * @var string
     */
    public string $webAuthPasswordLabel;
    /**
     * @var MduSegmentationProfileUpLinkObj
     */
    public MduSegmentationProfileUpLinkObj $upLink;
    /**
     * @var list<MduSegmentationProfileRateLimitPorts>
     */
    public array $ports;
    /**
     * Distribution Switch Id
     *
     * @var string
     */
    public string $networkSegmentationDistributionSwitchId;
    /**
     * Access Switch Dispatch Result
     *
     * @var string
     */
    public string $dispatchMessage;
    /**
     * Web auth page custom title text
     *
     * @var string
     */
    public string $webAuthCustomTitle;
    /**
     * Web auth page custom header text
     *
     * @var string
     */
    public string $webAuthCustomTop;
    /**
     * Web auth page custom login button text
     *
     * @var string
     */
    public string $webAuthCustomLoginButton;
    /**
     * Web auth page custom footer text
     *
     * @var string
     */
    public string $webAuthCustomBottom;
}