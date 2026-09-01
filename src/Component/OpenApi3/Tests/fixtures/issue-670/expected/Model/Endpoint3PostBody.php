<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

use Jane\Component\OpenApi3\Tests\Expected\Runtime\AdditionalAndPatternProperties;
use Jane\Component\OpenApi3\Tests\Expected\Runtime\AdditionalPropertiesInterface;
class Endpoint3PostBody implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var Endpoint3PostBodyPostField3
     */
    public Endpoint3PostBodyPostField3 $postField3;
    public function definedProperties(): array
    {
        return ['postField3' => 'post-field-3'];
    }
}