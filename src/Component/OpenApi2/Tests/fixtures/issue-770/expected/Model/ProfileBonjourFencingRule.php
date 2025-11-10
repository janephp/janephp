<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class ProfileBonjourFencingRule
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
     * Name of the Bonjour Fencing Rule
     *
     * @var string
     */
    protected $deviceType;
    /**
     * Specify the device list providing Bonjour Service
     *
     * @var list<ProfileBonjourFencingRuleDeviceMac>
     */
    protected $deviceMacList;
    /**
     * @var string
     */
    protected $closestAp;
    /**
     * Bonjour Service Type
     *
     * @var string
     */
    protected $serviceType;
    /**
     * @var string
     */
    protected $customServiceName;
    /**
     * The range of AP can take Bonjour work
     *
     * @var string
     */
    protected $fencingRange;
    /**
     * @var string
     */
    protected $description;
    /**
     * Name of the Bonjour Fencing Rule
     *
     * @return string
     */
    public function getDeviceType(): string
    {
        return $this->deviceType;
    }
    /**
     * Name of the Bonjour Fencing Rule
     *
     * @param string $deviceType
     *
     * @return self
     */
    public function setDeviceType(string $deviceType): self
    {
        $this->initialized['deviceType'] = true;
        $this->deviceType = $deviceType;
        return $this;
    }
    /**
     * Specify the device list providing Bonjour Service
     *
     * @return list<ProfileBonjourFencingRuleDeviceMac>
     */
    public function getDeviceMacList(): array
    {
        return $this->deviceMacList;
    }
    /**
     * Specify the device list providing Bonjour Service
     *
     * @param list<ProfileBonjourFencingRuleDeviceMac> $deviceMacList
     *
     * @return self
     */
    public function setDeviceMacList(array $deviceMacList): self
    {
        $this->initialized['deviceMacList'] = true;
        $this->deviceMacList = $deviceMacList;
        return $this;
    }
    /**
     * @return string
     */
    public function getClosestAp(): string
    {
        return $this->closestAp;
    }
    /**
     * @param string $closestAp
     *
     * @return self
     */
    public function setClosestAp(string $closestAp): self
    {
        $this->initialized['closestAp'] = true;
        $this->closestAp = $closestAp;
        return $this;
    }
    /**
     * Bonjour Service Type
     *
     * @return string
     */
    public function getServiceType(): string
    {
        return $this->serviceType;
    }
    /**
     * Bonjour Service Type
     *
     * @param string $serviceType
     *
     * @return self
     */
    public function setServiceType(string $serviceType): self
    {
        $this->initialized['serviceType'] = true;
        $this->serviceType = $serviceType;
        return $this;
    }
    /**
     * @return string
     */
    public function getCustomServiceName(): string
    {
        return $this->customServiceName;
    }
    /**
     * @param string $customServiceName
     *
     * @return self
     */
    public function setCustomServiceName(string $customServiceName): self
    {
        $this->initialized['customServiceName'] = true;
        $this->customServiceName = $customServiceName;
        return $this;
    }
    /**
     * The range of AP can take Bonjour work
     *
     * @return string
     */
    public function getFencingRange(): string
    {
        return $this->fencingRange;
    }
    /**
     * The range of AP can take Bonjour work
     *
     * @param string $fencingRange
     *
     * @return self
     */
    public function setFencingRange(string $fencingRange): self
    {
        $this->initialized['fencingRange'] = true;
        $this->fencingRange = $fencingRange;
        return $this;
    }
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
}