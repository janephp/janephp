<?php

namespace Github\Model;

class PullRequestReviewRequest
{
    /**
     * 
     *
     * @var PullRequestReviewRequestUsersItem[]
     */
    protected $users;
    /**
     * 
     *
     * @var PullRequestReviewRequestTeamsItem[]
     */
    protected $teams;
    /**
     * 
     *
     * @return PullRequestReviewRequestUsersItem[]
     */
    public function getUsers() : array
    {
        return $this->users;
    }
    /**
     * 
     *
     * @param PullRequestReviewRequestUsersItem[] $users
     *
     * @return self
     */
    public function setUsers(array $users) : self
    {
        $this->users = $users;
        return $this;
    }
    /**
     * 
     *
     * @return PullRequestReviewRequestTeamsItem[]
     */
    public function getTeams() : array
    {
        return $this->teams;
    }
    /**
     * 
     *
     * @param PullRequestReviewRequestTeamsItem[] $teams
     *
     * @return self
     */
    public function setTeams(array $teams) : self
    {
        $this->teams = $teams;
        return $this;
    }
}