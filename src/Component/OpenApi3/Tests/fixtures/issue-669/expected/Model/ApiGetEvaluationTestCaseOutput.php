<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ApiGetEvaluationTestCaseOutput implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var ApiEvaluationTestCase
     */
    public ApiEvaluationTestCase $evaluationTestCase;
    public function definedProperties(): array
    {
        return ['evaluationTestCase' => 'evaluation_test_case'];
    }
}