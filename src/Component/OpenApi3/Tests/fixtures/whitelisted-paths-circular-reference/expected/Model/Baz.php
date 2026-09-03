<?php

namespace Jane\Component\OpenApi3\Tests\Expected\WhitelistedPathsCircularReference\Model;

use Jane\Component\OpenApi3\Tests\Expected\WhitelistedPathsCircularReference\Runtime\AdditionalAndPatternProperties;
use Jane\Component\OpenApi3\Tests\Expected\WhitelistedPathsCircularReference\Runtime\AdditionalPropertiesInterface;
class Baz implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var string
     */
    public string $label;
    /**
     * @var SubBaz
     */
    public SubBaz $sub;
    public function definedProperties(): array
    {
        return ['label' => 'label', 'sub' => 'sub'];
    }
}