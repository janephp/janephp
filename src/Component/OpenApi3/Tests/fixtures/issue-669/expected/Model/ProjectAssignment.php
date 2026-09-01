<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ProjectAssignment implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * A list of uniform resource names (URNs) to be added to a project. Only resources that you are authorized to see will be returned.
     *
     * @var list<string>
     */
    public array $resources;
    public function definedProperties(): array
    {
        return ['resources' => 'resources'];
    }
}