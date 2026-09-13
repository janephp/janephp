<?php

namespace Jane\OpenApi3\Tests\Expected\WhitelistedPathsArrayNotation\Model;

use Jane\OpenApi3\Tests\Expected\WhitelistedPathsArrayNotation\Runtime\AdditionalAndPatternProperties;
use Jane\OpenApi3\Tests\Expected\WhitelistedPathsArrayNotation\Runtime\AdditionalPropertiesInterface;
class Geo implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var string
     */
    public string $type;
    /**
     * @var list<float>
     */
    public array $bbox;
    /**
     * A [GeoJson Point](https://tools.ietf.org/html/rfc7946#section-3.1.2) geometry object.
     *
     * @var Point
     */
    public Point $geometry;
    /**
     * @var iterable<string, mixed>
     */
    public iterable $properties;
    public function definedProperties(): array
    {
        return ['type' => 'type', 'bbox' => 'bbox', 'geometry' => 'geometry', 'properties' => 'properties'];
    }
}