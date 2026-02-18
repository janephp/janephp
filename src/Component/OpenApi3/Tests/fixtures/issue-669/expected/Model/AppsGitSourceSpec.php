<?php

namespace Jane\Generated\DigitalOcean\Model;

class AppsGitSourceSpec extends \ArrayObject
{
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
     * The clone URL of the repo. Example: `https://github.com/digitalocean/sample-golang.git`
     *
     * @var string
     */
    protected $repoCloneUrl;
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
     * The clone URL of the repo. Example: `https://github.com/digitalocean/sample-golang.git`
     *
     * @return string
     */
    public function getRepoCloneUrl(): string
    {
        return $this->repoCloneUrl;
    }
    /**
     * The clone URL of the repo. Example: `https://github.com/digitalocean/sample-golang.git`
     *
     * @param string $repoCloneUrl
     *
     * @return self
     */
    public function setRepoCloneUrl(string $repoCloneUrl): self
    {
        $this->initialized['repoCloneUrl'] = true;
        $this->repoCloneUrl = $repoCloneUrl;
        return $this;
    }
}