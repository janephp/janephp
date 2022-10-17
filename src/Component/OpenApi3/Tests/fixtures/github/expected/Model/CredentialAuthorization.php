<?php

namespace Github\Model;

class CredentialAuthorization extends \ArrayObject
{
    /**
     * User login that owns the underlying credential.
     *
     * @var string
     */
    protected $login;
    /**
     * Unique identifier for the credential.
     *
     * @var int
     */
    protected $credentialId;
    /**
     * Human-readable description of the credential type.
     *
     * @var string
     */
    protected $credentialType;
    /**
     * Last eight characters of the credential. Only included in responses with credential_type of personal access token.
     *
     * @var string
     */
    protected $tokenLastEight;
    /**
     * Date when the credential was authorized for use.
     *
     * @var \DateTime
     */
    protected $credentialAuthorizedAt;
    /**
     * List of oauth scopes the token has been granted.
     *
     * @var string[]
     */
    protected $scopes;
    /**
     * Unique string to distinguish the credential. Only included in responses with credential_type of SSH Key.
     *
     * @var string
     */
    protected $fingerprint;
    /**
     * Date when the credential was last accessed. May be null if it was never accessed
     *
     * @var \DateTime|null
     */
    protected $credentialAccessedAt;
    /**
     * User login that owns the underlying credential.
     *
     * @return string
     */
    public function getLogin() : string
    {
        return $this->login;
    }
    /**
     * User login that owns the underlying credential.
     *
     * @param string $login
     *
     * @return self
     */
    public function setLogin(string $login) : self
    {
        $this->login = $login;
        return $this;
    }
    /**
     * Unique identifier for the credential.
     *
     * @return int
     */
    public function getCredentialId() : int
    {
        return $this->credentialId;
    }
    /**
     * Unique identifier for the credential.
     *
     * @param int $credentialId
     *
     * @return self
     */
    public function setCredentialId(int $credentialId) : self
    {
        $this->credentialId = $credentialId;
        return $this;
    }
    /**
     * Human-readable description of the credential type.
     *
     * @return string
     */
    public function getCredentialType() : string
    {
        return $this->credentialType;
    }
    /**
     * Human-readable description of the credential type.
     *
     * @param string $credentialType
     *
     * @return self
     */
    public function setCredentialType(string $credentialType) : self
    {
        $this->credentialType = $credentialType;
        return $this;
    }
    /**
     * Last eight characters of the credential. Only included in responses with credential_type of personal access token.
     *
     * @return string
     */
    public function getTokenLastEight() : string
    {
        return $this->tokenLastEight;
    }
    /**
     * Last eight characters of the credential. Only included in responses with credential_type of personal access token.
     *
     * @param string $tokenLastEight
     *
     * @return self
     */
    public function setTokenLastEight(string $tokenLastEight) : self
    {
        $this->tokenLastEight = $tokenLastEight;
        return $this;
    }
    /**
     * Date when the credential was authorized for use.
     *
     * @return \DateTime
     */
    public function getCredentialAuthorizedAt() : \DateTime
    {
        return $this->credentialAuthorizedAt;
    }
    /**
     * Date when the credential was authorized for use.
     *
     * @param \DateTime $credentialAuthorizedAt
     *
     * @return self
     */
    public function setCredentialAuthorizedAt(\DateTime $credentialAuthorizedAt) : self
    {
        $this->credentialAuthorizedAt = $credentialAuthorizedAt;
        return $this;
    }
    /**
     * List of oauth scopes the token has been granted.
     *
     * @return string[]
     */
    public function getScopes() : array
    {
        return $this->scopes;
    }
    /**
     * List of oauth scopes the token has been granted.
     *
     * @param string[] $scopes
     *
     * @return self
     */
    public function setScopes(array $scopes) : self
    {
        $this->scopes = $scopes;
        return $this;
    }
    /**
     * Unique string to distinguish the credential. Only included in responses with credential_type of SSH Key.
     *
     * @return string
     */
    public function getFingerprint() : string
    {
        return $this->fingerprint;
    }
    /**
     * Unique string to distinguish the credential. Only included in responses with credential_type of SSH Key.
     *
     * @param string $fingerprint
     *
     * @return self
     */
    public function setFingerprint(string $fingerprint) : self
    {
        $this->fingerprint = $fingerprint;
        return $this;
    }
    /**
     * Date when the credential was last accessed. May be null if it was never accessed
     *
     * @return \DateTime|null
     */
    public function getCredentialAccessedAt() : ?\DateTime
    {
        return $this->credentialAccessedAt;
    }
    /**
     * Date when the credential was last accessed. May be null if it was never accessed
     *
     * @param \DateTime|null $credentialAccessedAt
     *
     * @return self
     */
    public function setCredentialAccessedAt(?\DateTime $credentialAccessedAt) : self
    {
        $this->credentialAccessedAt = $credentialAccessedAt;
        return $this;
    }
}