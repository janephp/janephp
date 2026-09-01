<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

use Jane\Component\OpenApi3\Tests\Expected\Runtime\AdditionalAndPatternProperties;
use Jane\Component\OpenApi3\Tests\Expected\Runtime\AdditionalPropertiesInterface;
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