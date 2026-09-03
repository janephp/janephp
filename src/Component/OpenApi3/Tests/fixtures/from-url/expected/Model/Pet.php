<?php

namespace Jane\Component\OpenApi3\Tests\Expected\FromUrl\Model;

use Jane\Component\OpenApi3\Tests\Expected\FromUrl\Runtime\AdditionalAndPatternProperties;
use Jane\Component\OpenApi3\Tests\Expected\FromUrl\Runtime\AdditionalPropertiesInterface;
class Pet implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var int
     */
    public int $id;
    /**
     * @var string
     */
    public string $name;
    /**
     * @var string
     */
    public string $tag;
    public function definedProperties(): array
    {
        return ['id' => 'id', 'name' => 'name', 'tag' => 'tag'];
    }
}