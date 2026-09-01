<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Issue672\Model;

use Jane\Component\OpenApi3\Tests\Expected\Issue672\Runtime\AdditionalAndPatternProperties;
use Jane\Component\OpenApi3\Tests\Expected\Issue672\Runtime\AdditionalPropertiesInterface;
class SubLevel1 implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var SubLevel2
     */
    public SubLevel2 $subLevel2;
    public function definedProperties(): array
    {
        return ['subLevel2' => 'subLevel-2'];
    }
}