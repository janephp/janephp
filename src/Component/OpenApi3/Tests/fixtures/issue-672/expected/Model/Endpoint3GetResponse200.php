<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Issue672\Model;

use Jane\Component\OpenApi3\Tests\Expected\Issue672\Runtime\AdditionalAndPatternProperties;
use Jane\Component\OpenApi3\Tests\Expected\Issue672\Runtime\AdditionalPropertiesInterface;
class Endpoint3GetResponse200 implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var string
     */
    public string $field3;
    public function definedProperties(): array
    {
        return ['field3' => 'field-3'];
    }
}