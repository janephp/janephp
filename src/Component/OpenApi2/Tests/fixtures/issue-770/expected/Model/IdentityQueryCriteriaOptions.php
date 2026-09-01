<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class IdentityQueryCriteriaOptions
{
    /**
     * Whether to include the resources of parent domain or not
     *
     * @var bool
     */
    public bool $includeSharedResources;
    /**
     * Whether to include RBAC metadata or not
     *
     * @var bool
     */
    public bool $iNCLUDERBACMETADATA;
    /**
     * Specify Tenant ID for query
     *
     * @var string
     */
    public string $tENANTID;
    /**
     * Specify GlobalFilter ID for query
     *
     * @var string
     */
    public string $globalFilterId;
    /**
     * Audit time of local users
     *
     * @var IdentityQueryCriteriaOptionsLocalUserAuditTime
     */
    public IdentityQueryCriteriaOptionsLocalUserAuditTime $localUserAuditTime;
    /**
     * First name of local users
     *
     * @var string
     */
    public string $localUserFirstName;
    /**
     * Last name of local users
     *
     * @var string
     */
    public string $localUserLastName;
    /**
     * Mail address of local users
     *
     * @var string
     */
    public string $localUserMailAddress;
    /**
     * Primary phone number of local users
     *
     * @var string
     */
    public string $localUserPrimaryPhoneNumber;
    /**
     * Display name of local users
     *
     * @var string
     */
    public string $localUserDisplayName;
    /**
     * User name of local users
     *
     * @var string
     */
    public string $localUserUserName;
    /**
     * User source of local users
     *
     * @var string
     */
    public string $localUserUserSource;
    /**
     * Subscriber type of local users
     *
     * @var string
     */
    public string $localUserSubscriberType;
    /**
     * Status of local users
     *
     * @var string
     */
    public string $localUserStatus;
    /**
     * Display name of guest pass
     *
     * @var string
     */
    public string $guestPassDisplayName;
    /**
     * Expiration time of guest pass
     *
     * @var IdentityQueryCriteriaOptionsGuestPassExpiration
     */
    public IdentityQueryCriteriaOptionsGuestPassExpiration $guestPassExpiration;
    /**
     * WLAN which used by quest pass
     *
     * @var string
     */
    public string $guestPassWlan;
}