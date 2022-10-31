<?php

namespace Github\Model;

class ReposOwnerRepoCollaboratorsUsernamePutBody extends \ArrayObject
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
    * The permission to grant the collaborator. **Only valid on organization-owned repositories.** Can be one of:  
    \* `pull` - can pull, but not push to or administer this repository.  
    \* `push` - can pull and push, but not administer this repository.  
    \* `admin` - can pull, push and administer this repository.  
    \* `maintain` - Recommended for project managers who need to manage the repository without access to sensitive or destructive actions.  
    \* `triage` - Recommended for contributors who need to proactively manage issues and pull requests without write access.
    *
    * @var string
    */
    protected $permission = 'push';
    /**
     * 
     *
     * @var string
     */
    protected $permissions;
    /**
    * The permission to grant the collaborator. **Only valid on organization-owned repositories.** Can be one of:  
    \* `pull` - can pull, but not push to or administer this repository.  
    \* `push` - can pull and push, but not administer this repository.  
    \* `admin` - can pull, push and administer this repository.  
    \* `maintain` - Recommended for project managers who need to manage the repository without access to sensitive or destructive actions.  
    \* `triage` - Recommended for contributors who need to proactively manage issues and pull requests without write access.
    *
    * @return string
    */
    public function getPermission() : string
    {
        return $this->permission;
    }
    /**
    * The permission to grant the collaborator. **Only valid on organization-owned repositories.** Can be one of:  
    \* `pull` - can pull, but not push to or administer this repository.  
    \* `push` - can pull and push, but not administer this repository.  
    \* `admin` - can pull, push and administer this repository.  
    \* `maintain` - Recommended for project managers who need to manage the repository without access to sensitive or destructive actions.  
    \* `triage` - Recommended for contributors who need to proactively manage issues and pull requests without write access.
    *
    * @param string $permission
    *
    * @return self
    */
    public function setPermission(string $permission) : self
    {
        $this->initialized['permission'] = true;
        $this->permission = $permission;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getPermissions() : string
    {
        return $this->permissions;
    }
    /**
     * 
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