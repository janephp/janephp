<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class IdentityUsernamePasswordCredentialsImplDto
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
     * Login Name
     *
     * @var string
     */
    protected $loginName;
    /**
     * Login Password
     *
     * @var string
     */
    protected $loginPassword;
    /**
     * identifier of the UsernamePasswordCredentialsImplDto
     *
     * @var string
     */
    protected $key;
    /**
     * Service Provider Id
     *
     * @var string
     */
    protected $serviceProviderId;
    /**
     * Creation Date
     *
     * @var int
     */
    protected $creationDate;
    /**
     * Expiration Date
     *
     * @var int
     */
    protected $expirationDate;
    /**
     * Authentication Method
     *
     * @var string
     */
    protected $authenticationMethod;
    /**
     * @var IdentityAuthenticationServerConfig
     */
    protected $authenticationServerConfig;
    /**
     * Creation Date of Password
     *
     * @var string
     */
    protected $passwordCreation;
    /**
     * Expiration Date of Password
     *
     * @var string
     */
    protected $passwordExpiration;
    /**
     * Login Name
     *
     * @return string
     */
    public function getLoginName(): string
    {
        return $this->loginName;
    }
    /**
     * Login Name
     *
     * @param string $loginName
     *
     * @return self
     */
    public function setLoginName(string $loginName): self
    {
        $this->initialized['loginName'] = true;
        $this->loginName = $loginName;
        return $this;
    }
    /**
     * Login Password
     *
     * @return string
     */
    public function getLoginPassword(): string
    {
        return $this->loginPassword;
    }
    /**
     * Login Password
     *
     * @param string $loginPassword
     *
     * @return self
     */
    public function setLoginPassword(string $loginPassword): self
    {
        $this->initialized['loginPassword'] = true;
        $this->loginPassword = $loginPassword;
        return $this;
    }
    /**
     * identifier of the UsernamePasswordCredentialsImplDto
     *
     * @return string
     */
    public function getKey(): string
    {
        return $this->key;
    }
    /**
     * identifier of the UsernamePasswordCredentialsImplDto
     *
     * @param string $key
     *
     * @return self
     */
    public function setKey(string $key): self
    {
        $this->initialized['key'] = true;
        $this->key = $key;
        return $this;
    }
    /**
     * Service Provider Id
     *
     * @return string
     */
    public function getServiceProviderId(): string
    {
        return $this->serviceProviderId;
    }
    /**
     * Service Provider Id
     *
     * @param string $serviceProviderId
     *
     * @return self
     */
    public function setServiceProviderId(string $serviceProviderId): self
    {
        $this->initialized['serviceProviderId'] = true;
        $this->serviceProviderId = $serviceProviderId;
        return $this;
    }
    /**
     * Creation Date
     *
     * @return int
     */
    public function getCreationDate(): int
    {
        return $this->creationDate;
    }
    /**
     * Creation Date
     *
     * @param int $creationDate
     *
     * @return self
     */
    public function setCreationDate(int $creationDate): self
    {
        $this->initialized['creationDate'] = true;
        $this->creationDate = $creationDate;
        return $this;
    }
    /**
     * Expiration Date
     *
     * @return int
     */
    public function getExpirationDate(): int
    {
        return $this->expirationDate;
    }
    /**
     * Expiration Date
     *
     * @param int $expirationDate
     *
     * @return self
     */
    public function setExpirationDate(int $expirationDate): self
    {
        $this->initialized['expirationDate'] = true;
        $this->expirationDate = $expirationDate;
        return $this;
    }
    /**
     * Authentication Method
     *
     * @return string
     */
    public function getAuthenticationMethod(): string
    {
        return $this->authenticationMethod;
    }
    /**
     * Authentication Method
     *
     * @param string $authenticationMethod
     *
     * @return self
     */
    public function setAuthenticationMethod(string $authenticationMethod): self
    {
        $this->initialized['authenticationMethod'] = true;
        $this->authenticationMethod = $authenticationMethod;
        return $this;
    }
    /**
     * @return IdentityAuthenticationServerConfig
     */
    public function getAuthenticationServerConfig(): IdentityAuthenticationServerConfig
    {
        return $this->authenticationServerConfig;
    }
    /**
     * @param IdentityAuthenticationServerConfig $authenticationServerConfig
     *
     * @return self
     */
    public function setAuthenticationServerConfig(IdentityAuthenticationServerConfig $authenticationServerConfig): self
    {
        $this->initialized['authenticationServerConfig'] = true;
        $this->authenticationServerConfig = $authenticationServerConfig;
        return $this;
    }
    /**
     * Creation Date of Password
     *
     * @return string
     */
    public function getPasswordCreation(): string
    {
        return $this->passwordCreation;
    }
    /**
     * Creation Date of Password
     *
     * @param string $passwordCreation
     *
     * @return self
     */
    public function setPasswordCreation(string $passwordCreation): self
    {
        $this->initialized['passwordCreation'] = true;
        $this->passwordCreation = $passwordCreation;
        return $this;
    }
    /**
     * Expiration Date of Password
     *
     * @return string
     */
    public function getPasswordExpiration(): string
    {
        return $this->passwordExpiration;
    }
    /**
     * Expiration Date of Password
     *
     * @param string $passwordExpiration
     *
     * @return self
     */
    public function setPasswordExpiration(string $passwordExpiration): self
    {
        $this->initialized['passwordExpiration'] = true;
        $this->passwordExpiration = $passwordExpiration;
        return $this;
    }
}