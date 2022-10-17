<?php

namespace Github\Model;

class OrgsOrgTeamsTeamSlugReposOwnerRepoPutBody extends \ArrayObject
{
    /**
    * The permission to grant the team on this repository. Can be one of:  
    \* `pull` - team members can pull, but not push to or administer this repository.  
    \* `push` - team members can pull and push, but not administer this repository.  
    \* `admin` - team members can pull, push and administer this repository.  
    \* `maintain` - team members can manage the repository without access to sensitive or destructive actions. Recommended for project managers. Only applies to repositories owned by organizations.  
    \* `triage` - team members can proactively manage issues and pull requests without write access. Recommended for contributors who triage a repository. Only applies to repositories owned by organizations.  
     
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
    \* `maintain` - team members can manage the repository without access to sensitive or destructive actions. Recommended for project managers. Only applies to repositories owned by organizations.  
    \* `triage` - team members can proactively manage issues and pull requests without write access. Recommended for contributors who triage a repository. Only applies to repositories owned by organizations.  
     
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
    \* `maintain` - team members can manage the repository without access to sensitive or destructive actions. Recommended for project managers. Only applies to repositories owned by organizations.  
    \* `triage` - team members can proactively manage issues and pull requests without write access. Recommended for contributors who triage a repository. Only applies to repositories owned by organizations.  
     
    If no permission is specified, the team's `permission` attribute will be used to determine what permission to grant the team on this repository.
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
}