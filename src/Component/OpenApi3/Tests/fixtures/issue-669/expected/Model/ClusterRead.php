<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ClusterRead implements AdditionalPropertiesInterface
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
     * A unique ID that can be used to identify and reference a Kubernetes cluster.
     *
     * @var string
     */
    protected $id;
    /**
     * A human-readable name for a Kubernetes cluster.
     *
     * @var string
     */
    protected $name;
    /**
     * The slug identifier for the region where the Kubernetes cluster is located.
     *
     * @var string
     */
    protected $region;
    /**
     * The slug identifier for the version of Kubernetes used for the cluster. If set to a minor version (e.g. "1.14"), the latest version within it will be used (e.g. "1.14.6-do.1"); if set to "latest", the latest published version will be used. See the `/v2/kubernetes/options` endpoint to find all currently available versions.
     *
     * @var string
     */
    protected $version;
    /**
     * The range of IP addresses for the overlay network of the Kubernetes cluster in CIDR notation.
     *
     * @var string
     */
    protected $clusterSubnet;
    /**
     * The range of assignable IP addresses for services running in the Kubernetes cluster in CIDR notation.
     *
     * @var string
     */
    protected $serviceSubnet;
    /**
     * A string specifying the UUID of the VPC to which the Kubernetes cluster is assigned.<br><br>Requires `vpc:read` scope.
     *
     * @var string
     */
    protected $vpcUuid;
    /**
     * The public IPv4 address of the Kubernetes master node. This will not be set if high availability is configured on the cluster (v1.21+)
     *
     * @var string
     */
    protected $ipv4;
    /**
     * The base URL of the API server on the Kubernetes master node.
     *
     * @var string
     */
    protected $endpoint;
    /**
     * An array of tags applied to the Kubernetes cluster. All clusters are automatically tagged `k8s` and `k8s:$K8S_CLUSTER_ID`. <br><br>Requires `tag:read` scope.
     *
     * @var list<string>
     */
    protected $tags;
    /**
     * An object specifying the details of the worker nodes available to the Kubernetes cluster.
     *
     * @var list<array<string, mixed>>
     */
    protected $nodePools;
    /**
     * An object specifying the maintenance window policy for the Kubernetes cluster.
     *
     * @var MaintenancePolicy|null
     */
    protected $maintenancePolicy;
    /**
     * A boolean value indicating whether the cluster will be automatically upgraded to new patch releases during its maintenance window.
     *
     * @var bool
     */
    protected $autoUpgrade = false;
    /**
     * An object containing a `state` attribute whose value is set to a string indicating the current status of the cluster.
     *
     * @var ClusterReadStatus
     */
    protected $status;
    /**
     * A time value given in ISO8601 combined date and time format that represents when the Kubernetes cluster was created.
     *
     * @var \DateTime
     */
    protected $createdAt;
    /**
     * A time value given in ISO8601 combined date and time format that represents when the Kubernetes cluster was last updated.
     *
     * @var \DateTime
     */
    protected $updatedAt;
    /**
     * A boolean value indicating whether surge upgrade is enabled/disabled for the cluster. Surge upgrade makes cluster upgrades fast and reliable by bringing up new nodes before destroying the outdated nodes.
     *
     * @var bool
     */
    protected $surgeUpgrade = false;
    /**
     * A boolean value indicating whether the control plane is run in a highly available configuration in the cluster. Highly available control planes incur less downtime. The property cannot be disabled.
     *
     * @var bool
     */
    protected $ha = false;
    /**
     * A read-only boolean value indicating if a container registry is integrated with the cluster.
     *
     * @var bool
     */
    protected $registryEnabled;
    /**
     * An array of integrated DOCR registries.
     *
     * @var list<string>|null
     */
    protected $registries;
    /**
     * An object specifying the control plane firewall for the Kubernetes cluster. Control plane firewall is in early availability (invite only).
     *
     * @var ControlPlaneFirewall|null
     */
    protected $controlPlaneFirewall;
    /**
     * An object specifying custom cluster autoscaler configuration.
     *
     * @var ClusterAutoscalerConfiguration|null
     */
    protected $clusterAutoscalerConfiguration;
    /**
     * An object specifying whether the routing-agent component should be enabled for the Kubernetes cluster.
     *
     * @var RoutingAgent|null
     */
    protected $routingAgent;
    /**
     * An object specifying whether the AMD GPU Device Plugin should be enabled in the Kubernetes cluster. It's enabled by default for clusters with an AMD GPU node pool.
     *
     * @var AmdGpuDevicePlugin|null
     */
    protected $amdGpuDevicePlugin;
    /**
     * An object specifying whether the AMD Device Metrics Exporter should be enabled in the Kubernetes cluster.
     *
     * @var AmdGpuDeviceMetricsExporterPlugin|null
     */
    protected $amdGpuDeviceMetricsExporterPlugin;
    /**
     * An object specifying whether the Nvidia GPU Device Plugin should be enabled in the Kubernetes cluster. It's enabled by default for clusters with an Nvidia GPU node pool.
     *
     * @var NvidiaGpuDevicePlugin|null
     */
    protected $nvidiaGpuDevicePlugin;
    /**
     * An object specifying whether the RDMA shared device plugin should be enabled in the Kubernetes cluster.
     *
     * @var RdmaSharedDevPlugin|null
     */
    protected $rdmaSharedDevPlugin;
    /**
     * A unique ID that can be used to identify and reference a Kubernetes cluster.
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    /**
     * A unique ID that can be used to identify and reference a Kubernetes cluster.
     *
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
     * A human-readable name for a Kubernetes cluster.
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * A human-readable name for a Kubernetes cluster.
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
     * The slug identifier for the region where the Kubernetes cluster is located.
     *
     * @return string
     */
    public function getRegion(): string
    {
        return $this->region;
    }
    /**
     * The slug identifier for the region where the Kubernetes cluster is located.
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
     * The slug identifier for the version of Kubernetes used for the cluster. If set to a minor version (e.g. "1.14"), the latest version within it will be used (e.g. "1.14.6-do.1"); if set to "latest", the latest published version will be used. See the `/v2/kubernetes/options` endpoint to find all currently available versions.
     *
     * @return string
     */
    public function getVersion(): string
    {
        return $this->version;
    }
    /**
     * The slug identifier for the version of Kubernetes used for the cluster. If set to a minor version (e.g. "1.14"), the latest version within it will be used (e.g. "1.14.6-do.1"); if set to "latest", the latest published version will be used. See the `/v2/kubernetes/options` endpoint to find all currently available versions.
     *
     * @param string $version
     *
     * @return self
     */
    public function setVersion(string $version): self
    {
        $this->initialized['version'] = true;
        $this->version = $version;
        return $this;
    }
    /**
     * The range of IP addresses for the overlay network of the Kubernetes cluster in CIDR notation.
     *
     * @return string
     */
    public function getClusterSubnet(): string
    {
        return $this->clusterSubnet;
    }
    /**
     * The range of IP addresses for the overlay network of the Kubernetes cluster in CIDR notation.
     *
     * @param string $clusterSubnet
     *
     * @return self
     */
    public function setClusterSubnet(string $clusterSubnet): self
    {
        $this->initialized['clusterSubnet'] = true;
        $this->clusterSubnet = $clusterSubnet;
        return $this;
    }
    /**
     * The range of assignable IP addresses for services running in the Kubernetes cluster in CIDR notation.
     *
     * @return string
     */
    public function getServiceSubnet(): string
    {
        return $this->serviceSubnet;
    }
    /**
     * The range of assignable IP addresses for services running in the Kubernetes cluster in CIDR notation.
     *
     * @param string $serviceSubnet
     *
     * @return self
     */
    public function setServiceSubnet(string $serviceSubnet): self
    {
        $this->initialized['serviceSubnet'] = true;
        $this->serviceSubnet = $serviceSubnet;
        return $this;
    }
    /**
     * A string specifying the UUID of the VPC to which the Kubernetes cluster is assigned.<br><br>Requires `vpc:read` scope.
     *
     * @return string
     */
    public function getVpcUuid(): string
    {
        return $this->vpcUuid;
    }
    /**
     * A string specifying the UUID of the VPC to which the Kubernetes cluster is assigned.<br><br>Requires `vpc:read` scope.
     *
     * @param string $vpcUuid
     *
     * @return self
     */
    public function setVpcUuid(string $vpcUuid): self
    {
        $this->initialized['vpcUuid'] = true;
        $this->vpcUuid = $vpcUuid;
        return $this;
    }
    /**
     * The public IPv4 address of the Kubernetes master node. This will not be set if high availability is configured on the cluster (v1.21+)
     *
     * @return string
     */
    public function getIpv4(): string
    {
        return $this->ipv4;
    }
    /**
     * The public IPv4 address of the Kubernetes master node. This will not be set if high availability is configured on the cluster (v1.21+)
     *
     * @param string $ipv4
     *
     * @return self
     */
    public function setIpv4(string $ipv4): self
    {
        $this->initialized['ipv4'] = true;
        $this->ipv4 = $ipv4;
        return $this;
    }
    /**
     * The base URL of the API server on the Kubernetes master node.
     *
     * @return string
     */
    public function getEndpoint(): string
    {
        return $this->endpoint;
    }
    /**
     * The base URL of the API server on the Kubernetes master node.
     *
     * @param string $endpoint
     *
     * @return self
     */
    public function setEndpoint(string $endpoint): self
    {
        $this->initialized['endpoint'] = true;
        $this->endpoint = $endpoint;
        return $this;
    }
    /**
     * An array of tags applied to the Kubernetes cluster. All clusters are automatically tagged `k8s` and `k8s:$K8S_CLUSTER_ID`. <br><br>Requires `tag:read` scope.
     *
     * @return list<string>
     */
    public function getTags(): array
    {
        return $this->tags;
    }
    /**
     * An array of tags applied to the Kubernetes cluster. All clusters are automatically tagged `k8s` and `k8s:$K8S_CLUSTER_ID`. <br><br>Requires `tag:read` scope.
     *
     * @param list<string> $tags
     *
     * @return self
     */
    public function setTags(array $tags): self
    {
        $this->initialized['tags'] = true;
        $this->tags = $tags;
        return $this;
    }
    /**
     * An object specifying the details of the worker nodes available to the Kubernetes cluster.
     *
     * @return list<array<string, mixed>>
     */
    public function getNodePools(): array
    {
        return $this->nodePools;
    }
    /**
     * An object specifying the details of the worker nodes available to the Kubernetes cluster.
     *
     * @param list<array<string, mixed>> $nodePools
     *
     * @return self
     */
    public function setNodePools(array $nodePools): self
    {
        $this->initialized['nodePools'] = true;
        $this->nodePools = $nodePools;
        return $this;
    }
    /**
     * An object specifying the maintenance window policy for the Kubernetes cluster.
     *
     * @return MaintenancePolicy|null
     */
    public function getMaintenancePolicy(): ?MaintenancePolicy
    {
        return $this->maintenancePolicy;
    }
    /**
     * An object specifying the maintenance window policy for the Kubernetes cluster.
     *
     * @param MaintenancePolicy|null $maintenancePolicy
     *
     * @return self
     */
    public function setMaintenancePolicy(?MaintenancePolicy $maintenancePolicy): self
    {
        $this->initialized['maintenancePolicy'] = true;
        $this->maintenancePolicy = $maintenancePolicy;
        return $this;
    }
    /**
     * A boolean value indicating whether the cluster will be automatically upgraded to new patch releases during its maintenance window.
     *
     * @return bool
     */
    public function getAutoUpgrade(): bool
    {
        return $this->autoUpgrade;
    }
    /**
     * A boolean value indicating whether the cluster will be automatically upgraded to new patch releases during its maintenance window.
     *
     * @param bool $autoUpgrade
     *
     * @return self
     */
    public function setAutoUpgrade(bool $autoUpgrade): self
    {
        $this->initialized['autoUpgrade'] = true;
        $this->autoUpgrade = $autoUpgrade;
        return $this;
    }
    /**
     * An object containing a `state` attribute whose value is set to a string indicating the current status of the cluster.
     *
     * @return ClusterReadStatus
     */
    public function getStatus(): ClusterReadStatus
    {
        return $this->status;
    }
    /**
     * An object containing a `state` attribute whose value is set to a string indicating the current status of the cluster.
     *
     * @param ClusterReadStatus $status
     *
     * @return self
     */
    public function setStatus(ClusterReadStatus $status): self
    {
        $this->initialized['status'] = true;
        $this->status = $status;
        return $this;
    }
    /**
     * A time value given in ISO8601 combined date and time format that represents when the Kubernetes cluster was created.
     *
     * @return \DateTime
     */
    public function getCreatedAt(): \DateTime
    {
        return $this->createdAt;
    }
    /**
     * A time value given in ISO8601 combined date and time format that represents when the Kubernetes cluster was created.
     *
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
     * A time value given in ISO8601 combined date and time format that represents when the Kubernetes cluster was last updated.
     *
     * @return \DateTime
     */
    public function getUpdatedAt(): \DateTime
    {
        return $this->updatedAt;
    }
    /**
     * A time value given in ISO8601 combined date and time format that represents when the Kubernetes cluster was last updated.
     *
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
     * A boolean value indicating whether surge upgrade is enabled/disabled for the cluster. Surge upgrade makes cluster upgrades fast and reliable by bringing up new nodes before destroying the outdated nodes.
     *
     * @return bool
     */
    public function getSurgeUpgrade(): bool
    {
        return $this->surgeUpgrade;
    }
    /**
     * A boolean value indicating whether surge upgrade is enabled/disabled for the cluster. Surge upgrade makes cluster upgrades fast and reliable by bringing up new nodes before destroying the outdated nodes.
     *
     * @param bool $surgeUpgrade
     *
     * @return self
     */
    public function setSurgeUpgrade(bool $surgeUpgrade): self
    {
        $this->initialized['surgeUpgrade'] = true;
        $this->surgeUpgrade = $surgeUpgrade;
        return $this;
    }
    /**
     * A boolean value indicating whether the control plane is run in a highly available configuration in the cluster. Highly available control planes incur less downtime. The property cannot be disabled.
     *
     * @return bool
     */
    public function getHa(): bool
    {
        return $this->ha;
    }
    /**
     * A boolean value indicating whether the control plane is run in a highly available configuration in the cluster. Highly available control planes incur less downtime. The property cannot be disabled.
     *
     * @param bool $ha
     *
     * @return self
     */
    public function setHa(bool $ha): self
    {
        $this->initialized['ha'] = true;
        $this->ha = $ha;
        return $this;
    }
    /**
     * A read-only boolean value indicating if a container registry is integrated with the cluster.
     *
     * @return bool
     */
    public function getRegistryEnabled(): bool
    {
        return $this->registryEnabled;
    }
    /**
     * A read-only boolean value indicating if a container registry is integrated with the cluster.
     *
     * @param bool $registryEnabled
     *
     * @return self
     */
    public function setRegistryEnabled(bool $registryEnabled): self
    {
        $this->initialized['registryEnabled'] = true;
        $this->registryEnabled = $registryEnabled;
        return $this;
    }
    /**
     * An array of integrated DOCR registries.
     *
     * @return list<string>|null
     */
    public function getRegistries(): ?array
    {
        return $this->registries;
    }
    /**
     * An array of integrated DOCR registries.
     *
     * @param list<string>|null $registries
     *
     * @return self
     */
    public function setRegistries(?array $registries): self
    {
        $this->initialized['registries'] = true;
        $this->registries = $registries;
        return $this;
    }
    /**
     * An object specifying the control plane firewall for the Kubernetes cluster. Control plane firewall is in early availability (invite only).
     *
     * @return ControlPlaneFirewall|null
     */
    public function getControlPlaneFirewall(): ?ControlPlaneFirewall
    {
        return $this->controlPlaneFirewall;
    }
    /**
     * An object specifying the control plane firewall for the Kubernetes cluster. Control plane firewall is in early availability (invite only).
     *
     * @param ControlPlaneFirewall|null $controlPlaneFirewall
     *
     * @return self
     */
    public function setControlPlaneFirewall(?ControlPlaneFirewall $controlPlaneFirewall): self
    {
        $this->initialized['controlPlaneFirewall'] = true;
        $this->controlPlaneFirewall = $controlPlaneFirewall;
        return $this;
    }
    /**
     * An object specifying custom cluster autoscaler configuration.
     *
     * @return ClusterAutoscalerConfiguration|null
     */
    public function getClusterAutoscalerConfiguration(): ?ClusterAutoscalerConfiguration
    {
        return $this->clusterAutoscalerConfiguration;
    }
    /**
     * An object specifying custom cluster autoscaler configuration.
     *
     * @param ClusterAutoscalerConfiguration|null $clusterAutoscalerConfiguration
     *
     * @return self
     */
    public function setClusterAutoscalerConfiguration(?ClusterAutoscalerConfiguration $clusterAutoscalerConfiguration): self
    {
        $this->initialized['clusterAutoscalerConfiguration'] = true;
        $this->clusterAutoscalerConfiguration = $clusterAutoscalerConfiguration;
        return $this;
    }
    /**
     * An object specifying whether the routing-agent component should be enabled for the Kubernetes cluster.
     *
     * @return RoutingAgent|null
     */
    public function getRoutingAgent(): ?RoutingAgent
    {
        return $this->routingAgent;
    }
    /**
     * An object specifying whether the routing-agent component should be enabled for the Kubernetes cluster.
     *
     * @param RoutingAgent|null $routingAgent
     *
     * @return self
     */
    public function setRoutingAgent(?RoutingAgent $routingAgent): self
    {
        $this->initialized['routingAgent'] = true;
        $this->routingAgent = $routingAgent;
        return $this;
    }
    /**
     * An object specifying whether the AMD GPU Device Plugin should be enabled in the Kubernetes cluster. It's enabled by default for clusters with an AMD GPU node pool.
     *
     * @return AmdGpuDevicePlugin|null
     */
    public function getAmdGpuDevicePlugin(): ?AmdGpuDevicePlugin
    {
        return $this->amdGpuDevicePlugin;
    }
    /**
     * An object specifying whether the AMD GPU Device Plugin should be enabled in the Kubernetes cluster. It's enabled by default for clusters with an AMD GPU node pool.
     *
     * @param AmdGpuDevicePlugin|null $amdGpuDevicePlugin
     *
     * @return self
     */
    public function setAmdGpuDevicePlugin(?AmdGpuDevicePlugin $amdGpuDevicePlugin): self
    {
        $this->initialized['amdGpuDevicePlugin'] = true;
        $this->amdGpuDevicePlugin = $amdGpuDevicePlugin;
        return $this;
    }
    /**
     * An object specifying whether the AMD Device Metrics Exporter should be enabled in the Kubernetes cluster.
     *
     * @return AmdGpuDeviceMetricsExporterPlugin|null
     */
    public function getAmdGpuDeviceMetricsExporterPlugin(): ?AmdGpuDeviceMetricsExporterPlugin
    {
        return $this->amdGpuDeviceMetricsExporterPlugin;
    }
    /**
     * An object specifying whether the AMD Device Metrics Exporter should be enabled in the Kubernetes cluster.
     *
     * @param AmdGpuDeviceMetricsExporterPlugin|null $amdGpuDeviceMetricsExporterPlugin
     *
     * @return self
     */
    public function setAmdGpuDeviceMetricsExporterPlugin(?AmdGpuDeviceMetricsExporterPlugin $amdGpuDeviceMetricsExporterPlugin): self
    {
        $this->initialized['amdGpuDeviceMetricsExporterPlugin'] = true;
        $this->amdGpuDeviceMetricsExporterPlugin = $amdGpuDeviceMetricsExporterPlugin;
        return $this;
    }
    /**
     * An object specifying whether the Nvidia GPU Device Plugin should be enabled in the Kubernetes cluster. It's enabled by default for clusters with an Nvidia GPU node pool.
     *
     * @return NvidiaGpuDevicePlugin|null
     */
    public function getNvidiaGpuDevicePlugin(): ?NvidiaGpuDevicePlugin
    {
        return $this->nvidiaGpuDevicePlugin;
    }
    /**
     * An object specifying whether the Nvidia GPU Device Plugin should be enabled in the Kubernetes cluster. It's enabled by default for clusters with an Nvidia GPU node pool.
     *
     * @param NvidiaGpuDevicePlugin|null $nvidiaGpuDevicePlugin
     *
     * @return self
     */
    public function setNvidiaGpuDevicePlugin(?NvidiaGpuDevicePlugin $nvidiaGpuDevicePlugin): self
    {
        $this->initialized['nvidiaGpuDevicePlugin'] = true;
        $this->nvidiaGpuDevicePlugin = $nvidiaGpuDevicePlugin;
        return $this;
    }
    /**
     * An object specifying whether the RDMA shared device plugin should be enabled in the Kubernetes cluster.
     *
     * @return RdmaSharedDevPlugin|null
     */
    public function getRdmaSharedDevPlugin(): ?RdmaSharedDevPlugin
    {
        return $this->rdmaSharedDevPlugin;
    }
    /**
     * An object specifying whether the RDMA shared device plugin should be enabled in the Kubernetes cluster.
     *
     * @param RdmaSharedDevPlugin|null $rdmaSharedDevPlugin
     *
     * @return self
     */
    public function setRdmaSharedDevPlugin(?RdmaSharedDevPlugin $rdmaSharedDevPlugin): self
    {
        $this->initialized['rdmaSharedDevPlugin'] = true;
        $this->rdmaSharedDevPlugin = $rdmaSharedDevPlugin;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['id' => ['id', 'getId', 'setId'], 'name' => ['name', 'getName', 'setName'], 'region' => ['region', 'getRegion', 'setRegion'], 'version' => ['version', 'getVersion', 'setVersion'], 'clusterSubnet' => ['cluster_subnet', 'getClusterSubnet', 'setClusterSubnet'], 'serviceSubnet' => ['service_subnet', 'getServiceSubnet', 'setServiceSubnet'], 'vpcUuid' => ['vpc_uuid', 'getVpcUuid', 'setVpcUuid'], 'ipv4' => ['ipv4', 'getIpv4', 'setIpv4'], 'endpoint' => ['endpoint', 'getEndpoint', 'setEndpoint'], 'tags' => ['tags', 'getTags', 'setTags'], 'nodePools' => ['node_pools', 'getNodePools', 'setNodePools'], 'maintenancePolicy' => ['maintenance_policy', 'getMaintenancePolicy', 'setMaintenancePolicy'], 'autoUpgrade' => ['auto_upgrade', 'getAutoUpgrade', 'setAutoUpgrade'], 'status' => ['status', 'getStatus', 'setStatus'], 'createdAt' => ['created_at', 'getCreatedAt', 'setCreatedAt'], 'updatedAt' => ['updated_at', 'getUpdatedAt', 'setUpdatedAt'], 'surgeUpgrade' => ['surge_upgrade', 'getSurgeUpgrade', 'setSurgeUpgrade'], 'ha' => ['ha', 'getHa', 'setHa'], 'registryEnabled' => ['registry_enabled', 'getRegistryEnabled', 'setRegistryEnabled'], 'registries' => ['registries', 'getRegistries', 'setRegistries'], 'controlPlaneFirewall' => ['control_plane_firewall', 'getControlPlaneFirewall', 'setControlPlaneFirewall'], 'clusterAutoscalerConfiguration' => ['cluster_autoscaler_configuration', 'getClusterAutoscalerConfiguration', 'setClusterAutoscalerConfiguration'], 'routingAgent' => ['routing_agent', 'getRoutingAgent', 'setRoutingAgent'], 'amdGpuDevicePlugin' => ['amd_gpu_device_plugin', 'getAmdGpuDevicePlugin', 'setAmdGpuDevicePlugin'], 'amdGpuDeviceMetricsExporterPlugin' => ['amd_gpu_device_metrics_exporter_plugin', 'getAmdGpuDeviceMetricsExporterPlugin', 'setAmdGpuDeviceMetricsExporterPlugin'], 'nvidiaGpuDevicePlugin' => ['nvidia_gpu_device_plugin', 'getNvidiaGpuDevicePlugin', 'setNvidiaGpuDevicePlugin'], 'rdmaSharedDevPlugin' => ['rdma_shared_dev_plugin', 'getRdmaSharedDevPlugin', 'setRdmaSharedDevPlugin']];
    }
}