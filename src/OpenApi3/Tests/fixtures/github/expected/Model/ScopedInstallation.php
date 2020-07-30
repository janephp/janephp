<?php

namespace Github\Model;

class ScopedInstallation
{
    /**
     * 
     *
     * @var mixed
     */
    protected $permissions;
    /**
     * Describe whether all repositories have been selected or there's a selection involved
     *
     * @var string
     */
    protected $repositorySelection;
    /**
     * 
     *
     * @var string|null
     */
    protected $singleFileName;
    /**
     * 
     *
     * @var string
     */
    protected $repositoriesUrl;
    /**
     * Simple User
     *
     * @var SimpleUser|null
     */
    protected $account;
    /**
     * 
     *
     * @return mixed
     */
    public function getPermissions()
    {
        return $this->permissions;
    }
    /**
     * 
     *
     * @param mixed $permissions
     *
     * @return self
     */
    public function setPermissions($permissions) : self
    {
        $this->permissions = $permissions;
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
        $this->repositorySelection = $repositorySelection;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getSingleFileName() : ?string
    {
        return $this->singleFileName;
    }
    /**
     * 
     *
     * @param string|null $singleFileName
     *
     * @return self
     */
    public function setSingleFileName(?string $singleFileName) : self
    {
        $this->singleFileName = $singleFileName;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getRepositoriesUrl() : string
    {
        return $this->repositoriesUrl;
    }
    /**
     * 
     *
     * @param string $repositoriesUrl
     *
     * @return self
     */
    public function setRepositoriesUrl(string $repositoriesUrl) : self
    {
        $this->repositoriesUrl = $repositoriesUrl;
        return $this;
    }
    /**
     * Simple User
     *
     * @return SimpleUser|null
     */
    public function getAccount() : ?SimpleUser
    {
        return $this->account;
    }
    /**
     * Simple User
     *
     * @param SimpleUser|null $account
     *
     * @return self
     */
    public function setAccount(?SimpleUser $account) : self
    {
        $this->account = $account;
        return $this;
    }
}