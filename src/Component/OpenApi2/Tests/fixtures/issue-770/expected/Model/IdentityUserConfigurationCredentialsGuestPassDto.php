<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class IdentityUserConfigurationCredentialsGuestPassDto
{
    /**
     * Authentication method of credential
     *
     * @var string
     */
    public string $authenticationMethod;
    /**
     * Key of this guest pass
     *
     * @var string
     */
    public string $key;
    /**
     * Service Provider Id
     *
     * @var string
     */
    public string $serviceProviderId;
    /**
     * Creation Date
     *
     * @var int
     */
    public int $creationDate;
    /**
     * Expiration date and time
     *
     * @var string
     */
    public string $expirationDate;
    /**
     * user ID of the identity guest pass
     *
     * @var string
     */
    public string $userKey;
    /**
     * Username of this guest pass
     *
     * @var string
     */
    public string $userName;
    /**
     * filter identity user list by display name
     *
     * @var string
     */
    public string $displayName;
    /**
     * Login Password
     *
     * @var string
     */
    public string $loginPassword;
    /**
     * Expiration time of guest pass
     *
     * @var int
     */
    public int $guestExpiration;
    /**
     * WLAN Id
     *
     * @var string
     */
    public string $wlan;
    /**
     * WLAN Name
     *
     * @var string
     */
    public string $wlanName;
    /**
     * Maximum number of allowed device
     *
     * @var int
     */
    public int $maxDevices;
    /**
     * @var int
     */
    public int $expirationValue;
    /**
     * @var string
     */
    public string $expirationUnit;
    /**
     * @var string
     */
    public string $sessionUnit;
    /**
     * @var int
     */
    public int $sessionValue;
    /**
     * identifier of the domain
     *
     * @var string
     */
    public string $domainId;
    /**
     * @var int
     */
    public int $expireAfterIfNotUsed;
    /**
     * @var list<string>
     */
    public array $macAddressList;
    /**
     * Pass generation
     *
     * @var bool
     */
    public bool $autoGeneratePassword;
    /**
     * Creator ID
     *
     * @var string
     */
    public string $creatorId;
    /**
     * @var string
     */
    public string $comment;
}