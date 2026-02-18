<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class ProfileCreateAuthenticationProfile
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
     * @var string
     */
    protected $name;
    /**
     * @var string
     */
    protected $description;
    /**
     * 3GPP support enabled or disabled
     *
     * @var bool
     */
    protected $gppSuppportEnabled = false;
    /**
     * Hotspot 2.0 support enabled or disabled
     *
     * @var bool
     */
    protected $h20SuppportEnabled;
    /**
     * Hosted AAA server RADIUS settings & PLMN ID settings
     *
     * @var ProfileTtgCommonSetting
     */
    protected $ttgCommonSetting;
    /**
     * Realm based authentication service mappings
     *
     * @var list<ProfileRealmAuthServiceMapping>
     */
    protected $realmMappings;
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
     * 3GPP support enabled or disabled
     *
     * @return bool
     */
    public function getGppSuppportEnabled(): bool
    {
        return $this->gppSuppportEnabled;
    }
    /**
     * 3GPP support enabled or disabled
     *
     * @param bool $gppSuppportEnabled
     *
     * @return self
     */
    public function setGppSuppportEnabled(bool $gppSuppportEnabled): self
    {
        $this->initialized['gppSuppportEnabled'] = true;
        $this->gppSuppportEnabled = $gppSuppportEnabled;
        return $this;
    }
    /**
     * Hotspot 2.0 support enabled or disabled
     *
     * @return bool
     */
    public function getH20SuppportEnabled(): bool
    {
        return $this->h20SuppportEnabled;
    }
    /**
     * Hotspot 2.0 support enabled or disabled
     *
     * @param bool $h20SuppportEnabled
     *
     * @return self
     */
    public function setH20SuppportEnabled(bool $h20SuppportEnabled): self
    {
        $this->initialized['h20SuppportEnabled'] = true;
        $this->h20SuppportEnabled = $h20SuppportEnabled;
        return $this;
    }
    /**
     * Hosted AAA server RADIUS settings & PLMN ID settings
     *
     * @return ProfileTtgCommonSetting
     */
    public function getTtgCommonSetting(): ProfileTtgCommonSetting
    {
        return $this->ttgCommonSetting;
    }
    /**
     * Hosted AAA server RADIUS settings & PLMN ID settings
     *
     * @param ProfileTtgCommonSetting $ttgCommonSetting
     *
     * @return self
     */
    public function setTtgCommonSetting(ProfileTtgCommonSetting $ttgCommonSetting): self
    {
        $this->initialized['ttgCommonSetting'] = true;
        $this->ttgCommonSetting = $ttgCommonSetting;
        return $this;
    }
    /**
     * Realm based authentication service mappings
     *
     * @return list<ProfileRealmAuthServiceMapping>
     */
    public function getRealmMappings(): array
    {
        return $this->realmMappings;
    }
    /**
     * Realm based authentication service mappings
     *
     * @param list<ProfileRealmAuthServiceMapping> $realmMappings
     *
     * @return self
     */
    public function setRealmMappings(array $realmMappings): self
    {
        $this->initialized['realmMappings'] = true;
        $this->realmMappings = $realmMappings;
        return $this;
    }
}