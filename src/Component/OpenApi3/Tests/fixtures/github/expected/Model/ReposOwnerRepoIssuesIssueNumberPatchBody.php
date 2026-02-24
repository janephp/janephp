<?php

namespace Github\Model;

class ReposOwnerRepoIssuesIssueNumberPatchBody extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * The title of the issue.
     *
     * @var string
     */
    protected $title;
    /**
     * The contents of the issue.
     *
     * @var string
     */
    protected $body;
    /**
     * Login for the user that this issue should be assigned to. **This field is deprecated.**
     *
     * @var string
     */
    protected $assignee;
    /**
     * State of the issue. Either `open` or `closed`.
     *
     * @var string
     */
    protected $state;
    /**
     * The `number` of the milestone to associate this issue with or `null` to remove current. _NOTE: Only users with push access can set the milestone for issues. The milestone is silently dropped otherwise._
     *
     * @var int|null
     */
    protected $milestone;
    /**
     * Labels to associate with this issue. Pass one or more Labels to _replace_ the set of Labels on this Issue. Send an empty array (`[]`) to clear all Labels from the Issue. _NOTE: Only users with push access can set labels for issues. Labels are silently dropped otherwise._
     *
     * @var list<mixed>
     */
    protected $labels;
    /**
     * Logins for Users to assign to this issue. Pass one or more user logins to _replace_ the set of assignees on this Issue. Send an empty array (`[]`) to clear all assignees from the Issue. _NOTE: Only users with push access can set assignees for new issues. Assignees are silently dropped otherwise._
     *
     * @var list<string>
     */
    protected $assignees;
    /**
     * The title of the issue.
     *
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }
    /**
     * The title of the issue.
     *
     * @param string $title
     *
     * @return self
     */
    public function setTitle(string $title): self
    {
        $this->initialized['title'] = true;
        $this->title = $title;
        return $this;
    }
    /**
     * The contents of the issue.
     *
     * @return string
     */
    public function getBody(): string
    {
        return $this->body;
    }
    /**
     * The contents of the issue.
     *
     * @param string $body
     *
     * @return self
     */
    public function setBody(string $body): self
    {
        $this->initialized['body'] = true;
        $this->body = $body;
        return $this;
    }
    /**
     * Login for the user that this issue should be assigned to. **This field is deprecated.**
     *
     * @return string
     */
    public function getAssignee(): string
    {
        return $this->assignee;
    }
    /**
     * Login for the user that this issue should be assigned to. **This field is deprecated.**
     *
     * @param string $assignee
     *
     * @return self
     */
    public function setAssignee(string $assignee): self
    {
        $this->initialized['assignee'] = true;
        $this->assignee = $assignee;
        return $this;
    }
    /**
     * State of the issue. Either `open` or `closed`.
     *
     * @return string
     */
    public function getState(): string
    {
        return $this->state;
    }
    /**
     * State of the issue. Either `open` or `closed`.
     *
     * @param string $state
     *
     * @return self
     */
    public function setState(string $state): self
    {
        $this->initialized['state'] = true;
        $this->state = $state;
        return $this;
    }
    /**
     * The `number` of the milestone to associate this issue with or `null` to remove current. _NOTE: Only users with push access can set the milestone for issues. The milestone is silently dropped otherwise._
     *
     * @return int|null
     */
    public function getMilestone(): ?int
    {
        return $this->milestone;
    }
    /**
     * The `number` of the milestone to associate this issue with or `null` to remove current. _NOTE: Only users with push access can set the milestone for issues. The milestone is silently dropped otherwise._
     *
     * @param int|null $milestone
     *
     * @return self
     */
    public function setMilestone(?int $milestone): self
    {
        $this->initialized['milestone'] = true;
        $this->milestone = $milestone;
        return $this;
    }
    /**
     * Labels to associate with this issue. Pass one or more Labels to _replace_ the set of Labels on this Issue. Send an empty array (`[]`) to clear all Labels from the Issue. _NOTE: Only users with push access can set labels for issues. Labels are silently dropped otherwise._
     *
     * @return list<mixed>
     */
    public function getLabels(): array
    {
        return $this->labels;
    }
    /**
     * Labels to associate with this issue. Pass one or more Labels to _replace_ the set of Labels on this Issue. Send an empty array (`[]`) to clear all Labels from the Issue. _NOTE: Only users with push access can set labels for issues. Labels are silently dropped otherwise._
     *
     * @param list<mixed> $labels
     *
     * @return self
     */
    public function setLabels(array $labels): self
    {
        $this->initialized['labels'] = true;
        $this->labels = $labels;
        return $this;
    }
    /**
     * Logins for Users to assign to this issue. Pass one or more user logins to _replace_ the set of assignees on this Issue. Send an empty array (`[]`) to clear all assignees from the Issue. _NOTE: Only users with push access can set assignees for new issues. Assignees are silently dropped otherwise._
     *
     * @return list<string>
     */
    public function getAssignees(): array
    {
        return $this->assignees;
    }
    /**
     * Logins for Users to assign to this issue. Pass one or more user logins to _replace_ the set of assignees on this Issue. Send an empty array (`[]`) to clear all assignees from the Issue. _NOTE: Only users with push access can set assignees for new issues. Assignees are silently dropped otherwise._
     *
     * @param list<string> $assignees
     *
     * @return self
     */
    public function setAssignees(array $assignees): self
    {
        $this->initialized['assignees'] = true;
        $this->assignees = $assignees;
        return $this;
    }
}