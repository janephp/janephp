<?php

namespace Github\Model;

class AuthenticationToken extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property) : bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * The token used for authentication
     *
     * @var string
     */
    protected $token;
    /**
     * The time this token expires
     *
     * @var \DateTime
     */
    protected $expiresAt;
    /**
     * 
     *
     * @var array<string, mixed>
     */
    protected $permissions;
    /**
     * The repositories this token has access to
     *
     * @var list<Repository>
     */
    protected $repositories;
    /**
     * 
     *
     * @var string|null
     */
    protected $singleFile;
    /**
     * Describe whether all repositories have been selected or there's a selection involved
     *
     * @var string
     */
    protected $repositorySelection;
    /**
     * The token used for authentication
     *
     * @return string
     */
    public function getToken() : string
    {
        return $this->token;
    }
    /**
     * The token used for authentication
     *
     * @param string $token
     *
     * @return self
     */
    public function setToken(string $token) : self
    {
        $this->initialized['token'] = true;
        $this->token = $token;
        return $this;
    }
    /**
     * The time this token expires
     *
     * @return \DateTime
     */
    public function getExpiresAt() : \DateTime
    {
        return $this->expiresAt;
    }
    /**
     * The time this token expires
     *
     * @param \DateTime $expiresAt
     *
     * @return self
     */
    public function setExpiresAt(\DateTime $expiresAt) : self
    {
        $this->initialized['expiresAt'] = true;
        $this->expiresAt = $expiresAt;
        return $this;
    }
    /**
     * 
     *
     * @return array<string, mixed>
     */
    public function getPermissions() : iterable
    {
        return $this->permissions;
    }
    /**
     * 
     *
     * @param array<string, mixed> $permissions
     *
     * @return self
     */
    public function setPermissions(iterable $permissions) : self
    {
        $this->initialized['permissions'] = true;
        $this->permissions = $permissions;
        return $this;
    }
    /**
     * The repositories this token has access to
     *
     * @return list<Repository>
     */
    public function getRepositories() : array
    {
        return $this->repositories;
    }
    /**
     * The repositories this token has access to
     *
     * @param list<Repository> $repositories
     *
     * @return self
     */
    public function setRepositories(array $repositories) : self
    {
        $this->initialized['repositories'] = true;
        $this->repositories = $repositories;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getSingleFile() : ?string
    {
        return $this->singleFile;
    }
    /**
     * 
     *
     * @param string|null $singleFile
     *
     * @return self
     */
    public function setSingleFile(?string $singleFile) : self
    {
        $this->initialized['singleFile'] = true;
        $this->singleFile = $singleFile;
        return $this;
    }
    /**
     * Describe whether all repositories have been selected or there's a selection involved
     *
     * @return string
     */
    public function getRepositorySelection() : string
    {
        return $this->repositorySelection;
    }
    /**
     * Describe whether all repositories have been selected or there's a selection involved
     *
     * @param string $repositorySelection
     *
     * @return self
     */
    public function setRepositorySelection(string $repositorySelection) : self
    {
        $this->initialized['repositorySelection'] = true;
        $this->repositorySelection = $repositorySelection;
        return $this;
    }
}