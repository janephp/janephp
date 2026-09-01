<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Issue770\Model;

class ProfileModifyAuthenticationProfile
{
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
     * 3GPP support enabled or disabled
     *
     * @var bool
     */
    public bool $gppSuppportEnabled = false;
    /**
     * Hotspot 2.0 support enabled or disabled
     *
     * @var bool
     */
    public bool $h20SuppportEnabled;
    /**
     * ID of Accounting Profile
     *
     * @var string
     */
    public string $id;
}