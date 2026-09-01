<?php

namespace Jane\Component\OpenApi3\Tests\Expected\ModelTypeReference\Model;

use Jane\Component\OpenApi3\Tests\Expected\ModelTypeReference\Runtime\AdditionalAndPatternProperties;
use Jane\Component\OpenApi3\Tests\Expected\ModelTypeReference\Runtime\AdditionalPropertiesInterface;
class Model implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var string
     */
    public string $foo;
    /**
     * @var string
     */
    public string $bar;
    public function definedProperties(): array
    {
        return ['foo' => 'foo', 'bar' => 'bar'];
    }
}