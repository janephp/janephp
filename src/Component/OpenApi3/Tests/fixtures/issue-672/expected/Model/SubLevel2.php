<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Issue672\Model;

use Jane\Component\OpenApi3\Tests\Expected\Issue672\Runtime\AdditionalAndPatternProperties;
use Jane\Component\OpenApi3\Tests\Expected\Issue672\Runtime\AdditionalPropertiesInterface;
class SubLevel2 implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var SubLevel3
     */
    public SubLevel3 $subLevel3;
    public function definedProperties(): array
    {
        return ['subLevel3' => 'subLevel-3'];
    }
}