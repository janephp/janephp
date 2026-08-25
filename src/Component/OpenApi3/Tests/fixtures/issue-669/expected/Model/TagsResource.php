<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class TagsResource implements AdditionalPropertiesInterface
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
     * An array of objects containing resource_id and resource_type
     * attributes.
     * 
     * This response will only include resources that you are authorized to see.
     * For example, to see Droplets, include the `droplet:read` scope.
     * 
     *
     * @var list<TagsResourceResourcesItem>
     */
    protected $resources;
    /**
     * An array of objects containing resource_id and resource_type
     * attributes.
     * 
     * This response will only include resources that you are authorized to see.
     * For example, to see Droplets, include the `droplet:read` scope.
     * 
     *
     * @return list<TagsResourceResourcesItem>
     */
    public function getResources(): array
    {
        return $this->resources;
    }
    /**
    * An array of objects containing resource_id and resource_type
    attributes.
    
    This response will only include resources that you are authorized to see.
    For example, to see Droplets, include the `droplet:read` scope.
    
    *
    * @param list<TagsResourceResourcesItem> $resources
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