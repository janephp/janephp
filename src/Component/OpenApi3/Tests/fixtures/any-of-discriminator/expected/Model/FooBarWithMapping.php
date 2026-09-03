<?php

namespace Jane\Component\OpenApi3\Tests\Expected\AnyOfDiscriminator\Model;

use Jane\Component\OpenApi3\Tests\Expected\AnyOfDiscriminator\Runtime\AdditionalAndPatternProperties;
use Jane\Component\OpenApi3\Tests\Expected\AnyOfDiscriminator\Runtime\AdditionalPropertiesInterface;
class FooBarWithMapping implements AdditionalPropertiesInterface
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