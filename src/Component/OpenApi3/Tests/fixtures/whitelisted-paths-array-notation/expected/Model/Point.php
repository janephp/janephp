<?php

namespace Jane\OpenApi3\Tests\Expected\WhitelistedPathsArrayNotation\Model;

use Jane\OpenApi3\Tests\Expected\WhitelistedPathsArrayNotation\Runtime\AdditionalAndPatternProperties;
use Jane\OpenApi3\Tests\Expected\WhitelistedPathsArrayNotation\Runtime\AdditionalPropertiesInterface;
class Point implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var string
     */
    public string $type;
    /**
     * A [GeoJson Position](https://tools.ietf.org/html/rfc7946#section-3.1.1) in the format `[longitude,latitude]`.
     *
     * @var list<float>
     */
    public array $coordinates;
    public function definedProperties(): array
    {
        return ['type' => 'type', 'coordinates' => 'coordinates'];
    }
}