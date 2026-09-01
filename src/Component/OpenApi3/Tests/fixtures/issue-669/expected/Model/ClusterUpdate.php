<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ClusterUpdate implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * A human-readable name for a Kubernetes cluster.
     *
     * @var string
     */
    public string $name;
    /**
     * An array of tags applied to the Kubernetes cluster. All clusters are automatically tagged `k8s` and `k8s:$K8S_CLUSTER_ID`.
     *
     * @var list<string>
     */
    public array $tags;
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
        return ['name' => 'name', 'tags' => 'tags', 'maintenancePolicy' => 'maintenance_policy', 'autoUpgrade' => 'auto_upgrade', 'surgeUpgrade' => 'surge_upgrade', 'ha' => 'ha', 'controlPlaneFirewall' => 'control_plane_firewall', 'clusterAutoscalerConfiguration' => 'cluster_autoscaler_configuration', 'routingAgent' => 'routing_agent', 'amdGpuDevicePlugin' => 'amd_gpu_device_plugin', 'amdGpuDeviceMetricsExporterPlugin' => 'amd_gpu_device_metrics_exporter_plugin', 'nvidiaGpuDevicePlugin' => 'nvidia_gpu_device_plugin', 'rdmaSharedDevPlugin' => 'rdma_shared_dev_plugin'];
    }
}