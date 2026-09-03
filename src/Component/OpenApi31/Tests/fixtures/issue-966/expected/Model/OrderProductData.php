<?php

namespace Jane\Component\OpenApi31\Tests\Expected\Issue966\Model;

use Jane\Component\OpenApi31\Tests\Expected\Issue966\Runtime\AdditionalAndPatternProperties;
use Jane\Component\OpenApi31\Tests\Expected\Issue966\Runtime\AdditionalPropertiesInterface;
class OrderProductData implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var string
     */
    public string $title;
    public function definedProperties(): array
    {
        return ['title' => 'title'];
    }
}