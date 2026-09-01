<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class AppSpec implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * The name of the app. Must be unique across all apps in the same account.
     *
     * @var string
     */
    public string $name;
    /**
     * The slug form of the geographical origin of the app. Default: `nearest available`
     *
     * @var string
     */
    public string $region;
    /**
     * If set to `true`, the app will **not** be cached at the edge (CDN). Enable this option if you want to manage CDN configuration yourself—whether by using an external CDN provider or by handling static content and caching within your app. This setting is also recommended for apps that require real-time data or serve dynamic content, such as those using Server-Sent Events (SSE) over GET, or hosting an MCP (Model Context Protocol) Server that utilizes SSE.
     * **Note:** This feature is not available for static site components.
     * For more information, see [Disable CDN Cache](https://docs.digitalocean.com/products/app-platform/how-to/cache-content/#disable-cdn-cache).
     *
     * @var bool
     */
    public bool $disableEdgeCache = false;
    /**
     * If set to `true`, email addresses in the app will not be obfuscated. This is
     * useful for apps that require email addresses to be visible (in the HTML markup).
     *
     * @var bool
     */
    public bool $disableEmailObfuscation = false;
    /**
     * If set to `true`, suspicious requests will go through additional security checks to help mitigate layer 7 DDoS attacks.
     *
     * @var bool
     */
    public bool $enhancedThreatControlEnabled = false;
    /**
     * A set of hostnames where the application will be available.
     *
     * @var list<AppDomainSpec>
     */
    public array $domains;
    /**
     * Workloads which expose publicly-accessible HTTP services.
     *
     * @var list<AppServiceSpec>
     */
    public array $services;
    /**
     * Content which can be rendered to static web assets.
     *
     * @var list<AppStaticSiteSpec>
     */
    public array $staticSites;
    /**
     * Pre and post deployment workloads which do not expose publicly-accessible HTTP routes.
     *
     * @var list<AppJobSpec>
     */
    public array $jobs;
    /**
     * Workloads which do not expose publicly-accessible HTTP services.
     *
     * @var list<AppWorkerSpec>
     */
    public array $workers;
    /**
     * Workloads which expose publicly-accessible HTTP services via Functions Components.
     *
     * @var list<AppFunctionsSpec>
     */
    public array $functions;
    /**
     * Database instances which can provide persistence to workloads within the
     * application.
     *
     * @var list<AppDatabaseSpec>
     */
    public array $databases;
    /**
     * Specification for app ingress configurations.
     *
     * @var AppIngressSpec
     */
    public AppIngressSpec $ingress;
    /**
     * Specification for app egress configurations.
     *
     * @var AppEgressSpec
     */
    public AppEgressSpec $egress;
    /**
     * Specification to configure maintenance settings for the app, such as maintenance mode and archiving the app.
     *
     * @var AppMaintenanceSpec
     */
    public AppMaintenanceSpec $maintenance;
    /**
     * @var AppsVpc
     */
    public AppsVpc $vpc;
    public function definedProperties(): array
    {
        return ['name' => 'name', 'region' => 'region', 'disableEdgeCache' => 'disable_edge_cache', 'disableEmailObfuscation' => 'disable_email_obfuscation', 'enhancedThreatControlEnabled' => 'enhanced_threat_control_enabled', 'domains' => 'domains', 'services' => 'services', 'staticSites' => 'static_sites', 'jobs' => 'jobs', 'workers' => 'workers', 'functions' => 'functions', 'databases' => 'databases', 'ingress' => 'ingress', 'egress' => 'egress', 'maintenance' => 'maintenance', 'vpc' => 'vpc'];
    }
}