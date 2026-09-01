<?php

namespace Jane\Component\OpenApi31\Tests\Expected\Model;

use Jane\Component\OpenApi31\Tests\Expected\Runtime\AdditionalAndPatternProperties;
use Jane\Component\OpenApi31\Tests\Expected\Runtime\AdditionalPropertiesInterface;
class PlanetsGetXmlResponse200 implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var list<Planet>
     */
    public array $data;
    /**
     * @var PaginatedResourceMeta
     */
    public PaginatedResourceMeta $meta;
    public function definedProperties(): array
    {
        return ['data' => 'data', 'meta' => 'meta'];
    }
}