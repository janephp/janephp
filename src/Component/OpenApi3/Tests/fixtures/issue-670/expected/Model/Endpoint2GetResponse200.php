<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Issue670\Model;

use Jane\Component\OpenApi3\Tests\Expected\Issue670\Runtime\AdditionalAndPatternProperties;
use Jane\Component\OpenApi3\Tests\Expected\Issue670\Runtime\AdditionalPropertiesInterface;
class Endpoint2GetResponse200 implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var string
     */
    public string $field2;
    public function definedProperties(): array
    {
        return ['field2' => 'field-2'];
    }
}