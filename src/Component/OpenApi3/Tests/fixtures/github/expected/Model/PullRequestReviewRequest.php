<?php

namespace Github\Model;

class PullRequestReviewRequest extends \ArrayObject
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
     * 
     *
     * @var list<PullRequestReviewRequestUsersItem>
     */
    protected $users;
    /**
     * 
     *
     * @var list<PullRequestReviewRequestTeamsItem>
     */
    protected $teams;
    /**
     * 
     *
     * @return list<PullRequestReviewRequestUsersItem>
     */
    public function getUsers() : array
    {
        return $this->users;
    }
    /**
     * 
     *
     * @param list<PullRequestReviewRequestUsersItem> $users
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
     * 
     *
     * @return list<PullRequestReviewRequestTeamsItem>
     */
    public function getTeams() : array
    {
        return $this->teams;
    }
    /**
     * 
     *
     * @param list<PullRequestReviewRequestTeamsItem> $teams
     *
     * @return self
     */
    public function setTeams(array $teams) : self
    {
        $this->initialized['teams'] = true;
        $this->teams = $teams;
        return $this;
    }
}