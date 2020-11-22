<?php

namespace Github\Model;

class ReposOwnerRepoDeploymentsPostBody
{
    /**
     * The ref to deploy. This can be a branch, tag, or SHA.
     *
     * @var string
     */
    protected $ref;
    /**
     * Specifies a task to execute (e.g., `deploy` or `deploy:migrations`).
     *
     * @var string
     */
    protected $task = 'deploy';
    /**
     * Attempts to automatically merge the default branch into the requested ref, if it's behind the default branch.
     *
     * @var bool
     */
    protected $autoMerge = true;
    /**
     * The [status](https://developer.github.com/v3/repos/statuses/) contexts to verify against commit status checks. If you omit this parameter, GitHub verifies all unique contexts before creating a deployment. To bypass checking entirely, pass an empty array. Defaults to all unique contexts.
     *
     * @var string[]
     */
    protected $requiredContexts;
    /**
     * JSON payload with extra information about the deployment.
     *
     * @var string
     */
    protected $payload = '';
    /**
     * Name for the target deployment environment (e.g., `production`, `staging`, `qa`).
     *
     * @var string
     */
    protected $environment = 'production';
    /**
     * Short description of the deployment.
     *
     * @var string|null
     */
    protected $description = '';
    /**
    * Specifies if the given environment is specific to the deployment and will no longer exist at some point in the future. Default: `false`  
    **Note:** This parameter requires you to use the [`application/vnd.github.ant-man-preview+json`](https://developer.github.com/v3/previews/#enhanced-deployments) custom media type. **Note:** This parameter requires you to use the [`application/vnd.github.ant-man-preview+json`](https://developer.github.com/v3/previews/#enhanced-deployments) custom media type.
    *
    * @var bool
    */
    protected $transientEnvironment = false;
    /**
    * Specifies if the given environment is one that end-users directly interact with. Default: `true` when `environment` is `production` and `false` otherwise.  
    **Note:** This parameter requires you to use the [`application/vnd.github.ant-man-preview+json`](https://developer.github.com/v3/previews/#enhanced-deployments) custom media type.
    *
    * @var bool
    */
    protected $productionEnvironment;
    /**
     * 
     *
     * @var string
     */
    protected $createdAt;
    /**
     * The ref to deploy. This can be a branch, tag, or SHA.
     *
     * @return string
     */
    public function getRef() : string
    {
        return $this->ref;
    }
    /**
     * The ref to deploy. This can be a branch, tag, or SHA.
     *
     * @param string $ref
     *
     * @return self
     */
    public function setRef(string $ref) : self
    {
        $this->ref = $ref;
        return $this;
    }
    /**
     * Specifies a task to execute (e.g., `deploy` or `deploy:migrations`).
     *
     * @return string
     */
    public function getTask() : string
    {
        return $this->task;
    }
    /**
     * Specifies a task to execute (e.g., `deploy` or `deploy:migrations`).
     *
     * @param string $task
     *
     * @return self
     */
    public function setTask(string $task) : self
    {
        $this->task = $task;
        return $this;
    }
    /**
     * Attempts to automatically merge the default branch into the requested ref, if it's behind the default branch.
     *
     * @return bool
     */
    public function getAutoMerge() : bool
    {
        return $this->autoMerge;
    }
    /**
     * Attempts to automatically merge the default branch into the requested ref, if it's behind the default branch.
     *
     * @param bool $autoMerge
     *
     * @return self
     */
    public function setAutoMerge(bool $autoMerge) : self
    {
        $this->autoMerge = $autoMerge;
        return $this;
    }
    /**
     * The [status](https://developer.github.com/v3/repos/statuses/) contexts to verify against commit status checks. If you omit this parameter, GitHub verifies all unique contexts before creating a deployment. To bypass checking entirely, pass an empty array. Defaults to all unique contexts.
     *
     * @return string[]
     */
    public function getRequiredContexts() : array
    {
        return $this->requiredContexts;
    }
    /**
     * The [status](https://developer.github.com/v3/repos/statuses/) contexts to verify against commit status checks. If you omit this parameter, GitHub verifies all unique contexts before creating a deployment. To bypass checking entirely, pass an empty array. Defaults to all unique contexts.
     *
     * @param string[] $requiredContexts
     *
     * @return self
     */
    public function setRequiredContexts(array $requiredContexts) : self
    {
        $this->requiredContexts = $requiredContexts;
        return $this;
    }
    /**
     * JSON payload with extra information about the deployment.
     *
     * @return string
     */
    public function getPayload() : string
    {
        return $this->payload;
    }
    /**
     * JSON payload with extra information about the deployment.
     *
     * @param string $payload
     *
     * @return self
     */
    public function setPayload(string $payload) : self
    {
        $this->payload = $payload;
        return $this;
    }
    /**
     * Name for the target deployment environment (e.g., `production`, `staging`, `qa`).
     *
     * @return string
     */
    public function getEnvironment() : string
    {
        return $this->environment;
    }
    /**
     * Name for the target deployment environment (e.g., `production`, `staging`, `qa`).
     *
     * @param string $environment
     *
     * @return self
     */
    public function setEnvironment(string $environment) : self
    {
        $this->environment = $environment;
        return $this;
    }
    /**
     * Short description of the deployment.
     *
     * @return string|null
     */
    public function getDescription() : ?string
    {
        return $this->description;
    }
    /**
     * Short description of the deployment.
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
    * Specifies if the given environment is specific to the deployment and will no longer exist at some point in the future. Default: `false`  
    **Note:** This parameter requires you to use the [`application/vnd.github.ant-man-preview+json`](https://developer.github.com/v3/previews/#enhanced-deployments) custom media type. **Note:** This parameter requires you to use the [`application/vnd.github.ant-man-preview+json`](https://developer.github.com/v3/previews/#enhanced-deployments) custom media type.
    *
    * @return bool
    */
    public function getTransientEnvironment() : bool
    {
        return $this->transientEnvironment;
    }
    /**
    * Specifies if the given environment is specific to the deployment and will no longer exist at some point in the future. Default: `false`  
    **Note:** This parameter requires you to use the [`application/vnd.github.ant-man-preview+json`](https://developer.github.com/v3/previews/#enhanced-deployments) custom media type. **Note:** This parameter requires you to use the [`application/vnd.github.ant-man-preview+json`](https://developer.github.com/v3/previews/#enhanced-deployments) custom media type.
    *
    * @param bool $transientEnvironment
    *
    * @return self
    */
    public function setTransientEnvironment(bool $transientEnvironment) : self
    {
        $this->transientEnvironment = $transientEnvironment;
        return $this;
    }
    /**
    * Specifies if the given environment is one that end-users directly interact with. Default: `true` when `environment` is `production` and `false` otherwise.  
    **Note:** This parameter requires you to use the [`application/vnd.github.ant-man-preview+json`](https://developer.github.com/v3/previews/#enhanced-deployments) custom media type.
    *
    * @return bool
    */
    public function getProductionEnvironment() : bool
    {
        return $this->productionEnvironment;
    }
    /**
    * Specifies if the given environment is one that end-users directly interact with. Default: `true` when `environment` is `production` and `false` otherwise.  
    **Note:** This parameter requires you to use the [`application/vnd.github.ant-man-preview+json`](https://developer.github.com/v3/previews/#enhanced-deployments) custom media type.
    *
    * @param bool $productionEnvironment
    *
    * @return self
    */
    public function setProductionEnvironment(bool $productionEnvironment) : self
    {
        $this->productionEnvironment = $productionEnvironment;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getCreatedAt() : string
    {
        return $this->createdAt;
    }
    /**
     * 
     *
     * @param string $createdAt
     *
     * @return self
     */
    public function setCreatedAt(string $createdAt) : self
    {
        $this->createdAt = $createdAt;
        return $this;
    }
}