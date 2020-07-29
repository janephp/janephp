<?php

namespace Github\Model;

class EventPayload
{
    /**
     * 
     *
     * @var string
     */
    protected $action;
    /**
     * Issue Simple
     *
     * @var IssueSimple
     */
    protected $issue;
    /**
     * Comments provide a way for people to collaborate on an issue.
     *
     * @var IssueComment
     */
    protected $comment;
    /**
     * 
     *
     * @var EventPayloadPagesItem[]
     */
    protected $pages;
    /**
     * 
     *
     * @return string
     */
    public function getAction() : string
    {
        return $this->action;
    }
    /**
     * 
     *
     * @param string $action
     *
     * @return self
     */
    public function setAction(string $action) : self
    {
        $this->action = $action;
        return $this;
    }
    /**
     * Issue Simple
     *
     * @return IssueSimple
     */
    public function getIssue() : IssueSimple
    {
        return $this->issue;
    }
    /**
     * Issue Simple
     *
     * @param IssueSimple $issue
     *
     * @return self
     */
    public function setIssue(IssueSimple $issue) : self
    {
        $this->issue = $issue;
        return $this;
    }
    /**
     * Comments provide a way for people to collaborate on an issue.
     *
     * @return IssueComment
     */
    public function getComment() : IssueComment
    {
        return $this->comment;
    }
    /**
     * Comments provide a way for people to collaborate on an issue.
     *
     * @param IssueComment $comment
     *
     * @return self
     */
    public function setComment(IssueComment $comment) : self
    {
        $this->comment = $comment;
        return $this;
    }
    /**
     * 
     *
     * @return EventPayloadPagesItem[]
     */
    public function getPages() : array
    {
        return $this->pages;
    }
    /**
     * 
     *
     * @param EventPayloadPagesItem[] $pages
     *
     * @return self
     */
    public function setPages(array $pages) : self
    {
        $this->pages = $pages;
        return $this;
    }
}