<?php

namespace Github\Model;

class CheckSuite extends \ArrayObject
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
     * @var string|null
     */
    protected $headBranch;
    /**
     * The SHA of the head commit that is being checked.
     *
     * @var string
     */
    protected $headSha;
    /**
     * 
     *
     * @var string|null
     */
    protected $status;
    /**
     * 
     *
     * @var string|null
     */
    protected $conclusion;
    /**
     * 
     *
     * @var string|null
     */
    protected $url;
    /**
     * 
     *
     * @var string|null
     */
    protected $before;
    /**
     * 
     *
     * @var string|null
     */
    protected $after;
    /**
     * 
     *
     * @var PullRequestMinimal[]|null
     */
    protected $pullRequests;
    /**
     * 
     *
     * @var CheckSuiteApp|null
     */
    protected $app;
    /**
     * Minimal Repository
     *
     * @var MinimalRepository
     */
    protected $repository;
    /**
     * 
     *
     * @var \DateTime|null
     */
    protected $createdAt;
    /**
     * 
     *
     * @var \DateTime|null
     */
    protected $updatedAt;
    /**
     * Simple Commit
     *
     * @var SimpleCommit
     */
    protected $headCommit;
    /**
     * 
     *
     * @var int
     */
    protected $latestCheckRunsCount;
    /**
     * 
     *
     * @var string
     */
    protected $checkRunsUrl;
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
     * @return string|null
     */
    public function getHeadBranch() : ?string
    {
        return $this->headBranch;
    }
    /**
     * 
     *
     * @param string|null $headBranch
     *
     * @return self
     */
    public function setHeadBranch(?string $headBranch) : self
    {
        $this->headBranch = $headBranch;
        return $this;
    }
    /**
     * The SHA of the head commit that is being checked.
     *
     * @return string
     */
    public function getHeadSha() : string
    {
        return $this->headSha;
    }
    /**
     * The SHA of the head commit that is being checked.
     *
     * @param string $headSha
     *
     * @return self
     */
    public function setHeadSha(string $headSha) : self
    {
        $this->headSha = $headSha;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getStatus() : ?string
    {
        return $this->status;
    }
    /**
     * 
     *
     * @param string|null $status
     *
     * @return self
     */
    public function setStatus(?string $status) : self
    {
        $this->status = $status;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getConclusion() : ?string
    {
        return $this->conclusion;
    }
    /**
     * 
     *
     * @param string|null $conclusion
     *
     * @return self
     */
    public function setConclusion(?string $conclusion) : self
    {
        $this->conclusion = $conclusion;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getUrl() : ?string
    {
        return $this->url;
    }
    /**
     * 
     *
     * @param string|null $url
     *
     * @return self
     */
    public function setUrl(?string $url) : self
    {
        $this->url = $url;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getBefore() : ?string
    {
        return $this->before;
    }
    /**
     * 
     *
     * @param string|null $before
     *
     * @return self
     */
    public function setBefore(?string $before) : self
    {
        $this->before = $before;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getAfter() : ?string
    {
        return $this->after;
    }
    /**
     * 
     *
     * @param string|null $after
     *
     * @return self
     */
    public function setAfter(?string $after) : self
    {
        $this->after = $after;
        return $this;
    }
    /**
     * 
     *
     * @return PullRequestMinimal[]|null
     */
    public function getPullRequests() : ?array
    {
        return $this->pullRequests;
    }
    /**
     * 
     *
     * @param PullRequestMinimal[]|null $pullRequests
     *
     * @return self
     */
    public function setPullRequests(?array $pullRequests) : self
    {
        $this->pullRequests = $pullRequests;
        return $this;
    }
    /**
     * 
     *
     * @return CheckSuiteApp|null
     */
    public function getApp() : ?CheckSuiteApp
    {
        return $this->app;
    }
    /**
     * 
     *
     * @param CheckSuiteApp|null $app
     *
     * @return self
     */
    public function setApp(?CheckSuiteApp $app) : self
    {
        $this->app = $app;
        return $this;
    }
    /**
     * Minimal Repository
     *
     * @return MinimalRepository
     */
    public function getRepository() : MinimalRepository
    {
        return $this->repository;
    }
    /**
     * Minimal Repository
     *
     * @param MinimalRepository $repository
     *
     * @return self
     */
    public function setRepository(MinimalRepository $repository) : self
    {
        $this->repository = $repository;
        return $this;
    }
    /**
     * 
     *
     * @return \DateTime|null
     */
    public function getCreatedAt() : ?\DateTime
    {
        return $this->createdAt;
    }
    /**
     * 
     *
     * @param \DateTime|null $createdAt
     *
     * @return self
     */
    public function setCreatedAt(?\DateTime $createdAt) : self
    {
        $this->createdAt = $createdAt;
        return $this;
    }
    /**
     * 
     *
     * @return \DateTime|null
     */
    public function getUpdatedAt() : ?\DateTime
    {
        return $this->updatedAt;
    }
    /**
     * 
     *
     * @param \DateTime|null $updatedAt
     *
     * @return self
     */
    public function setUpdatedAt(?\DateTime $updatedAt) : self
    {
        $this->updatedAt = $updatedAt;
        return $this;
    }
    /**
     * Simple Commit
     *
     * @return SimpleCommit
     */
    public function getHeadCommit() : SimpleCommit
    {
        return $this->headCommit;
    }
    /**
     * Simple Commit
     *
     * @param SimpleCommit $headCommit
     *
     * @return self
     */
    public function setHeadCommit(SimpleCommit $headCommit) : self
    {
        $this->headCommit = $headCommit;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getLatestCheckRunsCount() : int
    {
        return $this->latestCheckRunsCount;
    }
    /**
     * 
     *
     * @param int $latestCheckRunsCount
     *
     * @return self
     */
    public function setLatestCheckRunsCount(int $latestCheckRunsCount) : self
    {
        $this->latestCheckRunsCount = $latestCheckRunsCount;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getCheckRunsUrl() : string
    {
        return $this->checkRunsUrl;
    }
    /**
     * 
     *
     * @param string $checkRunsUrl
     *
     * @return self
     */
    public function setCheckRunsUrl(string $checkRunsUrl) : self
    {
        $this->checkRunsUrl = $checkRunsUrl;
        return $this;
    }
}