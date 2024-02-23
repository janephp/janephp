<?php

namespace Docker\Api\Model;

class ServicesCreatePostBody
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
     * Name of the service.
     *
     * @var string
     */
    protected $name;
    /**
     * User-defined key/value metadata.
     *
     * @var array<string, string>
     */
    protected $labels;
    /**
     * User modifiable task configuration.
     *
     * @var TaskSpec
     */
    protected $taskTemplate;
    /**
     * Scheduling mode for the service.
     *
     * @var ServiceSpecMode
     */
    protected $mode;
    /**
     * Specification for the update strategy of the service.
     *
     * @var ServiceSpecUpdateConfig
     */
    protected $updateConfig;
    /**
     * Specification for the rollback strategy of the service.
     *
     * @var ServiceSpecRollbackConfig
     */
    protected $rollbackConfig;
    /**
     * Specifies which networks the service should attach to.
     *
     * @var list<NetworkAttachmentConfig>
     */
    protected $networks;
    /**
     * Properties that can be configured to access and load balance a service.
     *
     * @var EndpointSpec
     */
    protected $endpointSpec;
    /**
     * Name of the service.
     *
     * @return string
     */
    public function getName() : string
    {
        return $this->name;
    }
    /**
     * Name of the service.
     *
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name) : self
    {
        $this->initialized['name'] = true;
        $this->name = $name;
        return $this;
    }
    /**
     * User-defined key/value metadata.
     *
     * @return array<string, string>
     */
    public function getLabels() : iterable
    {
        return $this->labels;
    }
    /**
     * User-defined key/value metadata.
     *
     * @param array<string, string> $labels
     *
     * @return self
     */
    public function setLabels(iterable $labels) : self
    {
        $this->initialized['labels'] = true;
        $this->labels = $labels;
        return $this;
    }
    /**
     * User modifiable task configuration.
     *
     * @return TaskSpec
     */
    public function getTaskTemplate() : TaskSpec
    {
        return $this->taskTemplate;
    }
    /**
     * User modifiable task configuration.
     *
     * @param TaskSpec $taskTemplate
     *
     * @return self
     */
    public function setTaskTemplate(TaskSpec $taskTemplate) : self
    {
        $this->initialized['taskTemplate'] = true;
        $this->taskTemplate = $taskTemplate;
        return $this;
    }
    /**
     * Scheduling mode for the service.
     *
     * @return ServiceSpecMode
     */
    public function getMode() : ServiceSpecMode
    {
        return $this->mode;
    }
    /**
     * Scheduling mode for the service.
     *
     * @param ServiceSpecMode $mode
     *
     * @return self
     */
    public function setMode(ServiceSpecMode $mode) : self
    {
        $this->initialized['mode'] = true;
        $this->mode = $mode;
        return $this;
    }
    /**
     * Specification for the update strategy of the service.
     *
     * @return ServiceSpecUpdateConfig
     */
    public function getUpdateConfig() : ServiceSpecUpdateConfig
    {
        return $this->updateConfig;
    }
    /**
     * Specification for the update strategy of the service.
     *
     * @param ServiceSpecUpdateConfig $updateConfig
     *
     * @return self
     */
    public function setUpdateConfig(ServiceSpecUpdateConfig $updateConfig) : self
    {
        $this->initialized['updateConfig'] = true;
        $this->updateConfig = $updateConfig;
        return $this;
    }
    /**
     * Specification for the rollback strategy of the service.
     *
     * @return ServiceSpecRollbackConfig
     */
    public function getRollbackConfig() : ServiceSpecRollbackConfig
    {
        return $this->rollbackConfig;
    }
    /**
     * Specification for the rollback strategy of the service.
     *
     * @param ServiceSpecRollbackConfig $rollbackConfig
     *
     * @return self
     */
    public function setRollbackConfig(ServiceSpecRollbackConfig $rollbackConfig) : self
    {
        $this->initialized['rollbackConfig'] = true;
        $this->rollbackConfig = $rollbackConfig;
        return $this;
    }
    /**
     * Specifies which networks the service should attach to.
     *
     * @return list<NetworkAttachmentConfig>
     */
    public function getNetworks() : array
    {
        return $this->networks;
    }
    /**
     * Specifies which networks the service should attach to.
     *
     * @param list<NetworkAttachmentConfig> $networks
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
     * Properties that can be configured to access and load balance a service.
     *
     * @return EndpointSpec
     */
    public function getEndpointSpec() : EndpointSpec
    {
        return $this->endpointSpec;
    }
    /**
     * Properties that can be configured to access and load balance a service.
     *
     * @param EndpointSpec $endpointSpec
     *
     * @return self
     */
    public function setEndpointSpec(EndpointSpec $endpointSpec) : self
    {
        $this->initialized['endpointSpec'] = true;
        $this->endpointSpec = $endpointSpec;
        return $this;
    }
}