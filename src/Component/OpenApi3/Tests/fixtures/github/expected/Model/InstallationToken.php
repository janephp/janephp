<?php

namespace Github\Model;

class InstallationToken extends \ArrayObject
{
    /**
     * 
     *
     * @var string
     */
    protected $token;
    /**
     * 
     *
     * @var string
     */
    protected $expiresAt;
    /**
     * 
     *
     * @var InstallationTokenPermissions
     */
    protected $permissions;
    /**
     * 
     *
     * @var string
     */
    protected $repositorySelection;
    /**
     * 
     *
     * @var Repository[]
     */
    protected $repositories;
    /**
     * 
     *
     * @var string
     */
    protected $singleFile;
    /**
     * 
     *
     * @return string
     */
    public function getToken() : string
    {
        return $this->token;
    }
    /**
     * 
     *
     * @param string $token
     *
     * @return self
     */
    public function setToken(string $token) : self
    {
        $this->token = $token;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getExpiresAt() : string
    {
        return $this->expiresAt;
    }
    /**
     * 
     *
     * @param string $expiresAt
     *
     * @return self
     */
    public function setExpiresAt(string $expiresAt) : self
    {
        $this->expiresAt = $expiresAt;
        return $this;
    }
    /**
     * 
     *
     * @return InstallationTokenPermissions
     */
    public function getPermissions() : InstallationTokenPermissions
    {
        return $this->permissions;
    }
    /**
     * 
     *
     * @param InstallationTokenPermissions $permissions
     *
     * @return self
     */
    public function setPermissions(InstallationTokenPermissions $permissions) : self
    {
        $this->permissions = $permissions;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getRepositorySelection() : string
    {
        return $this->repositorySelection;
    }
    /**
     * 
     *
     * @param string $repositorySelection
     *
     * @return self
     */
    public function setRepositorySelection(string $repositorySelection) : self
    {
        $this->repositorySelection = $repositorySelection;
        return $this;
    }
    /**
     * 
     *
     * @return Repository[]
     */
    public function getRepositories() : array
    {
        return $this->repositories;
    }
    /**
     * 
     *
     * @param Repository[] $repositories
     *
     * @return self
     */
    public function setRepositories(array $repositories) : self
    {
        $this->repositories = $repositories;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getSingleFile() : string
    {
        return $this->singleFile;
    }
    /**
     * 
     *
     * @param string $singleFile
     *
     * @return self
     */
    public function setSingleFile(string $singleFile) : self
    {
        $this->singleFile = $singleFile;
        return $this;
    }
}