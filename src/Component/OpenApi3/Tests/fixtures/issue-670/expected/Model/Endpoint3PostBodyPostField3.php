<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Issue670\Model;

use Jane\Component\OpenApi3\Tests\Expected\Issue670\Runtime\AdditionalAndPatternProperties;
use Jane\Component\OpenApi3\Tests\Expected\Issue670\Runtime\AdditionalPropertiesInterface;
class Endpoint3PostBodyPostField3 implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var string
     */
    public string $postSubField3;
    public function definedProperties(): array
    {
        return ['postSubField3' => 'post-sub-field-3'];
    }
}