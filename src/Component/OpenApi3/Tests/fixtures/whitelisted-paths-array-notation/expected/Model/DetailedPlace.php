<?php

namespace Jane\OpenApi3\Tests\Expected\WhitelistedPathsArrayNotation\Model;

use Jane\OpenApi3\Tests\Expected\WhitelistedPathsArrayNotation\Runtime\AdditionalAndPatternProperties;
use Jane\OpenApi3\Tests\Expected\WhitelistedPathsArrayNotation\Runtime\AdditionalPropertiesInterface;
class DetailedPlace implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var string
     */
    public string $format;
    /**
     * The identifier for this place
     *
     * @var string
     */
    public string $id;
    /**
     * The human readable name of this place.
     *
     * @var string
     */
    public string $name;
    /**
     * @var string
     */
    public string $countryCode;
    /**
     * @var string
     */
    public string $placeType;
    /**
     * @var string
     */
    public string $fullName;
    /**
     * @var string
     */
    public string $country;
    /**
     * @var list<string>
     */
    public array $containedWithin;
    /**
     * @var Geo
     */
    public Geo $geo;
    public function definedProperties(): array
    {
        return ['format' => 'format', 'id' => 'id', 'name' => 'name', 'countryCode' => 'country_code', 'placeType' => 'place_type', 'fullName' => 'full_name', 'country' => 'country', 'containedWithin' => 'contained_within', 'geo' => 'geo'];
    }
}