<?php

namespace Github\Model;

class ReposOwnerRepoPullsPullNumberRequestedReviewersDeleteBody extends \ArrayObject
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
     * An array of user `login`s that will be removed.
     *
     * @var string[]
     */
    protected $reviewers;
    /**
     * An array of team `slug`s that will be removed.
     *
     * @var string[]
     */
    protected $teamReviewers;
    /**
     * An array of user `login`s that will be removed.
     *
     * @return string[]
     */
    public function getReviewers() : array
    {
        return $this->reviewers;
    }
    /**
     * An array of user `login`s that will be removed.
     *
     * @param string[] $reviewers
     *
     * @return self
     */
    public function setReviewers(array $reviewers) : self
    {
        $this->initialized['reviewers'] = true;
        $this->reviewers = $reviewers;
        return $this;
    }
    /**
     * An array of team `slug`s that will be removed.
     *
     * @return string[]
     */
    public function getTeamReviewers() : array
    {
        return $this->teamReviewers;
    }
    /**
     * An array of team `slug`s that will be removed.
     *
     * @param string[] $teamReviewers
     *
     * @return self
     */
    public function setTeamReviewers(array $teamReviewers) : self
    {
        $this->initialized['teamReviewers'] = true;
        $this->teamReviewers = $teamReviewers;
        return $this;
    }
}