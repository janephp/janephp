<?php

namespace Jane\Component\OpenApi3\Tests\Expected\WhitelistedPaths\Model;

use Jane\Component\OpenApi3\Tests\Expected\WhitelistedPaths\Runtime\AdditionalAndPatternProperties;
use Jane\Component\OpenApi3\Tests\Expected\WhitelistedPaths\Runtime\AdditionalPropertiesInterface;
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