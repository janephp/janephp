<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Api1\Model;

use Jane\Component\OpenApi3\Tests\Expected\Api1\Runtime\AdditionalAndPatternProperties;
use Jane\Component\OpenApi3\Tests\Expected\Api1\Runtime\AdditionalPropertiesInterface;
class Body implements AdditionalPropertiesInterface
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