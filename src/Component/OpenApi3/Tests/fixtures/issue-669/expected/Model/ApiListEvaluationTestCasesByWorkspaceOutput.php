<?php

namespace Jane\Generated\DigitalOcean\Model;

class ApiListEvaluationTestCasesByWorkspaceOutput extends \ArrayObject
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
     * @var list<ApiEvaluationTestCase>
     */
    protected $evaluationTestCases;
    /**
     * @return list<ApiEvaluationTestCase>
     */
    public function getEvaluationTestCases(): array
    {
        return $this->evaluationTestCases;
    }
    /**
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