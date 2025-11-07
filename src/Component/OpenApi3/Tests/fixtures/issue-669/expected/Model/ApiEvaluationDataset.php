<?php

namespace Jane\Generated\DigitalOcean\Model;

class ApiEvaluationDataset extends \ArrayObject
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
     * Time created at.
     *
     * @var \DateTime
     */
    protected $createdAt;
    /**
     * Name of the dataset.
     *
     * @var string
     */
    protected $datasetName;
    /**
     * UUID of the dataset.
     *
     * @var string
     */
    protected $datasetUuid;
    /**
     * The size of the dataset uploaded file in bytes.
     *
     * @var string
     */
    protected $fileSize;
    /**
     * Does the dataset have a ground truth column?
     *
     * @var bool
     */
    protected $hasGroundTruth;
    /**
     * Number of rows in the dataset.
     *
     * @var int
     */
    protected $rowCount;
    /**
     * Time created at.
     *
     * @return \DateTime
     */
    public function getCreatedAt(): \DateTime
    {
        return $this->createdAt;
    }
    /**
     * Time created at.
     *
     * @param \DateTime $createdAt
     *
     * @return self
     */
    public function setCreatedAt(\DateTime $createdAt): self
    {
        $this->initialized['createdAt'] = true;
        $this->createdAt = $createdAt;
        return $this;
    }
    /**
     * Name of the dataset.
     *
     * @return string
     */
    public function getDatasetName(): string
    {
        return $this->datasetName;
    }
    /**
     * Name of the dataset.
     *
     * @param string $datasetName
     *
     * @return self
     */
    public function setDatasetName(string $datasetName): self
    {
        $this->initialized['datasetName'] = true;
        $this->datasetName = $datasetName;
        return $this;
    }
    /**
     * UUID of the dataset.
     *
     * @return string
     */
    public function getDatasetUuid(): string
    {
        return $this->datasetUuid;
    }
    /**
     * UUID of the dataset.
     *
     * @param string $datasetUuid
     *
     * @return self
     */
    public function setDatasetUuid(string $datasetUuid): self
    {
        $this->initialized['datasetUuid'] = true;
        $this->datasetUuid = $datasetUuid;
        return $this;
    }
    /**
     * The size of the dataset uploaded file in bytes.
     *
     * @return string
     */
    public function getFileSize(): string
    {
        return $this->fileSize;
    }
    /**
     * The size of the dataset uploaded file in bytes.
     *
     * @param string $fileSize
     *
     * @return self
     */
    public function setFileSize(string $fileSize): self
    {
        $this->initialized['fileSize'] = true;
        $this->fileSize = $fileSize;
        return $this;
    }
    /**
     * Does the dataset have a ground truth column?
     *
     * @return bool
     */
    public function getHasGroundTruth(): bool
    {
        return $this->hasGroundTruth;
    }
    /**
     * Does the dataset have a ground truth column?
     *
     * @param bool $hasGroundTruth
     *
     * @return self
     */
    public function setHasGroundTruth(bool $hasGroundTruth): self
    {
        $this->initialized['hasGroundTruth'] = true;
        $this->hasGroundTruth = $hasGroundTruth;
        return $this;
    }
    /**
     * Number of rows in the dataset.
     *
     * @return int
     */
    public function getRowCount(): int
    {
        return $this->rowCount;
    }
    /**
     * Number of rows in the dataset.
     *
     * @param int $rowCount
     *
     * @return self
     */
    public function setRowCount(int $rowCount): self
    {
        $this->initialized['rowCount'] = true;
        $this->rowCount = $rowCount;
        return $this;
    }
}