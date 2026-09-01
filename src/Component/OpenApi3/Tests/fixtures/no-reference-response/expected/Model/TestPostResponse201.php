<?php

namespace Jane\Component\OpenApi3\Tests\Expected\NoReferenceResponse\Model;

use Jane\Component\OpenApi3\Tests\Expected\NoReferenceResponse\Runtime\AdditionalAndPatternProperties;
use Jane\Component\OpenApi3\Tests\Expected\NoReferenceResponse\Runtime\AdditionalPropertiesInterface;
class TestPostResponse201 implements AdditionalPropertiesInterface
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