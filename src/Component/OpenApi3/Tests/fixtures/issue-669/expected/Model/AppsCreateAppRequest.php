<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class AppsCreateAppRequest implements AdditionalPropertiesInterface
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
     * The desired configuration of an application.
     *
     * @var AppSpec
     */
    protected $spec;
    /**
     * The ID of the project the app should be assigned to. If omitted, it will be assigned to your default project.
     * <br><br>Requires `project:update` scope.
     * 
     *
     * @var string
     */
    protected $projectId;
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
     * The ID of the project the app should be assigned to. If omitted, it will be assigned to your default project.
     * <br><br>Requires `project:update` scope.
     * 
     *
     * @return string
     */
    public function getProjectId(): string
    {
        return $this->projectId;
    }
    /**
    * The ID of the project the app should be assigned to. If omitted, it will be assigned to your default project.
    <br><br>Requires `project:update` scope.
    
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
    public function definedProperties(): array
    {
        return ['spec' => ['spec', 'getSpec', 'setSpec'], 'projectId' => ['project_id', 'getProjectId', 'setProjectId']];
    }
}