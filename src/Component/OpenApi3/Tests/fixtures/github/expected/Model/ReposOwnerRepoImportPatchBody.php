<?php

namespace Github\Model;

class ReposOwnerRepoImportPatchBody extends \ArrayObject
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
     * The username to provide to the originating repository.
     *
     * @var string
     */
    protected $vcsUsername;
    /**
     * The password to provide to the originating repository.
     *
     * @var string
     */
    protected $vcsPassword;
    /**
     * 
     *
     * @var string
     */
    protected $vcs;
    /**
     * 
     *
     * @var string
     */
    protected $tfvcProject;
    /**
     * The username to provide to the originating repository.
     *
     * @return string
     */
    public function getVcsUsername() : string
    {
        return $this->vcsUsername;
    }
    /**
     * The username to provide to the originating repository.
     *
     * @param string $vcsUsername
     *
     * @return self
     */
    public function setVcsUsername(string $vcsUsername) : self
    {
        $this->initialized['vcsUsername'] = true;
        $this->vcsUsername = $vcsUsername;
        return $this;
    }
    /**
     * The password to provide to the originating repository.
     *
     * @return string
     */
    public function getVcsPassword() : string
    {
        return $this->vcsPassword;
    }
    /**
     * The password to provide to the originating repository.
     *
     * @param string $vcsPassword
     *
     * @return self
     */
    public function setVcsPassword(string $vcsPassword) : self
    {
        $this->initialized['vcsPassword'] = true;
        $this->vcsPassword = $vcsPassword;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getVcs() : string
    {
        return $this->vcs;
    }
    /**
     * 
     *
     * @param string $vcs
     *
     * @return self
     */
    public function setVcs(string $vcs) : self
    {
        $this->initialized['vcs'] = true;
        $this->vcs = $vcs;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getTfvcProject() : string
    {
        return $this->tfvcProject;
    }
    /**
     * 
     *
     * @param string $tfvcProject
     *
     * @return self
     */
    public function setTfvcProject(string $tfvcProject) : self
    {
        $this->initialized['tfvcProject'] = true;
        $this->tfvcProject = $tfvcProject;
        return $this;
    }
}