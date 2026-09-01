<?php

namespace Jane\Component\OpenApi31\Tests\Expected\Issue966\Model;

use Jane\Component\OpenApi31\Tests\Expected\Issue966\Runtime\AdditionalAndPatternProperties;
use Jane\Component\OpenApi31\Tests\Expected\Issue966\Runtime\AdditionalPropertiesInterface;
class OrderProduct implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var int
     */
    public int $id;
    public function definedProperties(): array
    {
        return ['id' => 'id'];
    }
}