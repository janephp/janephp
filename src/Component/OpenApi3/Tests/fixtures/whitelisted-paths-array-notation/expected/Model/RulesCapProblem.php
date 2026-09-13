<?php

namespace Jane\OpenApi3\Tests\Expected\WhitelistedPathsArrayNotation\Model;

use Jane\OpenApi3\Tests\Expected\WhitelistedPathsArrayNotation\Runtime\AdditionalAndPatternProperties;
use Jane\OpenApi3\Tests\Expected\WhitelistedPathsArrayNotation\Runtime\AdditionalPropertiesInterface;
class RulesCapProblem implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var string
     */
    public string $type;
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
        return ['type' => 'type', 'title' => 'title', 'detail' => 'detail'];
    }
}