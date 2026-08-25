<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class AppPendingDeployment implements AdditionalPropertiesInterface
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
     * @var string
     */
    protected $cause;
    /**
     * @var string
     */
    protected $clonedFrom;
    /**
     * @var \DateTime
     */
    protected $createdAt;
    /**
     * @var string
     */
    protected $id;
    /**
     * @var list<AppsDeploymentJob>
     */
    protected $jobs;
    /**
     * @var list<AppsDeploymentFunctions>
     */
    protected $functions;
    /**
     * @var string
     */
    protected $phase = 'UNKNOWN';
    /**
     * @var \DateTime
     */
    protected $phaseLastUpdatedAt;
    /**
     * @var AppsDeploymentProgress
     */
    protected $progress;
    /**
     * @var list<AppsDeploymentService>
     */
    protected $services;
    /**
     * The desired configuration of an application.
     *
     * @var AppSpec
     */
    protected $spec;
    /**
     * @var list<AppsDeploymentStaticSite>
     */
    protected $staticSites;
    /**
     * @var string
     */
    protected $tierSlug;
    /**
     * @var \DateTime
     */
    protected $updatedAt;
    /**
     * @var list<AppsDeploymentWorker>
     */
    protected $workers;
    /**
     * @return string
     */
    public function getCause(): string
    {
        return $this->cause;
    }
    /**
     * @param string $cause
     *
     * @return self
     */
    public function setCause(string $cause): self
    {
        $this->initialized['cause'] = true;
        $this->cause = $cause;
        return $this;
    }
    /**
     * @return string
     */
    public function getClonedFrom(): string
    {
        return $this->clonedFrom;
    }
    /**
     * @param string $clonedFrom
     *
     * @return self
     */
    public function setClonedFrom(string $clonedFrom): self
    {
        $this->initialized['clonedFrom'] = true;
        $this->clonedFrom = $clonedFrom;
        return $this;
    }
    /**
     * @return \DateTime
     */
    public function getCreatedAt(): \DateTime
    {
        return $this->createdAt;
    }
    /**
     * @param \DateTime $createdAt
     *
     * @return self
     */
    public function setCreatedAt(\DateTime $createdAt): self
    {
        $this->initialized['createdAt'] = true;
        $this->createdAt = $createdAt;
        return $this;
    }
    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    /**
     * @param string $id
     *
     * @return self
     */
    public function setId(string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;
        return $this;
    }
    /**
     * @return list<AppsDeploymentJob>
     */
    public function getJobs(): array
    {
        return $this->jobs;
    }
    /**
     * @param list<AppsDeploymentJob> $jobs
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
     * @return list<AppsDeploymentFunctions>
     */
    public function getFunctions(): array
    {
        return $this->functions;
    }
    /**
     * @param list<AppsDeploymentFunctions> $functions
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
     * @return string
     */
    public function getPhase(): string
    {
        return $this->phase;
    }
    /**
     * @param string $phase
     *
     * @return self
     */
    public function setPhase(string $phase): self
    {
        $this->initialized['phase'] = true;
        $this->phase = $phase;
        return $this;
    }
    /**
     * @return \DateTime
     */
    public function getPhaseLastUpdatedAt(): \DateTime
    {
        return $this->phaseLastUpdatedAt;
    }
    /**
     * @param \DateTime $phaseLastUpdatedAt
     *
     * @return self
     */
    public function setPhaseLastUpdatedAt(\DateTime $phaseLastUpdatedAt): self
    {
        $this->initialized['phaseLastUpdatedAt'] = true;
        $this->phaseLastUpdatedAt = $phaseLastUpdatedAt;
        return $this;
    }
    /**
     * @return AppsDeploymentProgress
     */
    public function getProgress(): AppsDeploymentProgress
    {
        return $this->progress;
    }
    /**
     * @param AppsDeploymentProgress $progress
     *
     * @return self
     */
    public function setProgress(AppsDeploymentProgress $progress): self
    {
        $this->initialized['progress'] = true;
        $this->progress = $progress;
        return $this;
    }
    /**
     * @return list<AppsDeploymentService>
     */
    public function getServices(): array
    {
        return $this->services;
    }
    /**
     * @param list<AppsDeploymentService> $services
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
     * The desired configuration of an application.
     *
     * @return AppSpec
     */
    public function getSpec(): AppSpec
    {
        return $this->spec;
    }
    /**
     * The desired configuration of an application.
     *
     * @param AppSpec $spec
     *
     * @return self
     */
    public function setSpec(AppSpec $spec): self
    {
        $this->initialized['spec'] = true;
        $this->spec = $spec;
        return $this;
    }
    /**
     * @return list<AppsDeploymentStaticSite>
     */
    public function getStaticSites(): array
    {
        return $this->staticSites;
    }
    /**
     * @param list<AppsDeploymentStaticSite> $staticSites
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
     * @return string
     */
    public function getTierSlug(): string
    {
        return $this->tierSlug;
    }
    /**
     * @param string $tierSlug
     *
     * @return self
     */
    public function setTierSlug(string $tierSlug): self
    {
        $this->initialized['tierSlug'] = true;
        $this->tierSlug = $tierSlug;
        return $this;
    }
    /**
     * @return \DateTime
     */
    public function getUpdatedAt(): \DateTime
    {
        return $this->updatedAt;
    }
    /**
     * @param \DateTime $updatedAt
     *
     * @return self
     */
    public function setUpdatedAt(\DateTime $updatedAt): self
    {
        $this->initialized['updatedAt'] = true;
        $this->updatedAt = $updatedAt;
        return $this;
    }
    /**
     * @return list<AppsDeploymentWorker>
     */
    public function getWorkers(): array
    {
        return $this->workers;
    }
    /**
     * @param list<AppsDeploymentWorker> $workers
     *
     * @return self
     */
    public function setWorkers(array $workers): self
    {
        $this->initialized['workers'] = true;
        $this->workers = $workers;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['cause' => ['cause', 'getCause', 'setCause'], 'clonedFrom' => ['cloned_from', 'getClonedFrom', 'setClonedFrom'], 'createdAt' => ['created_at', 'getCreatedAt', 'setCreatedAt'], 'id' => ['id', 'getId', 'setId'], 'jobs' => ['jobs', 'getJobs', 'setJobs'], 'functions' => ['functions', 'getFunctions', 'setFunctions'], 'phase' => ['phase', 'getPhase', 'setPhase'], 'phaseLastUpdatedAt' => ['phase_last_updated_at', 'getPhaseLastUpdatedAt', 'setPhaseLastUpdatedAt'], 'progress' => ['progress', 'getProgress', 'setProgress'], 'services' => ['services', 'getServices', 'setServices'], 'spec' => ['spec', 'getSpec', 'setSpec'], 'staticSites' => ['static_sites', 'getStaticSites', 'setStaticSites'], 'tierSlug' => ['tier_slug', 'getTierSlug', 'setTierSlug'], 'updatedAt' => ['updated_at', 'getUpdatedAt', 'setUpdatedAt'], 'workers' => ['workers', 'getWorkers', 'setWorkers']];
    }
}