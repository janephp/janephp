<?php

namespace Jane\Component\OpenApi3\Tests\Expected\WhitelistedPaths\Model;

use Jane\Component\OpenApi3\Tests\Expected\WhitelistedPaths\Runtime\AdditionalAndPatternProperties;
use Jane\Component\OpenApi3\Tests\Expected\WhitelistedPaths\Runtime\AdditionalPropertiesInterface;
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