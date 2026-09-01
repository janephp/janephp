<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class MduSegmentationProfileDistributionSwitchObj
{
    /**
     * Distribution Switch Id
     *
     * @var string
     */
    public string $id;
    /**
     * Distribution Switch Name
     *
     * @var string
     */
    public string $name;
    /**
     * Distribution Switch site name
     *
     * @var string
     */
    public string $siteName;
    /**
     * Distribution Switch's available VLANs to Network Segmentation
     *
     * @var string
     */
    public string $vlanList;
    /**
     * Distribution Switch loopback interface id
     *
     * @var string
     */
    public string $loopbackInterfaceId;
    /**
     * Distribution Switch loopback interface IP address
     *
     * @var string
     */
    public string $loopbackInterfaceIpAddress;
    /**
     * Distribution Switch loopback interface subnet mask
     *
     * @var string
     */
    public string $loopbackInterfaceSubnetMask;
    /**
     * @var list<MduSegmentationProfileSiteSecondary>
     */
    public array $siteSecondaryList;
    /**
     * VXLAN Site's Keep Alive Timer Value
     *
     * @var string
     */
    public string $siteKeepAlive;
    /**
     * VXLAN Site's Keep Alive Retry Value
     *
     * @var string
     */
    public string $siteRetry;
    /**
     * Distribution Switch Dispatch Result
     *
     * @var string
     */
    public string $dispatchMessage;
}