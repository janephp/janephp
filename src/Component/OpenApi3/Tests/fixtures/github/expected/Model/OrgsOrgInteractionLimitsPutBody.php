<?php

namespace Github\Model;

class OrgsOrgInteractionLimitsPutBody extends \ArrayObject
{
    /**
     * Specifies the group of GitHub users who can comment, open issues, or create pull requests in public repositories for the given organization. Must be one of: `existing_users`, `contributors_only`, or `collaborators_only`.
     *
     * @var string
     */
    protected $limit;
    /**
     * Specifies the group of GitHub users who can comment, open issues, or create pull requests in public repositories for the given organization. Must be one of: `existing_users`, `contributors_only`, or `collaborators_only`.
     *
     * @return string
     */
    public function getLimit() : string
    {
        return $this->limit;
    }
    /**
     * Specifies the group of GitHub users who can comment, open issues, or create pull requests in public repositories for the given organization. Must be one of: `existing_users`, `contributors_only`, or `collaborators_only`.
     *
     * @param string $limit
     *
     * @return self
     */
    public function setLimit(string $limit) : self
    {
        $this->limit = $limit;
        return $this;
    }
}