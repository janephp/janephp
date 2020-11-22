<?php

namespace Github\Model;

class PullRequestSimpleMilestone
{
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
    protected $htmlUrl;
    /**
     * 
     *
     * @var string
     */
    protected $labelsUrl;
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
     * The number of the milestone.
     *
     * @var int
     */
    protected $number;
    /**
     * The state of the milestone.
     *
     * @var string
     */
    protected $state = 'open';
    /**
     * The title of the milestone.
     *
     * @var string
     */
    protected $title;
    /**
     * 
     *
     * @var string|null
     */
    protected $description;
    /**
     * 
     *
     * @var MilestoneCreator|null
     */
    protected $creator;
    /**
     * 
     *
     * @var int
     */
    protected $openIssues;
    /**
     * 
     *
     * @var int
     */
    protected $closedIssues;
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
     * @var \DateTime|null
     */
    protected $dueOn;
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
     * The number of the milestone.
     *
     * @return int
     */
    public function getNumber() : int
    {
        return $this->number;
    }
    /**
     * The number of the milestone.
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
     * The state of the milestone.
     *
     * @return string
     */
    public function getState() : string
    {
        return $this->state;
    }
    /**
     * The state of the milestone.
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
     * The title of the milestone.
     *
     * @return string
     */
    public function getTitle() : string
    {
        return $this->title;
    }
    /**
     * The title of the milestone.
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
     * 
     *
     * @return string|null
     */
    public function getDescription() : ?string
    {
        return $this->description;
    }
    /**
     * 
     *
     * @param string|null $description
     *
     * @return self
     */
    public function setDescription(?string $description) : self
    {
        $this->description = $description;
        return $this;
    }
    /**
     * 
     *
     * @return MilestoneCreator|null
     */
    public function getCreator() : ?MilestoneCreator
    {
        return $this->creator;
    }
    /**
     * 
     *
     * @param MilestoneCreator|null $creator
     *
     * @return self
     */
    public function setCreator(?MilestoneCreator $creator) : self
    {
        $this->creator = $creator;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getOpenIssues() : int
    {
        return $this->openIssues;
    }
    /**
     * 
     *
     * @param int $openIssues
     *
     * @return self
     */
    public function setOpenIssues(int $openIssues) : self
    {
        $this->openIssues = $openIssues;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getClosedIssues() : int
    {
        return $this->closedIssues;
    }
    /**
     * 
     *
     * @param int $closedIssues
     *
     * @return self
     */
    public function setClosedIssues(int $closedIssues) : self
    {
        $this->closedIssues = $closedIssues;
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
     * @return \DateTime|null
     */
    public function getDueOn() : ?\DateTime
    {
        return $this->dueOn;
    }
    /**
     * 
     *
     * @param \DateTime|null $dueOn
     *
     * @return self
     */
    public function setDueOn(?\DateTime $dueOn) : self
    {
        $this->dueOn = $dueOn;
        return $this;
    }
}