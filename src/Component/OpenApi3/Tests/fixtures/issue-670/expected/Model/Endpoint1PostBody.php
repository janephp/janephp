<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Issue670\Model;

use Jane\Component\OpenApi3\Tests\Expected\Issue670\Runtime\AdditionalAndPatternProperties;
use Jane\Component\OpenApi3\Tests\Expected\Issue670\Runtime\AdditionalPropertiesInterface;
class Endpoint1PostBody implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var string
     */
    public string $postField1;
    public function definedProperties(): array
    {
        return ['postField1' => 'post-field-1'];
    }
}