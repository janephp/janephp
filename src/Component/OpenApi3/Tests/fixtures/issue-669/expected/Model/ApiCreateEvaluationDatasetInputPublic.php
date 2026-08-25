<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ApiCreateEvaluationDatasetInputPublic implements AdditionalPropertiesInterface
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
     * @var string
     */
    protected $datasetType = 'EVALUATION_DATASET_TYPE_UNKNOWN';
    /**
     * File to upload as data source for knowledge base.
     *
     * @var ApiFileUploadDataSource
     */
    protected $fileUploadDataset;
    /**
     * The name of the agent evaluation dataset.
     *
     * @var string
     */
    protected $name;
    /**
     * @return string
     */
    public function getDatasetType(): string
    {
        return $this->datasetType;
    }
    /**
     * @param string $datasetType
     *
     * @return self
     */
    public function setDatasetType(string $datasetType): self
    {
        $this->initialized['datasetType'] = true;
        $this->datasetType = $datasetType;
        return $this;
    }
    /**
     * File to upload as data source for knowledge base.
     *
     * @return ApiFileUploadDataSource
     */
    public function getFileUploadDataset(): ApiFileUploadDataSource
    {
        return $this->fileUploadDataset;
    }
    /**
     * File to upload as data source for knowledge base.
     *
     * @param ApiFileUploadDataSource $fileUploadDataset
     *
     * @return self
     */
    public function setFileUploadDataset(ApiFileUploadDataSource $fileUploadDataset): self
    {
        $this->initialized['fileUploadDataset'] = true;
        $this->fileUploadDataset = $fileUploadDataset;
        return $this;
    }
    /**
     * The name of the agent evaluation dataset.
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * The name of the agent evaluation dataset.
     *
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['datasetType' => ['dataset_type', 'getDatasetType', 'setDatasetType'], 'fileUploadDataset' => ['file_upload_dataset', 'getFileUploadDataset', 'setFileUploadDataset'], 'name' => ['name', 'getName', 'setName']];
    }
}