<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ApiCreateEvaluationDatasetOutput implements AdditionalPropertiesInterface
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
     * Evaluation dataset uuid.
     *
     * @var string
     */
    protected $evaluationDatasetUuid;
    /**
     * Evaluation dataset uuid.
     *
     * @return string
     */
    public function getEvaluationDatasetUuid(): string
    {
        return $this->evaluationDatasetUuid;
    }
    /**
     * Evaluation dataset uuid.
     *
     * @param string $evaluationDatasetUuid
     *
     * @return self
     */
    public function setEvaluationDatasetUuid(string $evaluationDatasetUuid): self
    {
        $this->initialized['evaluationDatasetUuid'] = true;
        $this->evaluationDatasetUuid = $evaluationDatasetUuid;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['evaluationDatasetUuid' => ['evaluation_dataset_uuid', 'getEvaluationDatasetUuid', 'setEvaluationDatasetUuid']];
    }
}