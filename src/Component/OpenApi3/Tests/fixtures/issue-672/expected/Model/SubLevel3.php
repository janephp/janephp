<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Issue672\Model;

use Jane\Component\OpenApi3\Tests\Expected\Issue672\Runtime\AdditionalAndPatternProperties;
use Jane\Component\OpenApi3\Tests\Expected\Issue672\Runtime\AdditionalPropertiesInterface;
class SubLevel3 implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var string
     */
    public string $end;
    public function definedProperties(): array
    {
        return ['end' => 'end'];
    }
}