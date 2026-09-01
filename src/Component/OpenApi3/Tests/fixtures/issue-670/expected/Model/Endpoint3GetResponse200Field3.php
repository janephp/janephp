<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Issue670\Model;

use Jane\Component\OpenApi3\Tests\Expected\Issue670\Runtime\AdditionalAndPatternProperties;
use Jane\Component\OpenApi3\Tests\Expected\Issue670\Runtime\AdditionalPropertiesInterface;
class Endpoint3GetResponse200Field3 implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var string
     */
    public string $subField3;
    public function definedProperties(): array
    {
        return ['subField3' => 'sub-field-3'];
    }
}