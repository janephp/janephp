<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class ScguserModifyScgUser
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
    protected $passphrase;
    /**
     * User new login passphrase
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
     * @var int
     */
    protected $accountLockout;
    /**
     * @var int
     */
    protected $lockoutDuration;
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
     * @var list<CommonSshPublicKeyRef>
     */
    protected $sshPublicKeys;
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
    public function getPassphrase(): string
    {
        return $this->passphrase;
    }
    /**
     * User login passphrase
     *
     * @param string $passphrase
     *
     * @return self
     */
    public function setPassphrase(string $passphrase): self
    {
        $this->initialized['passphrase'] = true;
        $this->passphrase = $passphrase;
        return $this;
    }
    /**
     * User new login passphrase
     *
     * @return string
     */
    public function getNewPassphrase(): string
    {
        return $this->newPassphrase;
    }
    /**
     * User new login passphrase
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
    /**
     * @return list<CommonSshPublicKeyRef>
     */
    public function getSshPublicKeys(): array
    {
        return $this->sshPublicKeys;
    }
    /**
     * @param list<CommonSshPublicKeyRef> $sshPublicKeys
     *
     * @return self
     */
    public function setSshPublicKeys(array $sshPublicKeys): self
    {
        $this->initialized['sshPublicKeys'] = true;
        $this->sshPublicKeys = $sshPublicKeys;
        return $this;
    }
}