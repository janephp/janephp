<?php

namespace Github\Model;

class ReposOwnerRepoBranchesBranchProtectionRequiredPullRequestReviewsPatchBodyDismissalRestrictions extends \ArrayObject
{
    /**
     * The list of user `login`s with dismissal access
     *
     * @var string[]
     */
    protected $users;
    /**
     * The list of team `slug`s with dismissal access
     *
     * @var string[]
     */
    protected $teams;
    /**
     * The list of user `login`s with dismissal access
     *
     * @return string[]
     */
    public function getUsers() : array
    {
        return $this->users;
    }
    /**
     * The list of user `login`s with dismissal access
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
     * The list of team `slug`s with dismissal access
     *
     * @return string[]
     */
    public function getTeams() : array
    {
        return $this->teams;
    }
    /**
     * The list of team `slug`s with dismissal access
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
}