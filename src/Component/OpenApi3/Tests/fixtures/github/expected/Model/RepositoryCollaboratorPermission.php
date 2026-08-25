<?php

namespace Github\Model;

use Github\Runtime\AdditionalAndPatternProperties;
use Github\Runtime\AdditionalPropertiesInterface;
class RepositoryCollaboratorPermission implements AdditionalPropertiesInterface
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
    protected $permission;
    /**
     * @var RepositoryCollaboratorPermissionUser|null
     */
    protected $user;
    /**
     * @return string
     */
    public function getPermission(): string
    {
        return $this->permission;
    }
    /**
     * @param string $permission
     *
     * @return self
     */
    public function setPermission(string $permission): self
    {
        $this->initialized['permission'] = true;
        $this->permission = $permission;
        return $this;
    }
    /**
     * @return RepositoryCollaboratorPermissionUser|null
     */
    public function getUser(): ?RepositoryCollaboratorPermissionUser
    {
        return $this->user;
    }
    /**
     * @param RepositoryCollaboratorPermissionUser|null $user
     *
     * @return self
     */
    public function setUser(?RepositoryCollaboratorPermissionUser $user): self
    {
        $this->initialized['user'] = true;
        $this->user = $user;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['permission' => ['permission', 'getPermission', 'setPermission'], 'user' => ['user', 'getUser', 'setUser']];
    }
}