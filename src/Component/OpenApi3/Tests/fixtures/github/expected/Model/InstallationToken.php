<?php

namespace Github\Model;

use Github\Runtime\AdditionalAndPatternProperties;
use Github\Runtime\AdditionalPropertiesInterface;
class InstallationToken implements AdditionalPropertiesInterface
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
     * @var string
     */
    protected $token;
    /**
     * @var string
     */
    protected $expiresAt;
    /**
     * @var InstallationTokenPermissions
     */
    protected $permissions;
    /**
     * @var string
     */
    protected $repositorySelection;
    /**
     * @var list<Repository>
     */
    protected $repositories;
    /**
     * @var string
     */
    protected $singleFile;
    /**
     * @return string
     */
    public function getToken(): string
    {
        return $this->token;
    }
    /**
     * @param string $token
     *
     * @return self
     */
    public function setToken(string $token): self
    {
        $this->initialized['token'] = true;
        $this->token = $token;
        return $this;
    }
    /**
     * @return string
     */
    public function getExpiresAt(): string
    {
        return $this->expiresAt;
    }
    /**
     * @param string $expiresAt
     *
     * @return self
     */
    public function setExpiresAt(string $expiresAt): self
    {
        $this->initialized['expiresAt'] = true;
        $this->expiresAt = $expiresAt;
        return $this;
    }
    /**
     * @return InstallationTokenPermissions
     */
    public function getPermissions(): InstallationTokenPermissions
    {
        return $this->permissions;
    }
    /**
     * @param InstallationTokenPermissions $permissions
     *
     * @return self
     */
    public function setPermissions(InstallationTokenPermissions $permissions): self
    {
        $this->initialized['permissions'] = true;
        $this->permissions = $permissions;
        return $this;
    }
    /**
     * @return string
     */
    public function getRepositorySelection(): string
    {
        return $this->repositorySelection;
    }
    /**
     * @param string $repositorySelection
     *
     * @return self
     */
    public function setRepositorySelection(string $repositorySelection): self
    {
        $this->initialized['repositorySelection'] = true;
        $this->repositorySelection = $repositorySelection;
        return $this;
    }
    /**
     * @return list<Repository>
     */
    public function getRepositories(): array
    {
        return $this->repositories;
    }
    /**
     * @param list<Repository> $repositories
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
     * @return string
     */
    public function getSingleFile(): string
    {
        return $this->singleFile;
    }
    /**
     * @param string $singleFile
     *
     * @return self
     */
    public function setSingleFile(string $singleFile): self
    {
        $this->initialized['singleFile'] = true;
        $this->singleFile = $singleFile;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['token' => ['token', 'getToken', 'setToken'], 'expiresAt' => ['expires_at', 'getExpiresAt', 'setExpiresAt'], 'permissions' => ['permissions', 'getPermissions', 'setPermissions'], 'repositorySelection' => ['repository_selection', 'getRepositorySelection', 'setRepositorySelection'], 'repositories' => ['repositories', 'getRepositories', 'setRepositories'], 'singleFile' => ['single_file', 'getSingleFile', 'setSingleFile']];
    }
}