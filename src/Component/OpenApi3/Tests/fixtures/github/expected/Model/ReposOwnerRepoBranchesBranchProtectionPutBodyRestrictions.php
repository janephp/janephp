<?php

namespace Github\Model;

class ReposOwnerRepoBranchesBranchProtectionPutBodyRestrictions extends \ArrayObject
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
        $this->initialized['users'] = true;
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
        $this->initialized['teams'] = true;
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
        $this->initialized['apps'] = true;
        $this->apps = $apps;
        return $this;
    }
}