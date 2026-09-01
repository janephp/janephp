<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Issue670\Model;

use Jane\Component\OpenApi3\Tests\Expected\Issue670\Runtime\AdditionalAndPatternProperties;
use Jane\Component\OpenApi3\Tests\Expected\Issue670\Runtime\AdditionalPropertiesInterface;
class Endpoint3GetResponse200 implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var Endpoint3GetResponse200Field3
     */
    public Endpoint3GetResponse200Field3 $field3;
    public function definedProperties(): array
    {
        return ['field3' => 'field-3'];
    }
}