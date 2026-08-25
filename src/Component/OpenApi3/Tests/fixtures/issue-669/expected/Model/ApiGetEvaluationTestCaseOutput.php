<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ApiGetEvaluationTestCaseOutput implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * @var ApiEvaluationTestCase
     */
    protected $evaluationTestCase;
    /**
     * @return ApiEvaluationTestCase
     */
    public function getEvaluationTestCase(): ApiEvaluationTestCase
    {
        return $this->evaluationTestCase;
    }
    /**
     * @param ApiEvaluationTestCase $evaluationTestCase
     *
     * @return self
     */
    public function setEvaluationTestCase(ApiEvaluationTestCase $evaluationTestCase): self
    {
        $this->initialized['evaluationTestCase'] = true;
        $this->evaluationTestCase = $evaluationTestCase;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['evaluationTestCase' => ['evaluation_test_case', 'getEvaluationTestCase', 'setEvaluationTestCase']];
    }
}