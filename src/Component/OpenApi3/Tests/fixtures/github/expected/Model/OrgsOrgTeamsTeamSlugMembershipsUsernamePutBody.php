<?php

namespace Github\Model;

class OrgsOrgTeamsTeamSlugMembershipsUsernamePutBody extends \ArrayObject
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
    * The role that this user should have in the team. Can be one of:  
    \* `member` - a normal member of the team.  
    \* `maintainer` - a team maintainer. Able to add/remove other team members, promote other team members to team maintainer, and edit the team's name and description.
    *
    * @var string
    */
    protected $role = 'member';
    /**
    * The role that this user should have in the team. Can be one of:  
    \* `member` - a normal member of the team.  
    \* `maintainer` - a team maintainer. Able to add/remove other team members, promote other team members to team maintainer, and edit the team's name and description.
    *
    * @return string
    */
    public function getRole() : string
    {
        return $this->role;
    }
    /**
    * The role that this user should have in the team. Can be one of:  
    \* `member` - a normal member of the team.  
    \* `maintainer` - a team maintainer. Able to add/remove other team members, promote other team members to team maintainer, and edit the team's name and description.
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