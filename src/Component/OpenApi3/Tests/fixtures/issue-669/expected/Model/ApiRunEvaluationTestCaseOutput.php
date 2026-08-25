<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ApiRunEvaluationTestCaseOutput implements AdditionalPropertiesInterface
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
     * @var list<string>
     */
    protected $evaluationRunUuids;
    /**
     * @return list<string>
     */
    public function getEvaluationRunUuids(): array
    {
        return $this->evaluationRunUuids;
    }
    /**
     * @param list<string> $evaluationRunUuids
     *
     * @return self
     */
    public function setEvaluationRunUuids(array $evaluationRunUuids): self
    {
        $this->initialized['evaluationRunUuids'] = true;
        $this->evaluationRunUuids = $evaluationRunUuids;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['evaluationRunUuids' => ['evaluation_run_uuids', 'getEvaluationRunUuids', 'setEvaluationRunUuids']];
    }
}