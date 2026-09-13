<?php

namespace Jane\OpenApi3\Tests\Expected\WhitelistedPathsArrayNotation\Model;

use Jane\OpenApi3\Tests\Expected\WhitelistedPathsArrayNotation\Runtime\AdditionalAndPatternProperties;
use Jane\OpenApi3\Tests\Expected\WhitelistedPathsArrayNotation\Runtime\AdditionalPropertiesInterface;
class CompactPlace implements AdditionalPropertiesInterface
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
    public function definedProperties(): array
    {
        return ['format' => 'format', 'id' => 'id', 'name' => 'name', 'countryCode' => 'country_code'];
    }
}