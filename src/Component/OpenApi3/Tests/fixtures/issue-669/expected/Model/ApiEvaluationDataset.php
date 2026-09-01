<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ApiEvaluationDataset implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * Time created at.
     *
     * @var \DateTime
     */
    public \DateTime $createdAt;
    /**
     * Name of the dataset.
     *
     * @var string
     */
    public string $datasetName;
    /**
     * UUID of the dataset.
     *
     * @var string
     */
    public string $datasetUuid;
    /**
     * The size of the dataset uploaded file in bytes.
     *
     * @var string
     */
    public string $fileSize;
    /**
     * Does the dataset have a ground truth column?
     *
     * @var bool
     */
    public bool $hasGroundTruth;
    /**
     * Number of rows in the dataset.
     *
     * @var int
     */
    public int $rowCount;
    public function definedProperties(): array
    {
        return ['createdAt' => 'created_at', 'datasetName' => 'dataset_name', 'datasetUuid' => 'dataset_uuid', 'fileSize' => 'file_size', 'hasGroundTruth' => 'has_ground_truth', 'rowCount' => 'row_count'];
    }
}