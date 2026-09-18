<?php

namespace Jane\OpenApi3\Tests\Expected\WhitelistedPathsArrayNotation\Model;

use Jane\OpenApi3\Tests\Expected\WhitelistedPathsArrayNotation\Runtime\AdditionalAndPatternProperties;
use Jane\OpenApi3\Tests\Expected\WhitelistedPathsArrayNotation\Runtime\AdditionalPropertiesInterface;
class ResourceNotFoundProblem implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var string
     */
    public string $type;
    /**
     * @var string
     */
    public string $parameter;
    /**
     * Value will match the schema of the field.
     *
     * @var mixed
     */
    public $value;
    /**
     * @var string
     */
    public string $resourceType;
    /**
     * @var string
     */
    public string $title;
    /**
     * @var string
     */
    public string $detail;
    public function definedProperties(): array
    {
        return ['type' => 'type', 'parameter' => 'parameter', 'value' => 'value', 'resourceType' => 'resource_type', 'title' => 'title', 'detail' => 'detail'];
    }
}