<?php

namespace Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Model;

use Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Runtime\AdditionalAndPatternProperties;
use Jane\Component\OpenApi31\Tests\Expected\ScalarGalaxy\Runtime\AdditionalPropertiesInterface;
class PlanetsGetJsonResponse200 implements AdditionalPropertiesInterface
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