<?php

namespace Github\Model;

class ReposOwnerRepoBranchesBranchProtectionPutBodyRestrictions
{
    /**
     * The list of user `login`s with push access
     *
     * @var string[]
     */
    protected $users;
    /**
     * The list of team `slug`s with push access
     *
     * @var string[]
     */
    protected $teams;
    /**
     * The list of app `slug`s with push access
     *
     * @var string[]
     */
    protected $apps;
    /**
     * The list of user `login`s with push access
     *
     * @return string[]
     */
    public function getUsers() : array
    {
        return $this->users;
    }
    /**
     * The list of user `login`s with push access
     *
     * @param string[] $users
     *
     * @return self
     */
    public function setUsers(array $users) : self
    {
        $this->users = $users;
        return $this;
    }
    /**
     * The list of team `slug`s with push access
     *
     * @return string[]
     */
    public function getTeams() : array
    {
        return $this->teams;
    }
    /**
     * The list of team `slug`s with push access
     *
     * @param string[] $teams
     *
     * @return self
     */
    public function setTeams(array $teams) : self
    {
        $this->teams = $teams;
        return $this;
    }
    /**
     * The list of app `slug`s with push access
     *
     * @return string[]
     */
    public function getApps() : array
    {
        return $this->apps;
    }
    /**
     * The list of app `slug`s with push access
     *
     * @param string[] $apps
     *
     * @return self
     */
    public function setApps(array $apps) : self
    {
        $this->apps = $apps;
        return $this;
    }
}