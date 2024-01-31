<?php

namespace Github\Model;

class Deployment extends \ArrayObject
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
     * Unique identifier of the deployment
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
    protected $sha;
    /**
     * The ref to deploy. This can be a branch, tag, or sha.
     *
     * @var string
     */
    protected $ref;
    /**
     * Parameter to specify a task to execute
     *
     * @var string
     */
    protected $task;
    /**
     * 
     *
     * @var DeploymentPayload
     */
    protected $payload;
    /**
     * 
     *
     * @var string
     */
    protected $originalEnvironment;
    /**
     * Name for the target deployment environment.
     *
     * @var string
     */
    protected $environment;
    /**
     * 
     *
     * @var string|null
     */
    protected $description;
    /**
     * 
     *
     * @var DeploymentCreator|null
     */
    protected $creator;
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
     * @var string
     */
    protected $statusesUrl;
    /**
     * 
     *
     * @var string
     */
    protected $repositoryUrl;
    /**
     * Specifies if the given environment is will no longer exist at some point in hte future. Default: false.
     *
     * @var bool
     */
    protected $transientEnvironment;
    /**
     * Specifies if the given environment is one that end-users directly interact with. Default: false.
     *
     * @var bool
     */
    protected $productionEnvironment;
    /**
     * 
     *
     * @var DeploymentPerformedViaGithubApp|null
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
     * Unique identifier of the deployment
     *
     * @return int
     */
    public function getId() : int
    {
        return $this->id;
    }
    /**
     * Unique identifier of the deployment
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
     * @return string
     */
    public function getSha() : string
    {
        return $this->sha;
    }
    /**
     * 
     *
     * @param string $sha
     *
     * @return self
     */
    public function setSha(string $sha) : self
    {
        $this->initialized['sha'] = true;
        $this->sha = $sha;
        return $this;
    }
    /**
     * The ref to deploy. This can be a branch, tag, or sha.
     *
     * @return string
     */
    public function getRef() : string
    {
        return $this->ref;
    }
    /**
     * The ref to deploy. This can be a branch, tag, or sha.
     *
     * @param string $ref
     *
     * @return self
     */
    public function setRef(string $ref) : self
    {
        $this->initialized['ref'] = true;
        $this->ref = $ref;
        return $this;
    }
    /**
     * Parameter to specify a task to execute
     *
     * @return string
     */
    public function getTask() : string
    {
        return $this->task;
    }
    /**
     * Parameter to specify a task to execute
     *
     * @param string $task
     *
     * @return self
     */
    public function setTask(string $task) : self
    {
        $this->initialized['task'] = true;
        $this->task = $task;
        return $this;
    }
    /**
     * 
     *
     * @return DeploymentPayload
     */
    public function getPayload() : DeploymentPayload
    {
        return $this->payload;
    }
    /**
     * 
     *
     * @param DeploymentPayload $payload
     *
     * @return self
     */
    public function setPayload(DeploymentPayload $payload) : self
    {
        $this->initialized['payload'] = true;
        $this->payload = $payload;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getOriginalEnvironment() : string
    {
        return $this->originalEnvironment;
    }
    /**
     * 
     *
     * @param string $originalEnvironment
     *
     * @return self
     */
    public function setOriginalEnvironment(string $originalEnvironment) : self
    {
        $this->initialized['originalEnvironment'] = true;
        $this->originalEnvironment = $originalEnvironment;
        return $this;
    }
    /**
     * Name for the target deployment environment.
     *
     * @return string
     */
    public function getEnvironment() : string
    {
        return $this->environment;
    }
    /**
     * Name for the target deployment environment.
     *
     * @param string $environment
     *
     * @return self
     */
    public function setEnvironment(string $environment) : self
    {
        $this->initialized['environment'] = true;
        $this->environment = $environment;
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
        $this->initialized['description'] = true;
        $this->description = $description;
        return $this;
    }
    /**
     * 
     *
     * @return DeploymentCreator|null
     */
    public function getCreator() : ?DeploymentCreator
    {
        return $this->creator;
    }
    /**
     * 
     *
     * @param DeploymentCreator|null $creator
     *
     * @return self
     */
    public function setCreator(?DeploymentCreator $creator) : self
    {
        $this->initialized['creator'] = true;
        $this->creator = $creator;
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
     * @return string
     */
    public function getStatusesUrl() : string
    {
        return $this->statusesUrl;
    }
    /**
     * 
     *
     * @param string $statusesUrl
     *
     * @return self
     */
    public function setStatusesUrl(string $statusesUrl) : self
    {
        $this->initialized['statusesUrl'] = true;
        $this->statusesUrl = $statusesUrl;
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
     * Specifies if the given environment is will no longer exist at some point in hte future. Default: false.
     *
     * @return bool
     */
    public function getTransientEnvironment() : bool
    {
        return $this->transientEnvironment;
    }
    /**
     * Specifies if the given environment is will no longer exist at some point in hte future. Default: false.
     *
     * @param bool $transientEnvironment
     *
     * @return self
     */
    public function setTransientEnvironment(bool $transientEnvironment) : self
    {
        $this->initialized['transientEnvironment'] = true;
        $this->transientEnvironment = $transientEnvironment;
        return $this;
    }
    /**
     * Specifies if the given environment is one that end-users directly interact with. Default: false.
     *
     * @return bool
     */
    public function getProductionEnvironment() : bool
    {
        return $this->productionEnvironment;
    }
    /**
     * Specifies if the given environment is one that end-users directly interact with. Default: false.
     *
     * @param bool $productionEnvironment
     *
     * @return self
     */
    public function setProductionEnvironment(bool $productionEnvironment) : self
    {
        $this->initialized['productionEnvironment'] = true;
        $this->productionEnvironment = $productionEnvironment;
        return $this;
    }
    /**
     * 
     *
     * @return DeploymentPerformedViaGithubApp|null
     */
    public function getPerformedViaGithubApp() : ?DeploymentPerformedViaGithubApp
    {
        return $this->performedViaGithubApp;
    }
    /**
     * 
     *
     * @param DeploymentPerformedViaGithubApp|null $performedViaGithubApp
     *
     * @return self
     */
    public function setPerformedViaGithubApp(?DeploymentPerformedViaGithubApp $performedViaGithubApp) : self
    {
        $this->initialized['performedViaGithubApp'] = true;
        $this->performedViaGithubApp = $performedViaGithubApp;
        return $this;
    }
}