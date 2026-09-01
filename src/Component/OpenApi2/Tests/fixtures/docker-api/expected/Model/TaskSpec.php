<?php

namespace Docker\Api\Model;

class TaskSpec
{
    /**
     * Plugin spec for the service.  *(Experimental release only.)*
     * 
     * <p><br /></p>
     * 
     * > **Note**: ContainerSpec, NetworkAttachmentSpec, and PluginSpec are
     * > mutually exclusive. PluginSpec is only used when the Runtime field
     * > is set to `plugin`. NetworkAttachmentSpec is used when the Runtime
     * > field is set to `attachment`.
     * 
     *
     * @var TaskSpecPluginSpec
     */
    public TaskSpecPluginSpec $pluginSpec;
    /**
     * Container spec for the service.
     * 
     * <p><br /></p>
     * 
     * > **Note**: ContainerSpec, NetworkAttachmentSpec, and PluginSpec are
     * > mutually exclusive. PluginSpec is only used when the Runtime field
     * > is set to `plugin`. NetworkAttachmentSpec is used when the Runtime
     * > field is set to `attachment`.
     * 
     *
     * @var TaskSpecContainerSpec
     */
    public TaskSpecContainerSpec $containerSpec;
    /**
     * Read-only spec type for non-swarm containers attached to swarm overlay
     * networks.
     * 
     * <p><br /></p>
     * 
     * > **Note**: ContainerSpec, NetworkAttachmentSpec, and PluginSpec are
     * > mutually exclusive. PluginSpec is only used when the Runtime field
     * > is set to `plugin`. NetworkAttachmentSpec is used when the Runtime
     * > field is set to `attachment`.
     * 
     *
     * @var TaskSpecNetworkAttachmentSpec
     */
    public TaskSpecNetworkAttachmentSpec $networkAttachmentSpec;
    /**
     * Resource requirements which apply to each individual container created
     * as part of the service.
     * 
     *
     * @var TaskSpecResources
     */
    public TaskSpecResources $resources;
    /**
     * Specification for the restart policy which applies to containers
     * created as part of this service.
     * 
     *
     * @var TaskSpecRestartPolicy
     */
    public TaskSpecRestartPolicy $restartPolicy;
    /**
     * @var TaskSpecPlacement
     */
    public TaskSpecPlacement $placement;
    /**
     * A counter that triggers an update even if no relevant parameters have
     * been changed.
     * 
     *
     * @var int
     */
    public int $forceUpdate;
    /**
     * Runtime is the type of runtime specified for the task executor.
     * 
     *
     * @var string
     */
    public string $runtime;
    /**
     * Specifies which networks the service should attach to.
     *
     * @var list<NetworkAttachmentConfig>
     */
    public array $networks;
    /**
     * Specifies the log driver to use for tasks created from this spec. If
     * not present, the default one for the swarm will be used, finally
     * falling back to the engine default if not specified.
     * 
     *
     * @var TaskSpecLogDriver
     */
    public TaskSpecLogDriver $logDriver;
}