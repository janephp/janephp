<?php

namespace Jane\Component\OpenApi31\Tests\Client\Model;

use Jane\Component\OpenApi31\Tests\Client\Runtime\AdditionalAndPatternProperties;
use Jane\Component\OpenApi31\Tests\Client\Runtime\AdditionalPropertiesInterface;
class SimpleResponse implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var string
     */
    public string $foo;
    /**
     * @var bool
     */
    public bool $baz;
    public function definedProperties(): array
    {
        return ['foo' => 'foo', 'baz' => 'baz'];
    }
}