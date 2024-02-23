<?php

namespace Github\Model;

class ProtectedBranchPullRequestReviewDismissalRestrictions extends \ArrayObject
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
     * The list of users with review dismissal access.
     *
     * @var list<SimpleUser>
     */
    protected $users;
    /**
     * The list of teams with review dismissal access.
     *
     * @var list<Team>
     */
    protected $teams;
    /**
     * 
     *
     * @var string
     */
    protected $url;
    /**
     * 
     *
     * @var string
     */
    protected $usersUrl;
    /**
     * 
     *
     * @var string
     */
    protected $teamsUrl;
    /**
     * The list of users with review dismissal access.
     *
     * @return list<SimpleUser>
     */
    public function getUsers() : array
    {
        return $this->users;
    }
    /**
     * The list of users with review dismissal access.
     *
     * @param list<SimpleUser> $users
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
     * The list of teams with review dismissal access.
     *
     * @return list<Team>
     */
    public function getTeams() : array
    {
        return $this->teams;
    }
    /**
     * The list of teams with review dismissal access.
     *
     * @param list<Team> $teams
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
     * 
     *
     * @return string
     */
    public function getUrl() : string
    {
        return $this->url;
    }
    /**
     * 
     *
     * @param string $url
     *
     * @return self
     */
    public function setUrl(string $url) : self
    {
        $this->initialized['url'] = true;
        $this->url = $url;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getUsersUrl() : string
    {
        return $this->usersUrl;
    }
    /**
     * 
     *
     * @param string $usersUrl
     *
     * @return self
     */
    public function setUsersUrl(string $usersUrl) : self
    {
        $this->initialized['usersUrl'] = true;
        $this->usersUrl = $usersUrl;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getTeamsUrl() : string
    {
        return $this->teamsUrl;
    }
    /**
     * 
     *
     * @param string $teamsUrl
     *
     * @return self
     */
    public function setTeamsUrl(string $teamsUrl) : self
    {
        $this->initialized['teamsUrl'] = true;
        $this->teamsUrl = $teamsUrl;
        return $this;
    }
}