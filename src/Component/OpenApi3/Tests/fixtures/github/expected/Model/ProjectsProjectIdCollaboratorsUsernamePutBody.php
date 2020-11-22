<?php

namespace Github\Model;

class ProjectsProjectIdCollaboratorsUsernamePutBody
{
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
        $this->permission = $permission;
        return $this;
    }
}