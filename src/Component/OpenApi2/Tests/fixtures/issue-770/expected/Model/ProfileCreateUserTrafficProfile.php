<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class ProfileCreateUserTrafficProfile
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
    protected $name;
    /**
     * @var string
     */
    protected $description;
    /**
     * Default action
     *
     * @var string
     */
    protected $defaultAction = 'ALLOW';
    /**
     * @var ProfileUplinkRateLimiting
     */
    protected $uplinkRateLimiting;
    /**
     * @var ProfileDownlinkRateLimiting
     */
    protected $downlinkRateLimiting;
    /**
     * Traffic access control list
     *
     * @var list<ProfileIpAclRules>
     */
    protected $ipAclRules;
    /**
     * Application Policy UUID (for 5.0 and Earlier Firmware Versions)
     *
     * @var string
     */
    protected $appPolicyId;
    /**
     * Application Policy UUID
     *
     * @var string
     */
    protected $qmAppPolicyId;
    /**
     * URL Filtering Policy UUID
     *
     * @var string
     */
    protected $urlFilteringPolicyId;
    /**
     * Tenant UUID
     *
     * @var string
     */
    protected $mvnoId;
    /**
     * Domain UUID
     *
     * @var string
     */
    protected $domainId;
    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
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
     * Default action
     *
     * @return string
     */
    public function getDefaultAction(): string
    {
        return $this->defaultAction;
    }
    /**
     * Default action
     *
     * @param string $defaultAction
     *
     * @return self
     */
    public function setDefaultAction(string $defaultAction): self
    {
        $this->initialized['defaultAction'] = true;
        $this->defaultAction = $defaultAction;
        return $this;
    }
    /**
     * @return ProfileUplinkRateLimiting
     */
    public function getUplinkRateLimiting(): ProfileUplinkRateLimiting
    {
        return $this->uplinkRateLimiting;
    }
    /**
     * @param ProfileUplinkRateLimiting $uplinkRateLimiting
     *
     * @return self
     */
    public function setUplinkRateLimiting(ProfileUplinkRateLimiting $uplinkRateLimiting): self
    {
        $this->initialized['uplinkRateLimiting'] = true;
        $this->uplinkRateLimiting = $uplinkRateLimiting;
        return $this;
    }
    /**
     * @return ProfileDownlinkRateLimiting
     */
    public function getDownlinkRateLimiting(): ProfileDownlinkRateLimiting
    {
        return $this->downlinkRateLimiting;
    }
    /**
     * @param ProfileDownlinkRateLimiting $downlinkRateLimiting
     *
     * @return self
     */
    public function setDownlinkRateLimiting(ProfileDownlinkRateLimiting $downlinkRateLimiting): self
    {
        $this->initialized['downlinkRateLimiting'] = true;
        $this->downlinkRateLimiting = $downlinkRateLimiting;
        return $this;
    }
    /**
     * Traffic access control list
     *
     * @return list<ProfileIpAclRules>
     */
    public function getIpAclRules(): array
    {
        return $this->ipAclRules;
    }
    /**
     * Traffic access control list
     *
     * @param list<ProfileIpAclRules> $ipAclRules
     *
     * @return self
     */
    public function setIpAclRules(array $ipAclRules): self
    {
        $this->initialized['ipAclRules'] = true;
        $this->ipAclRules = $ipAclRules;
        return $this;
    }
    /**
     * Application Policy UUID (for 5.0 and Earlier Firmware Versions)
     *
     * @return string
     */
    public function getAppPolicyId(): string
    {
        return $this->appPolicyId;
    }
    /**
     * Application Policy UUID (for 5.0 and Earlier Firmware Versions)
     *
     * @param string $appPolicyId
     *
     * @return self
     */
    public function setAppPolicyId(string $appPolicyId): self
    {
        $this->initialized['appPolicyId'] = true;
        $this->appPolicyId = $appPolicyId;
        return $this;
    }
    /**
     * Application Policy UUID
     *
     * @return string
     */
    public function getQmAppPolicyId(): string
    {
        return $this->qmAppPolicyId;
    }
    /**
     * Application Policy UUID
     *
     * @param string $qmAppPolicyId
     *
     * @return self
     */
    public function setQmAppPolicyId(string $qmAppPolicyId): self
    {
        $this->initialized['qmAppPolicyId'] = true;
        $this->qmAppPolicyId = $qmAppPolicyId;
        return $this;
    }
    /**
     * URL Filtering Policy UUID
     *
     * @return string
     */
    public function getUrlFilteringPolicyId(): string
    {
        return $this->urlFilteringPolicyId;
    }
    /**
     * URL Filtering Policy UUID
     *
     * @param string $urlFilteringPolicyId
     *
     * @return self
     */
    public function setUrlFilteringPolicyId(string $urlFilteringPolicyId): self
    {
        $this->initialized['urlFilteringPolicyId'] = true;
        $this->urlFilteringPolicyId = $urlFilteringPolicyId;
        return $this;
    }
    /**
     * Tenant UUID
     *
     * @return string
     */
    public function getMvnoId(): string
    {
        return $this->mvnoId;
    }
    /**
     * Tenant UUID
     *
     * @param string $mvnoId
     *
     * @return self
     */
    public function setMvnoId(string $mvnoId): self
    {
        $this->initialized['mvnoId'] = true;
        $this->mvnoId = $mvnoId;
        return $this;
    }
    /**
     * Domain UUID
     *
     * @return string
     */
    public function getDomainId(): string
    {
        return $this->domainId;
    }
    /**
     * Domain UUID
     *
     * @param string $domainId
     *
     * @return self
     */
    public function setDomainId(string $domainId): self
    {
        $this->initialized['domainId'] = true;
        $this->domainId = $domainId;
        return $this;
    }
}