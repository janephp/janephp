<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ApiGetEvaluationRunOutput implements AdditionalPropertiesInterface
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
     * @var ApiEvaluationRun
     */
    protected $evaluationRun;
    /**
     * @return ApiEvaluationRun
     */
    public function getEvaluationRun(): ApiEvaluationRun
    {
        return $this->evaluationRun;
    }
    /**
     * @param ApiEvaluationRun $evaluationRun
     *
     * @return self
     */
    public function setEvaluationRun(ApiEvaluationRun $evaluationRun): self
    {
        $this->initialized['evaluationRun'] = true;
        $this->evaluationRun = $evaluationRun;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['evaluationRun' => ['evaluation_run', 'getEvaluationRun', 'setEvaluationRun']];
    }
}