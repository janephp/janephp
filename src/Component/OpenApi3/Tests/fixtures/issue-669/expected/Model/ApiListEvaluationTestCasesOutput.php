<?php

namespace Jane\Generated\DigitalOcean\Model;

class ApiListEvaluationTestCasesOutput extends \ArrayObject
{
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
}