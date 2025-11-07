<?php

namespace Jane\Generated\DigitalOcean\Model;

class AppFunctionsSpec extends \ArrayObject
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
     * @var AppFunctionsSpecCors
     */
    protected $cors;
    /**
     * (Deprecated - Use Ingress Rules instead). A list of HTTP routes that should be routed to this component.
     *
     * @deprecated
     *
     * @var list<AppRouteSpec>
     */
    protected $routes;
    /**
     * The name. Must be unique across all components within the same app.
     *
     * @var string
     */
    protected $name;
    /**
     * An optional path to the working directory to use for the build. For Dockerfile builds, this will be used as the build context. Must be relative to the root of the repo.
     *
     * @var string
     */
    protected $sourceDir;
    /**
     * @var list<AppAlertSpec>
     */
    protected $alerts;
    /**
     * A list of environment variables made available to the component.
     *
     * @var list<AppVariableDefinition>
     */
    protected $envs;
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
     * A list of configured log forwarding destinations.
     *
     * @var list<AppLogDestinationDefinition>
     */
    protected $logDestinations;
    /**
     * @return AppFunctionsSpecCors
     */
    public function getCors(): AppFunctionsSpecCors
    {
        return $this->cors;
    }
    /**
     * @param AppFunctionsSpecCors $cors
     *
     * @return self
     */
    public function setCors(AppFunctionsSpecCors $cors): self
    {
        $this->initialized['cors'] = true;
        $this->cors = $cors;
        return $this;
    }
    /**
     * (Deprecated - Use Ingress Rules instead). A list of HTTP routes that should be routed to this component.
     *
     * @deprecated
     *
     * @return list<AppRouteSpec>
     */
    public function getRoutes(): array
    {
        return $this->routes;
    }
    /**
     * (Deprecated - Use Ingress Rules instead). A list of HTTP routes that should be routed to this component.
     *
     * @param list<AppRouteSpec> $routes
     *
     * @deprecated
     *
     * @return self
     */
    public function setRoutes(array $routes): self
    {
        $this->initialized['routes'] = true;
        $this->routes = $routes;
        return $this;
    }
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
     * @return list<AppAlertSpec>
     */
    public function getAlerts(): array
    {
        return $this->alerts;
    }
    /**
     * @param list<AppAlertSpec> $alerts
     *
     * @return self
     */
    public function setAlerts(array $alerts): self
    {
        $this->initialized['alerts'] = true;
        $this->alerts = $alerts;
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