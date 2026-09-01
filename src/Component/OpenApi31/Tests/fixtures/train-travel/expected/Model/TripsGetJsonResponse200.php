<?php

namespace Jane\Component\OpenApi31\Tests\Expected\Model;

use Jane\Component\OpenApi31\Tests\Expected\Runtime\AdditionalAndPatternProperties;
use Jane\Component\OpenApi31\Tests\Expected\Runtime\AdditionalPropertiesInterface;
class TripsGetJsonResponse200 implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var list<TripsGetJsonResponse200DataItem>
     */
    public array $data;
    /**
     * @var TripsGetJsonResponse200Links
     */
    public TripsGetJsonResponse200Links $links;
    public function definedProperties(): array
    {
        return ['data' => 'data', 'links' => 'links'];
    }
}