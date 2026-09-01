<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class AppsCreateAppRequest implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * The desired configuration of an application.
     *
     * @var AppSpec
     */
    public AppSpec $spec;
    /**
     * The ID of the project the app should be assigned to. If omitted, it will be assigned to your default project.
     * <br><br>Requires `project:update` scope.
     * 
     *
     * @var string
     */
    public string $projectId;
    public function definedProperties(): array
    {
        return ['spec' => 'spec', 'projectId' => 'project_id'];
    }
}