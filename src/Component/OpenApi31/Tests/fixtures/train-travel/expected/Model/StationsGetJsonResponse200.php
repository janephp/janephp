<?php

namespace Jane\Component\OpenApi31\Tests\Expected\Model;

use Jane\Component\OpenApi31\Tests\Expected\Runtime\AdditionalAndPatternProperties;
use Jane\Component\OpenApi31\Tests\Expected\Runtime\AdditionalPropertiesInterface;
class StationsGetJsonResponse200 implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var list<Station>
     */
    public array $data;
    /**
     * @var StationsGetJsonResponse200Links
     */
    public StationsGetJsonResponse200Links $links;
    public function definedProperties(): array
    {
        return ['data' => 'data', 'links' => 'links'];
    }
}