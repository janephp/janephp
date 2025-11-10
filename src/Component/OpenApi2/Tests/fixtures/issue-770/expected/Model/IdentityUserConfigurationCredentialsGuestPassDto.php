<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class IdentityUserConfigurationCredentialsGuestPassDto
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
     * Authentication method of credential
     *
     * @var string
     */
    protected $authenticationMethod;
    /**
     * Key of this guest pass
     *
     * @var string
     */
    protected $key;
    /**
     * Service Provider Id
     *
     * @var string
     */
    protected $serviceProviderId;
    /**
     * Creation Date
     *
     * @var int
     */
    protected $creationDate;
    /**
     * Expiration date and time
     *
     * @var string
     */
    protected $expirationDate;
    /**
     * user ID of the identity guest pass
     *
     * @var string
     */
    protected $userKey;
    /**
     * Username of this guest pass
     *
     * @var string
     */
    protected $userName;
    /**
     * filter identity user list by display name
     *
     * @var string
     */
    protected $displayName;
    /**
     * Login Password
     *
     * @var string
     */
    protected $loginPassword;
    /**
     * Expiration time of guest pass
     *
     * @var int
     */
    protected $guestExpiration;
    /**
     * WLAN Id
     *
     * @var string
     */
    protected $wlan;
    /**
     * WLAN Name
     *
     * @var string
     */
    protected $wlanName;
    /**
     * Maximum number of allowed device
     *
     * @var int
     */
    protected $maxDevices;
    /**
     * @var int
     */
    protected $expirationValue;
    /**
     * @var string
     */
    protected $expirationUnit;
    /**
     * @var string
     */
    protected $sessionUnit;
    /**
     * @var int
     */
    protected $sessionValue;
    /**
     * identifier of the domain
     *
     * @var string
     */
    protected $domainId;
    /**
     * @var int
     */
    protected $expireAfterIfNotUsed;
    /**
     * @var list<string>
     */
    protected $macAddressList;
    /**
     * Pass generation
     *
     * @var bool
     */
    protected $autoGeneratePassword;
    /**
     * Creator ID
     *
     * @var string
     */
    protected $creatorId;
    /**
     * @var string
     */
    protected $comment;
    /**
     * Authentication method of credential
     *
     * @return string
     */
    public function getAuthenticationMethod(): string
    {
        return $this->authenticationMethod;
    }
    /**
     * Authentication method of credential
     *
     * @param string $authenticationMethod
     *
     * @return self
     */
    public function setAuthenticationMethod(string $authenticationMethod): self
    {
        $this->initialized['authenticationMethod'] = true;
        $this->authenticationMethod = $authenticationMethod;
        return $this;
    }
    /**
     * Key of this guest pass
     *
     * @return string
     */
    public function getKey(): string
    {
        return $this->key;
    }
    /**
     * Key of this guest pass
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
     * Service Provider Id
     *
     * @return string
     */
    public function getServiceProviderId(): string
    {
        return $this->serviceProviderId;
    }
    /**
     * Service Provider Id
     *
     * @param string $serviceProviderId
     *
     * @return self
     */
    public function setServiceProviderId(string $serviceProviderId): self
    {
        $this->initialized['serviceProviderId'] = true;
        $this->serviceProviderId = $serviceProviderId;
        return $this;
    }
    /**
     * Creation Date
     *
     * @return int
     */
    public function getCreationDate(): int
    {
        return $this->creationDate;
    }
    /**
     * Creation Date
     *
     * @param int $creationDate
     *
     * @return self
     */
    public function setCreationDate(int $creationDate): self
    {
        $this->initialized['creationDate'] = true;
        $this->creationDate = $creationDate;
        return $this;
    }
    /**
     * Expiration date and time
     *
     * @return string
     */
    public function getExpirationDate(): string
    {
        return $this->expirationDate;
    }
    /**
     * Expiration date and time
     *
     * @param string $expirationDate
     *
     * @return self
     */
    public function setExpirationDate(string $expirationDate): self
    {
        $this->initialized['expirationDate'] = true;
        $this->expirationDate = $expirationDate;
        return $this;
    }
    /**
     * user ID of the identity guest pass
     *
     * @return string
     */
    public function getUserKey(): string
    {
        return $this->userKey;
    }
    /**
     * user ID of the identity guest pass
     *
     * @param string $userKey
     *
     * @return self
     */
    public function setUserKey(string $userKey): self
    {
        $this->initialized['userKey'] = true;
        $this->userKey = $userKey;
        return $this;
    }
    /**
     * Username of this guest pass
     *
     * @return string
     */
    public function getUserName(): string
    {
        return $this->userName;
    }
    /**
     * Username of this guest pass
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
     * filter identity user list by display name
     *
     * @return string
     */
    public function getDisplayName(): string
    {
        return $this->displayName;
    }
    /**
     * filter identity user list by display name
     *
     * @param string $displayName
     *
     * @return self
     */
    public function setDisplayName(string $displayName): self
    {
        $this->initialized['displayName'] = true;
        $this->displayName = $displayName;
        return $this;
    }
    /**
     * Login Password
     *
     * @return string
     */
    public function getLoginPassword(): string
    {
        return $this->loginPassword;
    }
    /**
     * Login Password
     *
     * @param string $loginPassword
     *
     * @return self
     */
    public function setLoginPassword(string $loginPassword): self
    {
        $this->initialized['loginPassword'] = true;
        $this->loginPassword = $loginPassword;
        return $this;
    }
    /**
     * Expiration time of guest pass
     *
     * @return int
     */
    public function getGuestExpiration(): int
    {
        return $this->guestExpiration;
    }
    /**
     * Expiration time of guest pass
     *
     * @param int $guestExpiration
     *
     * @return self
     */
    public function setGuestExpiration(int $guestExpiration): self
    {
        $this->initialized['guestExpiration'] = true;
        $this->guestExpiration = $guestExpiration;
        return $this;
    }
    /**
     * WLAN Id
     *
     * @return string
     */
    public function getWlan(): string
    {
        return $this->wlan;
    }
    /**
     * WLAN Id
     *
     * @param string $wlan
     *
     * @return self
     */
    public function setWlan(string $wlan): self
    {
        $this->initialized['wlan'] = true;
        $this->wlan = $wlan;
        return $this;
    }
    /**
     * WLAN Name
     *
     * @return string
     */
    public function getWlanName(): string
    {
        return $this->wlanName;
    }
    /**
     * WLAN Name
     *
     * @param string $wlanName
     *
     * @return self
     */
    public function setWlanName(string $wlanName): self
    {
        $this->initialized['wlanName'] = true;
        $this->wlanName = $wlanName;
        return $this;
    }
    /**
     * Maximum number of allowed device
     *
     * @return int
     */
    public function getMaxDevices(): int
    {
        return $this->maxDevices;
    }
    /**
     * Maximum number of allowed device
     *
     * @param int $maxDevices
     *
     * @return self
     */
    public function setMaxDevices(int $maxDevices): self
    {
        $this->initialized['maxDevices'] = true;
        $this->maxDevices = $maxDevices;
        return $this;
    }
    /**
     * @return int
     */
    public function getExpirationValue(): int
    {
        return $this->expirationValue;
    }
    /**
     * @param int $expirationValue
     *
     * @return self
     */
    public function setExpirationValue(int $expirationValue): self
    {
        $this->initialized['expirationValue'] = true;
        $this->expirationValue = $expirationValue;
        return $this;
    }
    /**
     * @return string
     */
    public function getExpirationUnit(): string
    {
        return $this->expirationUnit;
    }
    /**
     * @param string $expirationUnit
     *
     * @return self
     */
    public function setExpirationUnit(string $expirationUnit): self
    {
        $this->initialized['expirationUnit'] = true;
        $this->expirationUnit = $expirationUnit;
        return $this;
    }
    /**
     * @return string
     */
    public function getSessionUnit(): string
    {
        return $this->sessionUnit;
    }
    /**
     * @param string $sessionUnit
     *
     * @return self
     */
    public function setSessionUnit(string $sessionUnit): self
    {
        $this->initialized['sessionUnit'] = true;
        $this->sessionUnit = $sessionUnit;
        return $this;
    }
    /**
     * @return int
     */
    public function getSessionValue(): int
    {
        return $this->sessionValue;
    }
    /**
     * @param int $sessionValue
     *
     * @return self
     */
    public function setSessionValue(int $sessionValue): self
    {
        $this->initialized['sessionValue'] = true;
        $this->sessionValue = $sessionValue;
        return $this;
    }
    /**
     * identifier of the domain
     *
     * @return string
     */
    public function getDomainId(): string
    {
        return $this->domainId;
    }
    /**
     * identifier of the domain
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
     * @return int
     */
    public function getExpireAfterIfNotUsed(): int
    {
        return $this->expireAfterIfNotUsed;
    }
    /**
     * @param int $expireAfterIfNotUsed
     *
     * @return self
     */
    public function setExpireAfterIfNotUsed(int $expireAfterIfNotUsed): self
    {
        $this->initialized['expireAfterIfNotUsed'] = true;
        $this->expireAfterIfNotUsed = $expireAfterIfNotUsed;
        return $this;
    }
    /**
     * @return list<string>
     */
    public function getMacAddressList(): array
    {
        return $this->macAddressList;
    }
    /**
     * @param list<string> $macAddressList
     *
     * @return self
     */
    public function setMacAddressList(array $macAddressList): self
    {
        $this->initialized['macAddressList'] = true;
        $this->macAddressList = $macAddressList;
        return $this;
    }
    /**
     * Pass generation
     *
     * @return bool
     */
    public function getAutoGeneratePassword(): bool
    {
        return $this->autoGeneratePassword;
    }
    /**
     * Pass generation
     *
     * @param bool $autoGeneratePassword
     *
     * @return self
     */
    public function setAutoGeneratePassword(bool $autoGeneratePassword): self
    {
        $this->initialized['autoGeneratePassword'] = true;
        $this->autoGeneratePassword = $autoGeneratePassword;
        return $this;
    }
    /**
     * Creator ID
     *
     * @return string
     */
    public function getCreatorId(): string
    {
        return $this->creatorId;
    }
    /**
     * Creator ID
     *
     * @param string $creatorId
     *
     * @return self
     */
    public function setCreatorId(string $creatorId): self
    {
        $this->initialized['creatorId'] = true;
        $this->creatorId = $creatorId;
        return $this;
    }
    /**
     * @return string
     */
    public function getComment(): string
    {
        return $this->comment;
    }
    /**
     * @param string $comment
     *
     * @return self
     */
    public function setComment(string $comment): self
    {
        $this->initialized['comment'] = true;
        $this->comment = $comment;
        return $this;
    }
}