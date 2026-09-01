<?php

namespace Jane\Component\OpenApi3\Tests\Expected\AuthenticationHttpBasic\Model;

use Jane\Component\OpenApi3\Tests\Expected\AuthenticationHttpBasic\Runtime\AdditionalAndPatternProperties;
use Jane\Component\OpenApi3\Tests\Expected\AuthenticationHttpBasic\Runtime\AdditionalPropertiesInterface;
class Foo implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var string
     */
    public string $foo;
    public function definedProperties(): array
    {
        return ['foo' => 'foo'];
    }
}