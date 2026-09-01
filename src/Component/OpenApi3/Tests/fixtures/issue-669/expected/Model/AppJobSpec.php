<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class AppJobSpec implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * The name. Must be unique across all components within the same app.
     *
     * @var string
     */
    public string $name;
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
     * @var AppsImageSourceSpec
     */
    public AppsImageSourceSpec $image;
    /**
     * The path to the Dockerfile relative to the root of the repo. If set, it will be used to build this component. Otherwise, App Platform will attempt to build it using buildpacks.
     *
     * @var string
     */
    public string $dockerfilePath;
    /**
     * An optional build command to run while building this component from source.
     *
     * @var string
     */
    public string $buildCommand;
    /**
     * An optional run command to override the component's default.
     *
     * @var string
     */
    public string $runCommand;
    /**
     * An optional path to the working directory to use for the build. For Dockerfile builds, this will be used as the build context. Must be relative to the root of the repo.
     *
     * @var string
     */
    public string $sourceDir;
    /**
     * A list of environment variables made available to the component.
     *
     * @var list<AppVariableDefinition>
     */
    public array $envs;
    /**
     * An environment slug describing the type of this app. For a full list, please refer to [the product documentation](https://docs.digitalocean.com/products/app-platform/).
     *
     * @var string
     */
    public string $environmentSlug;
    /**
     * A list of configured log forwarding destinations.
     *
     * @var list<AppLogDestinationDefinition>
     */
    public array $logDestinations;
    /**
     * The amount of instances that this component should be scaled to. Default: 1. Must not be set if autoscaling is used.
     *
     * @var int
     */
    public int $instanceCount = 1;
    /**
     * The instance size to use for this component. Default: `apps-s-1vcpu-0.5gb`
     *
     * @var string
     */
    public $instanceSizeSlug;
    /**
     * Configuration for automatically scaling this component based on metrics.
     *
     * @var AppComponentInstanceBaseAutoscaling
     */
    public AppComponentInstanceBaseAutoscaling $autoscaling;
    /**
     * - UNSPECIFIED: Default job type, will auto-complete to POST_DEPLOY kind.
     * - PRE_DEPLOY: Indicates a job that runs before an app deployment.
     * - POST_DEPLOY: Indicates a job that runs after an app deployment.
     * - FAILED_DEPLOY: Indicates a job that runs after a component fails to deploy.
     *
     * @var string
     */
    public string $kind = 'UNSPECIFIED';
    /**
     * @var AppJobSpecTermination
     */
    public AppJobSpecTermination $termination;
    public function definedProperties(): array
    {
        return ['name' => 'name', 'git' => 'git', 'github' => 'github', 'gitlab' => 'gitlab', 'bitbucket' => 'bitbucket', 'image' => 'image', 'dockerfilePath' => 'dockerfile_path', 'buildCommand' => 'build_command', 'runCommand' => 'run_command', 'sourceDir' => 'source_dir', 'envs' => 'envs', 'environmentSlug' => 'environment_slug', 'logDestinations' => 'log_destinations', 'instanceCount' => 'instance_count', 'instanceSizeSlug' => 'instance_size_slug', 'autoscaling' => 'autoscaling', 'kind' => 'kind', 'termination' => 'termination'];
    }
}