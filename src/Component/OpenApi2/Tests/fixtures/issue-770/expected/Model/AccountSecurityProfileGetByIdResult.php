<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class AccountSecurityProfileGetByIdResult
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
     * @var string
     */
    protected $id;
    /**
     * @var string
     */
    protected $name;
    /**
     * @var string
     */
    protected $description;
    /**
     * @var string
     */
    protected $domainId;
    /**
     * @var string
     */
    protected $tenantId;
    /**
     * @var int
     */
    protected $accountLockout;
    /**
     * @var int
     */
    protected $attemptsLockoutTimes;
    /**
     * @var int
     */
    protected $attemptsLockoutPeriod;
    /**
     * @var int
     */
    protected $lockoutDuration;
    /**
     * @var bool
     */
    protected $attemptsLockEnabled;
    /**
     * @var int
     */
    protected $passwordExpiration;
    /**
     * @var int
     */
    protected $passwordReuse;
    /**
     * @var int
     */
    protected $sessionIdle;
    /**
     * @var bool
     */
    protected $twoFactorAuthEnabled;
    /**
     * @var int
     */
    protected $disableInactiveAccounts;
    /**
     * @var int
     */
    protected $minimumPasswordLength;
    /**
     * @var bool
     */
    protected $passwordComplexityEnabled;
    /**
     * @var bool
     */
    protected $minimumPasswordLifetimeEnabled;
    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    /**
     * @param string $id
     *
     * @return self
     */
    public function setId(string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;
        return $this;
    }
    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;
        return $this;
    }
    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }
    /**
     * @param string $description
     *
     * @return self
     */
    public function setDescription(string $description): self
    {
        $this->initialized['description'] = true;
        $this->description = $description;
        return $this;
    }
    /**
     * @return string
     */
    public function getDomainId(): string
    {
        return $this->domainId;
    }
    /**
     * @param string $domainId
     *
     * @return self
     */
    public function setDomainId(string $domainId): self
    {
        $this->initialized['domainId'] = true;
        $this->domainId = $domainId;
        return $this;
    }
    /**
     * @return string
     */
    public function getTenantId(): string
    {
        return $this->tenantId;
    }
    /**
     * @param string $tenantId
     *
     * @return self
     */
    public function setTenantId(string $tenantId): self
    {
        $this->initialized['tenantId'] = true;
        $this->tenantId = $tenantId;
        return $this;
    }
    /**
     * @return int
     */
    public function getAccountLockout(): int
    {
        return $this->accountLockout;
    }
    /**
     * @param int $accountLockout
     *
     * @return self
     */
    public function setAccountLockout(int $accountLockout): self
    {
        $this->initialized['accountLockout'] = true;
        $this->accountLockout = $accountLockout;
        return $this;
    }
    /**
     * @return int
     */
    public function getAttemptsLockoutTimes(): int
    {
        return $this->attemptsLockoutTimes;
    }
    /**
     * @param int $attemptsLockoutTimes
     *
     * @return self
     */
    public function setAttemptsLockoutTimes(int $attemptsLockoutTimes): self
    {
        $this->initialized['attemptsLockoutTimes'] = true;
        $this->attemptsLockoutTimes = $attemptsLockoutTimes;
        return $this;
    }
    /**
     * @return int
     */
    public function getAttemptsLockoutPeriod(): int
    {
        return $this->attemptsLockoutPeriod;
    }
    /**
     * @param int $attemptsLockoutPeriod
     *
     * @return self
     */
    public function setAttemptsLockoutPeriod(int $attemptsLockoutPeriod): self
    {
        $this->initialized['attemptsLockoutPeriod'] = true;
        $this->attemptsLockoutPeriod = $attemptsLockoutPeriod;
        return $this;
    }
    /**
     * @return int
     */
    public function getLockoutDuration(): int
    {
        return $this->lockoutDuration;
    }
    /**
     * @param int $lockoutDuration
     *
     * @return self
     */
    public function setLockoutDuration(int $lockoutDuration): self
    {
        $this->initialized['lockoutDuration'] = true;
        $this->lockoutDuration = $lockoutDuration;
        return $this;
    }
    /**
     * @return bool
     */
    public function getAttemptsLockEnabled(): bool
    {
        return $this->attemptsLockEnabled;
    }
    /**
     * @param bool $attemptsLockEnabled
     *
     * @return self
     */
    public function setAttemptsLockEnabled(bool $attemptsLockEnabled): self
    {
        $this->initialized['attemptsLockEnabled'] = true;
        $this->attemptsLockEnabled = $attemptsLockEnabled;
        return $this;
    }
    /**
     * @return int
     */
    public function getPasswordExpiration(): int
    {
        return $this->passwordExpiration;
    }
    /**
     * @param int $passwordExpiration
     *
     * @return self
     */
    public function setPasswordExpiration(int $passwordExpiration): self
    {
        $this->initialized['passwordExpiration'] = true;
        $this->passwordExpiration = $passwordExpiration;
        return $this;
    }
    /**
     * @return int
     */
    public function getPasswordReuse(): int
    {
        return $this->passwordReuse;
    }
    /**
     * @param int $passwordReuse
     *
     * @return self
     */
    public function setPasswordReuse(int $passwordReuse): self
    {
        $this->initialized['passwordReuse'] = true;
        $this->passwordReuse = $passwordReuse;
        return $this;
    }
    /**
     * @return int
     */
    public function getSessionIdle(): int
    {
        return $this->sessionIdle;
    }
    /**
     * @param int $sessionIdle
     *
     * @return self
     */
    public function setSessionIdle(int $sessionIdle): self
    {
        $this->initialized['sessionIdle'] = true;
        $this->sessionIdle = $sessionIdle;
        return $this;
    }
    /**
     * @return bool
     */
    public function getTwoFactorAuthEnabled(): bool
    {
        return $this->twoFactorAuthEnabled;
    }
    /**
     * @param bool $twoFactorAuthEnabled
     *
     * @return self
     */
    public function setTwoFactorAuthEnabled(bool $twoFactorAuthEnabled): self
    {
        $this->initialized['twoFactorAuthEnabled'] = true;
        $this->twoFactorAuthEnabled = $twoFactorAuthEnabled;
        return $this;
    }
    /**
     * @return int
     */
    public function getDisableInactiveAccounts(): int
    {
        return $this->disableInactiveAccounts;
    }
    /**
     * @param int $disableInactiveAccounts
     *
     * @return self
     */
    public function setDisableInactiveAccounts(int $disableInactiveAccounts): self
    {
        $this->initialized['disableInactiveAccounts'] = true;
        $this->disableInactiveAccounts = $disableInactiveAccounts;
        return $this;
    }
    /**
     * @return int
     */
    public function getMinimumPasswordLength(): int
    {
        return $this->minimumPasswordLength;
    }
    /**
     * @param int $minimumPasswordLength
     *
     * @return self
     */
    public function setMinimumPasswordLength(int $minimumPasswordLength): self
    {
        $this->initialized['minimumPasswordLength'] = true;
        $this->minimumPasswordLength = $minimumPasswordLength;
        return $this;
    }
    /**
     * @return bool
     */
    public function getPasswordComplexityEnabled(): bool
    {
        return $this->passwordComplexityEnabled;
    }
    /**
     * @param bool $passwordComplexityEnabled
     *
     * @return self
     */
    public function setPasswordComplexityEnabled(bool $passwordComplexityEnabled): self
    {
        $this->initialized['passwordComplexityEnabled'] = true;
        $this->passwordComplexityEnabled = $passwordComplexityEnabled;
        return $this;
    }
    /**
     * @return bool
     */
    public function getMinimumPasswordLifetimeEnabled(): bool
    {
        return $this->minimumPasswordLifetimeEnabled;
    }
    /**
     * @param bool $minimumPasswordLifetimeEnabled
     *
     * @return self
     */
    public function setMinimumPasswordLifetimeEnabled(bool $minimumPasswordLifetimeEnabled): self
    {
        $this->initialized['minimumPasswordLifetimeEnabled'] = true;
        $this->minimumPasswordLifetimeEnabled = $minimumPasswordLifetimeEnabled;
        return $this;
    }
}