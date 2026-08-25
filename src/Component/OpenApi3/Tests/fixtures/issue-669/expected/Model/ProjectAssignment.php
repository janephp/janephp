<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ProjectAssignment implements AdditionalPropertiesInterface
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
     * A list of uniform resource names (URNs) to be added to a project. Only resources that you are authorized to see will be returned.
     *
     * @var list<string>
     */
    protected $resources;
    /**
     * A list of uniform resource names (URNs) to be added to a project. Only resources that you are authorized to see will be returned.
     *
     * @return list<string>
     */
    public function getResources(): array
    {
        return $this->resources;
    }
    /**
     * A list of uniform resource names (URNs) to be added to a project. Only resources that you are authorized to see will be returned.
     *
     * @param list<string> $resources
     *
     * @return self
     */
    public function setResources(array $resources): self
    {
        $this->initialized['resources'] = true;
        $this->resources = $resources;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['resources' => ['resources', 'getResources', 'setResources']];
    }
}