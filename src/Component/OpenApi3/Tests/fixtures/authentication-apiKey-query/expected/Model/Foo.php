<?php

namespace Jane\Component\OpenApi3\Tests\Expected\AuthenticationApiKeyQuery\Model;

use Jane\Component\OpenApi3\Tests\Expected\AuthenticationApiKeyQuery\Runtime\AdditionalAndPatternProperties;
use Jane\Component\OpenApi3\Tests\Expected\AuthenticationApiKeyQuery\Runtime\AdditionalPropertiesInterface;
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