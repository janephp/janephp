<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

use Jane\Component\OpenApi3\Tests\Expected\Runtime\AdditionalAndPatternProperties;
use Jane\Component\OpenApi3\Tests\Expected\Runtime\AdditionalPropertiesInterface;
class SciSciProfileList implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var list<SciSciProfile>
     */
    public array $list;
    /**
     * @var SciSciProfileListExtra
     */
    public SciSciProfileListExtra $extra;
    public function definedProperties(): array
    {
        return ['list' => 'list', 'extra' => 'extra'];
    }
}