<?php

namespace Jane\Component\OpenApi3\Tests\Expected\NoReferenceBody\Model;

use Jane\Component\OpenApi3\Tests\Expected\NoReferenceBody\Runtime\AdditionalAndPatternProperties;
use Jane\Component\OpenApi3\Tests\Expected\NoReferenceBody\Runtime\AdditionalPropertiesInterface;
class TestGetBodyBaz implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var string
     */
    public string $baz;
    public function definedProperties(): array
    {
        return ['baz' => 'baz'];
    }
}