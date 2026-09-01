<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class App implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var AppsDeployment
     */
    public AppsDeployment $activeDeployment;
    /**
     * @var \DateTime
     */
    public \DateTime $createdAt;
    /**
     * @var string
     */
    public string $defaultIngress;
    /**
     * @var list<AppsDomain>
     */
    public array $domains;
    /**
     * @var string
     */
    public string $id;
    /**
     * @var AppsDeployment
     */
    public AppsDeployment $inProgressDeployment;
    /**
     * @var \DateTime
     */
    public \DateTime $lastDeploymentCreatedAt;
    /**
     * @var string
     */
    public string $liveDomain;
    /**
     * @var string
     */
    public string $liveUrl;
    /**
     * @var string
     */
    public string $liveUrlBase;
    /**
     * @var string
     */
    public string $ownerUuid;
    /**
     * @var AppPendingDeployment
     */
    public AppPendingDeployment $pendingDeployment;
    /**
     * Requires `project:read` scope.
     *
     * @var string
     */
    public string $projectId;
    /**
     * @var AppsRegion
     */
    public AppsRegion $region;
    /**
     * The desired configuration of an application.
     *
     * @var AppSpec
     */
    public AppSpec $spec;
    /**
     * @var string
     */
    public string $tierSlug;
    /**
     * @var \DateTime
     */
    public \DateTime $updatedAt;
    /**
     * @var AppPinnedDeployment
     */
    public AppPinnedDeployment $pinnedDeployment;
    /**
     * @var list<AppsDedicatedEgressIp>
     */
    public array $dedicatedIps;
    /**
     * @var AppsVpc
     */
    public AppsVpc $vpc;
    public function definedProperties(): array
    {
        return ['activeDeployment' => 'active_deployment', 'createdAt' => 'created_at', 'defaultIngress' => 'default_ingress', 'domains' => 'domains', 'id' => 'id', 'inProgressDeployment' => 'in_progress_deployment', 'lastDeploymentCreatedAt' => 'last_deployment_created_at', 'liveDomain' => 'live_domain', 'liveUrl' => 'live_url', 'liveUrlBase' => 'live_url_base', 'ownerUuid' => 'owner_uuid', 'pendingDeployment' => 'pending_deployment', 'projectId' => 'project_id', 'region' => 'region', 'spec' => 'spec', 'tierSlug' => 'tier_slug', 'updatedAt' => 'updated_at', 'pinnedDeployment' => 'pinned_deployment', 'dedicatedIps' => 'dedicated_ips', 'vpc' => 'vpc'];
    }
}