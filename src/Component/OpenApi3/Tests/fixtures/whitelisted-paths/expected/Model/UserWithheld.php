<?php

namespace Jane\Component\OpenApi3\Tests\Expected\WhitelistedPaths\Model;

use Jane\Component\OpenApi3\Tests\Expected\WhitelistedPaths\Runtime\AdditionalAndPatternProperties;
use Jane\Component\OpenApi3\Tests\Expected\WhitelistedPaths\Runtime\AdditionalPropertiesInterface;
class UserWithheld implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * Provides a list of countries where this content is not available.
     *
     * @var list<string>
     */
    public array $countryCodes;
    /**
     * Indicates that the content being withheld is a `user`.
     *
     * @var string
     */
    public string $scope;
    public function definedProperties(): array
    {
        return ['countryCodes' => 'country_codes', 'scope' => 'scope'];
    }
}