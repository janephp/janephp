<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

use Jane\Component\OpenApi3\Tests\Expected\Runtime\AdditionalAndPatternProperties;
use Jane\Component\OpenApi3\Tests\Expected\Runtime\AdditionalPropertiesInterface;
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