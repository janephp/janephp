<?php

namespace Jane\Component\OpenApi3\Tests\Expected\WhitelistedPaths\Model;

use Jane\Component\OpenApi3\Tests\Expected\WhitelistedPaths\Runtime\AdditionalAndPatternProperties;
use Jane\Component\OpenApi3\Tests\Expected\WhitelistedPaths\Runtime\AdditionalPropertiesInterface;
class DefaultPlace implements AdditionalPropertiesInterface
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
    public function definedProperties(): array
    {
        return ['format' => 'format', 'id' => 'id', 'name' => 'name', 'countryCode' => 'country_code', 'placeType' => 'place_type', 'fullName' => 'full_name', 'country' => 'country', 'containedWithin' => 'contained_within'];
    }
}