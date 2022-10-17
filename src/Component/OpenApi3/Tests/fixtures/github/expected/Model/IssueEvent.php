<?php

namespace Github\Model;

class IssueEvent extends \ArrayObject
{
    /**
     * 
     *
     * @var int
     */
    protected $id;
    /**
     * 
     *
     * @var string
     */
    protected $nodeId;
    /**
     * 
     *
     * @var string
     */
    protected $url;
    /**
     * 
     *
     * @var IssueEventActor|null
     */
    protected $actor;
    /**
     * 
     *
     * @var string
     */
    protected $event;
    /**
     * 
     *
     * @var string|null
     */
    protected $commitId;
    /**
     * 
     *
     * @var string|null
     */
    protected $commitUrl;
    /**
     * 
     *
     * @var \DateTime
     */
    protected $createdAt;
    /**
     * Issue Simple
     *
     * @var IssueSimple
     */
    protected $issue;
    /**
     * Issue Event Label
     *
     * @var IssueEventLabel
     */
    protected $label;
    /**
     * 
     *
     * @var IssueEventAssignee|null
     */
    protected $assignee;
    /**
     * 
     *
     * @var IssueEventAssigner|null
     */
    protected $assigner;
    /**
     * 
     *
     * @var IssueEventReviewRequester|null
     */
    protected $reviewRequester;
    /**
     * 
     *
     * @var IssueEventRequestedReviewer|null
     */
    protected $requestedReviewer;
    /**
     * Groups of organization members that gives permissions on specified repositories.
     *
     * @var Team
     */
    protected $requestedTeam;
    /**
     * 
     *
     * @var IssueEventDismissedReview
     */
    protected $dismissedReview;
    /**
     * Issue Event Milestone
     *
     * @var IssueEventMilestone
     */
    protected $milestone;
    /**
     * Issue Event Project Card
     *
     * @var IssueEventProjectCard
     */
    protected $projectCard;
    /**
     * Issue Event Rename
     *
     * @var IssueEventRename
     */
    protected $rename;
    /**
     * 
     *
     * @var string
     */
    protected $authorAssociation;
    /**
     * 
     *
     * @var string|null
     */
    protected $lockReason;
    /**
     * 
     *
     * @return int
     */
    public function getId() : int
    {
        return $this->id;
    }
    /**
     * 
     *
     * @param int $id
     *
     * @return self
     */
    public function setId(int $id) : self
    {
        $this->id = $id;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getNodeId() : string
    {
        return $this->nodeId;
    }
    /**
     * 
     *
     * @param string $nodeId
     *
     * @return self
     */
    public function setNodeId(string $nodeId) : self
    {
        $this->nodeId = $nodeId;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getUrl() : string
    {
        return $this->url;
    }
    /**
     * 
     *
     * @param string $url
     *
     * @return self
     */
    public function setUrl(string $url) : self
    {
        $this->url = $url;
        return $this;
    }
    /**
     * 
     *
     * @return IssueEventActor|null
     */
    public function getActor() : ?IssueEventActor
    {
        return $this->actor;
    }
    /**
     * 
     *
     * @param IssueEventActor|null $actor
     *
     * @return self
     */
    public function setActor(?IssueEventActor $actor) : self
    {
        $this->actor = $actor;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getEvent() : string
    {
        return $this->event;
    }
    /**
     * 
     *
     * @param string $event
     *
     * @return self
     */
    public function setEvent(string $event) : self
    {
        $this->event = $event;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getCommitId() : ?string
    {
        return $this->commitId;
    }
    /**
     * 
     *
     * @param string|null $commitId
     *
     * @return self
     */
    public function setCommitId(?string $commitId) : self
    {
        $this->commitId = $commitId;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getCommitUrl() : ?string
    {
        return $this->commitUrl;
    }
    /**
     * 
     *
     * @param string|null $commitUrl
     *
     * @return self
     */
    public function setCommitUrl(?string $commitUrl) : self
    {
        $this->commitUrl = $commitUrl;
        return $this;
    }
    /**
     * 
     *
     * @return \DateTime
     */
    public function getCreatedAt() : \DateTime
    {
        return $this->createdAt;
    }
    /**
     * 
     *
     * @param \DateTime $createdAt
     *
     * @return self
     */
    public function setCreatedAt(\DateTime $createdAt) : self
    {
        $this->createdAt = $createdAt;
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
     * Issue Event Label
     *
     * @return IssueEventLabel
     */
    public function getLabel() : IssueEventLabel
    {
        return $this->label;
    }
    /**
     * Issue Event Label
     *
     * @param IssueEventLabel $label
     *
     * @return self
     */
    public function setLabel(IssueEventLabel $label) : self
    {
        $this->label = $label;
        return $this;
    }
    /**
     * 
     *
     * @return IssueEventAssignee|null
     */
    public function getAssignee() : ?IssueEventAssignee
    {
        return $this->assignee;
    }
    /**
     * 
     *
     * @param IssueEventAssignee|null $assignee
     *
     * @return self
     */
    public function setAssignee(?IssueEventAssignee $assignee) : self
    {
        $this->assignee = $assignee;
        return $this;
    }
    /**
     * 
     *
     * @return IssueEventAssigner|null
     */
    public function getAssigner() : ?IssueEventAssigner
    {
        return $this->assigner;
    }
    /**
     * 
     *
     * @param IssueEventAssigner|null $assigner
     *
     * @return self
     */
    public function setAssigner(?IssueEventAssigner $assigner) : self
    {
        $this->assigner = $assigner;
        return $this;
    }
    /**
     * 
     *
     * @return IssueEventReviewRequester|null
     */
    public function getReviewRequester() : ?IssueEventReviewRequester
    {
        return $this->reviewRequester;
    }
    /**
     * 
     *
     * @param IssueEventReviewRequester|null $reviewRequester
     *
     * @return self
     */
    public function setReviewRequester(?IssueEventReviewRequester $reviewRequester) : self
    {
        $this->reviewRequester = $reviewRequester;
        return $this;
    }
    /**
     * 
     *
     * @return IssueEventRequestedReviewer|null
     */
    public function getRequestedReviewer() : ?IssueEventRequestedReviewer
    {
        return $this->requestedReviewer;
    }
    /**
     * 
     *
     * @param IssueEventRequestedReviewer|null $requestedReviewer
     *
     * @return self
     */
    public function setRequestedReviewer(?IssueEventRequestedReviewer $requestedReviewer) : self
    {
        $this->requestedReviewer = $requestedReviewer;
        return $this;
    }
    /**
     * Groups of organization members that gives permissions on specified repositories.
     *
     * @return Team
     */
    public function getRequestedTeam() : Team
    {
        return $this->requestedTeam;
    }
    /**
     * Groups of organization members that gives permissions on specified repositories.
     *
     * @param Team $requestedTeam
     *
     * @return self
     */
    public function setRequestedTeam(Team $requestedTeam) : self
    {
        $this->requestedTeam = $requestedTeam;
        return $this;
    }
    /**
     * 
     *
     * @return IssueEventDismissedReview
     */
    public function getDismissedReview() : IssueEventDismissedReview
    {
        return $this->dismissedReview;
    }
    /**
     * 
     *
     * @param IssueEventDismissedReview $dismissedReview
     *
     * @return self
     */
    public function setDismissedReview(IssueEventDismissedReview $dismissedReview) : self
    {
        $this->dismissedReview = $dismissedReview;
        return $this;
    }
    /**
     * Issue Event Milestone
     *
     * @return IssueEventMilestone
     */
    public function getMilestone() : IssueEventMilestone
    {
        return $this->milestone;
    }
    /**
     * Issue Event Milestone
     *
     * @param IssueEventMilestone $milestone
     *
     * @return self
     */
    public function setMilestone(IssueEventMilestone $milestone) : self
    {
        $this->milestone = $milestone;
        return $this;
    }
    /**
     * Issue Event Project Card
     *
     * @return IssueEventProjectCard
     */
    public function getProjectCard() : IssueEventProjectCard
    {
        return $this->projectCard;
    }
    /**
     * Issue Event Project Card
     *
     * @param IssueEventProjectCard $projectCard
     *
     * @return self
     */
    public function setProjectCard(IssueEventProjectCard $projectCard) : self
    {
        $this->projectCard = $projectCard;
        return $this;
    }
    /**
     * Issue Event Rename
     *
     * @return IssueEventRename
     */
    public function getRename() : IssueEventRename
    {
        return $this->rename;
    }
    /**
     * Issue Event Rename
     *
     * @param IssueEventRename $rename
     *
     * @return self
     */
    public function setRename(IssueEventRename $rename) : self
    {
        $this->rename = $rename;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getAuthorAssociation() : string
    {
        return $this->authorAssociation;
    }
    /**
     * 
     *
     * @param string $authorAssociation
     *
     * @return self
     */
    public function setAuthorAssociation(string $authorAssociation) : self
    {
        $this->authorAssociation = $authorAssociation;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getLockReason() : ?string
    {
        return $this->lockReason;
    }
    /**
     * 
     *
     * @param string|null $lockReason
     *
     * @return self
     */
    public function setLockReason(?string $lockReason) : self
    {
        $this->lockReason = $lockReason;
        return $this;
    }
}