<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ApiGetEvaluationRunOutput implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var ApiEvaluationRun
     */
    public ApiEvaluationRun $evaluationRun;
    public function definedProperties(): array
    {
        return ['evaluationRun' => 'evaluation_run'];
    }
}