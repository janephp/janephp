<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ApiCreateEvaluationDatasetInputPublic implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var string
     */
    public string $datasetType = 'EVALUATION_DATASET_TYPE_UNKNOWN';
    /**
     * File to upload as data source for knowledge base.
     *
     * @var ApiFileUploadDataSource
     */
    public ApiFileUploadDataSource $fileUploadDataset;
    /**
     * The name of the agent evaluation dataset.
     *
     * @var string
     */
    public string $name;
    public function definedProperties(): array
    {
        return ['datasetType' => 'dataset_type', 'fileUploadDataset' => 'file_upload_dataset', 'name' => 'name'];
    }
}