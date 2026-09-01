<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ApiListEvaluationTestCasesOutput implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * Alternative way of authentication for internal usage only - should not be exposed to public api
     *
     * @var list<ApiEvaluationTestCase>
     */
    public array $evaluationTestCases;
    public function definedProperties(): array
    {
        return ['evaluationTestCases' => 'evaluation_test_cases'];
    }
}