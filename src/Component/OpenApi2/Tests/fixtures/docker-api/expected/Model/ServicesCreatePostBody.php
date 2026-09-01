<?php

namespace Docker\Api\Model;

class ServicesCreatePostBody
{
    /**
     * Name of the service.
     *
     * @var string
     */
    public string $name;
    /**
     * User-defined key/value metadata.
     *
     * @var array<string, string>
     */
    public iterable $labels;
    /**
     * User modifiable task configuration.
     *
     * @var TaskSpec
     */
    public TaskSpec $taskTemplate;
    /**
     * Scheduling mode for the service.
     *
     * @var ServiceSpecMode
     */
    public ServiceSpecMode $mode;
    /**
     * Specification for the update strategy of the service.
     *
     * @var ServiceSpecUpdateConfig
     */
    public ServiceSpecUpdateConfig $updateConfig;
    /**
     * Specification for the rollback strategy of the service.
     *
     * @var ServiceSpecRollbackConfig
     */
    public ServiceSpecRollbackConfig $rollbackConfig;
    /**
     * Specifies which networks the service should attach to.
     *
     * @var list<NetworkAttachmentConfig>
     */
    public array $networks;
    /**
     * Properties that can be configured to access and load balance a service.
     *
     * @var EndpointSpec
     */
    public EndpointSpec $endpointSpec;
}