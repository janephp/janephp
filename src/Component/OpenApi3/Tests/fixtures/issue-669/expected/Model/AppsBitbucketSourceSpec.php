<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class AppsBitbucketSourceSpec implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * The name of the branch to use
     *
     * @var string
     */
    protected $branch;
    /**
     * Whether to automatically deploy new commits made to the repo
     *
     * @var bool
     */
    protected $deployOnPush;
    /**
     * The name of the repo in the format owner/repo. Example: `digitalocean/sample-golang`
     *
     * @var string
     */
    protected $repo;
    /**
     * The name of the branch to use
     *
     * @return string
     */
    public function getBranch(): string
    {
        return $this->branch;
    }
    /**
     * The name of the branch to use
     *
     * @param string $branch
     *
     * @return self
     */
    public function setBranch(string $branch): self
    {
        $this->initialized['branch'] = true;
        $this->branch = $branch;
        return $this;
    }
    /**
     * Whether to automatically deploy new commits made to the repo
     *
     * @return bool
     */
    public function getDeployOnPush(): bool
    {
        return $this->deployOnPush;
    }
    /**
     * Whether to automatically deploy new commits made to the repo
     *
     * @param bool $deployOnPush
     *
     * @return self
     */
    public function setDeployOnPush(bool $deployOnPush): self
    {
        $this->initialized['deployOnPush'] = true;
        $this->deployOnPush = $deployOnPush;
        return $this;
    }
    /**
     * The name of the repo in the format owner/repo. Example: `digitalocean/sample-golang`
     *
     * @return string
     */
    public function getRepo(): string
    {
        return $this->repo;
    }
    /**
     * The name of the repo in the format owner/repo. Example: `digitalocean/sample-golang`
     *
     * @param string $repo
     *
     * @return self
     */
    public function setRepo(string $repo): self
    {
        $this->initialized['repo'] = true;
        $this->repo = $repo;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['branch' => ['branch', 'getBranch', 'setBranch'], 'deployOnPush' => ['deploy_on_push', 'getDeployOnPush', 'setDeployOnPush'], 'repo' => ['repo', 'getRepo', 'setRepo']];
    }
}