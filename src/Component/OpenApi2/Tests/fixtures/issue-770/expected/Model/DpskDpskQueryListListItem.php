<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class DpskDpskQueryListListItem
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
     * Identifier of DPSK
     *
     * @var string
     */
    protected $key;
    /**
     * Tenant ID of DPSK
     *
     * @var string
     */
    protected $tenantId;
    /**
     * Domain ID of DPSK
     *
     * @var string
     */
    protected $domainId;
    /**
     * Zone ID of DPSK
     *
     * @var string
     */
    protected $zoneId;
    /**
     * WLAN ID of DPSK
     *
     * @var string
     */
    protected $wlanId;
    /**
     * User Name of DPSK
     *
     * @var string
     */
    protected $userName;
    /**
     * Mac address of DPSK
     *
     * @var string
     */
    protected $ueMac;
    /**
     * Identity User Role ID of DPSK
     *
     * @var string
     */
    protected $userRoleId;
    /**
     * VLAN ID of DPSK
     *
     * @var int
     */
    protected $vlanId;
    /**
     * Is a Group DPSK or not
     *
     * @var bool
     */
    protected $group;
    /**
     * DPSK is expired or not
     *
     * @var bool
     */
    protected $expired;
    /**
     * Time To Live of DPSK (Unit: Seconds)
     *
     * @var float
     */
    protected $ttl;
    /**
     * Expiration start time of DPSK (Unit: Seconds)
     *
     * @var float
     */
    protected $expirationStartTime;
    /**
     * Expiration time of DPSK (Unit: Seconds)
     *
     * @var float
     */
    protected $expirationTime;
    /**
     * Creationd time of DPSK
     *
     * @var float
     */
    protected $createDateTime;
    /**
     * Identifier of DPSK
     *
     * @return string
     */
    public function getKey(): string
    {
        return $this->key;
    }
    /**
     * Identifier of DPSK
     *
     * @param string $key
     *
     * @return self
     */
    public function setKey(string $key): self
    {
        $this->initialized['key'] = true;
        $this->key = $key;
        return $this;
    }
    /**
     * Tenant ID of DPSK
     *
     * @return string
     */
    public function getTenantId(): string
    {
        return $this->tenantId;
    }
    /**
     * Tenant ID of DPSK
     *
     * @param string $tenantId
     *
     * @return self
     */
    public function setTenantId(string $tenantId): self
    {
        $this->initialized['tenantId'] = true;
        $this->tenantId = $tenantId;
        return $this;
    }
    /**
     * Domain ID of DPSK
     *
     * @return string
     */
    public function getDomainId(): string
    {
        return $this->domainId;
    }
    /**
     * Domain ID of DPSK
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
     * Zone ID of DPSK
     *
     * @return string
     */
    public function getZoneId(): string
    {
        return $this->zoneId;
    }
    /**
     * Zone ID of DPSK
     *
     * @param string $zoneId
     *
     * @return self
     */
    public function setZoneId(string $zoneId): self
    {
        $this->initialized['zoneId'] = true;
        $this->zoneId = $zoneId;
        return $this;
    }
    /**
     * WLAN ID of DPSK
     *
     * @return string
     */
    public function getWlanId(): string
    {
        return $this->wlanId;
    }
    /**
     * WLAN ID of DPSK
     *
     * @param string $wlanId
     *
     * @return self
     */
    public function setWlanId(string $wlanId): self
    {
        $this->initialized['wlanId'] = true;
        $this->wlanId = $wlanId;
        return $this;
    }
    /**
     * User Name of DPSK
     *
     * @return string
     */
    public function getUserName(): string
    {
        return $this->userName;
    }
    /**
     * User Name of DPSK
     *
     * @param string $userName
     *
     * @return self
     */
    public function setUserName(string $userName): self
    {
        $this->initialized['userName'] = true;
        $this->userName = $userName;
        return $this;
    }
    /**
     * Mac address of DPSK
     *
     * @return string
     */
    public function getUeMac(): string
    {
        return $this->ueMac;
    }
    /**
     * Mac address of DPSK
     *
     * @param string $ueMac
     *
     * @return self
     */
    public function setUeMac(string $ueMac): self
    {
        $this->initialized['ueMac'] = true;
        $this->ueMac = $ueMac;
        return $this;
    }
    /**
     * Identity User Role ID of DPSK
     *
     * @return string
     */
    public function getUserRoleId(): string
    {
        return $this->userRoleId;
    }
    /**
     * Identity User Role ID of DPSK
     *
     * @param string $userRoleId
     *
     * @return self
     */
    public function setUserRoleId(string $userRoleId): self
    {
        $this->initialized['userRoleId'] = true;
        $this->userRoleId = $userRoleId;
        return $this;
    }
    /**
     * VLAN ID of DPSK
     *
     * @return int
     */
    public function getVlanId(): int
    {
        return $this->vlanId;
    }
    /**
     * VLAN ID of DPSK
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
     * Is a Group DPSK or not
     *
     * @return bool
     */
    public function getGroup(): bool
    {
        return $this->group;
    }
    /**
     * Is a Group DPSK or not
     *
     * @param bool $group
     *
     * @return self
     */
    public function setGroup(bool $group): self
    {
        $this->initialized['group'] = true;
        $this->group = $group;
        return $this;
    }
    /**
     * DPSK is expired or not
     *
     * @return bool
     */
    public function getExpired(): bool
    {
        return $this->expired;
    }
    /**
     * DPSK is expired or not
     *
     * @param bool $expired
     *
     * @return self
     */
    public function setExpired(bool $expired): self
    {
        $this->initialized['expired'] = true;
        $this->expired = $expired;
        return $this;
    }
    /**
     * Time To Live of DPSK (Unit: Seconds)
     *
     * @return float
     */
    public function getTtl(): float
    {
        return $this->ttl;
    }
    /**
     * Time To Live of DPSK (Unit: Seconds)
     *
     * @param float $ttl
     *
     * @return self
     */
    public function setTtl(float $ttl): self
    {
        $this->initialized['ttl'] = true;
        $this->ttl = $ttl;
        return $this;
    }
    /**
     * Expiration start time of DPSK (Unit: Seconds)
     *
     * @return float
     */
    public function getExpirationStartTime(): float
    {
        return $this->expirationStartTime;
    }
    /**
     * Expiration start time of DPSK (Unit: Seconds)
     *
     * @param float $expirationStartTime
     *
     * @return self
     */
    public function setExpirationStartTime(float $expirationStartTime): self
    {
        $this->initialized['expirationStartTime'] = true;
        $this->expirationStartTime = $expirationStartTime;
        return $this;
    }
    /**
     * Expiration time of DPSK (Unit: Seconds)
     *
     * @return float
     */
    public function getExpirationTime(): float
    {
        return $this->expirationTime;
    }
    /**
     * Expiration time of DPSK (Unit: Seconds)
     *
     * @param float $expirationTime
     *
     * @return self
     */
    public function setExpirationTime(float $expirationTime): self
    {
        $this->initialized['expirationTime'] = true;
        $this->expirationTime = $expirationTime;
        return $this;
    }
    /**
     * Creationd time of DPSK
     *
     * @return float
     */
    public function getCreateDateTime(): float
    {
        return $this->createDateTime;
    }
    /**
     * Creationd time of DPSK
     *
     * @param float $createDateTime
     *
     * @return self
     */
    public function setCreateDateTime(float $createDateTime): self
    {
        $this->initialized['createDateTime'] = true;
        $this->createDateTime = $createDateTime;
        return $this;
    }
}