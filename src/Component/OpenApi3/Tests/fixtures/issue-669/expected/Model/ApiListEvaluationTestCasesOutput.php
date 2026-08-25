<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ApiListEvaluationTestCasesOutput implements AdditionalPropertiesInterface
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
     * Alternative way of authentication for internal usage only - should not be exposed to public api
     *
     * @var list<ApiEvaluationTestCase>
     */
    protected $evaluationTestCases;
    /**
     * Alternative way of authentication for internal usage only - should not be exposed to public api
     *
     * @return list<ApiEvaluationTestCase>
     */
    public function getEvaluationTestCases(): array
    {
        return $this->evaluationTestCases;
    }
    /**
     * Alternative way of authentication for internal usage only - should not be exposed to public api
     *
     * @param list<ApiEvaluationTestCase> $evaluationTestCases
     *
     * @return self
     */
    public function setEvaluationTestCases(array $evaluationTestCases): self
    {
        $this->initialized['evaluationTestCases'] = true;
        $this->evaluationTestCases = $evaluationTestCases;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['evaluationTestCases' => ['evaluation_test_cases', 'getEvaluationTestCases', 'setEvaluationTestCases']];
    }
}