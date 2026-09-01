<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Issue770\Model;

class AccountSecurityProfileGetByIdResult
{
    /**
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
     * @var string
     */
    public string $domainId;
    /**
     * @var string
     */
    public string $tenantId;
    /**
     * @var int
     */
    public int $accountLockout;
    /**
     * @var int
     */
    public int $attemptsLockoutTimes;
    /**
     * @var int
     */
    public int $attemptsLockoutPeriod;
    /**
     * @var int
     */
    public int $lockoutDuration;
    /**
     * @var bool
     */
    public bool $attemptsLockEnabled;
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
     * @var bool
     */
    public bool $twoFactorAuthEnabled;
    /**
     * @var int
     */
    public int $disableInactiveAccounts;
    /**
     * @var int
     */
    public int $minimumPasswordLength;
    /**
     * @var bool
     */
    public bool $passwordComplexityEnabled;
    /**
     * @var bool
     */
    public bool $minimumPasswordLifetimeEnabled;
}