<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ApiListEvaluationRunsByTestCaseOutput implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * List of evaluation runs.
     *
     * @var list<ApiEvaluationRun>
     */
    public array $evaluationRuns;
    public function definedProperties(): array
    {
        return ['evaluationRuns' => 'evaluation_runs'];
    }
}