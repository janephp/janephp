<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class ScguserCreateScgUser
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
     * User id
     *
     * @var string
     */
    protected $id;
    /**
     * Domain id
     *
     * @var string
     */
    protected $domainId;
    /**
     * User login passphrase
     *
     * @var string
     */
    protected $newPassphrase;
    /**
     * User name
     *
     * @var string
     */
    protected $userName;
    /**
     * User real name
     *
     * @var string
     */
    protected $realName;
    /**
     * User title
     *
     * @var string
     */
    protected $title;
    /**
     * User phone
     *
     * @var string
     */
    protected $phone;
    /**
     * User email
     *
     * @var string
     */
    protected $email;
    /**
     * The number of successive failures before a lockout will occur. (System default admin ONLY)
     *
     * @var int
     */
    protected $accountLockout;
    /**
     * The duration for which the account is automatically locked without administrative intervention. (System default admin ONLY)
     *
     * @var int
     */
    protected $lockoutDuration;
    /**
     * A simple timer that forces the administrator to change their password regularly. (System default admin ONLY)
     *
     * @var int
     */
    protected $passwordExpiration;
    /**
     * A validation the prevents reuse of the same password(s). (System default admin ONLY)
     *
     * @var int
     */
    protected $passwordReuse;
    /**
     * A period of idle used to invalid that session. (System default admin ONLY)
     *
     * @var int
     */
    protected $sessionIdle;
    /**
     * The minimum length of the password for the account. (System default admin ONLY)
     *
     * @var int
     */
    protected $minimumPasswordLength;
    /**
     * Enable the password complexity, should apply the rules as: At least one upper-case character; At least one lower-case character; At least one numeric character:At least one special character; At least 8-chars within the old password should be changed.
     *
     * @var bool
     */
    protected $passwordComplexityEnabled;
    /**
     * Enable the password should not be changed twice within the 24 hours.
     *
     * @var bool
     */
    protected $minimumPasswordLifetimeEnabled;
    /**
     * User id
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    /**
     * User id
     *
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
     * User login passphrase
     *
     * @return string
     */
    public function getNewPassphrase(): string
    {
        return $this->newPassphrase;
    }
    /**
     * User login passphrase
     *
     * @param string $newPassphrase
     *
     * @return self
     */
    public function setNewPassphrase(string $newPassphrase): self
    {
        $this->initialized['newPassphrase'] = true;
        $this->newPassphrase = $newPassphrase;
        return $this;
    }
    /**
     * User name
     *
     * @return string
     */
    public function getUserName(): string
    {
        return $this->userName;
    }
    /**
     * User name
     *
     * @param string $userName
     *
     * @return self
     */
    public function setUserName(string $userName): self
    {
        $this->initialized['userName'] = true;
        $this->userName = $userName;
        return $this;
    }
    /**
     * User real name
     *
     * @return string
     */
    public function getRealName(): string
    {
        return $this->realName;
    }
    /**
     * User real name
     *
     * @param string $realName
     *
     * @return self
     */
    public function setRealName(string $realName): self
    {
        $this->initialized['realName'] = true;
        $this->realName = $realName;
        return $this;
    }
    /**
     * User title
     *
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }
    /**
     * User title
     *
     * @param string $title
     *
     * @return self
     */
    public function setTitle(string $title): self
    {
        $this->initialized['title'] = true;
        $this->title = $title;
        return $this;
    }
    /**
     * User phone
     *
     * @return string
     */
    public function getPhone(): string
    {
        return $this->phone;
    }
    /**
     * User phone
     *
     * @param string $phone
     *
     * @return self
     */
    public function setPhone(string $phone): self
    {
        $this->initialized['phone'] = true;
        $this->phone = $phone;
        return $this;
    }
    /**
     * User email
     *
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }
    /**
     * User email
     *
     * @param string $email
     *
     * @return self
     */
    public function setEmail(string $email): self
    {
        $this->initialized['email'] = true;
        $this->email = $email;
        return $this;
    }
    /**
     * The number of successive failures before a lockout will occur. (System default admin ONLY)
     *
     * @return int
     */
    public function getAccountLockout(): int
    {
        return $this->accountLockout;
    }
    /**
     * The number of successive failures before a lockout will occur. (System default admin ONLY)
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
     * The duration for which the account is automatically locked without administrative intervention. (System default admin ONLY)
     *
     * @return int
     */
    public function getLockoutDuration(): int
    {
        return $this->lockoutDuration;
    }
    /**
     * The duration for which the account is automatically locked without administrative intervention. (System default admin ONLY)
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
     * A simple timer that forces the administrator to change their password regularly. (System default admin ONLY)
     *
     * @return int
     */
    public function getPasswordExpiration(): int
    {
        return $this->passwordExpiration;
    }
    /**
     * A simple timer that forces the administrator to change their password regularly. (System default admin ONLY)
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
     * A validation the prevents reuse of the same password(s). (System default admin ONLY)
     *
     * @return int
     */
    public function getPasswordReuse(): int
    {
        return $this->passwordReuse;
    }
    /**
     * A validation the prevents reuse of the same password(s). (System default admin ONLY)
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
     * A period of idle used to invalid that session. (System default admin ONLY)
     *
     * @return int
     */
    public function getSessionIdle(): int
    {
        return $this->sessionIdle;
    }
    /**
     * A period of idle used to invalid that session. (System default admin ONLY)
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
     * The minimum length of the password for the account. (System default admin ONLY)
     *
     * @return int
     */
    public function getMinimumPasswordLength(): int
    {
        return $this->minimumPasswordLength;
    }
    /**
     * The minimum length of the password for the account. (System default admin ONLY)
     *
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
     * Enable the password complexity, should apply the rules as: At least one upper-case character; At least one lower-case character; At least one numeric character:At least one special character; At least 8-chars within the old password should be changed.
     *
     * @return bool
     */
    public function getPasswordComplexityEnabled(): bool
    {
        return $this->passwordComplexityEnabled;
    }
    /**
     * Enable the password complexity, should apply the rules as: At least one upper-case character; At least one lower-case character; At least one numeric character:At least one special character; At least 8-chars within the old password should be changed.
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
     * Enable the password should not be changed twice within the 24 hours.
     *
     * @return bool
     */
    public function getMinimumPasswordLifetimeEnabled(): bool
    {
        return $this->minimumPasswordLifetimeEnabled;
    }
    /**
     * Enable the password should not be changed twice within the 24 hours.
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