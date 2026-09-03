<?php

namespace Jane\Component\OpenApi3\Tests\Expected\ReadOnlyProperties\Model;

use Jane\Component\OpenApi3\Tests\Expected\ReadOnlyProperties\Runtime\AdditionalAndPatternProperties;
use Jane\Component\OpenApi3\Tests\Expected\ReadOnlyProperties\Runtime\AdditionalPropertiesInterface;
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