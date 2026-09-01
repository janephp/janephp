<?php

namespace Jane\Component\OpenApi3\Tests\Expected\WhitelistedPathsCircularReference\Model;

use Jane\Component\OpenApi3\Tests\Expected\WhitelistedPathsCircularReference\Runtime\AdditionalAndPatternProperties;
use Jane\Component\OpenApi3\Tests\Expected\WhitelistedPathsCircularReference\Runtime\AdditionalPropertiesInterface;
class SubBaz implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var Baz
     */
    public Baz $parent;
    public function definedProperties(): array
    {
        return ['parent' => 'parent'];
    }
}