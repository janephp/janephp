<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ApiListEvaluationTestCasesByWorkspaceOutput implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var list<ApiEvaluationTestCase>
     */
    public array $evaluationTestCases;
    public function definedProperties(): array
    {
        return ['evaluationTestCases' => 'evaluation_test_cases'];
    }
}