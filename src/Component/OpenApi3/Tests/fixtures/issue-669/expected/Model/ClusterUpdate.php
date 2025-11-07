<?php

namespace Jane\Generated\DigitalOcean\Model;

class ClusterUpdate extends \ArrayObject
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
     * A human-readable name for a Kubernetes cluster.
     *
     * @var string
     */
    protected $name;
    /**
     * An array of tags applied to the Kubernetes cluster. All clusters are automatically tagged `k8s` and `k8s:$K8S_CLUSTER_ID`.
     *
     * @var list<string>
     */
    protected $tags;
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
     * An array of tags applied to the Kubernetes cluster. All clusters are automatically tagged `k8s` and `k8s:$K8S_CLUSTER_ID`.
     *
     * @return list<string>
     */
    public function getTags(): array
    {
        return $this->tags;
    }
    /**
     * An array of tags applied to the Kubernetes cluster. All clusters are automatically tagged `k8s` and `k8s:$K8S_CLUSTER_ID`.
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
}