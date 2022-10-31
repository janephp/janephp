<?php

namespace Github\Model;

class ProjectsProjectIdCollaboratorsUsernamePutBody extends \ArrayObject
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
     * The permission to grant the collaborator.
     *
     * @var string
     */
    protected $permission = 'write';
    /**
     * The permission to grant the collaborator.
     *
     * @return string
     */
    public function getPermission() : string
    {
        return $this->permission;
    }
    /**
     * The permission to grant the collaborator.
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