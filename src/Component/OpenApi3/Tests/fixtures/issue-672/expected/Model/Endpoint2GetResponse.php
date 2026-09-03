<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Issue672\Model;

use Jane\Component\OpenApi3\Tests\Expected\Issue672\Runtime\AdditionalAndPatternProperties;
use Jane\Component\OpenApi3\Tests\Expected\Issue672\Runtime\AdditionalPropertiesInterface;
class Endpoint2GetResponse implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var SubLevel1
     */
    public SubLevel1 $field2;
    /**
     * @var SubLevel2
     */
    public SubLevel2 $field2Bis;
    public function definedProperties(): array
    {
        return ['field2' => 'field-2', 'field2Bis' => 'field-2-bis'];
    }
}