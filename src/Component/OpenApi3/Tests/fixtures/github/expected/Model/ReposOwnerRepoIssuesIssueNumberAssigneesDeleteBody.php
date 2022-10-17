<?php

namespace Github\Model;

class ReposOwnerRepoIssuesIssueNumberAssigneesDeleteBody extends \ArrayObject
{
    /**
     * Usernames of assignees to remove from an issue. _NOTE: Only users with push access can remove assignees from an issue. Assignees are silently ignored otherwise._
     *
     * @var string[]
     */
    protected $assignees;
    /**
     * Usernames of assignees to remove from an issue. _NOTE: Only users with push access can remove assignees from an issue. Assignees are silently ignored otherwise._
     *
     * @return string[]
     */
    public function getAssignees() : array
    {
        return $this->assignees;
    }
    /**
     * Usernames of assignees to remove from an issue. _NOTE: Only users with push access can remove assignees from an issue. Assignees are silently ignored otherwise._
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