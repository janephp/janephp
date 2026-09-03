<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Issue770\Model;

class AccountSecurityProfileUpdate
{
    /**
     * @var string
     */
    public string $name;
    /**
     * @var string
     */
    public string $description;
    /**
     * The number of successive failures before a lockout will occur.
     *
     * @var int
     */
    public int $accountLockout;
    /**
     * The duration for which the account is automatically locked without administrative intervention.
     *
     * @var int
     */
    public int $lockoutDuration;
    /**
     * @var bool
     */
    public bool $attemptsLockEnabled;
    /**
     * The attempts times.
     *
     * @var int
     */
    public int $attemptsLockoutTimes;
    /**
     * A period of attempts times.
     *
     * @var int
     */
    public int $attemptsLockoutPeriod;
    /**
     * A simple timer that forces the administrator to change their password regularly.
     *
     * @var int
     */
    public int $passwordExpiration;
    /**
     * A validation the prevents reuse of the same password(s).
     *
     * @var int
     */
    public int $passwordReuse;
    /**
     * A period of idle used to invalid that session.
     *
     * @var int
     */
    public int $sessionIdle;
    /**
     * Enable the two-factor authentication. (This configuration can only be enabled from Web GUI.)
     *
     * @var bool
     */
    public bool $twoFactorAuthEnabled;
    /**
     * A period in a inactive status used to lockout these accounts.
     *
     * @var int
     */
    public int $disableInactiveAccounts;
    /**
     * @var string
     */
    public string $domainId;
    /**
     * @var int
     */
    public int $minimumPasswordLength;
    /**
     * Control password complexity mechanism.
     *
     * @var bool
     */
    public bool $passwordComplexityEnabled;
    /**
     * Control minimum password life time.
     *
     * @var bool
     */
    public bool $minimumPasswordLifetimeEnabled;
}