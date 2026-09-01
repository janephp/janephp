<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Issue828\Model;

use Jane\Component\OpenApi3\Tests\Expected\Issue828\Runtime\AdditionalAndPatternProperties;
use Jane\Component\OpenApi3\Tests\Expected\Issue828\Runtime\AdditionalPropertiesInterface;
class Bar implements AdditionalPropertiesInterface
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