<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ApiCreateEvaluationDatasetOutput implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * Evaluation dataset uuid.
     *
     * @var string
     */
    public string $evaluationDatasetUuid;
    public function definedProperties(): array
    {
        return ['evaluationDatasetUuid' => 'evaluation_dataset_uuid'];
    }
}