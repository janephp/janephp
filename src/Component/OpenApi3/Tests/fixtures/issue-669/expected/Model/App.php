<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class App implements AdditionalPropertiesInterface
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
     * @var AppsDeployment
     */
    protected $activeDeployment;
    /**
     * @var \DateTime
     */
    protected $createdAt;
    /**
     * @var string
     */
    protected $defaultIngress;
    /**
     * @var list<AppsDomain>
     */
    protected $domains;
    /**
     * @var string
     */
    protected $id;
    /**
     * @var AppsDeployment
     */
    protected $inProgressDeployment;
    /**
     * @var \DateTime
     */
    protected $lastDeploymentCreatedAt;
    /**
     * @var string
     */
    protected $liveDomain;
    /**
     * @var string
     */
    protected $liveUrl;
    /**
     * @var string
     */
    protected $liveUrlBase;
    /**
     * @var string
     */
    protected $ownerUuid;
    /**
     * @var AppPendingDeployment
     */
    protected $pendingDeployment;
    /**
     * Requires `project:read` scope.
     *
     * @var string
     */
    protected $projectId;
    /**
     * @var AppsRegion
     */
    protected $region;
    /**
     * The desired configuration of an application.
     *
     * @var AppSpec
     */
    protected $spec;
    /**
     * @var string
     */
    protected $tierSlug;
    /**
     * @var \DateTime
     */
    protected $updatedAt;
    /**
     * @var AppPinnedDeployment
     */
    protected $pinnedDeployment;
    /**
     * @var list<AppsDedicatedEgressIp>
     */
    protected $dedicatedIps;
    /**
     * @var AppsVpc
     */
    protected $vpc;
    /**
     * @return AppsDeployment
     */
    public function getActiveDeployment(): AppsDeployment
    {
        return $this->activeDeployment;
    }
    /**
     * @param AppsDeployment $activeDeployment
     *
     * @return self
     */
    public function setActiveDeployment(AppsDeployment $activeDeployment): self
    {
        $this->initialized['activeDeployment'] = true;
        $this->activeDeployment = $activeDeployment;
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
    public function getDefaultIngress(): string
    {
        return $this->defaultIngress;
    }
    /**
     * @param string $defaultIngress
     *
     * @return self
     */
    public function setDefaultIngress(string $defaultIngress): self
    {
        $this->initialized['defaultIngress'] = true;
        $this->defaultIngress = $defaultIngress;
        return $this;
    }
    /**
     * @return list<AppsDomain>
     */
    public function getDomains(): array
    {
        return $this->domains;
    }
    /**
     * @param list<AppsDomain> $domains
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
     * @return AppsDeployment
     */
    public function getInProgressDeployment(): AppsDeployment
    {
        return $this->inProgressDeployment;
    }
    /**
     * @param AppsDeployment $inProgressDeployment
     *
     * @return self
     */
    public function setInProgressDeployment(AppsDeployment $inProgressDeployment): self
    {
        $this->initialized['inProgressDeployment'] = true;
        $this->inProgressDeployment = $inProgressDeployment;
        return $this;
    }
    /**
     * @return \DateTime
     */
    public function getLastDeploymentCreatedAt(): \DateTime
    {
        return $this->lastDeploymentCreatedAt;
    }
    /**
     * @param \DateTime $lastDeploymentCreatedAt
     *
     * @return self
     */
    public function setLastDeploymentCreatedAt(\DateTime $lastDeploymentCreatedAt): self
    {
        $this->initialized['lastDeploymentCreatedAt'] = true;
        $this->lastDeploymentCreatedAt = $lastDeploymentCreatedAt;
        return $this;
    }
    /**
     * @return string
     */
    public function getLiveDomain(): string
    {
        return $this->liveDomain;
    }
    /**
     * @param string $liveDomain
     *
     * @return self
     */
    public function setLiveDomain(string $liveDomain): self
    {
        $this->initialized['liveDomain'] = true;
        $this->liveDomain = $liveDomain;
        return $this;
    }
    /**
     * @return string
     */
    public function getLiveUrl(): string
    {
        return $this->liveUrl;
    }
    /**
     * @param string $liveUrl
     *
     * @return self
     */
    public function setLiveUrl(string $liveUrl): self
    {
        $this->initialized['liveUrl'] = true;
        $this->liveUrl = $liveUrl;
        return $this;
    }
    /**
     * @return string
     */
    public function getLiveUrlBase(): string
    {
        return $this->liveUrlBase;
    }
    /**
     * @param string $liveUrlBase
     *
     * @return self
     */
    public function setLiveUrlBase(string $liveUrlBase): self
    {
        $this->initialized['liveUrlBase'] = true;
        $this->liveUrlBase = $liveUrlBase;
        return $this;
    }
    /**
     * @return string
     */
    public function getOwnerUuid(): string
    {
        return $this->ownerUuid;
    }
    /**
     * @param string $ownerUuid
     *
     * @return self
     */
    public function setOwnerUuid(string $ownerUuid): self
    {
        $this->initialized['ownerUuid'] = true;
        $this->ownerUuid = $ownerUuid;
        return $this;
    }
    /**
     * @return AppPendingDeployment
     */
    public function getPendingDeployment(): AppPendingDeployment
    {
        return $this->pendingDeployment;
    }
    /**
     * @param AppPendingDeployment $pendingDeployment
     *
     * @return self
     */
    public function setPendingDeployment(AppPendingDeployment $pendingDeployment): self
    {
        $this->initialized['pendingDeployment'] = true;
        $this->pendingDeployment = $pendingDeployment;
        return $this;
    }
    /**
     * Requires `project:read` scope.
     *
     * @return string
     */
    public function getProjectId(): string
    {
        return $this->projectId;
    }
    /**
     * Requires `project:read` scope.
     *
     * @param string $projectId
     *
     * @return self
     */
    public function setProjectId(string $projectId): self
    {
        $this->initialized['projectId'] = true;
        $this->projectId = $projectId;
        return $this;
    }
    /**
     * @return AppsRegion
     */
    public function getRegion(): AppsRegion
    {
        return $this->region;
    }
    /**
     * @param AppsRegion $region
     *
     * @return self
     */
    public function setRegion(AppsRegion $region): self
    {
        $this->initialized['region'] = true;
        $this->region = $region;
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
     * @return AppPinnedDeployment
     */
    public function getPinnedDeployment(): AppPinnedDeployment
    {
        return $this->pinnedDeployment;
    }
    /**
     * @param AppPinnedDeployment $pinnedDeployment
     *
     * @return self
     */
    public function setPinnedDeployment(AppPinnedDeployment $pinnedDeployment): self
    {
        $this->initialized['pinnedDeployment'] = true;
        $this->pinnedDeployment = $pinnedDeployment;
        return $this;
    }
    /**
     * @return list<AppsDedicatedEgressIp>
     */
    public function getDedicatedIps(): array
    {
        return $this->dedicatedIps;
    }
    /**
     * @param list<AppsDedicatedEgressIp> $dedicatedIps
     *
     * @return self
     */
    public function setDedicatedIps(array $dedicatedIps): self
    {
        $this->initialized['dedicatedIps'] = true;
        $this->dedicatedIps = $dedicatedIps;
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
    public function definedProperties(): array
    {
        return ['activeDeployment' => ['active_deployment', 'getActiveDeployment', 'setActiveDeployment'], 'createdAt' => ['created_at', 'getCreatedAt', 'setCreatedAt'], 'defaultIngress' => ['default_ingress', 'getDefaultIngress', 'setDefaultIngress'], 'domains' => ['domains', 'getDomains', 'setDomains'], 'id' => ['id', 'getId', 'setId'], 'inProgressDeployment' => ['in_progress_deployment', 'getInProgressDeployment', 'setInProgressDeployment'], 'lastDeploymentCreatedAt' => ['last_deployment_created_at', 'getLastDeploymentCreatedAt', 'setLastDeploymentCreatedAt'], 'liveDomain' => ['live_domain', 'getLiveDomain', 'setLiveDomain'], 'liveUrl' => ['live_url', 'getLiveUrl', 'setLiveUrl'], 'liveUrlBase' => ['live_url_base', 'getLiveUrlBase', 'setLiveUrlBase'], 'ownerUuid' => ['owner_uuid', 'getOwnerUuid', 'setOwnerUuid'], 'pendingDeployment' => ['pending_deployment', 'getPendingDeployment', 'setPendingDeployment'], 'projectId' => ['project_id', 'getProjectId', 'setProjectId'], 'region' => ['region', 'getRegion', 'setRegion'], 'spec' => ['spec', 'getSpec', 'setSpec'], 'tierSlug' => ['tier_slug', 'getTierSlug', 'setTierSlug'], 'updatedAt' => ['updated_at', 'getUpdatedAt', 'setUpdatedAt'], 'pinnedDeployment' => ['pinned_deployment', 'getPinnedDeployment', 'setPinnedDeployment'], 'dedicatedIps' => ['dedicated_ips', 'getDedicatedIps', 'setDedicatedIps'], 'vpc' => ['vpc', 'getVpc', 'setVpc']];
    }
}