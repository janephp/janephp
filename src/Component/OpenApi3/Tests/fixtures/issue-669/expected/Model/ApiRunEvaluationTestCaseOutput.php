<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ApiRunEvaluationTestCaseOutput implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var list<string>
     */
    public array $evaluationRunUuids;
    public function definedProperties(): array
    {
        return ['evaluationRunUuids' => 'evaluation_run_uuids'];
    }
}