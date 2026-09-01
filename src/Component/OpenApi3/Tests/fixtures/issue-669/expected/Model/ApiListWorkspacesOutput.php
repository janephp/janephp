<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ApiListWorkspacesOutput implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * Workspaces
     *
     * @var list<ApiWorkspace>
     */
    public array $workspaces;
    public function definedProperties(): array
    {
        return ['workspaces' => 'workspaces'];
    }
}