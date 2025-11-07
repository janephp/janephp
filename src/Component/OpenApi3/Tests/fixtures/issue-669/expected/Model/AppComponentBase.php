<?php

namespace Jane\Generated\DigitalOcean\Model;

class AppComponentBase extends \ArrayObject
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
     * The name. Must be unique across all components within the same app.
     *
     * @var string
     */
    protected $name;
    /**
     * @var AppsGitSourceSpec
     */
    protected $git;
    /**
     * @var AppsGithubSourceSpec
     */
    protected $github;
    /**
     * @var AppsGitlabSourceSpec
     */
    protected $gitlab;
    /**
     * @var AppsBitbucketSourceSpec
     */
    protected $bitbucket;
    /**
     * @var AppsImageSourceSpec
     */
    protected $image;
    /**
     * The path to the Dockerfile relative to the root of the repo. If set, it will be used to build this component. Otherwise, App Platform will attempt to build it using buildpacks.
     *
     * @var string
     */
    protected $dockerfilePath;
    /**
     * An optional build command to run while building this component from source.
     *
     * @var string
     */
    protected $buildCommand;
    /**
     * An optional run command to override the component's default.
     *
     * @var string
     */
    protected $runCommand;
    /**
     * An optional path to the working directory to use for the build. For Dockerfile builds, this will be used as the build context. Must be relative to the root of the repo.
     *
     * @var string
     */
    protected $sourceDir;
    /**
     * A list of environment variables made available to the component.
     *
     * @var list<AppVariableDefinition>
     */
    protected $envs;
    /**
     * An environment slug describing the type of this app. For a full list, please refer to [the product documentation](https://docs.digitalocean.com/products/app-platform/).
     *
     * @var string
     */
    protected $environmentSlug;
    /**
     * A list of configured log forwarding destinations.
     *
     * @var list<AppLogDestinationDefinition>
     */
    protected $logDestinations;
    /**
     * The name. Must be unique across all components within the same app.
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * The name. Must be unique across all components within the same app.
     *
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;
        return $this;
    }
    /**
     * @return AppsGitSourceSpec
     */
    public function getGit(): AppsGitSourceSpec
    {
        return $this->git;
    }
    /**
     * @param AppsGitSourceSpec $git
     *
     * @return self
     */
    public function setGit(AppsGitSourceSpec $git): self
    {
        $this->initialized['git'] = true;
        $this->git = $git;
        return $this;
    }
    /**
     * @return AppsGithubSourceSpec
     */
    public function getGithub(): AppsGithubSourceSpec
    {
        return $this->github;
    }
    /**
     * @param AppsGithubSourceSpec $github
     *
     * @return self
     */
    public function setGithub(AppsGithubSourceSpec $github): self
    {
        $this->initialized['github'] = true;
        $this->github = $github;
        return $this;
    }
    /**
     * @return AppsGitlabSourceSpec
     */
    public function getGitlab(): AppsGitlabSourceSpec
    {
        return $this->gitlab;
    }
    /**
     * @param AppsGitlabSourceSpec $gitlab
     *
     * @return self
     */
    public function setGitlab(AppsGitlabSourceSpec $gitlab): self
    {
        $this->initialized['gitlab'] = true;
        $this->gitlab = $gitlab;
        return $this;
    }
    /**
     * @return AppsBitbucketSourceSpec
     */
    public function getBitbucket(): AppsBitbucketSourceSpec
    {
        return $this->bitbucket;
    }
    /**
     * @param AppsBitbucketSourceSpec $bitbucket
     *
     * @return self
     */
    public function setBitbucket(AppsBitbucketSourceSpec $bitbucket): self
    {
        $this->initialized['bitbucket'] = true;
        $this->bitbucket = $bitbucket;
        return $this;
    }
    /**
     * @return AppsImageSourceSpec
     */
    public function getImage(): AppsImageSourceSpec
    {
        return $this->image;
    }
    /**
     * @param AppsImageSourceSpec $image
     *
     * @return self
     */
    public function setImage(AppsImageSourceSpec $image): self
    {
        $this->initialized['image'] = true;
        $this->image = $image;
        return $this;
    }
    /**
     * The path to the Dockerfile relative to the root of the repo. If set, it will be used to build this component. Otherwise, App Platform will attempt to build it using buildpacks.
     *
     * @return string
     */
    public function getDockerfilePath(): string
    {
        return $this->dockerfilePath;
    }
    /**
     * The path to the Dockerfile relative to the root of the repo. If set, it will be used to build this component. Otherwise, App Platform will attempt to build it using buildpacks.
     *
     * @param string $dockerfilePath
     *
     * @return self
     */
    public function setDockerfilePath(string $dockerfilePath): self
    {
        $this->initialized['dockerfilePath'] = true;
        $this->dockerfilePath = $dockerfilePath;
        return $this;
    }
    /**
     * An optional build command to run while building this component from source.
     *
     * @return string
     */
    public function getBuildCommand(): string
    {
        return $this->buildCommand;
    }
    /**
     * An optional build command to run while building this component from source.
     *
     * @param string $buildCommand
     *
     * @return self
     */
    public function setBuildCommand(string $buildCommand): self
    {
        $this->initialized['buildCommand'] = true;
        $this->buildCommand = $buildCommand;
        return $this;
    }
    /**
     * An optional run command to override the component's default.
     *
     * @return string
     */
    public function getRunCommand(): string
    {
        return $this->runCommand;
    }
    /**
     * An optional run command to override the component's default.
     *
     * @param string $runCommand
     *
     * @return self
     */
    public function setRunCommand(string $runCommand): self
    {
        $this->initialized['runCommand'] = true;
        $this->runCommand = $runCommand;
        return $this;
    }
    /**
     * An optional path to the working directory to use for the build. For Dockerfile builds, this will be used as the build context. Must be relative to the root of the repo.
     *
     * @return string
     */
    public function getSourceDir(): string
    {
        return $this->sourceDir;
    }
    /**
     * An optional path to the working directory to use for the build. For Dockerfile builds, this will be used as the build context. Must be relative to the root of the repo.
     *
     * @param string $sourceDir
     *
     * @return self
     */
    public function setSourceDir(string $sourceDir): self
    {
        $this->initialized['sourceDir'] = true;
        $this->sourceDir = $sourceDir;
        return $this;
    }
    /**
     * A list of environment variables made available to the component.
     *
     * @return list<AppVariableDefinition>
     */
    public function getEnvs(): array
    {
        return $this->envs;
    }
    /**
     * A list of environment variables made available to the component.
     *
     * @param list<AppVariableDefinition> $envs
     *
     * @return self
     */
    public function setEnvs(array $envs): self
    {
        $this->initialized['envs'] = true;
        $this->envs = $envs;
        return $this;
    }
    /**
     * An environment slug describing the type of this app. For a full list, please refer to [the product documentation](https://docs.digitalocean.com/products/app-platform/).
     *
     * @return string
     */
    public function getEnvironmentSlug(): string
    {
        return $this->environmentSlug;
    }
    /**
     * An environment slug describing the type of this app. For a full list, please refer to [the product documentation](https://docs.digitalocean.com/products/app-platform/).
     *
     * @param string $environmentSlug
     *
     * @return self
     */
    public function setEnvironmentSlug(string $environmentSlug): self
    {
        $this->initialized['environmentSlug'] = true;
        $this->environmentSlug = $environmentSlug;
        return $this;
    }
    /**
     * A list of configured log forwarding destinations.
     *
     * @return list<AppLogDestinationDefinition>
     */
    public function getLogDestinations(): array
    {
        return $this->logDestinations;
    }
    /**
     * A list of configured log forwarding destinations.
     *
     * @param list<AppLogDestinationDefinition> $logDestinations
     *
     * @return self
     */
    public function setLogDestinations(array $logDestinations): self
    {
        $this->initialized['logDestinations'] = true;
        $this->logDestinations = $logDestinations;
        return $this;
    }
}