<?php

namespace Github\Model;

class CheckRun extends \ArrayObject
{
    /**
     * The id of the check.
     *
     * @var int
     */
    protected $id;
    /**
     * The SHA of the commit that is being checked.
     *
     * @var string
     */
    protected $headSha;
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
    protected $externalId;
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
     * 
     *
     * @var string|null
     */
    protected $detailsUrl;
    /**
     * The phase of the lifecycle that the check is currently in.
     *
     * @var string
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
     * @var \DateTime|null
     */
    protected $startedAt;
    /**
     * 
     *
     * @var \DateTime|null
     */
    protected $completedAt;
    /**
     * 
     *
     * @var CheckRunOutput
     */
    protected $output;
    /**
     * The name of the check.
     *
     * @var string
     */
    protected $name;
    /**
     * 
     *
     * @var CheckRunCheckSuite|null
     */
    protected $checkSuite;
    /**
     * 
     *
     * @var CheckRunApp|null
     */
    protected $app;
    /**
     * 
     *
     * @var mixed
     */
    protected $pullRequests;
    /**
     * The id of the check.
     *
     * @return int
     */
    public function getId() : int
    {
        return $this->id;
    }
    /**
     * The id of the check.
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
     * The SHA of the commit that is being checked.
     *
     * @return string
     */
    public function getHeadSha() : string
    {
        return $this->headSha;
    }
    /**
     * The SHA of the commit that is being checked.
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
    public function getExternalId() : ?string
    {
        return $this->externalId;
    }
    /**
     * 
     *
     * @param string|null $externalId
     *
     * @return self
     */
    public function setExternalId(?string $externalId) : self
    {
        $this->externalId = $externalId;
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
        $this->htmlUrl = $htmlUrl;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getDetailsUrl() : ?string
    {
        return $this->detailsUrl;
    }
    /**
     * 
     *
     * @param string|null $detailsUrl
     *
     * @return self
     */
    public function setDetailsUrl(?string $detailsUrl) : self
    {
        $this->detailsUrl = $detailsUrl;
        return $this;
    }
    /**
     * The phase of the lifecycle that the check is currently in.
     *
     * @return string
     */
    public function getStatus() : string
    {
        return $this->status;
    }
    /**
     * The phase of the lifecycle that the check is currently in.
     *
     * @param string $status
     *
     * @return self
     */
    public function setStatus(string $status) : self
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
     * @return \DateTime|null
     */
    public function getStartedAt() : ?\DateTime
    {
        return $this->startedAt;
    }
    /**
     * 
     *
     * @param \DateTime|null $startedAt
     *
     * @return self
     */
    public function setStartedAt(?\DateTime $startedAt) : self
    {
        $this->startedAt = $startedAt;
        return $this;
    }
    /**
     * 
     *
     * @return \DateTime|null
     */
    public function getCompletedAt() : ?\DateTime
    {
        return $this->completedAt;
    }
    /**
     * 
     *
     * @param \DateTime|null $completedAt
     *
     * @return self
     */
    public function setCompletedAt(?\DateTime $completedAt) : self
    {
        $this->completedAt = $completedAt;
        return $this;
    }
    /**
     * 
     *
     * @return CheckRunOutput
     */
    public function getOutput() : CheckRunOutput
    {
        return $this->output;
    }
    /**
     * 
     *
     * @param CheckRunOutput $output
     *
     * @return self
     */
    public function setOutput(CheckRunOutput $output) : self
    {
        $this->output = $output;
        return $this;
    }
    /**
     * The name of the check.
     *
     * @return string
     */
    public function getName() : string
    {
        return $this->name;
    }
    /**
     * The name of the check.
     *
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name) : self
    {
        $this->name = $name;
        return $this;
    }
    /**
     * 
     *
     * @return CheckRunCheckSuite|null
     */
    public function getCheckSuite() : ?CheckRunCheckSuite
    {
        return $this->checkSuite;
    }
    /**
     * 
     *
     * @param CheckRunCheckSuite|null $checkSuite
     *
     * @return self
     */
    public function setCheckSuite(?CheckRunCheckSuite $checkSuite) : self
    {
        $this->checkSuite = $checkSuite;
        return $this;
    }
    /**
     * 
     *
     * @return CheckRunApp|null
     */
    public function getApp() : ?CheckRunApp
    {
        return $this->app;
    }
    /**
     * 
     *
     * @param CheckRunApp|null $app
     *
     * @return self
     */
    public function setApp(?CheckRunApp $app) : self
    {
        $this->app = $app;
        return $this;
    }
    /**
     * 
     *
     * @return mixed
     */
    public function getPullRequests()
    {
        return $this->pullRequests;
    }
    /**
     * 
     *
     * @param mixed $pullRequests
     *
     * @return self
     */
    public function setPullRequests($pullRequests) : self
    {
        $this->pullRequests = $pullRequests;
        return $this;
    }
}