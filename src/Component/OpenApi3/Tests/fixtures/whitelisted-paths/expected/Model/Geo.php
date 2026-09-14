<?php

namespace Jane\Component\OpenApi3\Tests\Expected\WhitelistedPaths\Model;

use Jane\Component\OpenApi3\Tests\Expected\WhitelistedPaths\Runtime\AdditionalAndPatternProperties;
use Jane\Component\OpenApi3\Tests\Expected\WhitelistedPaths\Runtime\AdditionalPropertiesInterface;
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
     * @var array<string, mixed>
     */
    public iterable $properties;
    public function definedProperties(): array
    {
        return ['type' => 'type', 'bbox' => 'bbox', 'geometry' => 'geometry', 'properties' => 'properties'];
    }
}