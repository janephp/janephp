<?php

namespace Jane\Component\OpenApi31\Tests\DiscriminatorExpected\Model;

use Jane\Component\OpenApi31\Tests\DiscriminatorExpected\Runtime\AdditionalAndPatternProperties;
use Jane\Component\OpenApi31\Tests\DiscriminatorExpected\Runtime\AdditionalPropertiesInterface;
class FooBar implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var Foo|Bar
     */
    public $what;
    public function definedProperties(): array
    {
        return ['what' => 'what'];
    }
}