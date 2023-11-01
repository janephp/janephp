<?php

namespace Github\Model;

class ReposOwnerRepoInvitationsInvitationIdPatchBody extends \ArrayObject
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
     * The permissions that the associated user will have on the repository. Valid values are `read`, `write`, `maintain`, `triage`, and `admin`.
     *
     * @var string
     */
    protected $permissions;
    /**
     * The permissions that the associated user will have on the repository. Valid values are `read`, `write`, `maintain`, `triage`, and `admin`.
     *
     * @return string
     */
    public function getPermissions() : string
    {
        return $this->permissions;
    }
    /**
     * The permissions that the associated user will have on the repository. Valid values are `read`, `write`, `maintain`, `triage`, and `admin`.
     *
     * @param string $permissions
     *
     * @return self
     */
    public function setPermissions(string $permissions) : self
    {
        $this->initialized['permissions'] = true;
        $this->permissions = $permissions;
        return $this;
    }
}