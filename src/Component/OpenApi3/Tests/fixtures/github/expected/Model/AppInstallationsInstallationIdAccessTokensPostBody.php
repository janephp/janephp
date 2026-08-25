<?php

namespace Github\Model;

use Github\Runtime\AdditionalAndPatternProperties;
use Github\Runtime\AdditionalPropertiesInterface;
class AppInstallationsInstallationIdAccessTokensPostBody implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * List of repository names that the token should have access to
     *
     * @var list<string>
     */
    protected $repositories;
    /**
     * List of repository IDs that the token should have access to
     *
     * @var list<int>
     */
    protected $repositoryIds;
    /**
     * @var AppInstallationsInstallationIdAccessTokensPostBodyPermissions
     */
    protected $permissions;
    /**
     * List of repository names that the token should have access to
     *
     * @return list<string>
     */
    public function getRepositories(): array
    {
        return $this->repositories;
    }
    /**
     * List of repository names that the token should have access to
     *
     * @param list<string> $repositories
     *
     * @return self
     */
    public function setRepositories(array $repositories): self
    {
        $this->initialized['repositories'] = true;
        $this->repositories = $repositories;
        return $this;
    }
    /**
     * List of repository IDs that the token should have access to
     *
     * @return list<int>
     */
    public function getRepositoryIds(): array
    {
        return $this->repositoryIds;
    }
    /**
     * List of repository IDs that the token should have access to
     *
     * @param list<int> $repositoryIds
     *
     * @return self
     */
    public function setRepositoryIds(array $repositoryIds): self
    {
        $this->initialized['repositoryIds'] = true;
        $this->repositoryIds = $repositoryIds;
        return $this;
    }
    /**
     * @return AppInstallationsInstallationIdAccessTokensPostBodyPermissions
     */
    public function getPermissions(): AppInstallationsInstallationIdAccessTokensPostBodyPermissions
    {
        return $this->permissions;
    }
    /**
     * @param AppInstallationsInstallationIdAccessTokensPostBodyPermissions $permissions
     *
     * @return self
     */
    public function setPermissions(AppInstallationsInstallationIdAccessTokensPostBodyPermissions $permissions): self
    {
        $this->initialized['permissions'] = true;
        $this->permissions = $permissions;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['repositories' => ['repositories', 'getRepositories', 'setRepositories'], 'repositoryIds' => ['repository_ids', 'getRepositoryIds', 'setRepositoryIds'], 'permissions' => ['permissions', 'getPermissions', 'setPermissions']];
    }
}