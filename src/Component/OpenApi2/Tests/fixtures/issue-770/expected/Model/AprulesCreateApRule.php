<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class AprulesCreateApRule
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
    protected $description;
    /**
     * type of the AP Registration Rules
     *
     * @var string
     */
    protected $type;
    /**
     * @var AprulesIpAddressRange
     */
    protected $ipAddressRange;
    /**
     * @var AprulesSubnet
     */
    protected $subnet;
    /**
     * @var AprulesGpsCoordinates
     */
    protected $gpsCoordinates;
    /**
     * ProvisionTag of the AP Registration Rules
     *
     * @var mixed
     */
    protected $provisionTag;
    /**
     * @var CommonGenericRef
     */
    protected $mobilityZone;
    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }
    /**
     * @param string $description
     *
     * @return self
     */
    public function setDescription(string $description): self
    {
        $this->initialized['description'] = true;
        $this->description = $description;
        return $this;
    }
    /**
     * type of the AP Registration Rules
     *
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }
    /**
     * type of the AP Registration Rules
     *
     * @param string $type
     *
     * @return self
     */
    public function setType(string $type): self
    {
        $this->initialized['type'] = true;
        $this->type = $type;
        return $this;
    }
    /**
     * @return AprulesIpAddressRange
     */
    public function getIpAddressRange(): AprulesIpAddressRange
    {
        return $this->ipAddressRange;
    }
    /**
     * @param AprulesIpAddressRange $ipAddressRange
     *
     * @return self
     */
    public function setIpAddressRange(AprulesIpAddressRange $ipAddressRange): self
    {
        $this->initialized['ipAddressRange'] = true;
        $this->ipAddressRange = $ipAddressRange;
        return $this;
    }
    /**
     * @return AprulesSubnet
     */
    public function getSubnet(): AprulesSubnet
    {
        return $this->subnet;
    }
    /**
     * @param AprulesSubnet $subnet
     *
     * @return self
     */
    public function setSubnet(AprulesSubnet $subnet): self
    {
        $this->initialized['subnet'] = true;
        $this->subnet = $subnet;
        return $this;
    }
    /**
     * @return AprulesGpsCoordinates
     */
    public function getGpsCoordinates(): AprulesGpsCoordinates
    {
        return $this->gpsCoordinates;
    }
    /**
     * @param AprulesGpsCoordinates $gpsCoordinates
     *
     * @return self
     */
    public function setGpsCoordinates(AprulesGpsCoordinates $gpsCoordinates): self
    {
        $this->initialized['gpsCoordinates'] = true;
        $this->gpsCoordinates = $gpsCoordinates;
        return $this;
    }
    /**
     * ProvisionTag of the AP Registration Rules
     *
     * @return mixed
     */
    public function getProvisionTag()
    {
        return $this->provisionTag;
    }
    /**
     * ProvisionTag of the AP Registration Rules
     *
     * @param mixed $provisionTag
     *
     * @return self
     */
    public function setProvisionTag($provisionTag): self
    {
        $this->initialized['provisionTag'] = true;
        $this->provisionTag = $provisionTag;
        return $this;
    }
    /**
     * @return CommonGenericRef
     */
    public function getMobilityZone(): CommonGenericRef
    {
        return $this->mobilityZone;
    }
    /**
     * @param CommonGenericRef $mobilityZone
     *
     * @return self
     */
    public function setMobilityZone(CommonGenericRef $mobilityZone): self
    {
        $this->initialized['mobilityZone'] = true;
        $this->mobilityZone = $mobilityZone;
        return $this;
    }
}