<?php

namespace Docker\Api\Model;

class TaskSpec
{
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property) : bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
    * Plugin spec for the service.  *(Experimental release only.)*
    
    <p><br /></p>
    
    > **Note**: ContainerSpec, NetworkAttachmentSpec, and PluginSpec are
    > mutually exclusive. PluginSpec is only used when the Runtime field
    > is set to `plugin`. NetworkAttachmentSpec is used when the Runtime
    > field is set to `attachment`.
    
    *
    * @var TaskSpecPluginSpec
    */
    protected $pluginSpec;
    /**
    * Container spec for the service.
    
    <p><br /></p>
    
    > **Note**: ContainerSpec, NetworkAttachmentSpec, and PluginSpec are
    > mutually exclusive. PluginSpec is only used when the Runtime field
    > is set to `plugin`. NetworkAttachmentSpec is used when the Runtime
    > field is set to `attachment`.
    
    *
    * @var TaskSpecContainerSpec
    */
    protected $containerSpec;
    /**
    * Read-only spec type for non-swarm containers attached to swarm overlay
    networks.
    
    <p><br /></p>
    
    > **Note**: ContainerSpec, NetworkAttachmentSpec, and PluginSpec are
    > mutually exclusive. PluginSpec is only used when the Runtime field
    > is set to `plugin`. NetworkAttachmentSpec is used when the Runtime
    > field is set to `attachment`.
    
    *
    * @var TaskSpecNetworkAttachmentSpec
    */
    protected $networkAttachmentSpec;
    /**
    * Resource requirements which apply to each individual container created
    as part of the service.
    
    *
    * @var TaskSpecResources
    */
    protected $resources;
    /**
    * Specification for the restart policy which applies to containers
    created as part of this service.
    
    *
    * @var TaskSpecRestartPolicy
    */
    protected $restartPolicy;
    /**
     * 
     *
     * @var TaskSpecPlacement
     */
    protected $placement;
    /**
    * A counter that triggers an update even if no relevant parameters have
    been changed.
    
    *
    * @var int
    */
    protected $forceUpdate;
    /**
     * Runtime is the type of runtime specified for the task executor.
     *
     * @var string
     */
    protected $runtime;
    /**
     * Specifies which networks the service should attach to.
     *
     * @var NetworkAttachmentConfig[]
     */
    protected $networks;
    /**
    * Specifies the log driver to use for tasks created from this spec. If
    not present, the default one for the swarm will be used, finally
    falling back to the engine default if not specified.
    
    *
    * @var TaskSpecLogDriver
    */
    protected $logDriver;
    /**
    * Plugin spec for the service.  *(Experimental release only.)*
    
    <p><br /></p>
    
    > **Note**: ContainerSpec, NetworkAttachmentSpec, and PluginSpec are
    > mutually exclusive. PluginSpec is only used when the Runtime field
    > is set to `plugin`. NetworkAttachmentSpec is used when the Runtime
    > field is set to `attachment`.
    
    *
    * @return TaskSpecPluginSpec
    */
    public function getPluginSpec() : TaskSpecPluginSpec
    {
        return $this->pluginSpec;
    }
    /**
    * Plugin spec for the service.  *(Experimental release only.)*
    
    <p><br /></p>
    
    > **Note**: ContainerSpec, NetworkAttachmentSpec, and PluginSpec are
    > mutually exclusive. PluginSpec is only used when the Runtime field
    > is set to `plugin`. NetworkAttachmentSpec is used when the Runtime
    > field is set to `attachment`.
    
    *
    * @param TaskSpecPluginSpec $pluginSpec
    *
    * @return self
    */
    public function setPluginSpec(TaskSpecPluginSpec $pluginSpec) : self
    {
        $this->initialized['pluginSpec'] = true;
        $this->pluginSpec = $pluginSpec;
        return $this;
    }
    /**
    * Container spec for the service.
    
    <p><br /></p>
    
    > **Note**: ContainerSpec, NetworkAttachmentSpec, and PluginSpec are
    > mutually exclusive. PluginSpec is only used when the Runtime field
    > is set to `plugin`. NetworkAttachmentSpec is used when the Runtime
    > field is set to `attachment`.
    
    *
    * @return TaskSpecContainerSpec
    */
    public function getContainerSpec() : TaskSpecContainerSpec
    {
        return $this->containerSpec;
    }
    /**
    * Container spec for the service.
    
    <p><br /></p>
    
    > **Note**: ContainerSpec, NetworkAttachmentSpec, and PluginSpec are
    > mutually exclusive. PluginSpec is only used when the Runtime field
    > is set to `plugin`. NetworkAttachmentSpec is used when the Runtime
    > field is set to `attachment`.
    
    *
    * @param TaskSpecContainerSpec $containerSpec
    *
    * @return self
    */
    public function setContainerSpec(TaskSpecContainerSpec $containerSpec) : self
    {
        $this->initialized['containerSpec'] = true;
        $this->containerSpec = $containerSpec;
        return $this;
    }
    /**
    * Read-only spec type for non-swarm containers attached to swarm overlay
    networks.
    
    <p><br /></p>
    
    > **Note**: ContainerSpec, NetworkAttachmentSpec, and PluginSpec are
    > mutually exclusive. PluginSpec is only used when the Runtime field
    > is set to `plugin`. NetworkAttachmentSpec is used when the Runtime
    > field is set to `attachment`.
    
    *
    * @return TaskSpecNetworkAttachmentSpec
    */
    public function getNetworkAttachmentSpec() : TaskSpecNetworkAttachmentSpec
    {
        return $this->networkAttachmentSpec;
    }
    /**
    * Read-only spec type for non-swarm containers attached to swarm overlay
    networks.
    
    <p><br /></p>
    
    > **Note**: ContainerSpec, NetworkAttachmentSpec, and PluginSpec are
    > mutually exclusive. PluginSpec is only used when the Runtime field
    > is set to `plugin`. NetworkAttachmentSpec is used when the Runtime
    > field is set to `attachment`.
    
    *
    * @param TaskSpecNetworkAttachmentSpec $networkAttachmentSpec
    *
    * @return self
    */
    public function setNetworkAttachmentSpec(TaskSpecNetworkAttachmentSpec $networkAttachmentSpec) : self
    {
        $this->initialized['networkAttachmentSpec'] = true;
        $this->networkAttachmentSpec = $networkAttachmentSpec;
        return $this;
    }
    /**
    * Resource requirements which apply to each individual container created
    as part of the service.
    
    *
    * @return TaskSpecResources
    */
    public function getResources() : TaskSpecResources
    {
        return $this->resources;
    }
    /**
    * Resource requirements which apply to each individual container created
    as part of the service.
    
    *
    * @param TaskSpecResources $resources
    *
    * @return self
    */
    public function setResources(TaskSpecResources $resources) : self
    {
        $this->initialized['resources'] = true;
        $this->resources = $resources;
        return $this;
    }
    /**
    * Specification for the restart policy which applies to containers
    created as part of this service.
    
    *
    * @return TaskSpecRestartPolicy
    */
    public function getRestartPolicy() : TaskSpecRestartPolicy
    {
        return $this->restartPolicy;
    }
    /**
    * Specification for the restart policy which applies to containers
    created as part of this service.
    
    *
    * @param TaskSpecRestartPolicy $restartPolicy
    *
    * @return self
    */
    public function setRestartPolicy(TaskSpecRestartPolicy $restartPolicy) : self
    {
        $this->initialized['restartPolicy'] = true;
        $this->restartPolicy = $restartPolicy;
        return $this;
    }
    /**
     * 
     *
     * @return TaskSpecPlacement
     */
    public function getPlacement() : TaskSpecPlacement
    {
        return $this->placement;
    }
    /**
     * 
     *
     * @param TaskSpecPlacement $placement
     *
     * @return self
     */
    public function setPlacement(TaskSpecPlacement $placement) : self
    {
        $this->initialized['placement'] = true;
        $this->placement = $placement;
        return $this;
    }
    /**
    * A counter that triggers an update even if no relevant parameters have
    been changed.
    
    *
    * @return int
    */
    public function getForceUpdate() : int
    {
        return $this->forceUpdate;
    }
    /**
    * A counter that triggers an update even if no relevant parameters have
    been changed.
    
    *
    * @param int $forceUpdate
    *
    * @return self
    */
    public function setForceUpdate(int $forceUpdate) : self
    {
        $this->initialized['forceUpdate'] = true;
        $this->forceUpdate = $forceUpdate;
        return $this;
    }
    /**
     * Runtime is the type of runtime specified for the task executor.
     *
     * @return string
     */
    public function getRuntime() : string
    {
        return $this->runtime;
    }
    /**
     * Runtime is the type of runtime specified for the task executor.
     *
     * @param string $runtime
     *
     * @return self
     */
    public function setRuntime(string $runtime) : self
    {
        $this->initialized['runtime'] = true;
        $this->runtime = $runtime;
        return $this;
    }
    /**
     * Specifies which networks the service should attach to.
     *
     * @return NetworkAttachmentConfig[]
     */
    public function getNetworks() : array
    {
        return $this->networks;
    }
    /**
     * Specifies which networks the service should attach to.
     *
     * @param NetworkAttachmentConfig[] $networks
     *
     * @return self
     */
    public function setNetworks(array $networks) : self
    {
        $this->initialized['networks'] = true;
        $this->networks = $networks;
        return $this;
    }
    /**
    * Specifies the log driver to use for tasks created from this spec. If
    not present, the default one for the swarm will be used, finally
    falling back to the engine default if not specified.
    
    *
    * @return TaskSpecLogDriver
    */
    public function getLogDriver() : TaskSpecLogDriver
    {
        return $this->logDriver;
    }
    /**
    * Specifies the log driver to use for tasks created from this spec. If
    not present, the default one for the swarm will be used, finally
    falling back to the engine default if not specified.
    
    *
    * @param TaskSpecLogDriver $logDriver
    *
    * @return self
    */
    public function setLogDriver(TaskSpecLogDriver $logDriver) : self
    {
        $this->initialized['logDriver'] = true;
        $this->logDriver = $logDriver;
        return $this;
    }
}