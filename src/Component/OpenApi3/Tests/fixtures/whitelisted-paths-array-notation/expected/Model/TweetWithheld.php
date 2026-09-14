<?php

namespace Jane\OpenApi3\Tests\Expected\WhitelistedPathsArrayNotation\Model;

use Jane\OpenApi3\Tests\Expected\WhitelistedPathsArrayNotation\Runtime\AdditionalAndPatternProperties;
use Jane\OpenApi3\Tests\Expected\WhitelistedPathsArrayNotation\Runtime\AdditionalPropertiesInterface;
class TweetWithheld implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * Indicates if the content is being withheld for on the basis of copyright infringement.
     *
     * @var bool
     */
    public bool $copyright;
    /**
     * Provides a list of countries where this content is not available.
     *
     * @var list<string>
     */
    public array $countryCodes;
    /**
     * Indicates whether the content being withheld is the `tweet` or a `user`.
     *
     * @var string
     */
    public string $scope;
    public function definedProperties(): array
    {
        return ['copyright' => 'copyright', 'countryCodes' => 'country_codes', 'scope' => 'scope'];
    }
}