<?php

namespace Github\Model;

class TeamsTeamIdReposOwnerRepoPutBody extends \ArrayObject
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
    * The permission to grant the team on this repository. Can be one of:  
    \* `pull` - team members can pull, but not push to or administer this repository.  
    \* `push` - team members can pull and push, but not administer this repository.  
    \* `admin` - team members can pull, push and administer this repository.  
     
    If no permission is specified, the team's `permission` attribute will be used to determine what permission to grant the team on this repository.
    *
    * @var string
    */
    protected $permission;
    /**
    * The permission to grant the team on this repository. Can be one of:  
    \* `pull` - team members can pull, but not push to or administer this repository.  
    \* `push` - team members can pull and push, but not administer this repository.  
    \* `admin` - team members can pull, push and administer this repository.  
     
    If no permission is specified, the team's `permission` attribute will be used to determine what permission to grant the team on this repository.
    *
    * @return string
    */
    public function getPermission() : string
    {
        return $this->permission;
    }
    /**
    * The permission to grant the team on this repository. Can be one of:  
    \* `pull` - team members can pull, but not push to or administer this repository.  
    \* `push` - team members can pull and push, but not administer this repository.  
    \* `admin` - team members can pull, push and administer this repository.  
     
    If no permission is specified, the team's `permission` attribute will be used to determine what permission to grant the team on this repository.
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
}