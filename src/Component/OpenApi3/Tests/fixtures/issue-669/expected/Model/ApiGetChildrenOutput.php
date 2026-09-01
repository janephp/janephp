<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ApiGetChildrenOutput implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * Child agents
     *
     * @var list<ApiAgent>
     */
    public array $children;
    public function definedProperties(): array
    {
        return ['children' => 'children'];
    }
}