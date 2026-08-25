<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ResponseAssignedResourcesList implements AdditionalPropertiesInterface
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
     * All resources, including the ones added in the request, that are assigned to the project. Only resources that you are authorized to see will be returned.
     *
     * @var list<Resource>
     */
    protected $resources;
    /**
     * All resources, including the ones added in the request, that are assigned to the project. Only resources that you are authorized to see will be returned.
     *
     * @return list<Resource>
     */
    public function getResources(): array
    {
        return $this->resources;
    }
    /**
     * All resources, including the ones added in the request, that are assigned to the project. Only resources that you are authorized to see will be returned.
     *
     * @param list<Resource> $resources
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