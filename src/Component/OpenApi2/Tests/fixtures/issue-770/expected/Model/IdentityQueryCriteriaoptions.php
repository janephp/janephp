<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class IdentityQueryCriteriaOptions
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
     * Whether to include the resources of parent domain or not
     *
     * @var bool
     */
    protected $includeSharedResources;
    /**
     * Whether to include RBAC metadata or not
     *
     * @var bool
     */
    protected $iNCLUDERBACMETADATA;
    /**
     * Specify Tenant ID for query
     *
     * @var string
     */
    protected $tENANTID;
    /**
     * Specify GlobalFilter ID for query
     *
     * @var string
     */
    protected $globalFilterId;
    /**
     * Audit time of local users
     *
     * @var IdentityQueryCriteriaOptionsLocalUserAuditTime
     */
    protected $localUserAuditTime;
    /**
     * First name of local users
     *
     * @var string
     */
    protected $localUserFirstName;
    /**
     * Last name of local users
     *
     * @var string
     */
    protected $localUserLastName;
    /**
     * Mail address of local users
     *
     * @var string
     */
    protected $localUserMailAddress;
    /**
     * Primary phone number of local users
     *
     * @var string
     */
    protected $localUserPrimaryPhoneNumber;
    /**
     * Display name of local users
     *
     * @var string
     */
    protected $localUserDisplayName;
    /**
     * User name of local users
     *
     * @var string
     */
    protected $localUserUserName;
    /**
     * User source of local users
     *
     * @var string
     */
    protected $localUserUserSource;
    /**
     * Subscriber type of local users
     *
     * @var string
     */
    protected $localUserSubscriberType;
    /**
     * Status of local users
     *
     * @var string
     */
    protected $localUserStatus;
    /**
     * Display name of guest pass
     *
     * @var string
     */
    protected $guestPassDisplayName;
    /**
     * Expiration time of guest pass
     *
     * @var IdentityQueryCriteriaOptionsGuestPassExpiration
     */
    protected $guestPassExpiration;
    /**
     * WLAN which used by quest pass
     *
     * @var string
     */
    protected $guestPassWlan;
    /**
     * Whether to include the resources of parent domain or not
     *
     * @return bool
     */
    public function getIncludeSharedResources(): bool
    {
        return $this->includeSharedResources;
    }
    /**
     * Whether to include the resources of parent domain or not
     *
     * @param bool $includeSharedResources
     *
     * @return self
     */
    public function setIncludeSharedResources(bool $includeSharedResources): self
    {
        $this->initialized['includeSharedResources'] = true;
        $this->includeSharedResources = $includeSharedResources;
        return $this;
    }
    /**
     * Whether to include RBAC metadata or not
     *
     * @return bool
     */
    public function getINCLUDERBACMETADATA(): bool
    {
        return $this->iNCLUDERBACMETADATA;
    }
    /**
     * Whether to include RBAC metadata or not
     *
     * @param bool $iNCLUDERBACMETADATA
     *
     * @return self
     */
    public function setINCLUDERBACMETADATA(bool $iNCLUDERBACMETADATA): self
    {
        $this->initialized['iNCLUDERBACMETADATA'] = true;
        $this->iNCLUDERBACMETADATA = $iNCLUDERBACMETADATA;
        return $this;
    }
    /**
     * Specify Tenant ID for query
     *
     * @return string
     */
    public function getTENANTID(): string
    {
        return $this->tENANTID;
    }
    /**
     * Specify Tenant ID for query
     *
     * @param string $tENANTID
     *
     * @return self
     */
    public function setTENANTID(string $tENANTID): self
    {
        $this->initialized['tENANTID'] = true;
        $this->tENANTID = $tENANTID;
        return $this;
    }
    /**
     * Specify GlobalFilter ID for query
     *
     * @return string
     */
    public function getGlobalFilterId(): string
    {
        return $this->globalFilterId;
    }
    /**
     * Specify GlobalFilter ID for query
     *
     * @param string $globalFilterId
     *
     * @return self
     */
    public function setGlobalFilterId(string $globalFilterId): self
    {
        $this->initialized['globalFilterId'] = true;
        $this->globalFilterId = $globalFilterId;
        return $this;
    }
    /**
     * Audit time of local users
     *
     * @return IdentityQueryCriteriaOptionsLocalUserAuditTime
     */
    public function getLocalUserAuditTime(): IdentityQueryCriteriaOptionsLocalUserAuditTime
    {
        return $this->localUserAuditTime;
    }
    /**
     * Audit time of local users
     *
     * @param IdentityQueryCriteriaOptionsLocalUserAuditTime $localUserAuditTime
     *
     * @return self
     */
    public function setLocalUserAuditTime(IdentityQueryCriteriaOptionsLocalUserAuditTime $localUserAuditTime): self
    {
        $this->initialized['localUserAuditTime'] = true;
        $this->localUserAuditTime = $localUserAuditTime;
        return $this;
    }
    /**
     * First name of local users
     *
     * @return string
     */
    public function getLocalUserFirstName(): string
    {
        return $this->localUserFirstName;
    }
    /**
     * First name of local users
     *
     * @param string $localUserFirstName
     *
     * @return self
     */
    public function setLocalUserFirstName(string $localUserFirstName): self
    {
        $this->initialized['localUserFirstName'] = true;
        $this->localUserFirstName = $localUserFirstName;
        return $this;
    }
    /**
     * Last name of local users
     *
     * @return string
     */
    public function getLocalUserLastName(): string
    {
        return $this->localUserLastName;
    }
    /**
     * Last name of local users
     *
     * @param string $localUserLastName
     *
     * @return self
     */
    public function setLocalUserLastName(string $localUserLastName): self
    {
        $this->initialized['localUserLastName'] = true;
        $this->localUserLastName = $localUserLastName;
        return $this;
    }
    /**
     * Mail address of local users
     *
     * @return string
     */
    public function getLocalUserMailAddress(): string
    {
        return $this->localUserMailAddress;
    }
    /**
     * Mail address of local users
     *
     * @param string $localUserMailAddress
     *
     * @return self
     */
    public function setLocalUserMailAddress(string $localUserMailAddress): self
    {
        $this->initialized['localUserMailAddress'] = true;
        $this->localUserMailAddress = $localUserMailAddress;
        return $this;
    }
    /**
     * Primary phone number of local users
     *
     * @return string
     */
    public function getLocalUserPrimaryPhoneNumber(): string
    {
        return $this->localUserPrimaryPhoneNumber;
    }
    /**
     * Primary phone number of local users
     *
     * @param string $localUserPrimaryPhoneNumber
     *
     * @return self
     */
    public function setLocalUserPrimaryPhoneNumber(string $localUserPrimaryPhoneNumber): self
    {
        $this->initialized['localUserPrimaryPhoneNumber'] = true;
        $this->localUserPrimaryPhoneNumber = $localUserPrimaryPhoneNumber;
        return $this;
    }
    /**
     * Display name of local users
     *
     * @return string
     */
    public function getLocalUserDisplayName(): string
    {
        return $this->localUserDisplayName;
    }
    /**
     * Display name of local users
     *
     * @param string $localUserDisplayName
     *
     * @return self
     */
    public function setLocalUserDisplayName(string $localUserDisplayName): self
    {
        $this->initialized['localUserDisplayName'] = true;
        $this->localUserDisplayName = $localUserDisplayName;
        return $this;
    }
    /**
     * User name of local users
     *
     * @return string
     */
    public function getLocalUserUserName(): string
    {
        return $this->localUserUserName;
    }
    /**
     * User name of local users
     *
     * @param string $localUserUserName
     *
     * @return self
     */
    public function setLocalUserUserName(string $localUserUserName): self
    {
        $this->initialized['localUserUserName'] = true;
        $this->localUserUserName = $localUserUserName;
        return $this;
    }
    /**
     * User source of local users
     *
     * @return string
     */
    public function getLocalUserUserSource(): string
    {
        return $this->localUserUserSource;
    }
    /**
     * User source of local users
     *
     * @param string $localUserUserSource
     *
     * @return self
     */
    public function setLocalUserUserSource(string $localUserUserSource): self
    {
        $this->initialized['localUserUserSource'] = true;
        $this->localUserUserSource = $localUserUserSource;
        return $this;
    }
    /**
     * Subscriber type of local users
     *
     * @return string
     */
    public function getLocalUserSubscriberType(): string
    {
        return $this->localUserSubscriberType;
    }
    /**
     * Subscriber type of local users
     *
     * @param string $localUserSubscriberType
     *
     * @return self
     */
    public function setLocalUserSubscriberType(string $localUserSubscriberType): self
    {
        $this->initialized['localUserSubscriberType'] = true;
        $this->localUserSubscriberType = $localUserSubscriberType;
        return $this;
    }
    /**
     * Status of local users
     *
     * @return string
     */
    public function getLocalUserStatus(): string
    {
        return $this->localUserStatus;
    }
    /**
     * Status of local users
     *
     * @param string $localUserStatus
     *
     * @return self
     */
    public function setLocalUserStatus(string $localUserStatus): self
    {
        $this->initialized['localUserStatus'] = true;
        $this->localUserStatus = $localUserStatus;
        return $this;
    }
    /**
     * Display name of guest pass
     *
     * @return string
     */
    public function getGuestPassDisplayName(): string
    {
        return $this->guestPassDisplayName;
    }
    /**
     * Display name of guest pass
     *
     * @param string $guestPassDisplayName
     *
     * @return self
     */
    public function setGuestPassDisplayName(string $guestPassDisplayName): self
    {
        $this->initialized['guestPassDisplayName'] = true;
        $this->guestPassDisplayName = $guestPassDisplayName;
        return $this;
    }
    /**
     * Expiration time of guest pass
     *
     * @return IdentityQueryCriteriaOptionsGuestPassExpiration
     */
    public function getGuestPassExpiration(): IdentityQueryCriteriaOptionsGuestPassExpiration
    {
        return $this->guestPassExpiration;
    }
    /**
     * Expiration time of guest pass
     *
     * @param IdentityQueryCriteriaOptionsGuestPassExpiration $guestPassExpiration
     *
     * @return self
     */
    public function setGuestPassExpiration(IdentityQueryCriteriaOptionsGuestPassExpiration $guestPassExpiration): self
    {
        $this->initialized['guestPassExpiration'] = true;
        $this->guestPassExpiration = $guestPassExpiration;
        return $this;
    }
    /**
     * WLAN which used by quest pass
     *
     * @return string
     */
    public function getGuestPassWlan(): string
    {
        return $this->guestPassWlan;
    }
    /**
     * WLAN which used by quest pass
     *
     * @param string $guestPassWlan
     *
     * @return self
     */
    public function setGuestPassWlan(string $guestPassWlan): self
    {
        $this->initialized['guestPassWlan'] = true;
        $this->guestPassWlan = $guestPassWlan;
        return $this;
    }
}