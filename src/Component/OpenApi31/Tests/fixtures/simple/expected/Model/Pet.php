<?php

namespace Jane\Component\OpenApi31\Tests\Expected\Simple\Model;

use Jane\Component\OpenApi31\Tests\Expected\Simple\Runtime\AdditionalAndPatternProperties;
use Jane\Component\OpenApi31\Tests\Expected\Simple\Runtime\AdditionalPropertiesInterface;
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
     * @var string|null
     */
    public ?string $tag;
    public function definedProperties(): array
    {
        return ['id' => 'id', 'name' => 'name', 'tag' => 'tag'];
    }
}