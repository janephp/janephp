<?php

namespace Github\Model;

class RepositoryCollaboratorPermission extends \ArrayObject
{
    /**
     * 
     *
     * @var string
     */
    protected $permission;
    /**
     * 
     *
     * @var RepositoryCollaboratorPermissionUser|null
     */
    protected $user;
    /**
     * 
     *
     * @return string
     */
    public function getPermission() : string
    {
        return $this->permission;
    }
    /**
     * 
     *
     * @param string $permission
     *
     * @return self
     */
    public function setPermission(string $permission) : self
    {
        $this->permission = $permission;
        return $this;
    }
    /**
     * 
     *
     * @return RepositoryCollaboratorPermissionUser|null
     */
    public function getUser() : ?RepositoryCollaboratorPermissionUser
    {
        return $this->user;
    }
    /**
     * 
     *
     * @param RepositoryCollaboratorPermissionUser|null $user
     *
     * @return self
     */
    public function setUser(?RepositoryCollaboratorPermissionUser $user) : self
    {
        $this->user = $user;
        return $this;
    }
}