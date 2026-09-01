<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ClusterRead implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * A unique ID that can be used to identify and reference a Kubernetes cluster.
     *
     * @var string
     */
    public string $id;
    /**
     * A human-readable name for a Kubernetes cluster.
     *
     * @var string
     */
    public string $name;
    /**
     * The slug identifier for the region where the Kubernetes cluster is located.
     *
     * @var string
     */
    public string $region;
    /**
     * The slug identifier for the version of Kubernetes used for the cluster. If set to a minor version (e.g. "1.14"), the latest version within it will be used (e.g. "1.14.6-do.1"); if set to "latest", the latest published version will be used. See the `/v2/kubernetes/options` endpoint to find all currently available versions.
     *
     * @var string
     */
    public string $version;
    /**
     * The range of IP addresses for the overlay network of the Kubernetes cluster in CIDR notation.
     *
     * @var string
     */
    public string $clusterSubnet;
    /**
     * The range of assignable IP addresses for services running in the Kubernetes cluster in CIDR notation.
     *
     * @var string
     */
    public string $serviceSubnet;
    /**
     * A string specifying the UUID of the VPC to which the Kubernetes cluster is assigned.<br><br>Requires `vpc:read` scope.
     *
     * @var string
     */
    public string $vpcUuid;
    /**
     * The public IPv4 address of the Kubernetes master node. This will not be set if high availability is configured on the cluster (v1.21+)
     *
     * @var string
     */
    public string $ipv4;
    /**
     * The base URL of the API server on the Kubernetes master node.
     *
     * @var string
     */
    public string $endpoint;
    /**
     * An array of tags applied to the Kubernetes cluster. All clusters are automatically tagged `k8s` and `k8s:$K8S_CLUSTER_ID`. <br><br>Requires `tag:read` scope.
     *
     * @var list<string>
     */
    public array $tags;
    /**
     * An object specifying the details of the worker nodes available to the Kubernetes cluster.
     *
     * @var list<array<string, mixed>>
     */
    public array $nodePools;
    /**
     * An object specifying the maintenance window policy for the Kubernetes cluster.
     *
     * @var MaintenancePolicy|null
     */
    public ?MaintenancePolicy $maintenancePolicy;
    /**
     * A boolean value indicating whether the cluster will be automatically upgraded to new patch releases during its maintenance window.
     *
     * @var bool
     */
    public bool $autoUpgrade = false;
    /**
     * An object containing a `state` attribute whose value is set to a string indicating the current status of the cluster.
     *
     * @var ClusterReadStatus
     */
    public ClusterReadStatus $status;
    /**
     * A time value given in ISO8601 combined date and time format that represents when the Kubernetes cluster was created.
     *
     * @var \DateTime
     */
    public \DateTime $createdAt;
    /**
     * A time value given in ISO8601 combined date and time format that represents when the Kubernetes cluster was last updated.
     *
     * @var \DateTime
     */
    public \DateTime $updatedAt;
    /**
     * A boolean value indicating whether surge upgrade is enabled/disabled for the cluster. Surge upgrade makes cluster upgrades fast and reliable by bringing up new nodes before destroying the outdated nodes.
     *
     * @var bool
     */
    public bool $surgeUpgrade = false;
    /**
     * A boolean value indicating whether the control plane is run in a highly available configuration in the cluster. Highly available control planes incur less downtime. The property cannot be disabled.
     *
     * @var bool
     */
    public bool $ha = false;
    /**
     * A read-only boolean value indicating if a container registry is integrated with the cluster.
     *
     * @var bool
     */
    public bool $registryEnabled;
    /**
     * An array of integrated DOCR registries.
     *
     * @var list<string>|null
     */
    public ?array $registries;
    /**
     * An object specifying the control plane firewall for the Kubernetes cluster. Control plane firewall is in early availability (invite only).
     *
     * @var ControlPlaneFirewall|null
     */
    public ?ControlPlaneFirewall $controlPlaneFirewall;
    /**
     * An object specifying custom cluster autoscaler configuration.
     *
     * @var ClusterAutoscalerConfiguration|null
     */
    public ?ClusterAutoscalerConfiguration $clusterAutoscalerConfiguration;
    /**
     * An object specifying whether the routing-agent component should be enabled for the Kubernetes cluster.
     *
     * @var RoutingAgent|null
     */
    public ?RoutingAgent $routingAgent;
    /**
     * An object specifying whether the AMD GPU Device Plugin should be enabled in the Kubernetes cluster. It's enabled by default for clusters with an AMD GPU node pool.
     *
     * @var AmdGpuDevicePlugin|null
     */
    public ?AmdGpuDevicePlugin $amdGpuDevicePlugin;
    /**
     * An object specifying whether the AMD Device Metrics Exporter should be enabled in the Kubernetes cluster.
     *
     * @var AmdGpuDeviceMetricsExporterPlugin|null
     */
    public ?AmdGpuDeviceMetricsExporterPlugin $amdGpuDeviceMetricsExporterPlugin;
    /**
     * An object specifying whether the Nvidia GPU Device Plugin should be enabled in the Kubernetes cluster. It's enabled by default for clusters with an Nvidia GPU node pool.
     *
     * @var NvidiaGpuDevicePlugin|null
     */
    public ?NvidiaGpuDevicePlugin $nvidiaGpuDevicePlugin;
    /**
     * An object specifying whether the RDMA shared device plugin should be enabled in the Kubernetes cluster.
     *
     * @var RdmaSharedDevPlugin|null
     */
    public ?RdmaSharedDevPlugin $rdmaSharedDevPlugin;
    public function definedProperties(): array
    {
        return ['id' => 'id', 'name' => 'name', 'region' => 'region', 'version' => 'version', 'clusterSubnet' => 'cluster_subnet', 'serviceSubnet' => 'service_subnet', 'vpcUuid' => 'vpc_uuid', 'ipv4' => 'ipv4', 'endpoint' => 'endpoint', 'tags' => 'tags', 'nodePools' => 'node_pools', 'maintenancePolicy' => 'maintenance_policy', 'autoUpgrade' => 'auto_upgrade', 'status' => 'status', 'createdAt' => 'created_at', 'updatedAt' => 'updated_at', 'surgeUpgrade' => 'surge_upgrade', 'ha' => 'ha', 'registryEnabled' => 'registry_enabled', 'registries' => 'registries', 'controlPlaneFirewall' => 'control_plane_firewall', 'clusterAutoscalerConfiguration' => 'cluster_autoscaler_configuration', 'routingAgent' => 'routing_agent', 'amdGpuDevicePlugin' => 'amd_gpu_device_plugin', 'amdGpuDeviceMetricsExporterPlugin' => 'amd_gpu_device_metrics_exporter_plugin', 'nvidiaGpuDevicePlugin' => 'nvidia_gpu_device_plugin', 'rdmaSharedDevPlugin' => 'rdma_shared_dev_plugin'];
    }
}