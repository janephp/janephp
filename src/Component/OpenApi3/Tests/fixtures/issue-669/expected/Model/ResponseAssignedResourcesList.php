<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ResponseAssignedResourcesList implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * All resources, including the ones added in the request, that are assigned to the project. Only resources that you are authorized to see will be returned.
     *
     * @var list<Resource>
     */
    public array $resources;
    public function definedProperties(): array
    {
        return ['resources' => 'resources'];
    }
}