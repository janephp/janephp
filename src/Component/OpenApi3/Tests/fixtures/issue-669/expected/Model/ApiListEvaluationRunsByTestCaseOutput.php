<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ApiListEvaluationRunsByTestCaseOutput implements AdditionalPropertiesInterface
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
     * List of evaluation runs.
     *
     * @var list<ApiEvaluationRun>
     */
    protected $evaluationRuns;
    /**
     * List of evaluation runs.
     *
     * @return list<ApiEvaluationRun>
     */
    public function getEvaluationRuns(): array
    {
        return $this->evaluationRuns;
    }
    /**
     * List of evaluation runs.
     *
     * @param list<ApiEvaluationRun> $evaluationRuns
     *
     * @return self
     */
    public function setEvaluationRuns(array $evaluationRuns): self
    {
        $this->initialized['evaluationRuns'] = true;
        $this->evaluationRuns = $evaluationRuns;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['evaluationRuns' => ['evaluation_runs', 'getEvaluationRuns', 'setEvaluationRuns']];
    }
}