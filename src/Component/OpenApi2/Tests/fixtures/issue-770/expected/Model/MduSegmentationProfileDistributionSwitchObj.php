<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class MduSegmentationProfileDistributionSwitchObj
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
     * Distribution Switch Id
     *
     * @var string
     */
    protected $id;
    /**
     * Distribution Switch Name
     *
     * @var string
     */
    protected $name;
    /**
     * Distribution Switch site name
     *
     * @var string
     */
    protected $siteName;
    /**
     * Distribution Switch's available VLANs to Network Segmentation
     *
     * @var string
     */
    protected $vlanList;
    /**
     * Distribution Switch loopback interface id
     *
     * @var string
     */
    protected $loopbackInterfaceId;
    /**
     * Distribution Switch loopback interface IP address
     *
     * @var string
     */
    protected $loopbackInterfaceIpAddress;
    /**
     * Distribution Switch loopback interface subnet mask
     *
     * @var string
     */
    protected $loopbackInterfaceSubnetMask;
    /**
     * @var list<MduSegmentationProfileSiteSecondary>
     */
    protected $siteSecondaryList;
    /**
     * VXLAN Site's Keep Alive Timer Value
     *
     * @var string
     */
    protected $siteKeepAlive;
    /**
     * VXLAN Site's Keep Alive Retry Value
     *
     * @var string
     */
    protected $siteRetry;
    /**
     * Distribution Switch Dispatch Result
     *
     * @var string
     */
    protected $dispatchMessage;
    /**
     * Distribution Switch Id
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    /**
     * Distribution Switch Id
     *
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
     * Distribution Switch Name
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * Distribution Switch Name
     *
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
     * Distribution Switch site name
     *
     * @return string
     */
    public function getSiteName(): string
    {
        return $this->siteName;
    }
    /**
     * Distribution Switch site name
     *
     * @param string $siteName
     *
     * @return self
     */
    public function setSiteName(string $siteName): self
    {
        $this->initialized['siteName'] = true;
        $this->siteName = $siteName;
        return $this;
    }
    /**
     * Distribution Switch's available VLANs to Network Segmentation
     *
     * @return string
     */
    public function getVlanList(): string
    {
        return $this->vlanList;
    }
    /**
     * Distribution Switch's available VLANs to Network Segmentation
     *
     * @param string $vlanList
     *
     * @return self
     */
    public function setVlanList(string $vlanList): self
    {
        $this->initialized['vlanList'] = true;
        $this->vlanList = $vlanList;
        return $this;
    }
    /**
     * Distribution Switch loopback interface id
     *
     * @return string
     */
    public function getLoopbackInterfaceId(): string
    {
        return $this->loopbackInterfaceId;
    }
    /**
     * Distribution Switch loopback interface id
     *
     * @param string $loopbackInterfaceId
     *
     * @return self
     */
    public function setLoopbackInterfaceId(string $loopbackInterfaceId): self
    {
        $this->initialized['loopbackInterfaceId'] = true;
        $this->loopbackInterfaceId = $loopbackInterfaceId;
        return $this;
    }
    /**
     * Distribution Switch loopback interface IP address
     *
     * @return string
     */
    public function getLoopbackInterfaceIpAddress(): string
    {
        return $this->loopbackInterfaceIpAddress;
    }
    /**
     * Distribution Switch loopback interface IP address
     *
     * @param string $loopbackInterfaceIpAddress
     *
     * @return self
     */
    public function setLoopbackInterfaceIpAddress(string $loopbackInterfaceIpAddress): self
    {
        $this->initialized['loopbackInterfaceIpAddress'] = true;
        $this->loopbackInterfaceIpAddress = $loopbackInterfaceIpAddress;
        return $this;
    }
    /**
     * Distribution Switch loopback interface subnet mask
     *
     * @return string
     */
    public function getLoopbackInterfaceSubnetMask(): string
    {
        return $this->loopbackInterfaceSubnetMask;
    }
    /**
     * Distribution Switch loopback interface subnet mask
     *
     * @param string $loopbackInterfaceSubnetMask
     *
     * @return self
     */
    public function setLoopbackInterfaceSubnetMask(string $loopbackInterfaceSubnetMask): self
    {
        $this->initialized['loopbackInterfaceSubnetMask'] = true;
        $this->loopbackInterfaceSubnetMask = $loopbackInterfaceSubnetMask;
        return $this;
    }
    /**
     * @return list<MduSegmentationProfileSiteSecondary>
     */
    public function getSiteSecondaryList(): array
    {
        return $this->siteSecondaryList;
    }
    /**
     * @param list<MduSegmentationProfileSiteSecondary> $siteSecondaryList
     *
     * @return self
     */
    public function setSiteSecondaryList(array $siteSecondaryList): self
    {
        $this->initialized['siteSecondaryList'] = true;
        $this->siteSecondaryList = $siteSecondaryList;
        return $this;
    }
    /**
     * VXLAN Site's Keep Alive Timer Value
     *
     * @return string
     */
    public function getSiteKeepAlive(): string
    {
        return $this->siteKeepAlive;
    }
    /**
     * VXLAN Site's Keep Alive Timer Value
     *
     * @param string $siteKeepAlive
     *
     * @return self
     */
    public function setSiteKeepAlive(string $siteKeepAlive): self
    {
        $this->initialized['siteKeepAlive'] = true;
        $this->siteKeepAlive = $siteKeepAlive;
        return $this;
    }
    /**
     * VXLAN Site's Keep Alive Retry Value
     *
     * @return string
     */
    public function getSiteRetry(): string
    {
        return $this->siteRetry;
    }
    /**
     * VXLAN Site's Keep Alive Retry Value
     *
     * @param string $siteRetry
     *
     * @return self
     */
    public function setSiteRetry(string $siteRetry): self
    {
        $this->initialized['siteRetry'] = true;
        $this->siteRetry = $siteRetry;
        return $this;
    }
    /**
     * Distribution Switch Dispatch Result
     *
     * @return string
     */
    public function getDispatchMessage(): string
    {
        return $this->dispatchMessage;
    }
    /**
     * Distribution Switch Dispatch Result
     *
     * @param string $dispatchMessage
     *
     * @return self
     */
    public function setDispatchMessage(string $dispatchMessage): self
    {
        $this->initialized['dispatchMessage'] = true;
        $this->dispatchMessage = $dispatchMessage;
        return $this;
    }
}