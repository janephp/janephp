<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class TagsResourceResourcesItem implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * The identifier of a resource.
     *
     * @var string
     */
    public string $resourceId;
    /**
     * The type of the resource.
     *
     * @var string
     */
    public string $resourceType;
    public function definedProperties(): array
    {
        return ['resourceId' => 'resource_id', 'resourceType' => 'resource_type'];
    }
}