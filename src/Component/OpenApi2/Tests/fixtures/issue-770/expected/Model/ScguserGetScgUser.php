<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Issue770\Model;

class ScguserGetScgUser
{
    /**
     * User id
     *
     * @var string
     */
    public string $id;
    /**
     * Tenant id
     *
     * @var string
     */
    public string $tenantUUID;
    /**
     * Domain id
     *
     * @var string
     */
    public string $domainId;
    /**
     * User enabled or not
     *
     * @var int
     */
    public int $enabled;
    /**
     * User locked or not (0:unlocked/1:locked)
     *
     * @var int
     */
    public int $locked;
    /**
     * User name
     *
     * @var string
     */
    public string $userName;
    /**
     * User real name
     *
     * @var string
     */
    public string $realName;
    /**
     * User title
     *
     * @var string
     */
    public string $title;
    /**
     * User phone
     *
     * @var string
     */
    public string $phone;
    /**
     * User email
     *
     * @var string
     */
    public string $email;
    /**
     * @var int
     */
    public int $accountLockout;
    /**
     * @var int
     */
    public int $lockoutDuration;
    /**
     * @var int
     */
    public int $passwordExpiration;
    /**
     * @var int
     */
    public int $passwordReuse;
    /**
     * @var int
     */
    public int $sessionIdle;
    /**
     * @var int
     */
    public int $minimumPasswordLength;
    /**
     * Enable the password complexity, should apply the rules as: At least one upper-case character; At least one lower-case character; At least one numeric character:At least one special character; At least 8-chars within the old password should be changed.
     *
     * @var bool
     */
    public bool $passwordComplexityEnabled;
    /**
     * Enable the password should not be changed twice within the 24 hours.
     *
     * @var bool
     */
    public bool $minimumPasswordLifetimeEnabled;
    /**
     * @var list<CommonSshPublicKeyRef>
     */
    public array $sshPublicKeys;
    /**
     * @var bool
     */
    public bool $credentialExpired;
}