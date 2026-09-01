<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

use Jane\Component\OpenApi3\Tests\Expected\Runtime\AdditionalAndPatternProperties;
use Jane\Component\OpenApi3\Tests\Expected\Runtime\AdditionalPropertiesInterface;
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