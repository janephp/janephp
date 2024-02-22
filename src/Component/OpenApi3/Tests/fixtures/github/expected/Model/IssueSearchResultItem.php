<?php

namespace Github\Model;

class IssueSearchResultItem extends \ArrayObject
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
     * 
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
     * @var int
     */
    protected $number;
    /**
     * 
     *
     * @var string
     */
    protected $title;
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
     * @var list<SimpleUser>|null
     */
    protected $assignees;
    /**
     * 
     *
     * @var IssueSearchResultItemUser|null
     */
    protected $user;
    /**
     * 
     *
     * @var list<IssueSearchResultItemLabelsItem>
     */
    protected $labels;
    /**
     * 
     *
     * @var string
     */
    protected $state;
    /**
     * 
     *
     * @var IssueSearchResultItemAssignee|null
     */
    protected $assignee;
    /**
     * 
     *
     * @var IssueSearchResultItemMilestone|null
     */
    protected $milestone;
    /**
     * 
     *
     * @var int
     */
    protected $comments;
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
     * @var \DateTime|null
     */
    protected $closedAt;
    /**
     * 
     *
     * @var list<SearchResultTextMatchesItem>
     */
    protected $textMatches;
    /**
     * 
     *
     * @var IssueSearchResultItemPullRequest
     */
    protected $pullRequest;
    /**
     * 
     *
     * @var string
     */
    protected $body;
    /**
     * 
     *
     * @var int
     */
    protected $score;
    /**
     * 
     *
     * @var string
     */
    protected $authorAssociation;
    /**
     * 
     *
     * @var bool
     */
    protected $draft;
    /**
     * A git repository
     *
     * @var Repository
     */
    protected $repository;
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
     * 
     *
     * @var IssueSearchResultItemPerformedViaGithubApp|null
     */
    protected $performedViaGithubApp;
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
        $this->initialized['url'] = true;
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
        $this->initialized['repositoryUrl'] = true;
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
        $this->initialized['labelsUrl'] = true;
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
        $this->initialized['commentsUrl'] = true;
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
        $this->initialized['eventsUrl'] = true;
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
        $this->initialized['htmlUrl'] = true;
        $this->htmlUrl = $htmlUrl;
        return $this;
    }
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
        $this->initialized['id'] = true;
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
        $this->initialized['nodeId'] = true;
        $this->nodeId = $nodeId;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getNumber() : int
    {
        return $this->number;
    }
    /**
     * 
     *
     * @param int $number
     *
     * @return self
     */
    public function setNumber(int $number) : self
    {
        $this->initialized['number'] = true;
        $this->number = $number;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getTitle() : string
    {
        return $this->title;
    }
    /**
     * 
     *
     * @param string $title
     *
     * @return self
     */
    public function setTitle(string $title) : self
    {
        $this->initialized['title'] = true;
        $this->title = $title;
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
        $this->initialized['locked'] = true;
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
        $this->initialized['activeLockReason'] = true;
        $this->activeLockReason = $activeLockReason;
        return $this;
    }
    /**
     * 
     *
     * @return list<SimpleUser>|null
     */
    public function getAssignees() : ?array
    {
        return $this->assignees;
    }
    /**
     * 
     *
     * @param list<SimpleUser>|null $assignees
     *
     * @return self
     */
    public function setAssignees(?array $assignees) : self
    {
        $this->initialized['assignees'] = true;
        $this->assignees = $assignees;
        return $this;
    }
    /**
     * 
     *
     * @return IssueSearchResultItemUser|null
     */
    public function getUser() : ?IssueSearchResultItemUser
    {
        return $this->user;
    }
    /**
     * 
     *
     * @param IssueSearchResultItemUser|null $user
     *
     * @return self
     */
    public function setUser(?IssueSearchResultItemUser $user) : self
    {
        $this->initialized['user'] = true;
        $this->user = $user;
        return $this;
    }
    /**
     * 
     *
     * @return list<IssueSearchResultItemLabelsItem>
     */
    public function getLabels() : array
    {
        return $this->labels;
    }
    /**
     * 
     *
     * @param list<IssueSearchResultItemLabelsItem> $labels
     *
     * @return self
     */
    public function setLabels(array $labels) : self
    {
        $this->initialized['labels'] = true;
        $this->labels = $labels;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getState() : string
    {
        return $this->state;
    }
    /**
     * 
     *
     * @param string $state
     *
     * @return self
     */
    public function setState(string $state) : self
    {
        $this->initialized['state'] = true;
        $this->state = $state;
        return $this;
    }
    /**
     * 
     *
     * @return IssueSearchResultItemAssignee|null
     */
    public function getAssignee() : ?IssueSearchResultItemAssignee
    {
        return $this->assignee;
    }
    /**
     * 
     *
     * @param IssueSearchResultItemAssignee|null $assignee
     *
     * @return self
     */
    public function setAssignee(?IssueSearchResultItemAssignee $assignee) : self
    {
        $this->initialized['assignee'] = true;
        $this->assignee = $assignee;
        return $this;
    }
    /**
     * 
     *
     * @return IssueSearchResultItemMilestone|null
     */
    public function getMilestone() : ?IssueSearchResultItemMilestone
    {
        return $this->milestone;
    }
    /**
     * 
     *
     * @param IssueSearchResultItemMilestone|null $milestone
     *
     * @return self
     */
    public function setMilestone(?IssueSearchResultItemMilestone $milestone) : self
    {
        $this->initialized['milestone'] = true;
        $this->milestone = $milestone;
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
        $this->initialized['comments'] = true;
        $this->comments = $comments;
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
        $this->initialized['createdAt'] = true;
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
        $this->initialized['updatedAt'] = true;
        $this->updatedAt = $updatedAt;
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
        $this->initialized['closedAt'] = true;
        $this->closedAt = $closedAt;
        return $this;
    }
    /**
     * 
     *
     * @return list<SearchResultTextMatchesItem>
     */
    public function getTextMatches() : array
    {
        return $this->textMatches;
    }
    /**
     * 
     *
     * @param list<SearchResultTextMatchesItem> $textMatches
     *
     * @return self
     */
    public function setTextMatches(array $textMatches) : self
    {
        $this->initialized['textMatches'] = true;
        $this->textMatches = $textMatches;
        return $this;
    }
    /**
     * 
     *
     * @return IssueSearchResultItemPullRequest
     */
    public function getPullRequest() : IssueSearchResultItemPullRequest
    {
        return $this->pullRequest;
    }
    /**
     * 
     *
     * @param IssueSearchResultItemPullRequest $pullRequest
     *
     * @return self
     */
    public function setPullRequest(IssueSearchResultItemPullRequest $pullRequest) : self
    {
        $this->initialized['pullRequest'] = true;
        $this->pullRequest = $pullRequest;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getBody() : string
    {
        return $this->body;
    }
    /**
     * 
     *
     * @param string $body
     *
     * @return self
     */
    public function setBody(string $body) : self
    {
        $this->initialized['body'] = true;
        $this->body = $body;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getScore() : int
    {
        return $this->score;
    }
    /**
     * 
     *
     * @param int $score
     *
     * @return self
     */
    public function setScore(int $score) : self
    {
        $this->initialized['score'] = true;
        $this->score = $score;
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
        $this->initialized['authorAssociation'] = true;
        $this->authorAssociation = $authorAssociation;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getDraft() : bool
    {
        return $this->draft;
    }
    /**
     * 
     *
     * @param bool $draft
     *
     * @return self
     */
    public function setDraft(bool $draft) : self
    {
        $this->initialized['draft'] = true;
        $this->draft = $draft;
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
        $this->initialized['repository'] = true;
        $this->repository = $repository;
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
        $this->initialized['bodyHtml'] = true;
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
        $this->initialized['bodyText'] = true;
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
        $this->initialized['timelineUrl'] = true;
        $this->timelineUrl = $timelineUrl;
        return $this;
    }
    /**
     * 
     *
     * @return IssueSearchResultItemPerformedViaGithubApp|null
     */
    public function getPerformedViaGithubApp() : ?IssueSearchResultItemPerformedViaGithubApp
    {
        return $this->performedViaGithubApp;
    }
    /**
     * 
     *
     * @param IssueSearchResultItemPerformedViaGithubApp|null $performedViaGithubApp
     *
     * @return self
     */
    public function setPerformedViaGithubApp(?IssueSearchResultItemPerformedViaGithubApp $performedViaGithubApp) : self
    {
        $this->initialized['performedViaGithubApp'] = true;
        $this->performedViaGithubApp = $performedViaGithubApp;
        return $this;
    }
}