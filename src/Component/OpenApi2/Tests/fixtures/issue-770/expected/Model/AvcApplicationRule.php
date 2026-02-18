<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class AvcApplicationRule
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
     * @var int
     */
    protected $priority;
    /**
     * Type of the application rule
     *
     * @var string
     */
    protected $ruleType;
    /**
     * Type of the application when ruleType
     *
     * @var string
     */
    protected $applicationType;
    /**
     * Identifier of the Application Category from Signature Package (If applicationType is UserDefind, the catId is 32768)
     *
     * @var string
     */
    protected $catId;
    /**
     * Name of the Application Category from Signature Package
     *
     * @var string
     */
    protected $catName;
    /**
     * Identifier of the Application from Signature Package
     *
     * @var string
     */
    protected $appId;
    /**
     * Name of the Application from Signature Package
     *
     * @var string
     */
    protected $appName;
    /**
     * Uplink rate limiting (unit: Kbps)
     *
     * @var int
     */
    protected $uplink;
    /**
     * Downlink rate limiting (unit: Kbps)
     *
     * @var int
     */
    protected $downlink;
    /**
     * QoS uplink marking priority
     *
     * @var string
     */
    protected $markingPriority;
    /**
     * QoS uplink marking type
     *
     * @var string
     */
    protected $markingType;
    /**
     * QoS downlink classification type
     *
     * @var string
     */
    protected $classificationType;
    /**
     * @return int
     */
    public function getPriority(): int
    {
        return $this->priority;
    }
    /**
     * @param int $priority
     *
     * @return self
     */
    public function setPriority(int $priority): self
    {
        $this->initialized['priority'] = true;
        $this->priority = $priority;
        return $this;
    }
    /**
     * Type of the application rule
     *
     * @return string
     */
    public function getRuleType(): string
    {
        return $this->ruleType;
    }
    /**
     * Type of the application rule
     *
     * @param string $ruleType
     *
     * @return self
     */
    public function setRuleType(string $ruleType): self
    {
        $this->initialized['ruleType'] = true;
        $this->ruleType = $ruleType;
        return $this;
    }
    /**
     * Type of the application when ruleType
     *
     * @return string
     */
    public function getApplicationType(): string
    {
        return $this->applicationType;
    }
    /**
     * Type of the application when ruleType
     *
     * @param string $applicationType
     *
     * @return self
     */
    public function setApplicationType(string $applicationType): self
    {
        $this->initialized['applicationType'] = true;
        $this->applicationType = $applicationType;
        return $this;
    }
    /**
     * Identifier of the Application Category from Signature Package (If applicationType is UserDefind, the catId is 32768)
     *
     * @return string
     */
    public function getCatId(): string
    {
        return $this->catId;
    }
    /**
     * Identifier of the Application Category from Signature Package (If applicationType is UserDefind, the catId is 32768)
     *
     * @param string $catId
     *
     * @return self
     */
    public function setCatId(string $catId): self
    {
        $this->initialized['catId'] = true;
        $this->catId = $catId;
        return $this;
    }
    /**
     * Name of the Application Category from Signature Package
     *
     * @return string
     */
    public function getCatName(): string
    {
        return $this->catName;
    }
    /**
     * Name of the Application Category from Signature Package
     *
     * @param string $catName
     *
     * @return self
     */
    public function setCatName(string $catName): self
    {
        $this->initialized['catName'] = true;
        $this->catName = $catName;
        return $this;
    }
    /**
     * Identifier of the Application from Signature Package
     *
     * @return string
     */
    public function getAppId(): string
    {
        return $this->appId;
    }
    /**
     * Identifier of the Application from Signature Package
     *
     * @param string $appId
     *
     * @return self
     */
    public function setAppId(string $appId): self
    {
        $this->initialized['appId'] = true;
        $this->appId = $appId;
        return $this;
    }
    /**
     * Name of the Application from Signature Package
     *
     * @return string
     */
    public function getAppName(): string
    {
        return $this->appName;
    }
    /**
     * Name of the Application from Signature Package
     *
     * @param string $appName
     *
     * @return self
     */
    public function setAppName(string $appName): self
    {
        $this->initialized['appName'] = true;
        $this->appName = $appName;
        return $this;
    }
    /**
     * Uplink rate limiting (unit: Kbps)
     *
     * @return int
     */
    public function getUplink(): int
    {
        return $this->uplink;
    }
    /**
     * Uplink rate limiting (unit: Kbps)
     *
     * @param int $uplink
     *
     * @return self
     */
    public function setUplink(int $uplink): self
    {
        $this->initialized['uplink'] = true;
        $this->uplink = $uplink;
        return $this;
    }
    /**
     * Downlink rate limiting (unit: Kbps)
     *
     * @return int
     */
    public function getDownlink(): int
    {
        return $this->downlink;
    }
    /**
     * Downlink rate limiting (unit: Kbps)
     *
     * @param int $downlink
     *
     * @return self
     */
    public function setDownlink(int $downlink): self
    {
        $this->initialized['downlink'] = true;
        $this->downlink = $downlink;
        return $this;
    }
    /**
     * QoS uplink marking priority
     *
     * @return string
     */
    public function getMarkingPriority(): string
    {
        return $this->markingPriority;
    }
    /**
     * QoS uplink marking priority
     *
     * @param string $markingPriority
     *
     * @return self
     */
    public function setMarkingPriority(string $markingPriority): self
    {
        $this->initialized['markingPriority'] = true;
        $this->markingPriority = $markingPriority;
        return $this;
    }
    /**
     * QoS uplink marking type
     *
     * @return string
     */
    public function getMarkingType(): string
    {
        return $this->markingType;
    }
    /**
     * QoS uplink marking type
     *
     * @param string $markingType
     *
     * @return self
     */
    public function setMarkingType(string $markingType): self
    {
        $this->initialized['markingType'] = true;
        $this->markingType = $markingType;
        return $this;
    }
    /**
     * QoS downlink classification type
     *
     * @return string
     */
    public function getClassificationType(): string
    {
        return $this->classificationType;
    }
    /**
     * QoS downlink classification type
     *
     * @param string $classificationType
     *
     * @return self
     */
    public function setClassificationType(string $classificationType): self
    {
        $this->initialized['classificationType'] = true;
        $this->classificationType = $classificationType;
        return $this;
    }
}