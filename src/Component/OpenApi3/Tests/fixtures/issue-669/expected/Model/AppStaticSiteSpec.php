<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class AppStaticSiteSpec implements AdditionalPropertiesInterface
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
     * The name of the index document to use when serving this static site. Default: index.html
     *
     * @var string
     */
    public string $indexDocument = 'index.html';
    /**
     * The name of the error document to use when serving this static site. Default: 404.html. If no such file exists within the built assets, App Platform will supply one.
     *
     * @var string
     */
    public string $errorDocument = '404.html';
    /**
     * The name of the document to use as the fallback for any requests to documents that are not found when serving this static site. Only 1 of `catchall_document` or `error_document` can be set.
     *
     * @var string
     */
    public string $catchallDocument;
    /**
     * An optional path to where the built assets will be located, relative to the build context. If not set, App Platform will automatically scan for these directory names: `_static`, `dist`, `public`, `build`.
     *
     * @var string
     */
    public string $outputDir;
    /**
     * @var AppStaticSiteSpecCors
     */
    public AppStaticSiteSpecCors $cors;
    /**
     * (Deprecated - Use Ingress Rules instead). A list of HTTP routes that should be routed to this component.
     *
     * @deprecated
     *
     * @var list<AppRouteSpec>
     */
    public array $routes;
    public function definedProperties(): array
    {
        return ['name' => 'name', 'git' => 'git', 'github' => 'github', 'gitlab' => 'gitlab', 'bitbucket' => 'bitbucket', 'image' => 'image', 'dockerfilePath' => 'dockerfile_path', 'buildCommand' => 'build_command', 'runCommand' => 'run_command', 'sourceDir' => 'source_dir', 'envs' => 'envs', 'environmentSlug' => 'environment_slug', 'logDestinations' => 'log_destinations', 'indexDocument' => 'index_document', 'errorDocument' => 'error_document', 'catchallDocument' => 'catchall_document', 'outputDir' => 'output_dir', 'cors' => 'cors', 'routes' => 'routes'];
    }
}