<?php

namespace Jane\OpenApi3\Tests\Expected\WhitelistedPathsArrayNotation\Model;

use Jane\OpenApi3\Tests\Expected\WhitelistedPathsArrayNotation\Runtime\AdditionalAndPatternProperties;
use Jane\OpenApi3\Tests\Expected\WhitelistedPathsArrayNotation\Runtime\AdditionalPropertiesInterface;
class DefaultTweetFieldsGeo implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * A [GeoJson Point](https://tools.ietf.org/html/rfc7946#section-3.1.2) geometry object.
     *
     * @var Point
     */
    public Point $coordinates;
    /**
     * The identifier for this place
     *
     * @var string
     */
    public string $placeId;
    public function definedProperties(): array
    {
        return ['coordinates' => 'coordinates', 'placeId' => 'place_id'];
    }
}