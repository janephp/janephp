<?php

namespace Github\Model;

class Job extends \ArrayObject
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
     * The id of the job.
     *
     * @var int
     */
    protected $id;
    /**
     * The id of the associated workflow run.
     *
     * @var int
     */
    protected $runId;
    /**
     * 
     *
     * @var string
     */
    protected $runUrl;
    /**
     * 
     *
     * @var string
     */
    protected $nodeId;
    /**
     * The SHA of the commit that is being run.
     *
     * @var string
     */
    protected $headSha;
    /**
     * 
     *
     * @var string
     */
    protected $url;
    /**
     * 
     *
     * @var string|null
     */
    protected $htmlUrl;
    /**
     * The phase of the lifecycle that the job is currently in.
     *
     * @var string
     */
    protected $status;
    /**
     * The outcome of the job.
     *
     * @var string|null
     */
    protected $conclusion;
    /**
     * The time that the job started, in ISO 8601 format.
     *
     * @var \DateTime
     */
    protected $startedAt;
    /**
     * The time that the job finished, in ISO 8601 format.
     *
     * @var \DateTime|null
     */
    protected $completedAt;
    /**
     * The name of the job.
     *
     * @var string
     */
    protected $name;
    /**
     * Steps in this job.
     *
     * @var JobStepsItem[]
     */
    protected $steps;
    /**
     * 
     *
     * @var string
     */
    protected $checkRunUrl;
    /**
     * The id of the job.
     *
     * @return int
     */
    public function getId() : int
    {
        return $this->id;
    }
    /**
     * The id of the job.
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
     * The id of the associated workflow run.
     *
     * @return int
     */
    public function getRunId() : int
    {
        return $this->runId;
    }
    /**
     * The id of the associated workflow run.
     *
     * @param int $runId
     *
     * @return self
     */
    public function setRunId(int $runId) : self
    {
        $this->initialized['runId'] = true;
        $this->runId = $runId;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getRunUrl() : string
    {
        return $this->runUrl;
    }
    /**
     * 
     *
     * @param string $runUrl
     *
     * @return self
     */
    public function setRunUrl(string $runUrl) : self
    {
        $this->initialized['runUrl'] = true;
        $this->runUrl = $runUrl;
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
     * The SHA of the commit that is being run.
     *
     * @return string
     */
    public function getHeadSha() : string
    {
        return $this->headSha;
    }
    /**
     * The SHA of the commit that is being run.
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
     * @return string|null
     */
    public function getHtmlUrl() : ?string
    {
        return $this->htmlUrl;
    }
    /**
     * 
     *
     * @param string|null $htmlUrl
     *
     * @return self
     */
    public function setHtmlUrl(?string $htmlUrl) : self
    {
        $this->initialized['htmlUrl'] = true;
        $this->htmlUrl = $htmlUrl;
        return $this;
    }
    /**
     * The phase of the lifecycle that the job is currently in.
     *
     * @return string
     */
    public function getStatus() : string
    {
        return $this->status;
    }
    /**
     * The phase of the lifecycle that the job is currently in.
     *
     * @param string $status
     *
     * @return self
     */
    public function setStatus(string $status) : self
    {
        $this->initialized['status'] = true;
        $this->status = $status;
        return $this;
    }
    /**
     * The outcome of the job.
     *
     * @return string|null
     */
    public function getConclusion() : ?string
    {
        return $this->conclusion;
    }
    /**
     * The outcome of the job.
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
     * The time that the job started, in ISO 8601 format.
     *
     * @return \DateTime
     */
    public function getStartedAt() : \DateTime
    {
        return $this->startedAt;
    }
    /**
     * The time that the job started, in ISO 8601 format.
     *
     * @param \DateTime $startedAt
     *
     * @return self
     */
    public function setStartedAt(\DateTime $startedAt) : self
    {
        $this->initialized['startedAt'] = true;
        $this->startedAt = $startedAt;
        return $this;
    }
    /**
     * The time that the job finished, in ISO 8601 format.
     *
     * @return \DateTime|null
     */
    public function getCompletedAt() : ?\DateTime
    {
        return $this->completedAt;
    }
    /**
     * The time that the job finished, in ISO 8601 format.
     *
     * @param \DateTime|null $completedAt
     *
     * @return self
     */
    public function setCompletedAt(?\DateTime $completedAt) : self
    {
        $this->initialized['completedAt'] = true;
        $this->completedAt = $completedAt;
        return $this;
    }
    /**
     * The name of the job.
     *
     * @return string
     */
    public function getName() : string
    {
        return $this->name;
    }
    /**
     * The name of the job.
     *
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name) : self
    {
        $this->initialized['name'] = true;
        $this->name = $name;
        return $this;
    }
    /**
     * Steps in this job.
     *
     * @return JobStepsItem[]
     */
    public function getSteps() : array
    {
        return $this->steps;
    }
    /**
     * Steps in this job.
     *
     * @param JobStepsItem[] $steps
     *
     * @return self
     */
    public function setSteps(array $steps) : self
    {
        $this->initialized['steps'] = true;
        $this->steps = $steps;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getCheckRunUrl() : string
    {
        return $this->checkRunUrl;
    }
    /**
     * 
     *
     * @param string $checkRunUrl
     *
     * @return self
     */
    public function setCheckRunUrl(string $checkRunUrl) : self
    {
        $this->initialized['checkRunUrl'] = true;
        $this->checkRunUrl = $checkRunUrl;
        return $this;
    }
}