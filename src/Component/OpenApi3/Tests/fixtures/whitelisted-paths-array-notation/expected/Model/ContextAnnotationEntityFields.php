<?php

namespace Jane\OpenApi3\Tests\Expected\WhitelistedPathsArrayNotation\Model;

use Jane\OpenApi3\Tests\Expected\WhitelistedPathsArrayNotation\Runtime\AdditionalAndPatternProperties;
use Jane\OpenApi3\Tests\Expected\WhitelistedPathsArrayNotation\Runtime\AdditionalPropertiesInterface;
class ContextAnnotationEntityFields implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * The unique id for a context annotation entity.
     *
     * @var string
     */
    public string $id;
    /**
     * Name of the context annotation entity.
     *
     * @var string
     */
    public string $name;
    /**
     * Description of the context annotation entity.
     *
     * @var string
     */
    public string $description;
    public function definedProperties(): array
    {
        return ['id' => 'id', 'name' => 'name', 'description' => 'description'];
    }
}