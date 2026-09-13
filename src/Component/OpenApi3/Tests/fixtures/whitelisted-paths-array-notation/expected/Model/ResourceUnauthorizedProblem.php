<?php

namespace Jane\OpenApi3\Tests\Expected\WhitelistedPathsArrayNotation\Model;

use Jane\OpenApi3\Tests\Expected\WhitelistedPathsArrayNotation\Runtime\AdditionalAndPatternProperties;
use Jane\OpenApi3\Tests\Expected\WhitelistedPathsArrayNotation\Runtime\AdditionalPropertiesInterface;
class ResourceUnauthorizedProblem implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var string
     */
    public string $type;
    /**
     * @var string
     */
    public string $resourceId;
    /**
     * @var string
     */
    public string $resourceType;
    /**
     * @var string
     */
    public string $section;
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
        return ['type' => 'type', 'resourceId' => 'resource_id', 'resourceType' => 'resource_type', 'section' => 'section', 'title' => 'title', 'detail' => 'detail'];
    }
}