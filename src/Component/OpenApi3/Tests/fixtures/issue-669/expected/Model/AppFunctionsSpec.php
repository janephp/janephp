<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class AppFunctionsSpec implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var AppFunctionsSpecCors
     */
    public AppFunctionsSpecCors $cors;
    /**
     * (Deprecated - Use Ingress Rules instead). A list of HTTP routes that should be routed to this component.
     *
     * @deprecated
     *
     * @var list<AppRouteSpec>
     */
    public array $routes;
    /**
     * The name. Must be unique across all components within the same app.
     *
     * @var string
     */
    public string $name;
    /**
     * An optional path to the working directory to use for the build. For Dockerfile builds, this will be used as the build context. Must be relative to the root of the repo.
     *
     * @var string
     */
    public string $sourceDir;
    /**
     * @var list<AppAlertSpec>
     */
    public array $alerts;
    /**
     * A list of environment variables made available to the component.
     *
     * @var list<AppVariableDefinition>
     */
    public array $envs;
    /**
     * @var AppsGitSourceSpec
     */
    public AppsGitSourceSpec $git;
    /**
     * @var AppsGithubSourceSpec
     */
    public AppsGithubSourceSpec $github;
    /**
     * @var AppsGitlabSourceSpec
     */
    public AppsGitlabSourceSpec $gitlab;
    /**
     * @var AppsBitbucketSourceSpec
     */
    public AppsBitbucketSourceSpec $bitbucket;
    /**
     * A list of configured log forwarding destinations.
     *
     * @var list<AppLogDestinationDefinition>
     */
    public array $logDestinations;
    public function definedProperties(): array
    {
        return ['cors' => 'cors', 'routes' => 'routes', 'name' => 'name', 'sourceDir' => 'source_dir', 'alerts' => 'alerts', 'envs' => 'envs', 'git' => 'git', 'github' => 'github', 'gitlab' => 'gitlab', 'bitbucket' => 'bitbucket', 'logDestinations' => 'log_destinations'];
    }
}