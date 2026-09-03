<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Issue770\Model;

class ScguserCreateScgUser
{
    /**
     * User id
     *
     * @var string
     */
    public string $id;
    /**
     * Domain id
     *
     * @var string
     */
    public string $domainId;
    /**
     * User login passphrase
     *
     * @var string
     */
    public string $newPassphrase;
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
     * The number of successive failures before a lockout will occur. (System default admin ONLY)
     *
     * @var int
     */
    public int $accountLockout;
    /**
     * The duration for which the account is automatically locked without administrative intervention. (System default admin ONLY)
     *
     * @var int
     */
    public int $lockoutDuration;
    /**
     * A simple timer that forces the administrator to change their password regularly. (System default admin ONLY)
     *
     * @var int
     */
    public int $passwordExpiration;
    /**
     * A validation the prevents reuse of the same password(s). (System default admin ONLY)
     *
     * @var int
     */
    public int $passwordReuse;
    /**
     * A period of idle used to invalid that session. (System default admin ONLY)
     *
     * @var int
     */
    public int $sessionIdle;
    /**
     * The minimum length of the password for the account. (System default admin ONLY)
     *
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
}