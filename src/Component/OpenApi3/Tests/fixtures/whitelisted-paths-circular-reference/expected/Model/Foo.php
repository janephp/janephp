<?php

namespace Jane\Component\OpenApi3\Tests\Expected\WhitelistedPathsCircularReference\Model;

use Jane\Component\OpenApi3\Tests\Expected\WhitelistedPathsCircularReference\Runtime\AdditionalAndPatternProperties;
use Jane\Component\OpenApi3\Tests\Expected\WhitelistedPathsCircularReference\Runtime\AdditionalPropertiesInterface;
class Foo implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var string
     */
    public string $label;
    /**
     * @var Foo
     */
    public Foo $parent;
    public function definedProperties(): array
    {
        return ['label' => 'label', 'parent' => 'parent'];
    }
}