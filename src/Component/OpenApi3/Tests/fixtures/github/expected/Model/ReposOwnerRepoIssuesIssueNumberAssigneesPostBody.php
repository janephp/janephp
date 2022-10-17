<?php

namespace Github\Model;

class ReposOwnerRepoIssuesIssueNumberAssigneesPostBody extends \ArrayObject
{
    /**
     * Usernames of people to assign this issue to. _NOTE: Only users with push access can add assignees to an issue. Assignees are silently ignored otherwise._
     *
     * @var string[]
     */
    protected $assignees;
    /**
     * Usernames of people to assign this issue to. _NOTE: Only users with push access can add assignees to an issue. Assignees are silently ignored otherwise._
     *
     * @return string[]
     */
    public function getAssignees() : array
    {
        return $this->assignees;
    }
    /**
     * Usernames of people to assign this issue to. _NOTE: Only users with push access can add assignees to an issue. Assignees are silently ignored otherwise._
     *
     * @param string[] $assignees
     *
     * @return self
     */
    public function setAssignees(array $assignees) : self
    {
        $this->assignees = $assignees;
        return $this;
    }
}