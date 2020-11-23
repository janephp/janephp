<?php

namespace Github\Model;

class AppInstallationsInstallationIdAccessTokensPostBody
{
    /**
     * List of repository names that the token should have access to
     *
     * @var string[]
     */
    protected $repositories;
    /**
     * List of repository IDs that the token should have access to
     *
     * @var int[]
     */
    protected $repositoryIds;
    /**
     * 
     *
     * @var AppInstallationsInstallationIdAccessTokensPostBodyPermissions
     */
    protected $permissions;
    /**
     * List of repository names that the token should have access to
     *
     * @return string[]
     */
    public function getRepositories() : array
    {
        return $this->repositories;
    }
    /**
     * List of repository names that the token should have access to
     *
     * @param string[] $repositories
     *
     * @return self
     */
    public function setRepositories(array $repositories) : self
    {
        $this->repositories = $repositories;
        return $this;
    }
    /**
     * List of repository IDs that the token should have access to
     *
     * @return int[]
     */
    public function getRepositoryIds() : array
    {
        return $this->repositoryIds;
    }
    /**
     * List of repository IDs that the token should have access to
     *
     * @param int[] $repositoryIds
     *
     * @return self
     */
    public function setRepositoryIds(array $repositoryIds) : self
    {
        $this->repositoryIds = $repositoryIds;
        return $this;
    }
    /**
     * 
     *
     * @return AppInstallationsInstallationIdAccessTokensPostBodyPermissions
     */
    public function getPermissions() : AppInstallationsInstallationIdAccessTokensPostBodyPermissions
    {
        return $this->permissions;
    }
    /**
     * 
     *
     * @param AppInstallationsInstallationIdAccessTokensPostBodyPermissions $permissions
     *
     * @return self
     */
    public function setPermissions(AppInstallationsInstallationIdAccessTokensPostBodyPermissions $permissions) : self
    {
        $this->permissions = $permissions;
        return $this;
    }
}