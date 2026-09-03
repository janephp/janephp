<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Parameters\Model;

use Jane\Component\OpenApi3\Tests\Expected\Parameters\Runtime\AdditionalAndPatternProperties;
use Jane\Component\OpenApi3\Tests\Expected\Parameters\Runtime\AdditionalPropertiesInterface;
class TestFormFilePostBody implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var string|resource|\Psr\Http\Message\StreamInterface
     */
    public $testFile;
    public function definedProperties(): array
    {
        return ['testFile' => 'testFile'];
    }
}