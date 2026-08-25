<?php

namespace Github\Model;

use Github\Runtime\AdditionalAndPatternProperties;
use Github\Runtime\AdditionalPropertiesInterface;
class ReposOwnerRepoPullsPullNumberRequestedReviewersPostBody implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * An array of user `login`s that will be requested.
     *
     * @var list<string>
     */
    protected $reviewers;
    /**
     * An array of team `slug`s that will be requested.
     *
     * @var list<string>
     */
    protected $teamReviewers;
    /**
     * An array of user `login`s that will be requested.
     *
     * @return list<string>
     */
    public function getReviewers(): array
    {
        return $this->reviewers;
    }
    /**
     * An array of user `login`s that will be requested.
     *
     * @param list<string> $reviewers
     *
     * @return self
     */
    public function setReviewers(array $reviewers): self
    {
        $this->initialized['reviewers'] = true;
        $this->reviewers = $reviewers;
        return $this;
    }
    /**
     * An array of team `slug`s that will be requested.
     *
     * @return list<string>
     */
    public function getTeamReviewers(): array
    {
        return $this->teamReviewers;
    }
    /**
     * An array of team `slug`s that will be requested.
     *
     * @param list<string> $teamReviewers
     *
     * @return self
     */
    public function setTeamReviewers(array $teamReviewers): self
    {
        $this->initialized['teamReviewers'] = true;
        $this->teamReviewers = $teamReviewers;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['reviewers' => ['reviewers', 'getReviewers', 'setReviewers'], 'teamReviewers' => ['team_reviewers', 'getTeamReviewers', 'setTeamReviewers']];
    }
}