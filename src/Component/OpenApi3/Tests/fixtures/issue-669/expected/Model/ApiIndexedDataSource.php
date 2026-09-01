<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ApiIndexedDataSource implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * Timestamp when data source completed indexing
     *
     * @var \DateTime
     */
    public \DateTime $completedAt;
    /**
     * Uuid of the indexed data source
     *
     * @var string
     */
    public string $dataSourceUuid;
    /**
     * A detailed error description
     *
     * @var string
     */
    public string $errorDetails;
    /**
     * A string code provinding a hint which part of the system experienced an error
     *
     * @var string
     */
    public string $errorMsg;
    /**
     * Total count of files that have failed
     *
     * @var string
     */
    public string $failedItemCount;
    /**
     * Total count of files that have been indexed
     *
     * @var string
     */
    public string $indexedFileCount;
    /**
     * Total count of files that have been indexed
     *
     * @var string
     */
    public string $indexedItemCount;
    /**
     * Total count of files that have been removed
     *
     * @var string
     */
    public string $removedItemCount;
    /**
     * Total count of files that have been skipped
     *
     * @var string
     */
    public string $skippedItemCount;
    /**
     * Timestamp when data source started indexing
     *
     * @var \DateTime
     */
    public \DateTime $startedAt;
    /**
     * @var string
     */
    public string $status = 'DATA_SOURCE_STATUS_UNKNOWN';
    /**
     * Total size of files in data source in bytes
     *
     * @var string
     */
    public string $totalBytes;
    /**
     * Total size of files in data source in bytes that have been indexed
     *
     * @var string
     */
    public string $totalBytesIndexed;
    /**
     * Total file count in the data source
     *
     * @var string
     */
    public string $totalFileCount;
    public function definedProperties(): array
    {
        return ['completedAt' => 'completed_at', 'dataSourceUuid' => 'data_source_uuid', 'errorDetails' => 'error_details', 'errorMsg' => 'error_msg', 'failedItemCount' => 'failed_item_count', 'indexedFileCount' => 'indexed_file_count', 'indexedItemCount' => 'indexed_item_count', 'removedItemCount' => 'removed_item_count', 'skippedItemCount' => 'skipped_item_count', 'startedAt' => 'started_at', 'status' => 'status', 'totalBytes' => 'total_bytes', 'totalBytesIndexed' => 'total_bytes_indexed', 'totalFileCount' => 'total_file_count'];
    }
}