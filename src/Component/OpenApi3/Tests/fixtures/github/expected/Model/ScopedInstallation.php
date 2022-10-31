<?php

namespace Github\Model;

class ScopedInstallation extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = array();
    public function isInitialized($property) : bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * 
     *
     * @var mixed[]
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
     * @return mixed[]
     */
    public function getPermissions() : iterable
    {
        return $this->permissions;
    }
    /**
     * 
     *
     * @param mixed[] $permissions
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
        $this->initialized['singleFileName'] = true;
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
        $this->initialized['repositoriesUrl'] = true;
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
        $this->initialized['account'] = true;
        $this->account = $account;
        return $this;
    }
}