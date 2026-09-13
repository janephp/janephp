<?php

namespace Jane\Component\OpenApi3\Tests\Expected\WhitelistedPaths\Model;

use Jane\Component\OpenApi3\Tests\Expected\WhitelistedPaths\Runtime\AdditionalAndPatternProperties;
use Jane\Component\OpenApi3\Tests\Expected\WhitelistedPaths\Runtime\AdditionalPropertiesInterface;
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