<?php

namespace Github\Model;

class OrgsOrgMembershipsUsernamePutBody extends \ArrayObject
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
    * The role to give the user in the organization. Can be one of:  
    \* `admin` - The user will become an owner of the organization.  
    \* `member` - The user will become a non-owner member of the organization.
    *
    * @var string
    */
    protected $role = 'member';
    /**
    * The role to give the user in the organization. Can be one of:  
    \* `admin` - The user will become an owner of the organization.  
    \* `member` - The user will become a non-owner member of the organization.
    *
    * @return string
    */
    public function getRole() : string
    {
        return $this->role;
    }
    /**
    * The role to give the user in the organization. Can be one of:  
    \* `admin` - The user will become an owner of the organization.  
    \* `member` - The user will become a non-owner member of the organization.
    *
    * @param string $role
    *
    * @return self
    */
    public function setRole(string $role) : self
    {
        $this->initialized['role'] = true;
        $this->role = $role;
        return $this;
    }
}