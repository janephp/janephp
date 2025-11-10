<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class MduSegmentationProfileAccessSwitchObj
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
     * Access Switch Id
     *
     * @var string
     */
    protected $id;
    /**
     * Access Switch Name
     *
     * @var string
     */
    protected $name;
    /**
     * VLAN Id for web auth
     *
     * @var int
     */
    protected $vlanId;
    /**
     * Access Switch web auth password label
     *
     * @var string
     */
    protected $webAuthPasswordLabel;
    /**
     * @var MduSegmentationProfileUpLinkObj
     */
    protected $upLink;
    /**
     * @var list<MduSegmentationProfileRateLimitPorts>
     */
    protected $ports;
    /**
     * Distribution Switch Id
     *
     * @var string
     */
    protected $networkSegmentationDistributionSwitchId;
    /**
     * Access Switch Dispatch Result
     *
     * @var string
     */
    protected $dispatchMessage;
    /**
     * Web auth page custom title text
     *
     * @var string
     */
    protected $webAuthCustomTitle;
    /**
     * Web auth page custom header text
     *
     * @var string
     */
    protected $webAuthCustomTop;
    /**
     * Web auth page custom login button text
     *
     * @var string
     */
    protected $webAuthCustomLoginButton;
    /**
     * Web auth page custom footer text
     *
     * @var string
     */
    protected $webAuthCustomBottom;
    /**
     * Access Switch Id
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    /**
     * Access Switch Id
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
     * Access Switch Name
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * Access Switch Name
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
     * VLAN Id for web auth
     *
     * @return int
     */
    public function getVlanId(): int
    {
        return $this->vlanId;
    }
    /**
     * VLAN Id for web auth
     *
     * @param int $vlanId
     *
     * @return self
     */
    public function setVlanId(int $vlanId): self
    {
        $this->initialized['vlanId'] = true;
        $this->vlanId = $vlanId;
        return $this;
    }
    /**
     * Access Switch web auth password label
     *
     * @return string
     */
    public function getWebAuthPasswordLabel(): string
    {
        return $this->webAuthPasswordLabel;
    }
    /**
     * Access Switch web auth password label
     *
     * @param string $webAuthPasswordLabel
     *
     * @return self
     */
    public function setWebAuthPasswordLabel(string $webAuthPasswordLabel): self
    {
        $this->initialized['webAuthPasswordLabel'] = true;
        $this->webAuthPasswordLabel = $webAuthPasswordLabel;
        return $this;
    }
    /**
     * @return MduSegmentationProfileUpLinkObj
     */
    public function getUpLink(): MduSegmentationProfileUpLinkObj
    {
        return $this->upLink;
    }
    /**
     * @param MduSegmentationProfileUpLinkObj $upLink
     *
     * @return self
     */
    public function setUpLink(MduSegmentationProfileUpLinkObj $upLink): self
    {
        $this->initialized['upLink'] = true;
        $this->upLink = $upLink;
        return $this;
    }
    /**
     * @return list<MduSegmentationProfileRateLimitPorts>
     */
    public function getPorts(): array
    {
        return $this->ports;
    }
    /**
     * @param list<MduSegmentationProfileRateLimitPorts> $ports
     *
     * @return self
     */
    public function setPorts(array $ports): self
    {
        $this->initialized['ports'] = true;
        $this->ports = $ports;
        return $this;
    }
    /**
     * Distribution Switch Id
     *
     * @return string
     */
    public function getNetworkSegmentationDistributionSwitchId(): string
    {
        return $this->networkSegmentationDistributionSwitchId;
    }
    /**
     * Distribution Switch Id
     *
     * @param string $networkSegmentationDistributionSwitchId
     *
     * @return self
     */
    public function setNetworkSegmentationDistributionSwitchId(string $networkSegmentationDistributionSwitchId): self
    {
        $this->initialized['networkSegmentationDistributionSwitchId'] = true;
        $this->networkSegmentationDistributionSwitchId = $networkSegmentationDistributionSwitchId;
        return $this;
    }
    /**
     * Access Switch Dispatch Result
     *
     * @return string
     */
    public function getDispatchMessage(): string
    {
        return $this->dispatchMessage;
    }
    /**
     * Access Switch Dispatch Result
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
    /**
     * Web auth page custom title text
     *
     * @return string
     */
    public function getWebAuthCustomTitle(): string
    {
        return $this->webAuthCustomTitle;
    }
    /**
     * Web auth page custom title text
     *
     * @param string $webAuthCustomTitle
     *
     * @return self
     */
    public function setWebAuthCustomTitle(string $webAuthCustomTitle): self
    {
        $this->initialized['webAuthCustomTitle'] = true;
        $this->webAuthCustomTitle = $webAuthCustomTitle;
        return $this;
    }
    /**
     * Web auth page custom header text
     *
     * @return string
     */
    public function getWebAuthCustomTop(): string
    {
        return $this->webAuthCustomTop;
    }
    /**
     * Web auth page custom header text
     *
     * @param string $webAuthCustomTop
     *
     * @return self
     */
    public function setWebAuthCustomTop(string $webAuthCustomTop): self
    {
        $this->initialized['webAuthCustomTop'] = true;
        $this->webAuthCustomTop = $webAuthCustomTop;
        return $this;
    }
    /**
     * Web auth page custom login button text
     *
     * @return string
     */
    public function getWebAuthCustomLoginButton(): string
    {
        return $this->webAuthCustomLoginButton;
    }
    /**
     * Web auth page custom login button text
     *
     * @param string $webAuthCustomLoginButton
     *
     * @return self
     */
    public function setWebAuthCustomLoginButton(string $webAuthCustomLoginButton): self
    {
        $this->initialized['webAuthCustomLoginButton'] = true;
        $this->webAuthCustomLoginButton = $webAuthCustomLoginButton;
        return $this;
    }
    /**
     * Web auth page custom footer text
     *
     * @return string
     */
    public function getWebAuthCustomBottom(): string
    {
        return $this->webAuthCustomBottom;
    }
    /**
     * Web auth page custom footer text
     *
     * @param string $webAuthCustomBottom
     *
     * @return self
     */
    public function setWebAuthCustomBottom(string $webAuthCustomBottom): self
    {
        $this->initialized['webAuthCustomBottom'] = true;
        $this->webAuthCustomBottom = $webAuthCustomBottom;
        return $this;
    }
}