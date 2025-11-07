<?php

namespace Jane\Generated\DigitalOcean\Model;

class AppSpec extends \ArrayObject
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
     * The name of the app. Must be unique across all apps in the same account.
     *
     * @var string
     */
    protected $name;
    /**
     * The slug form of the geographical origin of the app. Default: `nearest available`
     *
     * @var string
     */
    protected $region;
    /**
     * If set to `true`, the app will **not** be cached at the edge (CDN). Enable this option if you want to manage CDN configuration yourself—whether by using an external CDN provider or by handling static content and caching within your app. This setting is also recommended for apps that require real-time data or serve dynamic content, such as those using Server-Sent Events (SSE) over GET, or hosting an MCP (Model Context Protocol) Server that utilizes SSE.
     * **Note:** This feature is not available for static site components.
     * For more information, see [Disable CDN Cache](https://docs.digitalocean.com/products/app-platform/how-to/cache-content/#disable-cdn-cache).
     *
     * @var bool
     */
    protected $disableEdgeCache = false;
    /**
     * If set to `true`, email addresses in the app will not be obfuscated. This is
     * useful for apps that require email addresses to be visible (in the HTML markup).
     *
     * @var bool
     */
    protected $disableEmailObfuscation = false;
    /**
     * If set to `true`, suspicious requests will go through additional security checks to help mitigate layer 7 DDoS attacks.
     *
     * @var bool
     */
    protected $enhancedThreatControlEnabled = false;
    /**
     * A set of hostnames where the application will be available.
     *
     * @var list<AppDomainSpec>
     */
    protected $domains;
    /**
     * Workloads which expose publicly-accessible HTTP services.
     *
     * @var list<AppServiceSpec>
     */
    protected $services;
    /**
     * Content which can be rendered to static web assets.
     *
     * @var list<AppStaticSiteSpec>
     */
    protected $staticSites;
    /**
     * Pre and post deployment workloads which do not expose publicly-accessible HTTP routes.
     *
     * @var list<AppJobSpec>
     */
    protected $jobs;
    /**
     * Workloads which do not expose publicly-accessible HTTP services.
     *
     * @var list<AppWorkerSpec>
     */
    protected $workers;
    /**
     * Workloads which expose publicly-accessible HTTP services via Functions Components.
     *
     * @var list<AppFunctionsSpec>
     */
    protected $functions;
    /**
     * Database instances which can provide persistence to workloads within the
     * application.
     *
     * @var list<AppDatabaseSpec>
     */
    protected $databases;
    /**
     * Specification for app ingress configurations.
     *
     * @var AppIngressSpec
     */
    protected $ingress;
    /**
     * Specification for app egress configurations.
     *
     * @var AppEgressSpec
     */
    protected $egress;
    /**
     * Specification to configure maintenance settings for the app, such as maintenance mode and archiving the app.
     *
     * @var AppMaintenanceSpec
     */
    protected $maintenance;
    /**
     * @var AppsVpc
     */
    protected $vpc;
    /**
     * The name of the app. Must be unique across all apps in the same account.
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * The name of the app. Must be unique across all apps in the same account.
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
     * The slug form of the geographical origin of the app. Default: `nearest available`
     *
     * @return string
     */
    public function getRegion(): string
    {
        return $this->region;
    }
    /**
     * The slug form of the geographical origin of the app. Default: `nearest available`
     *
     * @param string $region
     *
     * @return self
     */
    public function setRegion(string $region): self
    {
        $this->initialized['region'] = true;
        $this->region = $region;
        return $this;
    }
    /**
     * If set to `true`, the app will **not** be cached at the edge (CDN). Enable this option if you want to manage CDN configuration yourself—whether by using an external CDN provider or by handling static content and caching within your app. This setting is also recommended for apps that require real-time data or serve dynamic content, such as those using Server-Sent Events (SSE) over GET, or hosting an MCP (Model Context Protocol) Server that utilizes SSE.
     * **Note:** This feature is not available for static site components.
     * For more information, see [Disable CDN Cache](https://docs.digitalocean.com/products/app-platform/how-to/cache-content/#disable-cdn-cache).
     *
     * @return bool
     */
    public function getDisableEdgeCache(): bool
    {
        return $this->disableEdgeCache;
    }
    /**
    * If set to `true`, the app will **not** be cached at the edge (CDN). Enable this option if you want to manage CDN configuration yourself—whether by using an external CDN provider or by handling static content and caching within your app. This setting is also recommended for apps that require real-time data or serve dynamic content, such as those using Server-Sent Events (SSE) over GET, or hosting an MCP (Model Context Protocol) Server that utilizes SSE.  
    **Note:** This feature is not available for static site components.  
    For more information, see [Disable CDN Cache](https://docs.digitalocean.com/products/app-platform/how-to/cache-content/#disable-cdn-cache).
    *
    * @param bool $disableEdgeCache
    *
    * @return self
    */
    public function setDisableEdgeCache(bool $disableEdgeCache): self
    {
        $this->initialized['disableEdgeCache'] = true;
        $this->disableEdgeCache = $disableEdgeCache;
        return $this;
    }
    /**
     * If set to `true`, email addresses in the app will not be obfuscated. This is
     * useful for apps that require email addresses to be visible (in the HTML markup).
     *
     * @return bool
     */
    public function getDisableEmailObfuscation(): bool
    {
        return $this->disableEmailObfuscation;
    }
    /**
    * If set to `true`, email addresses in the app will not be obfuscated. This is
    useful for apps that require email addresses to be visible (in the HTML markup).
    *
    * @param bool $disableEmailObfuscation
    *
    * @return self
    */
    public function setDisableEmailObfuscation(bool $disableEmailObfuscation): self
    {
        $this->initialized['disableEmailObfuscation'] = true;
        $this->disableEmailObfuscation = $disableEmailObfuscation;
        return $this;
    }
    /**
     * If set to `true`, suspicious requests will go through additional security checks to help mitigate layer 7 DDoS attacks.
     *
     * @return bool
     */
    public function getEnhancedThreatControlEnabled(): bool
    {
        return $this->enhancedThreatControlEnabled;
    }
    /**
     * If set to `true`, suspicious requests will go through additional security checks to help mitigate layer 7 DDoS attacks.
     *
     * @param bool $enhancedThreatControlEnabled
     *
     * @return self
     */
    public function setEnhancedThreatControlEnabled(bool $enhancedThreatControlEnabled): self
    {
        $this->initialized['enhancedThreatControlEnabled'] = true;
        $this->enhancedThreatControlEnabled = $enhancedThreatControlEnabled;
        return $this;
    }
    /**
     * A set of hostnames where the application will be available.
     *
     * @return list<AppDomainSpec>
     */
    public function getDomains(): array
    {
        return $this->domains;
    }
    /**
     * A set of hostnames where the application will be available.
     *
     * @param list<AppDomainSpec> $domains
     *
     * @return self
     */
    public function setDomains(array $domains): self
    {
        $this->initialized['domains'] = true;
        $this->domains = $domains;
        return $this;
    }
    /**
     * Workloads which expose publicly-accessible HTTP services.
     *
     * @return list<AppServiceSpec>
     */
    public function getServices(): array
    {
        return $this->services;
    }
    /**
     * Workloads which expose publicly-accessible HTTP services.
     *
     * @param list<AppServiceSpec> $services
     *
     * @return self
     */
    public function setServices(array $services): self
    {
        $this->initialized['services'] = true;
        $this->services = $services;
        return $this;
    }
    /**
     * Content which can be rendered to static web assets.
     *
     * @return list<AppStaticSiteSpec>
     */
    public function getStaticSites(): array
    {
        return $this->staticSites;
    }
    /**
     * Content which can be rendered to static web assets.
     *
     * @param list<AppStaticSiteSpec> $staticSites
     *
     * @return self
     */
    public function setStaticSites(array $staticSites): self
    {
        $this->initialized['staticSites'] = true;
        $this->staticSites = $staticSites;
        return $this;
    }
    /**
     * Pre and post deployment workloads which do not expose publicly-accessible HTTP routes.
     *
     * @return list<AppJobSpec>
     */
    public function getJobs(): array
    {
        return $this->jobs;
    }
    /**
     * Pre and post deployment workloads which do not expose publicly-accessible HTTP routes.
     *
     * @param list<AppJobSpec> $jobs
     *
     * @return self
     */
    public function setJobs(array $jobs): self
    {
        $this->initialized['jobs'] = true;
        $this->jobs = $jobs;
        return $this;
    }
    /**
     * Workloads which do not expose publicly-accessible HTTP services.
     *
     * @return list<AppWorkerSpec>
     */
    public function getWorkers(): array
    {
        return $this->workers;
    }
    /**
     * Workloads which do not expose publicly-accessible HTTP services.
     *
     * @param list<AppWorkerSpec> $workers
     *
     * @return self
     */
    public function setWorkers(array $workers): self
    {
        $this->initialized['workers'] = true;
        $this->workers = $workers;
        return $this;
    }
    /**
     * Workloads which expose publicly-accessible HTTP services via Functions Components.
     *
     * @return list<AppFunctionsSpec>
     */
    public function getFunctions(): array
    {
        return $this->functions;
    }
    /**
     * Workloads which expose publicly-accessible HTTP services via Functions Components.
     *
     * @param list<AppFunctionsSpec> $functions
     *
     * @return self
     */
    public function setFunctions(array $functions): self
    {
        $this->initialized['functions'] = true;
        $this->functions = $functions;
        return $this;
    }
    /**
     * Database instances which can provide persistence to workloads within the
     * application.
     *
     * @return list<AppDatabaseSpec>
     */
    public function getDatabases(): array
    {
        return $this->databases;
    }
    /**
    * Database instances which can provide persistence to workloads within the
    application.
    *
    * @param list<AppDatabaseSpec> $databases
    *
    * @return self
    */
    public function setDatabases(array $databases): self
    {
        $this->initialized['databases'] = true;
        $this->databases = $databases;
        return $this;
    }
    /**
     * Specification for app ingress configurations.
     *
     * @return AppIngressSpec
     */
    public function getIngress(): AppIngressSpec
    {
        return $this->ingress;
    }
    /**
     * Specification for app ingress configurations.
     *
     * @param AppIngressSpec $ingress
     *
     * @return self
     */
    public function setIngress(AppIngressSpec $ingress): self
    {
        $this->initialized['ingress'] = true;
        $this->ingress = $ingress;
        return $this;
    }
    /**
     * Specification for app egress configurations.
     *
     * @return AppEgressSpec
     */
    public function getEgress(): AppEgressSpec
    {
        return $this->egress;
    }
    /**
     * Specification for app egress configurations.
     *
     * @param AppEgressSpec $egress
     *
     * @return self
     */
    public function setEgress(AppEgressSpec $egress): self
    {
        $this->initialized['egress'] = true;
        $this->egress = $egress;
        return $this;
    }
    /**
     * Specification to configure maintenance settings for the app, such as maintenance mode and archiving the app.
     *
     * @return AppMaintenanceSpec
     */
    public function getMaintenance(): AppMaintenanceSpec
    {
        return $this->maintenance;
    }
    /**
     * Specification to configure maintenance settings for the app, such as maintenance mode and archiving the app.
     *
     * @param AppMaintenanceSpec $maintenance
     *
     * @return self
     */
    public function setMaintenance(AppMaintenanceSpec $maintenance): self
    {
        $this->initialized['maintenance'] = true;
        $this->maintenance = $maintenance;
        return $this;
    }
    /**
     * @return AppsVpc
     */
    public function getVpc(): AppsVpc
    {
        return $this->vpc;
    }
    /**
     * @param AppsVpc $vpc
     *
     * @return self
     */
    public function setVpc(AppsVpc $vpc): self
    {
        $this->initialized['vpc'] = true;
        $this->vpc = $vpc;
        return $this;
    }
}