<?php

namespace Github\Model;

class Issue extends \ArrayObject
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
     * URL for the issue
     *
     * @var string
     */
    protected $url;
    /**
     * 
     *
     * @var string
     */
    protected $repositoryUrl;
    /**
     * 
     *
     * @var string
     */
    protected $labelsUrl;
    /**
     * 
     *
     * @var string
     */
    protected $commentsUrl;
    /**
     * 
     *
     * @var string
     */
    protected $eventsUrl;
    /**
     * 
     *
     * @var string
     */
    protected $htmlUrl;
    /**
     * Number uniquely identifying the issue within its repository
     *
     * @var int
     */
    protected $number;
    /**
     * State of the issue; either 'open' or 'closed'
     *
     * @var string
     */
    protected $state;
    /**
     * Title of the issue
     *
     * @var string
     */
    protected $title;
    /**
     * Contents of the issue
     *
     * @var string
     */
    protected $body;
    /**
     * 
     *
     * @var IssueUser|null
     */
    protected $user;
    /**
     * Labels to associate with this issue; pass one or more label names to replace the set of labels on this issue; send an empty array to clear all labels from the issue; note that the labels are silently dropped for users without push access to the repository
     *
     * @var mixed[]
     */
    protected $labels;
    /**
     * 
     *
     * @var IssueAssignee|null
     */
    protected $assignee;
    /**
     * 
     *
     * @var SimpleUser[]|null
     */
    protected $assignees;
    /**
     * 
     *
     * @var IssueMilestone|null
     */
    protected $milestone;
    /**
     * 
     *
     * @var bool
     */
    protected $locked;
    /**
     * 
     *
     * @var string|null
     */
    protected $activeLockReason;
    /**
     * 
     *
     * @var int
     */
    protected $comments;
    /**
     * 
     *
     * @var IssuePullRequest
     */
    protected $pullRequest;
    /**
     * 
     *
     * @var \DateTime|null
     */
    protected $closedAt;
    /**
     * 
     *
     * @var \DateTime
     */
    protected $createdAt;
    /**
     * 
     *
     * @var \DateTime
     */
    protected $updatedAt;
    /**
     * 
     *
     * @var IssueClosedBy|null
     */
    protected $closedBy;
    /**
     * 
     *
     * @var string
     */
    protected $bodyHtml;
    /**
     * 
     *
     * @var string
     */
    protected $bodyText;
    /**
     * 
     *
     * @var string
     */
    protected $timelineUrl;
    /**
     * A git repository
     *
     * @var Repository
     */
    protected $repository;
    /**
     * 
     *
     * @var IssuePerformedViaGithubApp|null
     */
    protected $performedViaGithubApp;
    /**
     * 
     *
     * @var string
     */
    protected $authorAssociation;
    /**
     * 
     *
     * @var ReactionRollup
     */
    protected $reactions;
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
     * URL for the issue
     *
     * @return string
     */
    public function getUrl() : string
    {
        return $this->url;
    }
    /**
     * URL for the issue
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
     * @return string
     */
    public function getRepositoryUrl() : string
    {
        return $this->repositoryUrl;
    }
    /**
     * 
     *
     * @param string $repositoryUrl
     *
     * @return self
     */
    public function setRepositoryUrl(string $repositoryUrl) : self
    {
        $this->repositoryUrl = $repositoryUrl;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getLabelsUrl() : string
    {
        return $this->labelsUrl;
    }
    /**
     * 
     *
     * @param string $labelsUrl
     *
     * @return self
     */
    public function setLabelsUrl(string $labelsUrl) : self
    {
        $this->labelsUrl = $labelsUrl;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getCommentsUrl() : string
    {
        return $this->commentsUrl;
    }
    /**
     * 
     *
     * @param string $commentsUrl
     *
     * @return self
     */
    public function setCommentsUrl(string $commentsUrl) : self
    {
        $this->commentsUrl = $commentsUrl;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getEventsUrl() : string
    {
        return $this->eventsUrl;
    }
    /**
     * 
     *
     * @param string $eventsUrl
     *
     * @return self
     */
    public function setEventsUrl(string $eventsUrl) : self
    {
        $this->eventsUrl = $eventsUrl;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getHtmlUrl() : string
    {
        return $this->htmlUrl;
    }
    /**
     * 
     *
     * @param string $htmlUrl
     *
     * @return self
     */
    public function setHtmlUrl(string $htmlUrl) : self
    {
        $this->htmlUrl = $htmlUrl;
        return $this;
    }
    /**
     * Number uniquely identifying the issue within its repository
     *
     * @return int
     */
    public function getNumber() : int
    {
        return $this->number;
    }
    /**
     * Number uniquely identifying the issue within its repository
     *
     * @param int $number
     *
     * @return self
     */
    public function setNumber(int $number) : self
    {
        $this->number = $number;
        return $this;
    }
    /**
     * State of the issue; either 'open' or 'closed'
     *
     * @return string
     */
    public function getState() : string
    {
        return $this->state;
    }
    /**
     * State of the issue; either 'open' or 'closed'
     *
     * @param string $state
     *
     * @return self
     */
    public function setState(string $state) : self
    {
        $this->state = $state;
        return $this;
    }
    /**
     * Title of the issue
     *
     * @return string
     */
    public function getTitle() : string
    {
        return $this->title;
    }
    /**
     * Title of the issue
     *
     * @param string $title
     *
     * @return self
     */
    public function setTitle(string $title) : self
    {
        $this->title = $title;
        return $this;
    }
    /**
     * Contents of the issue
     *
     * @return string
     */
    public function getBody() : string
    {
        return $this->body;
    }
    /**
     * Contents of the issue
     *
     * @param string $body
     *
     * @return self
     */
    public function setBody(string $body) : self
    {
        $this->body = $body;
        return $this;
    }
    /**
     * 
     *
     * @return IssueUser|null
     */
    public function getUser() : ?IssueUser
    {
        return $this->user;
    }
    /**
     * 
     *
     * @param IssueUser|null $user
     *
     * @return self
     */
    public function setUser(?IssueUser $user) : self
    {
        $this->user = $user;
        return $this;
    }
    /**
     * Labels to associate with this issue; pass one or more label names to replace the set of labels on this issue; send an empty array to clear all labels from the issue; note that the labels are silently dropped for users without push access to the repository
     *
     * @return mixed[]
     */
    public function getLabels() : array
    {
        return $this->labels;
    }
    /**
     * Labels to associate with this issue; pass one or more label names to replace the set of labels on this issue; send an empty array to clear all labels from the issue; note that the labels are silently dropped for users without push access to the repository
     *
     * @param mixed[] $labels
     *
     * @return self
     */
    public function setLabels(array $labels) : self
    {
        $this->labels = $labels;
        return $this;
    }
    /**
     * 
     *
     * @return IssueAssignee|null
     */
    public function getAssignee() : ?IssueAssignee
    {
        return $this->assignee;
    }
    /**
     * 
     *
     * @param IssueAssignee|null $assignee
     *
     * @return self
     */
    public function setAssignee(?IssueAssignee $assignee) : self
    {
        $this->assignee = $assignee;
        return $this;
    }
    /**
     * 
     *
     * @return SimpleUser[]|null
     */
    public function getAssignees() : ?array
    {
        return $this->assignees;
    }
    /**
     * 
     *
     * @param SimpleUser[]|null $assignees
     *
     * @return self
     */
    public function setAssignees(?array $assignees) : self
    {
        $this->assignees = $assignees;
        return $this;
    }
    /**
     * 
     *
     * @return IssueMilestone|null
     */
    public function getMilestone() : ?IssueMilestone
    {
        return $this->milestone;
    }
    /**
     * 
     *
     * @param IssueMilestone|null $milestone
     *
     * @return self
     */
    public function setMilestone(?IssueMilestone $milestone) : self
    {
        $this->milestone = $milestone;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getLocked() : bool
    {
        return $this->locked;
    }
    /**
     * 
     *
     * @param bool $locked
     *
     * @return self
     */
    public function setLocked(bool $locked) : self
    {
        $this->locked = $locked;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getActiveLockReason() : ?string
    {
        return $this->activeLockReason;
    }
    /**
     * 
     *
     * @param string|null $activeLockReason
     *
     * @return self
     */
    public function setActiveLockReason(?string $activeLockReason) : self
    {
        $this->activeLockReason = $activeLockReason;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getComments() : int
    {
        return $this->comments;
    }
    /**
     * 
     *
     * @param int $comments
     *
     * @return self
     */
    public function setComments(int $comments) : self
    {
        $this->comments = $comments;
        return $this;
    }
    /**
     * 
     *
     * @return IssuePullRequest
     */
    public function getPullRequest() : IssuePullRequest
    {
        return $this->pullRequest;
    }
    /**
     * 
     *
     * @param IssuePullRequest $pullRequest
     *
     * @return self
     */
    public function setPullRequest(IssuePullRequest $pullRequest) : self
    {
        $this->pullRequest = $pullRequest;
        return $this;
    }
    /**
     * 
     *
     * @return \DateTime|null
     */
    public function getClosedAt() : ?\DateTime
    {
        return $this->closedAt;
    }
    /**
     * 
     *
     * @param \DateTime|null $closedAt
     *
     * @return self
     */
    public function setClosedAt(?\DateTime $closedAt) : self
    {
        $this->closedAt = $closedAt;
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
     * 
     *
     * @return \DateTime
     */
    public function getUpdatedAt() : \DateTime
    {
        return $this->updatedAt;
    }
    /**
     * 
     *
     * @param \DateTime $updatedAt
     *
     * @return self
     */
    public function setUpdatedAt(\DateTime $updatedAt) : self
    {
        $this->updatedAt = $updatedAt;
        return $this;
    }
    /**
     * 
     *
     * @return IssueClosedBy|null
     */
    public function getClosedBy() : ?IssueClosedBy
    {
        return $this->closedBy;
    }
    /**
     * 
     *
     * @param IssueClosedBy|null $closedBy
     *
     * @return self
     */
    public function setClosedBy(?IssueClosedBy $closedBy) : self
    {
        $this->closedBy = $closedBy;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getBodyHtml() : string
    {
        return $this->bodyHtml;
    }
    /**
     * 
     *
     * @param string $bodyHtml
     *
     * @return self
     */
    public function setBodyHtml(string $bodyHtml) : self
    {
        $this->bodyHtml = $bodyHtml;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getBodyText() : string
    {
        return $this->bodyText;
    }
    /**
     * 
     *
     * @param string $bodyText
     *
     * @return self
     */
    public function setBodyText(string $bodyText) : self
    {
        $this->bodyText = $bodyText;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getTimelineUrl() : string
    {
        return $this->timelineUrl;
    }
    /**
     * 
     *
     * @param string $timelineUrl
     *
     * @return self
     */
    public function setTimelineUrl(string $timelineUrl) : self
    {
        $this->timelineUrl = $timelineUrl;
        return $this;
    }
    /**
     * A git repository
     *
     * @return Repository
     */
    public function getRepository() : Repository
    {
        return $this->repository;
    }
    /**
     * A git repository
     *
     * @param Repository $repository
     *
     * @return self
     */
    public function setRepository(Repository $repository) : self
    {
        $this->repository = $repository;
        return $this;
    }
    /**
     * 
     *
     * @return IssuePerformedViaGithubApp|null
     */
    public function getPerformedViaGithubApp() : ?IssuePerformedViaGithubApp
    {
        return $this->performedViaGithubApp;
    }
    /**
     * 
     *
     * @param IssuePerformedViaGithubApp|null $performedViaGithubApp
     *
     * @return self
     */
    public function setPerformedViaGithubApp(?IssuePerformedViaGithubApp $performedViaGithubApp) : self
    {
        $this->performedViaGithubApp = $performedViaGithubApp;
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
     * @return ReactionRollup
     */
    public function getReactions() : ReactionRollup
    {
        return $this->reactions;
    }
    /**
     * 
     *
     * @param ReactionRollup $reactions
     *
     * @return self
     */
    public function setReactions(ReactionRollup $reactions) : self
    {
        $this->reactions = $reactions;
        return $this;
    }
}