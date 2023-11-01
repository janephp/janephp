<?php

namespace Github\Model;

class ReposOwnerRepoInteractionLimitsPutBody extends \ArrayObject
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
     * Specifies the group of GitHub users who can comment, open issues, or create pull requests for the given repository. Must be one of: `existing_users`, `contributors_only`, or `collaborators_only`.
     *
     * @var string
     */
    protected $limit;
    /**
     * Specifies the group of GitHub users who can comment, open issues, or create pull requests for the given repository. Must be one of: `existing_users`, `contributors_only`, or `collaborators_only`.
     *
     * @return string
     */
    public function getLimit() : string
    {
        return $this->limit;
    }
    /**
     * Specifies the group of GitHub users who can comment, open issues, or create pull requests for the given repository. Must be one of: `existing_users`, `contributors_only`, or `collaborators_only`.
     *
     * @param string $limit
     *
     * @return self
     */
    public function setLimit(string $limit) : self
    {
        $this->initialized['limit'] = true;
        $this->limit = $limit;
        return $this;
    }
}