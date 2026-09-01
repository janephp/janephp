<?php

namespace Jane\Component\OpenApi31\Tests\Client\Model;

use Jane\Component\OpenApi31\Tests\Client\Runtime\AdditionalAndPatternProperties;
use Jane\Component\OpenApi31\Tests\Client\Runtime\AdditionalPropertiesInterface;
class ThingDetails implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var string
     */
    public string $id;
    /**
     * @var string
     */
    public string $name;
    /**
     * @var string
     */
    public string $kind;
    /**
     * @var \DateTime
     */
    public \DateTime $createdAt;
    /**
     * @var list<string>
     */
    public array $tags;
    /**
     * @var string
     */
    public string $description;
    public function definedProperties(): array
    {
        return ['id' => 'id', 'name' => 'name', 'kind' => 'kind', 'createdAt' => 'createdAt', 'tags' => 'tags', 'description' => 'description'];
    }
}