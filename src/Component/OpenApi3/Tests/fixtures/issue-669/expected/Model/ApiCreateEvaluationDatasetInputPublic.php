<?php

namespace Jane\Generated\DigitalOcean\Model;

class ApiCreateEvaluationDatasetInputPublic extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
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
}