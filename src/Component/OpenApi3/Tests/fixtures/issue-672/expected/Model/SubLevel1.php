<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

use Jane\Component\OpenApi3\Tests\Expected\Runtime\AdditionalAndPatternProperties;
use Jane\Component\OpenApi3\Tests\Expected\Runtime\AdditionalPropertiesInterface;
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