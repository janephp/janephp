<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Issue770\Model;

class ProfileHs20Provider
{
    /**
     * Identifier of the Hotspot 2.0 identity provider profile
     *
     * @var string
     */
    public string $id;
    /**
     * @var string
     */
    public string $name;
    /**
     * @var string
     */
    public string $description;
    /**
     * Realms
     *
     * @var list<ProfileProviderRealm>
     */
    public array $realms;
    /**
     * PLMNs
     *
     * @var list<ProfileProviderPLMN>
     */
    public array $plmns;
    /**
     * Home OIs
     *
     * @var list<ProfileProviderHomeOIs>
     */
    public array $homeOis;
    /**
     * Authentications
     *
     * @var list<ProfileProviderAuthentication>
     */
    public array $authentications;
    /**
     * Accountings
     *
     * @var list<ProfileProviderAccounting>
     */
    public array $accountings;
    /**
     * @var ProfileProviderOnlineSignup
     */
    public ProfileProviderOnlineSignup $osu;
    /**
     * Domain Id
     *
     * @var string
     */
    public string $domainId;
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