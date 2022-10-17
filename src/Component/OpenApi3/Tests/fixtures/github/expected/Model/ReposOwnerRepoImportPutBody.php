<?php

namespace Github\Model;

class ReposOwnerRepoImportPutBody extends \ArrayObject
{
    /**
     * The URL of the originating repository.
     *
     * @var string
     */
    protected $vcsUrl;
    /**
     * The originating VCS type. Can be one of `subversion`, `git`, `mercurial`, or `tfvc`. Please be aware that without this parameter, the import job will take additional time to detect the VCS type before beginning the import. This detection step will be reflected in the response.
     *
     * @var string
     */
    protected $vcs;
    /**
     * If authentication is required, the username to provide to `vcs_url`.
     *
     * @var string
     */
    protected $vcsUsername;
    /**
     * If authentication is required, the password to provide to `vcs_url`.
     *
     * @var string
     */
    protected $vcsPassword;
    /**
     * For a tfvc import, the name of the project that is being imported.
     *
     * @var string
     */
    protected $tfvcProject;
    /**
     * The URL of the originating repository.
     *
     * @return string
     */
    public function getVcsUrl() : string
    {
        return $this->vcsUrl;
    }
    /**
     * The URL of the originating repository.
     *
     * @param string $vcsUrl
     *
     * @return self
     */
    public function setVcsUrl(string $vcsUrl) : self
    {
        $this->vcsUrl = $vcsUrl;
        return $this;
    }
    /**
     * The originating VCS type. Can be one of `subversion`, `git`, `mercurial`, or `tfvc`. Please be aware that without this parameter, the import job will take additional time to detect the VCS type before beginning the import. This detection step will be reflected in the response.
     *
     * @return string
     */
    public function getVcs() : string
    {
        return $this->vcs;
    }
    /**
     * The originating VCS type. Can be one of `subversion`, `git`, `mercurial`, or `tfvc`. Please be aware that without this parameter, the import job will take additional time to detect the VCS type before beginning the import. This detection step will be reflected in the response.
     *
     * @param string $vcs
     *
     * @return self
     */
    public function setVcs(string $vcs) : self
    {
        $this->vcs = $vcs;
        return $this;
    }
    /**
     * If authentication is required, the username to provide to `vcs_url`.
     *
     * @return string
     */
    public function getVcsUsername() : string
    {
        return $this->vcsUsername;
    }
    /**
     * If authentication is required, the username to provide to `vcs_url`.
     *
     * @param string $vcsUsername
     *
     * @return self
     */
    public function setVcsUsername(string $vcsUsername) : self
    {
        $this->vcsUsername = $vcsUsername;
        return $this;
    }
    /**
     * If authentication is required, the password to provide to `vcs_url`.
     *
     * @return string
     */
    public function getVcsPassword() : string
    {
        return $this->vcsPassword;
    }
    /**
     * If authentication is required, the password to provide to `vcs_url`.
     *
     * @param string $vcsPassword
     *
     * @return self
     */
    public function setVcsPassword(string $vcsPassword) : self
    {
        $this->vcsPassword = $vcsPassword;
        return $this;
    }
    /**
     * For a tfvc import, the name of the project that is being imported.
     *
     * @return string
     */
    public function getTfvcProject() : string
    {
        return $this->tfvcProject;
    }
    /**
     * For a tfvc import, the name of the project that is being imported.
     *
     * @param string $tfvcProject
     *
     * @return self
     */
    public function setTfvcProject(string $tfvcProject) : self
    {
        $this->tfvcProject = $tfvcProject;
        return $this;
    }
}