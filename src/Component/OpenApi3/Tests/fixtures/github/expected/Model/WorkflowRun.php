<?php

namespace Github\Model;

class WorkflowRun extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = array();
    public function isInitialized($property) : bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * The ID of the workflow run.
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
     * The SHA of the head commit that points to the version of the worflow being run.
     *
     * @var string
     */
    protected $headSha;
    /**
     * The auto incrementing run number for the workflow run.
     *
     * @var int
     */
    protected $runNumber;
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
    protected $status;
    /**
     * 
     *
     * @var string|null
     */
    protected $conclusion;
    /**
     * The ID of the parent workflow.
     *
     * @var int
     */
    protected $workflowId;
    /**
     * The URL to the workflow run.
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
     * @var PullRequestMinimal[]|null
     */
    protected $pullRequests;
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
     * The URL to the jobs for the workflow run.
     *
     * @var string
     */
    protected $jobsUrl;
    /**
     * The URL to download the logs for the workflow run.
     *
     * @var string
     */
    protected $logsUrl;
    /**
     * The URL to the associated check suite.
     *
     * @var string
     */
    protected $checkSuiteUrl;
    /**
     * The URL to the artifacts for the workflow run.
     *
     * @var string
     */
    protected $artifactsUrl;
    /**
     * The URL to cancel the workflow run.
     *
     * @var string
     */
    protected $cancelUrl;
    /**
     * The URL to rerun the workflow run.
     *
     * @var string
     */
    protected $rerunUrl;
    /**
     * The URL to the workflow.
     *
     * @var string
     */
    protected $workflowUrl;
    /**
     * Simple Commit
     *
     * @var SimpleCommit
     */
    protected $headCommit;
    /**
     * Minimal Repository
     *
     * @var MinimalRepository
     */
    protected $repository;
    /**
     * Minimal Repository
     *
     * @var MinimalRepository
     */
    protected $headRepository;
    /**
     * 
     *
     * @var int
     */
    protected $headRepositoryId;
    /**
     * The ID of the workflow run.
     *
     * @return int
     */
    public function getId() : int
    {
        return $this->id;
    }
    /**
     * The ID of the workflow run.
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
        $this->initialized['headBranch'] = true;
        $this->headBranch = $headBranch;
        return $this;
    }
    /**
     * The SHA of the head commit that points to the version of the worflow being run.
     *
     * @return string
     */
    public function getHeadSha() : string
    {
        return $this->headSha;
    }
    /**
     * The SHA of the head commit that points to the version of the worflow being run.
     *
     * @param string $headSha
     *
     * @return self
     */
    public function setHeadSha(string $headSha) : self
    {
        $this->initialized['headSha'] = true;
        $this->headSha = $headSha;
        return $this;
    }
    /**
     * The auto incrementing run number for the workflow run.
     *
     * @return int
     */
    public function getRunNumber() : int
    {
        return $this->runNumber;
    }
    /**
     * The auto incrementing run number for the workflow run.
     *
     * @param int $runNumber
     *
     * @return self
     */
    public function setRunNumber(int $runNumber) : self
    {
        $this->initialized['runNumber'] = true;
        $this->runNumber = $runNumber;
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
        $this->initialized['event'] = true;
        $this->event = $event;
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
        $this->initialized['status'] = true;
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
        $this->initialized['conclusion'] = true;
        $this->conclusion = $conclusion;
        return $this;
    }
    /**
     * The ID of the parent workflow.
     *
     * @return int
     */
    public function getWorkflowId() : int
    {
        return $this->workflowId;
    }
    /**
     * The ID of the parent workflow.
     *
     * @param int $workflowId
     *
     * @return self
     */
    public function setWorkflowId(int $workflowId) : self
    {
        $this->initialized['workflowId'] = true;
        $this->workflowId = $workflowId;
        return $this;
    }
    /**
     * The URL to the workflow run.
     *
     * @return string
     */
    public function getUrl() : string
    {
        return $this->url;
    }
    /**
     * The URL to the workflow run.
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
        $this->initialized['pullRequests'] = true;
        $this->pullRequests = $pullRequests;
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
        $this->initialized['createdAt'] = true;
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
        $this->initialized['updatedAt'] = true;
        $this->updatedAt = $updatedAt;
        return $this;
    }
    /**
     * The URL to the jobs for the workflow run.
     *
     * @return string
     */
    public function getJobsUrl() : string
    {
        return $this->jobsUrl;
    }
    /**
     * The URL to the jobs for the workflow run.
     *
     * @param string $jobsUrl
     *
     * @return self
     */
    public function setJobsUrl(string $jobsUrl) : self
    {
        $this->initialized['jobsUrl'] = true;
        $this->jobsUrl = $jobsUrl;
        return $this;
    }
    /**
     * The URL to download the logs for the workflow run.
     *
     * @return string
     */
    public function getLogsUrl() : string
    {
        return $this->logsUrl;
    }
    /**
     * The URL to download the logs for the workflow run.
     *
     * @param string $logsUrl
     *
     * @return self
     */
    public function setLogsUrl(string $logsUrl) : self
    {
        $this->initialized['logsUrl'] = true;
        $this->logsUrl = $logsUrl;
        return $this;
    }
    /**
     * The URL to the associated check suite.
     *
     * @return string
     */
    public function getCheckSuiteUrl() : string
    {
        return $this->checkSuiteUrl;
    }
    /**
     * The URL to the associated check suite.
     *
     * @param string $checkSuiteUrl
     *
     * @return self
     */
    public function setCheckSuiteUrl(string $checkSuiteUrl) : self
    {
        $this->initialized['checkSuiteUrl'] = true;
        $this->checkSuiteUrl = $checkSuiteUrl;
        return $this;
    }
    /**
     * The URL to the artifacts for the workflow run.
     *
     * @return string
     */
    public function getArtifactsUrl() : string
    {
        return $this->artifactsUrl;
    }
    /**
     * The URL to the artifacts for the workflow run.
     *
     * @param string $artifactsUrl
     *
     * @return self
     */
    public function setArtifactsUrl(string $artifactsUrl) : self
    {
        $this->initialized['artifactsUrl'] = true;
        $this->artifactsUrl = $artifactsUrl;
        return $this;
    }
    /**
     * The URL to cancel the workflow run.
     *
     * @return string
     */
    public function getCancelUrl() : string
    {
        return $this->cancelUrl;
    }
    /**
     * The URL to cancel the workflow run.
     *
     * @param string $cancelUrl
     *
     * @return self
     */
    public function setCancelUrl(string $cancelUrl) : self
    {
        $this->initialized['cancelUrl'] = true;
        $this->cancelUrl = $cancelUrl;
        return $this;
    }
    /**
     * The URL to rerun the workflow run.
     *
     * @return string
     */
    public function getRerunUrl() : string
    {
        return $this->rerunUrl;
    }
    /**
     * The URL to rerun the workflow run.
     *
     * @param string $rerunUrl
     *
     * @return self
     */
    public function setRerunUrl(string $rerunUrl) : self
    {
        $this->initialized['rerunUrl'] = true;
        $this->rerunUrl = $rerunUrl;
        return $this;
    }
    /**
     * The URL to the workflow.
     *
     * @return string
     */
    public function getWorkflowUrl() : string
    {
        return $this->workflowUrl;
    }
    /**
     * The URL to the workflow.
     *
     * @param string $workflowUrl
     *
     * @return self
     */
    public function setWorkflowUrl(string $workflowUrl) : self
    {
        $this->initialized['workflowUrl'] = true;
        $this->workflowUrl = $workflowUrl;
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
        $this->initialized['headCommit'] = true;
        $this->headCommit = $headCommit;
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
        $this->initialized['repository'] = true;
        $this->repository = $repository;
        return $this;
    }
    /**
     * Minimal Repository
     *
     * @return MinimalRepository
     */
    public function getHeadRepository() : MinimalRepository
    {
        return $this->headRepository;
    }
    /**
     * Minimal Repository
     *
     * @param MinimalRepository $headRepository
     *
     * @return self
     */
    public function setHeadRepository(MinimalRepository $headRepository) : self
    {
        $this->initialized['headRepository'] = true;
        $this->headRepository = $headRepository;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getHeadRepositoryId() : int
    {
        return $this->headRepositoryId;
    }
    /**
     * 
     *
     * @param int $headRepositoryId
     *
     * @return self
     */
    public function setHeadRepositoryId(int $headRepositoryId) : self
    {
        $this->initialized['headRepositoryId'] = true;
        $this->headRepositoryId = $headRepositoryId;
        return $this;
    }
}