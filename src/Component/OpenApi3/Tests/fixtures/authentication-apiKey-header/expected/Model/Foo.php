<?php

namespace Jane\Component\OpenApi3\Tests\Expected\AuthenticationApiKeyHeader\Model;

use Jane\Component\OpenApi3\Tests\Expected\AuthenticationApiKeyHeader\Runtime\AdditionalAndPatternProperties;
use Jane\Component\OpenApi3\Tests\Expected\AuthenticationApiKeyHeader\Runtime\AdditionalPropertiesInterface;
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