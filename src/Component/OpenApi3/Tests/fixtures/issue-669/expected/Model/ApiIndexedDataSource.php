<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ApiIndexedDataSource implements AdditionalPropertiesInterface
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
     * Timestamp when data source completed indexing
     *
     * @var \DateTime
     */
    protected $completedAt;
    /**
     * Uuid of the indexed data source
     *
     * @var string
     */
    protected $dataSourceUuid;
    /**
     * A detailed error description
     *
     * @var string
     */
    protected $errorDetails;
    /**
     * A string code provinding a hint which part of the system experienced an error
     *
     * @var string
     */
    protected $errorMsg;
    /**
     * Total count of files that have failed
     *
     * @var string
     */
    protected $failedItemCount;
    /**
     * Total count of files that have been indexed
     *
     * @var string
     */
    protected $indexedFileCount;
    /**
     * Total count of files that have been indexed
     *
     * @var string
     */
    protected $indexedItemCount;
    /**
     * Total count of files that have been removed
     *
     * @var string
     */
    protected $removedItemCount;
    /**
     * Total count of files that have been skipped
     *
     * @var string
     */
    protected $skippedItemCount;
    /**
     * Timestamp when data source started indexing
     *
     * @var \DateTime
     */
    protected $startedAt;
    /**
     * @var string
     */
    protected $status = 'DATA_SOURCE_STATUS_UNKNOWN';
    /**
     * Total size of files in data source in bytes
     *
     * @var string
     */
    protected $totalBytes;
    /**
     * Total size of files in data source in bytes that have been indexed
     *
     * @var string
     */
    protected $totalBytesIndexed;
    /**
     * Total file count in the data source
     *
     * @var string
     */
    protected $totalFileCount;
    /**
     * Timestamp when data source completed indexing
     *
     * @return \DateTime
     */
    public function getCompletedAt(): \DateTime
    {
        return $this->completedAt;
    }
    /**
     * Timestamp when data source completed indexing
     *
     * @param \DateTime $completedAt
     *
     * @return self
     */
    public function setCompletedAt(\DateTime $completedAt): self
    {
        $this->initialized['completedAt'] = true;
        $this->completedAt = $completedAt;
        return $this;
    }
    /**
     * Uuid of the indexed data source
     *
     * @return string
     */
    public function getDataSourceUuid(): string
    {
        return $this->dataSourceUuid;
    }
    /**
     * Uuid of the indexed data source
     *
     * @param string $dataSourceUuid
     *
     * @return self
     */
    public function setDataSourceUuid(string $dataSourceUuid): self
    {
        $this->initialized['dataSourceUuid'] = true;
        $this->dataSourceUuid = $dataSourceUuid;
        return $this;
    }
    /**
     * A detailed error description
     *
     * @return string
     */
    public function getErrorDetails(): string
    {
        return $this->errorDetails;
    }
    /**
     * A detailed error description
     *
     * @param string $errorDetails
     *
     * @return self
     */
    public function setErrorDetails(string $errorDetails): self
    {
        $this->initialized['errorDetails'] = true;
        $this->errorDetails = $errorDetails;
        return $this;
    }
    /**
     * A string code provinding a hint which part of the system experienced an error
     *
     * @return string
     */
    public function getErrorMsg(): string
    {
        return $this->errorMsg;
    }
    /**
     * A string code provinding a hint which part of the system experienced an error
     *
     * @param string $errorMsg
     *
     * @return self
     */
    public function setErrorMsg(string $errorMsg): self
    {
        $this->initialized['errorMsg'] = true;
        $this->errorMsg = $errorMsg;
        return $this;
    }
    /**
     * Total count of files that have failed
     *
     * @return string
     */
    public function getFailedItemCount(): string
    {
        return $this->failedItemCount;
    }
    /**
     * Total count of files that have failed
     *
     * @param string $failedItemCount
     *
     * @return self
     */
    public function setFailedItemCount(string $failedItemCount): self
    {
        $this->initialized['failedItemCount'] = true;
        $this->failedItemCount = $failedItemCount;
        return $this;
    }
    /**
     * Total count of files that have been indexed
     *
     * @return string
     */
    public function getIndexedFileCount(): string
    {
        return $this->indexedFileCount;
    }
    /**
     * Total count of files that have been indexed
     *
     * @param string $indexedFileCount
     *
     * @return self
     */
    public function setIndexedFileCount(string $indexedFileCount): self
    {
        $this->initialized['indexedFileCount'] = true;
        $this->indexedFileCount = $indexedFileCount;
        return $this;
    }
    /**
     * Total count of files that have been indexed
     *
     * @return string
     */
    public function getIndexedItemCount(): string
    {
        return $this->indexedItemCount;
    }
    /**
     * Total count of files that have been indexed
     *
     * @param string $indexedItemCount
     *
     * @return self
     */
    public function setIndexedItemCount(string $indexedItemCount): self
    {
        $this->initialized['indexedItemCount'] = true;
        $this->indexedItemCount = $indexedItemCount;
        return $this;
    }
    /**
     * Total count of files that have been removed
     *
     * @return string
     */
    public function getRemovedItemCount(): string
    {
        return $this->removedItemCount;
    }
    /**
     * Total count of files that have been removed
     *
     * @param string $removedItemCount
     *
     * @return self
     */
    public function setRemovedItemCount(string $removedItemCount): self
    {
        $this->initialized['removedItemCount'] = true;
        $this->removedItemCount = $removedItemCount;
        return $this;
    }
    /**
     * Total count of files that have been skipped
     *
     * @return string
     */
    public function getSkippedItemCount(): string
    {
        return $this->skippedItemCount;
    }
    /**
     * Total count of files that have been skipped
     *
     * @param string $skippedItemCount
     *
     * @return self
     */
    public function setSkippedItemCount(string $skippedItemCount): self
    {
        $this->initialized['skippedItemCount'] = true;
        $this->skippedItemCount = $skippedItemCount;
        return $this;
    }
    /**
     * Timestamp when data source started indexing
     *
     * @return \DateTime
     */
    public function getStartedAt(): \DateTime
    {
        return $this->startedAt;
    }
    /**
     * Timestamp when data source started indexing
     *
     * @param \DateTime $startedAt
     *
     * @return self
     */
    public function setStartedAt(\DateTime $startedAt): self
    {
        $this->initialized['startedAt'] = true;
        $this->startedAt = $startedAt;
        return $this;
    }
    /**
     * @return string
     */
    public function getStatus(): string
    {
        return $this->status;
    }
    /**
     * @param string $status
     *
     * @return self
     */
    public function setStatus(string $status): self
    {
        $this->initialized['status'] = true;
        $this->status = $status;
        return $this;
    }
    /**
     * Total size of files in data source in bytes
     *
     * @return string
     */
    public function getTotalBytes(): string
    {
        return $this->totalBytes;
    }
    /**
     * Total size of files in data source in bytes
     *
     * @param string $totalBytes
     *
     * @return self
     */
    public function setTotalBytes(string $totalBytes): self
    {
        $this->initialized['totalBytes'] = true;
        $this->totalBytes = $totalBytes;
        return $this;
    }
    /**
     * Total size of files in data source in bytes that have been indexed
     *
     * @return string
     */
    public function getTotalBytesIndexed(): string
    {
        return $this->totalBytesIndexed;
    }
    /**
     * Total size of files in data source in bytes that have been indexed
     *
     * @param string $totalBytesIndexed
     *
     * @return self
     */
    public function setTotalBytesIndexed(string $totalBytesIndexed): self
    {
        $this->initialized['totalBytesIndexed'] = true;
        $this->totalBytesIndexed = $totalBytesIndexed;
        return $this;
    }
    /**
     * Total file count in the data source
     *
     * @return string
     */
    public function getTotalFileCount(): string
    {
        return $this->totalFileCount;
    }
    /**
     * Total file count in the data source
     *
     * @param string $totalFileCount
     *
     * @return self
     */
    public function setTotalFileCount(string $totalFileCount): self
    {
        $this->initialized['totalFileCount'] = true;
        $this->totalFileCount = $totalFileCount;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['completedAt' => ['completed_at', 'getCompletedAt', 'setCompletedAt'], 'dataSourceUuid' => ['data_source_uuid', 'getDataSourceUuid', 'setDataSourceUuid'], 'errorDetails' => ['error_details', 'getErrorDetails', 'setErrorDetails'], 'errorMsg' => ['error_msg', 'getErrorMsg', 'setErrorMsg'], 'failedItemCount' => ['failed_item_count', 'getFailedItemCount', 'setFailedItemCount'], 'indexedFileCount' => ['indexed_file_count', 'getIndexedFileCount', 'setIndexedFileCount'], 'indexedItemCount' => ['indexed_item_count', 'getIndexedItemCount', 'setIndexedItemCount'], 'removedItemCount' => ['removed_item_count', 'getRemovedItemCount', 'setRemovedItemCount'], 'skippedItemCount' => ['skipped_item_count', 'getSkippedItemCount', 'setSkippedItemCount'], 'startedAt' => ['started_at', 'getStartedAt', 'setStartedAt'], 'status' => ['status', 'getStatus', 'setStatus'], 'totalBytes' => ['total_bytes', 'getTotalBytes', 'setTotalBytes'], 'totalBytesIndexed' => ['total_bytes_indexed', 'getTotalBytesIndexed', 'setTotalBytesIndexed'], 'totalFileCount' => ['total_file_count', 'getTotalFileCount', 'setTotalFileCount']];
    }
}