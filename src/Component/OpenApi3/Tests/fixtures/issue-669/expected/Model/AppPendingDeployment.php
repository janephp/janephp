<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class AppPendingDeployment implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var string
     */
    public string $cause;
    /**
     * @var string
     */
    public string $clonedFrom;
    /**
     * @var \DateTime
     */
    public \DateTime $createdAt;
    /**
     * @var string
     */
    public string $id;
    /**
     * @var list<AppsDeploymentJob>
     */
    public array $jobs;
    /**
     * @var list<AppsDeploymentFunctions>
     */
    public array $functions;
    /**
     * @var string
     */
    public string $phase = 'UNKNOWN';
    /**
     * @var \DateTime
     */
    public \DateTime $phaseLastUpdatedAt;
    /**
     * @var AppsDeploymentProgress
     */
    public AppsDeploymentProgress $progress;
    /**
     * @var list<AppsDeploymentService>
     */
    public array $services;
    /**
     * The desired configuration of an application.
     *
     * @var AppSpec
     */
    public AppSpec $spec;
    /**
     * @var list<AppsDeploymentStaticSite>
     */
    public array $staticSites;
    /**
     * @var string
     */
    public string $tierSlug;
    /**
     * @var \DateTime
     */
    public \DateTime $updatedAt;
    /**
     * @var list<AppsDeploymentWorker>
     */
    public array $workers;
    public function definedProperties(): array
    {
        return ['cause' => 'cause', 'clonedFrom' => 'cloned_from', 'createdAt' => 'created_at', 'id' => 'id', 'jobs' => 'jobs', 'functions' => 'functions', 'phase' => 'phase', 'phaseLastUpdatedAt' => 'phase_last_updated_at', 'progress' => 'progress', 'services' => 'services', 'spec' => 'spec', 'staticSites' => 'static_sites', 'tierSlug' => 'tier_slug', 'updatedAt' => 'updated_at', 'workers' => 'workers'];
    }
}