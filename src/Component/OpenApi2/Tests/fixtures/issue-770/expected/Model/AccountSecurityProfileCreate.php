<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class AccountSecurityProfileCreate
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
    protected $name;
    /**
     * @var string
     */
    protected $description;
    /**
     * The number of successive failures before a lockout will occur.
     *
     * @var int
     */
    protected $accountLockout;
    /**
     * The duration for which the account is automatically locked without administrative intervention.
     *
     * @var int
     */
    protected $lockoutDuration;
    /**
     * @var bool
     */
    protected $attemptsLockEnabled;
    /**
     * The attempts times.
     *
     * @var int
     */
    protected $attemptsLockoutTimes;
    /**
     * A period of attempts times.
     *
     * @var int
     */
    protected $attemptsLockoutPeriod;
    /**
     * A simple timer that forces the administrator to change their password regularly.
     *
     * @var int
     */
    protected $passwordExpiration;
    /**
     * A validation the prevents reuse of the same password(s).
     *
     * @var int
     */
    protected $passwordReuse;
    /**
     * A period of idle used to invalid that session.
     *
     * @var int
     */
    protected $sessionIdle;
    /**
     * Enable the two-factor authentication. (This configuration can only be enabled from Web GUI.)
     *
     * @var bool
     */
    protected $twoFactorAuthEnabled;
    /**
     * A period in a inactive status used to lockout these accounts.
     *
     * @var int
     */
    protected $disableInactiveAccounts;
    /**
     * Domain id
     *
     * @var string
     */
    protected $domainId;
    /**
     * @var int
     */
    protected $minimumPasswordLength;
    /**
     * Control password complexity mechanism.
     *
     * @var bool
     */
    protected $passwordComplexityEnabled;
    /**
     * Control minimum password life time.
     *
     * @var bool
     */
    protected $minimumPasswordLifetimeEnabled;
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
     * The number of successive failures before a lockout will occur.
     *
     * @return int
     */
    public function getAccountLockout(): int
    {
        return $this->accountLockout;
    }
    /**
     * The number of successive failures before a lockout will occur.
     *
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
     * The duration for which the account is automatically locked without administrative intervention.
     *
     * @return int
     */
    public function getLockoutDuration(): int
    {
        return $this->lockoutDuration;
    }
    /**
     * The duration for which the account is automatically locked without administrative intervention.
     *
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
     * The attempts times.
     *
     * @return int
     */
    public function getAttemptsLockoutTimes(): int
    {
        return $this->attemptsLockoutTimes;
    }
    /**
     * The attempts times.
     *
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
     * A period of attempts times.
     *
     * @return int
     */
    public function getAttemptsLockoutPeriod(): int
    {
        return $this->attemptsLockoutPeriod;
    }
    /**
     * A period of attempts times.
     *
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
     * A simple timer that forces the administrator to change their password regularly.
     *
     * @return int
     */
    public function getPasswordExpiration(): int
    {
        return $this->passwordExpiration;
    }
    /**
     * A simple timer that forces the administrator to change their password regularly.
     *
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
     * A validation the prevents reuse of the same password(s).
     *
     * @return int
     */
    public function getPasswordReuse(): int
    {
        return $this->passwordReuse;
    }
    /**
     * A validation the prevents reuse of the same password(s).
     *
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
     * A period of idle used to invalid that session.
     *
     * @return int
     */
    public function getSessionIdle(): int
    {
        return $this->sessionIdle;
    }
    /**
     * A period of idle used to invalid that session.
     *
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
     * Enable the two-factor authentication. (This configuration can only be enabled from Web GUI.)
     *
     * @return bool
     */
    public function getTwoFactorAuthEnabled(): bool
    {
        return $this->twoFactorAuthEnabled;
    }
    /**
     * Enable the two-factor authentication. (This configuration can only be enabled from Web GUI.)
     *
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
     * A period in a inactive status used to lockout these accounts.
     *
     * @return int
     */
    public function getDisableInactiveAccounts(): int
    {
        return $this->disableInactiveAccounts;
    }
    /**
     * A period in a inactive status used to lockout these accounts.
     *
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
     * Domain id
     *
     * @return string
     */
    public function getDomainId(): string
    {
        return $this->domainId;
    }
    /**
     * Domain id
     *
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
     * Control password complexity mechanism.
     *
     * @return bool
     */
    public function getPasswordComplexityEnabled(): bool
    {
        return $this->passwordComplexityEnabled;
    }
    /**
     * Control password complexity mechanism.
     *
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
     * Control minimum password life time.
     *
     * @return bool
     */
    public function getMinimumPasswordLifetimeEnabled(): bool
    {
        return $this->minimumPasswordLifetimeEnabled;
    }
    /**
     * Control minimum password life time.
     *
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