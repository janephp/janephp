<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class ProfileAuthenticationProfile
{
    /**
     * Identifier of the authentication profile
     *
     * @var string
     */
    public string $id;
    /**
     * Tenant UUID
     *
     * @var string
     */
    public string $mvnoId;
    /**
     * Domain UUID
     *
     * @var string
     */
    public string $domainId;
    /**
     * @var string
     */
    public string $name;
    /**
     * @var string
     */
    public string $description;
    /**
     * 3GPP support enabled or disabled
     *
     * @var bool
     */
    public bool $gppSuppportEnabled;
    /**
     * Hotspot 2.0 support enabled or disabled
     *
     * @var bool
     */
    public bool $h20SuppportEnabled;
    /**
     * Realm based authentication service mappings contains LDAP or AD service type
     *
     * @var bool
     */
    public bool $isContainDirectoryService;
    /**
     * Hosted AAA server RADIUS settings & PLMN ID settings
     *
     * @var ProfileTtgCommonSetting
     */
    public ProfileTtgCommonSetting $ttgCommonSetting;
    /**
     * Realm based authentication service mappings
     *
     * @var list<ProfileRealmAuthServiceMapping>
     */
    public array $realmMappings;
    /**
     * Timestamp of being created
     *
     * @var int
     */
    public int $createDateTime;
    /**
     * Timestamp of being modified
     *
     * @var int
     */
    public int $modifiedDateTime;
    /**
     * Creator ID
     *
     * @var string
     */
    public string $creatorId;
    /**
     * Modifier ID
     *
     * @var string
     */
    public string $modifierId;
    /**
     * Creator Name
     *
     * @var string
     */
    public string $creatorUsername;
    /**
     * Modifier Name
     *
     * @var string
     */
    public string $modifierUsername;
}