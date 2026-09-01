<?php

namespace Jane\Component\OpenApi3\Tests\Expected\ResponseReference\Model;

use Jane\Component\OpenApi3\Tests\Expected\ResponseReference\Runtime\AdditionalAndPatternProperties;
use Jane\Component\OpenApi3\Tests\Expected\ResponseReference\Runtime\AdditionalPropertiesInterface;
class ResponseCommon implements AdditionalPropertiesInterface
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