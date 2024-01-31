<?php

namespace Github\Model;

class OrgsOrgTeamsTeamSlugProjectsProjectIdPutBody extends \ArrayObject
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
    * The permission to grant to the team for this project. Can be one of:  
    \* `read` - team members can read, but not write to or administer this project.  
    \* `write` - team members can read and write, but not administer this project.  
    \* `admin` - team members can read, write and administer this project.  
    Default: the team's `permission` attribute will be used to determine what permission to grant the team on this project. Note that, if you choose not to pass any parameters, you'll need to set `Content-Length` to zero when calling out to this endpoint. For more information, see "[HTTP verbs](https://developer.github.com/v3/#http-verbs)."
    *
    * @var string
    */
    protected $permission;
    /**
    * The permission to grant to the team for this project. Can be one of:  
    \* `read` - team members can read, but not write to or administer this project.  
    \* `write` - team members can read and write, but not administer this project.  
    \* `admin` - team members can read, write and administer this project.  
    Default: the team's `permission` attribute will be used to determine what permission to grant the team on this project. Note that, if you choose not to pass any parameters, you'll need to set `Content-Length` to zero when calling out to this endpoint. For more information, see "[HTTP verbs](https://developer.github.com/v3/#http-verbs)."
    *
    * @return string
    */
    public function getPermission() : string
    {
        return $this->permission;
    }
    /**
    * The permission to grant to the team for this project. Can be one of:  
    \* `read` - team members can read, but not write to or administer this project.  
    \* `write` - team members can read and write, but not administer this project.  
    \* `admin` - team members can read, write and administer this project.  
    Default: the team's `permission` attribute will be used to determine what permission to grant the team on this project. Note that, if you choose not to pass any parameters, you'll need to set `Content-Length` to zero when calling out to this endpoint. For more information, see "[HTTP verbs](https://developer.github.com/v3/#http-verbs)."
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