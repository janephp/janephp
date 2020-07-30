<?php

namespace Github\Model;

class ReposOwnerRepoPullsPullNumberRequestedReviewersPostBody
{
    /**
     * An array of user `login`s that will be requested.
     *
     * @var string[]
     */
    protected $reviewers;
    /**
     * An array of team `slug`s that will be requested.
     *
     * @var string[]
     */
    protected $teamReviewers;
    /**
     * An array of user `login`s that will be requested.
     *
     * @return string[]
     */
    public function getReviewers() : array
    {
        return $this->reviewers;
    }
    /**
     * An array of user `login`s that will be requested.
     *
     * @param string[] $reviewers
     *
     * @return self
     */
    public function setReviewers(array $reviewers) : self
    {
        $this->reviewers = $reviewers;
        return $this;
    }
    /**
     * An array of team `slug`s that will be requested.
     *
     * @return string[]
     */
    public function getTeamReviewers() : array
    {
        return $this->teamReviewers;
    }
    /**
     * An array of team `slug`s that will be requested.
     *
     * @param string[] $teamReviewers
     *
     * @return self
     */
    public function setTeamReviewers(array $teamReviewers) : self
    {
        $this->teamReviewers = $teamReviewers;
        return $this;
    }
}