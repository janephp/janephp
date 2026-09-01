<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class TagsResource implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
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
    public array $resources;
    public function definedProperties(): array
    {
        return ['resources' => 'resources'];
    }
}