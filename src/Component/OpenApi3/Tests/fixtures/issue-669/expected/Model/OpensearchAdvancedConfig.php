<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class OpensearchAdvancedConfig implements AdditionalPropertiesInterface
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
     * Maximum content length for HTTP requests to the OpenSearch HTTP API, in bytes.
     *
     * @var int
     */
    protected $httpMaxContentLengthBytes = 100000000;
    /**
     * Maximum size of allowed headers, in bytes.
     *
     * @var int
     */
    protected $httpMaxHeaderSizeBytes = 8192;
    /**
     * Maximum length of an HTTP URL, in bytes.
     *
     * @var int
     */
    protected $httpMaxInitialLineLengthBytes = 4096;
    /**
     * Maximum number of clauses Lucene BooleanQuery can have.  Only increase it if necessary, as it may cause performance issues.
     *
     * @var int
     */
    protected $indicesQueryBoolMaxClauseCount = 1024;
    /**
     * Maximum amount of heap memory used for field data cache, expressed as a percentage. Decreasing the value too much will increase overhead of loading field data. Increasing the value too much will decrease amount of heap available for other operations.
     *
     * @var int
     */
    protected $indicesFielddataCacheSizePercentage;
    /**
     * Total amount of heap used for indexing buffer before writing segments to disk, expressed as a percentage. Too low value will slow down indexing; too high value will increase indexing performance but causes performance issues for query performance.
     *
     * @var int
     */
    protected $indicesMemoryIndexBufferSizePercentage = 10;
    /**
     * Minimum amount of heap used for indexing buffer before writing segments to disk, in mb. Works in conjunction with indices_memory_index_buffer_size_percentage, each being enforced.
     *
     * @var int
     */
    protected $indicesMemoryMinIndexBufferSizeMb = 48;
    /**
     * Maximum amount of heap used for indexing buffer before writing segments to disk, in mb. Works in conjunction with indices_memory_index_buffer_size_percentage, each being enforced. The default is unbounded.
     *
     * @var int
     */
    protected $indicesMemoryMaxIndexBufferSizeMb;
    /**
     * Maximum amount of heap used for query cache.  Too low value will decrease query performance and increase performance for other operations; too high value will cause issues with other functionality.
     *
     * @var int
     */
    protected $indicesQueriesCacheSizePercentage = 10;
    /**
     * Limits total inbound and outbound recovery traffic for each node, expressed in mb per second. Applies to both peer recoveries as well as snapshot recoveries (i.e., restores from a snapshot).
     *
     * @var int
     */
    protected $indicesRecoveryMaxMbPerSec = 40;
    /**
     * Maximum number of file chunks sent in parallel for each recovery.
     *
     * @var int
     */
    protected $indicesRecoveryMaxConcurrentFileChunks = 2;
    /**
     * Number of workers in the search operation thread pool.  Do note this may have maximum value depending on CPU count - value is automatically lowered if set to higher than maximum value.
     *
     * @var int
     */
    protected $threadPoolSearchSize;
    /**
     * Number of workers in the search throttled operation thread pool. This pool is used for searching frozen indices. Do note this may have maximum value depending on CPU count - value is automatically lowered if set to higher than maximum value.
     *
     * @var int
     */
    protected $threadPoolSearchThrottledSize;
    /**
     * Number of workers in the get operation thread pool.  Do note this may have maximum value depending on CPU count - value is automatically lowered if set to higher than maximum value.
     *
     * @var int
     */
    protected $threadPoolGetSize;
    /**
     * Number of workers in the analyze operation thread pool.  Do note this may have maximum value depending on CPU count - value is automatically lowered if set to higher than maximum value.
     *
     * @var int
     */
    protected $threadPoolAnalyzeSize;
    /**
     * Number of workers in the write operation thread pool.  Do note this may have maximum value depending on CPU count - value is automatically lowered if set to higher than maximum value.
     *
     * @var int
     */
    protected $threadPoolWriteSize;
    /**
     * Number of workers in the force merge operation thread pool. This pool is used for forcing a merge between shards of one or more indices. Do note this may have maximum value depending on CPU count - value is automatically lowered if set to higher than maximum value.
     *
     * @var int
     */
    protected $threadPoolForceMergeSize;
    /**
     * Size of queue for operations in the search thread pool.
     *
     * @var int
     */
    protected $threadPoolSearchQueueSize;
    /**
     * Size of queue for operations in the search throttled thread pool.
     *
     * @var int
     */
    protected $threadPoolSearchThrottledQueueSize;
    /**
     * Size of queue for operations in the get thread pool.
     *
     * @var int
     */
    protected $threadPoolGetQueueSize;
    /**
     * Size of queue for operations in the analyze thread pool.
     *
     * @var int
     */
    protected $threadPoolAnalyzeQueueSize;
    /**
     * Size of queue for operations in the write thread pool.
     *
     * @var int
     */
    protected $threadPoolWriteQueueSize;
    /**
     * Specifies whether ISM is enabled or not.
     *
     * @var bool
     */
    protected $ismEnabled = true;
    /**
     * Specifies whether audit history is enabled or not. The logs from ISM are automatically indexed to a logs document.
     *
     * @var bool
     */
    protected $ismHistoryEnabled = true;
    /**
     * Maximum age before rolling over the audit history index, in hours.
     *
     * @var int
     */
    protected $ismHistoryMaxAgeHours = 24;
    /**
     * Maximum number of documents before rolling over the audit history index.
     *
     * @var int
     */
    protected $ismHistoryMaxDocs = 2500000;
    /**
     * The time between rollover checks for the audit history index, in hours.
     *
     * @var int
     */
    protected $ismHistoryRolloverCheckPeriodHours = 8;
    /**
     * Length of time long audit history indices are kept, in days.
     *
     * @var int
     */
    protected $ismHistoryRolloverRetentionPeriodDays = 30;
    /**
     * Maximum number of aggregation buckets allowed in a single response.
     *
     * @var int
     */
    protected $searchMaxBuckets = 10000;
    /**
     * Specifices whether to allow automatic creation of indices.
     *
     * @var bool
     */
    protected $actionAutoCreateIndexEnabled = true;
    /**
     * Specifies whether to allow security audit logging.
     *
     * @var bool
     */
    protected $enableSecurityAudit = false;
    /**
     * Specifies whether to require explicit index names when deleting indices.
     *
     * @var bool
     */
    protected $actionDestructiveRequiresName;
    /**
     * Maximum number of shards allowed per data node.
     *
     * @var int
     */
    protected $clusterMaxShardsPerNode;
    /**
     * Compatibility mode sets OpenSearch to report its version as 7.10 so clients continue to work.
     *
     * @var bool
     */
    protected $overrideMainResponseVersion = false;
    /**
     * Limits the number of inline script compilations within a period of time. Default is use-context
     *
     * @var string
     */
    protected $scriptMaxCompilationsRate = 'use-context';
    /**
     * Maximum concurrent incoming/outgoing shard recoveries (normally replicas) are allowed to happen per node .
     *
     * @var int
     */
    protected $clusterRoutingAllocationNodeConcurrentRecoveries = 2;
    /**
     * Allowlist of remote IP addresses for reindexing. Changing this value will cause all OpenSearch instances to restart.
     *
     * @var list<string>
     */
    protected $reindexRemoteWhitelist;
    /**
     * Enable or disable filtering of alerting by backend roles.
     *
     * @var bool
     */
    protected $pluginsAlertingFilterByBackendRolesEnabled = false;
    /**
     * Enable or disable KNN memory circuit breaker.
     *
     * @var bool
     */
    protected $knnMemoryCircuitBreakerEnabled = true;
    /**
     * Maximum amount of memory in percentage that can be used for the KNN index. Defaults to 50% of the JVM heap size.  0 is used to set it to null which can be used to invalidate caches.
     *
     * @var int
     */
    protected $knnMemoryCircuitBreakerLimit = 50;
    /**
     * DigitalOcean automatically resets the `index.refresh_interval` to the default value (once per second) to  ensure that new documents are quickly available for search queries. If you are setting your own refresh intervals,  you can disable this by setting this field to true.
     *
     * @var bool
     */
    protected $keepIndexRefreshInterval = false;
    /**
     * Maximum content length for HTTP requests to the OpenSearch HTTP API, in bytes.
     *
     * @return int
     */
    public function getHttpMaxContentLengthBytes(): int
    {
        return $this->httpMaxContentLengthBytes;
    }
    /**
     * Maximum content length for HTTP requests to the OpenSearch HTTP API, in bytes.
     *
     * @param int $httpMaxContentLengthBytes
     *
     * @return self
     */
    public function setHttpMaxContentLengthBytes(int $httpMaxContentLengthBytes): self
    {
        $this->initialized['httpMaxContentLengthBytes'] = true;
        $this->httpMaxContentLengthBytes = $httpMaxContentLengthBytes;
        return $this;
    }
    /**
     * Maximum size of allowed headers, in bytes.
     *
     * @return int
     */
    public function getHttpMaxHeaderSizeBytes(): int
    {
        return $this->httpMaxHeaderSizeBytes;
    }
    /**
     * Maximum size of allowed headers, in bytes.
     *
     * @param int $httpMaxHeaderSizeBytes
     *
     * @return self
     */
    public function setHttpMaxHeaderSizeBytes(int $httpMaxHeaderSizeBytes): self
    {
        $this->initialized['httpMaxHeaderSizeBytes'] = true;
        $this->httpMaxHeaderSizeBytes = $httpMaxHeaderSizeBytes;
        return $this;
    }
    /**
     * Maximum length of an HTTP URL, in bytes.
     *
     * @return int
     */
    public function getHttpMaxInitialLineLengthBytes(): int
    {
        return $this->httpMaxInitialLineLengthBytes;
    }
    /**
     * Maximum length of an HTTP URL, in bytes.
     *
     * @param int $httpMaxInitialLineLengthBytes
     *
     * @return self
     */
    public function setHttpMaxInitialLineLengthBytes(int $httpMaxInitialLineLengthBytes): self
    {
        $this->initialized['httpMaxInitialLineLengthBytes'] = true;
        $this->httpMaxInitialLineLengthBytes = $httpMaxInitialLineLengthBytes;
        return $this;
    }
    /**
     * Maximum number of clauses Lucene BooleanQuery can have.  Only increase it if necessary, as it may cause performance issues.
     *
     * @return int
     */
    public function getIndicesQueryBoolMaxClauseCount(): int
    {
        return $this->indicesQueryBoolMaxClauseCount;
    }
    /**
     * Maximum number of clauses Lucene BooleanQuery can have.  Only increase it if necessary, as it may cause performance issues.
     *
     * @param int $indicesQueryBoolMaxClauseCount
     *
     * @return self
     */
    public function setIndicesQueryBoolMaxClauseCount(int $indicesQueryBoolMaxClauseCount): self
    {
        $this->initialized['indicesQueryBoolMaxClauseCount'] = true;
        $this->indicesQueryBoolMaxClauseCount = $indicesQueryBoolMaxClauseCount;
        return $this;
    }
    /**
     * Maximum amount of heap memory used for field data cache, expressed as a percentage. Decreasing the value too much will increase overhead of loading field data. Increasing the value too much will decrease amount of heap available for other operations.
     *
     * @return int
     */
    public function getIndicesFielddataCacheSizePercentage(): int
    {
        return $this->indicesFielddataCacheSizePercentage;
    }
    /**
     * Maximum amount of heap memory used for field data cache, expressed as a percentage. Decreasing the value too much will increase overhead of loading field data. Increasing the value too much will decrease amount of heap available for other operations.
     *
     * @param int $indicesFielddataCacheSizePercentage
     *
     * @return self
     */
    public function setIndicesFielddataCacheSizePercentage(int $indicesFielddataCacheSizePercentage): self
    {
        $this->initialized['indicesFielddataCacheSizePercentage'] = true;
        $this->indicesFielddataCacheSizePercentage = $indicesFielddataCacheSizePercentage;
        return $this;
    }
    /**
     * Total amount of heap used for indexing buffer before writing segments to disk, expressed as a percentage. Too low value will slow down indexing; too high value will increase indexing performance but causes performance issues for query performance.
     *
     * @return int
     */
    public function getIndicesMemoryIndexBufferSizePercentage(): int
    {
        return $this->indicesMemoryIndexBufferSizePercentage;
    }
    /**
     * Total amount of heap used for indexing buffer before writing segments to disk, expressed as a percentage. Too low value will slow down indexing; too high value will increase indexing performance but causes performance issues for query performance.
     *
     * @param int $indicesMemoryIndexBufferSizePercentage
     *
     * @return self
     */
    public function setIndicesMemoryIndexBufferSizePercentage(int $indicesMemoryIndexBufferSizePercentage): self
    {
        $this->initialized['indicesMemoryIndexBufferSizePercentage'] = true;
        $this->indicesMemoryIndexBufferSizePercentage = $indicesMemoryIndexBufferSizePercentage;
        return $this;
    }
    /**
     * Minimum amount of heap used for indexing buffer before writing segments to disk, in mb. Works in conjunction with indices_memory_index_buffer_size_percentage, each being enforced.
     *
     * @return int
     */
    public function getIndicesMemoryMinIndexBufferSizeMb(): int
    {
        return $this->indicesMemoryMinIndexBufferSizeMb;
    }
    /**
     * Minimum amount of heap used for indexing buffer before writing segments to disk, in mb. Works in conjunction with indices_memory_index_buffer_size_percentage, each being enforced.
     *
     * @param int $indicesMemoryMinIndexBufferSizeMb
     *
     * @return self
     */
    public function setIndicesMemoryMinIndexBufferSizeMb(int $indicesMemoryMinIndexBufferSizeMb): self
    {
        $this->initialized['indicesMemoryMinIndexBufferSizeMb'] = true;
        $this->indicesMemoryMinIndexBufferSizeMb = $indicesMemoryMinIndexBufferSizeMb;
        return $this;
    }
    /**
     * Maximum amount of heap used for indexing buffer before writing segments to disk, in mb. Works in conjunction with indices_memory_index_buffer_size_percentage, each being enforced. The default is unbounded.
     *
     * @return int
     */
    public function getIndicesMemoryMaxIndexBufferSizeMb(): int
    {
        return $this->indicesMemoryMaxIndexBufferSizeMb;
    }
    /**
     * Maximum amount of heap used for indexing buffer before writing segments to disk, in mb. Works in conjunction with indices_memory_index_buffer_size_percentage, each being enforced. The default is unbounded.
     *
     * @param int $indicesMemoryMaxIndexBufferSizeMb
     *
     * @return self
     */
    public function setIndicesMemoryMaxIndexBufferSizeMb(int $indicesMemoryMaxIndexBufferSizeMb): self
    {
        $this->initialized['indicesMemoryMaxIndexBufferSizeMb'] = true;
        $this->indicesMemoryMaxIndexBufferSizeMb = $indicesMemoryMaxIndexBufferSizeMb;
        return $this;
    }
    /**
     * Maximum amount of heap used for query cache.  Too low value will decrease query performance and increase performance for other operations; too high value will cause issues with other functionality.
     *
     * @return int
     */
    public function getIndicesQueriesCacheSizePercentage(): int
    {
        return $this->indicesQueriesCacheSizePercentage;
    }
    /**
     * Maximum amount of heap used for query cache.  Too low value will decrease query performance and increase performance for other operations; too high value will cause issues with other functionality.
     *
     * @param int $indicesQueriesCacheSizePercentage
     *
     * @return self
     */
    public function setIndicesQueriesCacheSizePercentage(int $indicesQueriesCacheSizePercentage): self
    {
        $this->initialized['indicesQueriesCacheSizePercentage'] = true;
        $this->indicesQueriesCacheSizePercentage = $indicesQueriesCacheSizePercentage;
        return $this;
    }
    /**
     * Limits total inbound and outbound recovery traffic for each node, expressed in mb per second. Applies to both peer recoveries as well as snapshot recoveries (i.e., restores from a snapshot).
     *
     * @return int
     */
    public function getIndicesRecoveryMaxMbPerSec(): int
    {
        return $this->indicesRecoveryMaxMbPerSec;
    }
    /**
     * Limits total inbound and outbound recovery traffic for each node, expressed in mb per second. Applies to both peer recoveries as well as snapshot recoveries (i.e., restores from a snapshot).
     *
     * @param int $indicesRecoveryMaxMbPerSec
     *
     * @return self
     */
    public function setIndicesRecoveryMaxMbPerSec(int $indicesRecoveryMaxMbPerSec): self
    {
        $this->initialized['indicesRecoveryMaxMbPerSec'] = true;
        $this->indicesRecoveryMaxMbPerSec = $indicesRecoveryMaxMbPerSec;
        return $this;
    }
    /**
     * Maximum number of file chunks sent in parallel for each recovery.
     *
     * @return int
     */
    public function getIndicesRecoveryMaxConcurrentFileChunks(): int
    {
        return $this->indicesRecoveryMaxConcurrentFileChunks;
    }
    /**
     * Maximum number of file chunks sent in parallel for each recovery.
     *
     * @param int $indicesRecoveryMaxConcurrentFileChunks
     *
     * @return self
     */
    public function setIndicesRecoveryMaxConcurrentFileChunks(int $indicesRecoveryMaxConcurrentFileChunks): self
    {
        $this->initialized['indicesRecoveryMaxConcurrentFileChunks'] = true;
        $this->indicesRecoveryMaxConcurrentFileChunks = $indicesRecoveryMaxConcurrentFileChunks;
        return $this;
    }
    /**
     * Number of workers in the search operation thread pool.  Do note this may have maximum value depending on CPU count - value is automatically lowered if set to higher than maximum value.
     *
     * @return int
     */
    public function getThreadPoolSearchSize(): int
    {
        return $this->threadPoolSearchSize;
    }
    /**
     * Number of workers in the search operation thread pool.  Do note this may have maximum value depending on CPU count - value is automatically lowered if set to higher than maximum value.
     *
     * @param int $threadPoolSearchSize
     *
     * @return self
     */
    public function setThreadPoolSearchSize(int $threadPoolSearchSize): self
    {
        $this->initialized['threadPoolSearchSize'] = true;
        $this->threadPoolSearchSize = $threadPoolSearchSize;
        return $this;
    }
    /**
     * Number of workers in the search throttled operation thread pool. This pool is used for searching frozen indices. Do note this may have maximum value depending on CPU count - value is automatically lowered if set to higher than maximum value.
     *
     * @return int
     */
    public function getThreadPoolSearchThrottledSize(): int
    {
        return $this->threadPoolSearchThrottledSize;
    }
    /**
     * Number of workers in the search throttled operation thread pool. This pool is used for searching frozen indices. Do note this may have maximum value depending on CPU count - value is automatically lowered if set to higher than maximum value.
     *
     * @param int $threadPoolSearchThrottledSize
     *
     * @return self
     */
    public function setThreadPoolSearchThrottledSize(int $threadPoolSearchThrottledSize): self
    {
        $this->initialized['threadPoolSearchThrottledSize'] = true;
        $this->threadPoolSearchThrottledSize = $threadPoolSearchThrottledSize;
        return $this;
    }
    /**
     * Number of workers in the get operation thread pool.  Do note this may have maximum value depending on CPU count - value is automatically lowered if set to higher than maximum value.
     *
     * @return int
     */
    public function getThreadPoolGetSize(): int
    {
        return $this->threadPoolGetSize;
    }
    /**
     * Number of workers in the get operation thread pool.  Do note this may have maximum value depending on CPU count - value is automatically lowered if set to higher than maximum value.
     *
     * @param int $threadPoolGetSize
     *
     * @return self
     */
    public function setThreadPoolGetSize(int $threadPoolGetSize): self
    {
        $this->initialized['threadPoolGetSize'] = true;
        $this->threadPoolGetSize = $threadPoolGetSize;
        return $this;
    }
    /**
     * Number of workers in the analyze operation thread pool.  Do note this may have maximum value depending on CPU count - value is automatically lowered if set to higher than maximum value.
     *
     * @return int
     */
    public function getThreadPoolAnalyzeSize(): int
    {
        return $this->threadPoolAnalyzeSize;
    }
    /**
     * Number of workers in the analyze operation thread pool.  Do note this may have maximum value depending on CPU count - value is automatically lowered if set to higher than maximum value.
     *
     * @param int $threadPoolAnalyzeSize
     *
     * @return self
     */
    public function setThreadPoolAnalyzeSize(int $threadPoolAnalyzeSize): self
    {
        $this->initialized['threadPoolAnalyzeSize'] = true;
        $this->threadPoolAnalyzeSize = $threadPoolAnalyzeSize;
        return $this;
    }
    /**
     * Number of workers in the write operation thread pool.  Do note this may have maximum value depending on CPU count - value is automatically lowered if set to higher than maximum value.
     *
     * @return int
     */
    public function getThreadPoolWriteSize(): int
    {
        return $this->threadPoolWriteSize;
    }
    /**
     * Number of workers in the write operation thread pool.  Do note this may have maximum value depending on CPU count - value is automatically lowered if set to higher than maximum value.
     *
     * @param int $threadPoolWriteSize
     *
     * @return self
     */
    public function setThreadPoolWriteSize(int $threadPoolWriteSize): self
    {
        $this->initialized['threadPoolWriteSize'] = true;
        $this->threadPoolWriteSize = $threadPoolWriteSize;
        return $this;
    }
    /**
     * Number of workers in the force merge operation thread pool. This pool is used for forcing a merge between shards of one or more indices. Do note this may have maximum value depending on CPU count - value is automatically lowered if set to higher than maximum value.
     *
     * @return int
     */
    public function getThreadPoolForceMergeSize(): int
    {
        return $this->threadPoolForceMergeSize;
    }
    /**
     * Number of workers in the force merge operation thread pool. This pool is used for forcing a merge between shards of one or more indices. Do note this may have maximum value depending on CPU count - value is automatically lowered if set to higher than maximum value.
     *
     * @param int $threadPoolForceMergeSize
     *
     * @return self
     */
    public function setThreadPoolForceMergeSize(int $threadPoolForceMergeSize): self
    {
        $this->initialized['threadPoolForceMergeSize'] = true;
        $this->threadPoolForceMergeSize = $threadPoolForceMergeSize;
        return $this;
    }
    /**
     * Size of queue for operations in the search thread pool.
     *
     * @return int
     */
    public function getThreadPoolSearchQueueSize(): int
    {
        return $this->threadPoolSearchQueueSize;
    }
    /**
     * Size of queue for operations in the search thread pool.
     *
     * @param int $threadPoolSearchQueueSize
     *
     * @return self
     */
    public function setThreadPoolSearchQueueSize(int $threadPoolSearchQueueSize): self
    {
        $this->initialized['threadPoolSearchQueueSize'] = true;
        $this->threadPoolSearchQueueSize = $threadPoolSearchQueueSize;
        return $this;
    }
    /**
     * Size of queue for operations in the search throttled thread pool.
     *
     * @return int
     */
    public function getThreadPoolSearchThrottledQueueSize(): int
    {
        return $this->threadPoolSearchThrottledQueueSize;
    }
    /**
     * Size of queue for operations in the search throttled thread pool.
     *
     * @param int $threadPoolSearchThrottledQueueSize
     *
     * @return self
     */
    public function setThreadPoolSearchThrottledQueueSize(int $threadPoolSearchThrottledQueueSize): self
    {
        $this->initialized['threadPoolSearchThrottledQueueSize'] = true;
        $this->threadPoolSearchThrottledQueueSize = $threadPoolSearchThrottledQueueSize;
        return $this;
    }
    /**
     * Size of queue for operations in the get thread pool.
     *
     * @return int
     */
    public function getThreadPoolGetQueueSize(): int
    {
        return $this->threadPoolGetQueueSize;
    }
    /**
     * Size of queue for operations in the get thread pool.
     *
     * @param int $threadPoolGetQueueSize
     *
     * @return self
     */
    public function setThreadPoolGetQueueSize(int $threadPoolGetQueueSize): self
    {
        $this->initialized['threadPoolGetQueueSize'] = true;
        $this->threadPoolGetQueueSize = $threadPoolGetQueueSize;
        return $this;
    }
    /**
     * Size of queue for operations in the analyze thread pool.
     *
     * @return int
     */
    public function getThreadPoolAnalyzeQueueSize(): int
    {
        return $this->threadPoolAnalyzeQueueSize;
    }
    /**
     * Size of queue for operations in the analyze thread pool.
     *
     * @param int $threadPoolAnalyzeQueueSize
     *
     * @return self
     */
    public function setThreadPoolAnalyzeQueueSize(int $threadPoolAnalyzeQueueSize): self
    {
        $this->initialized['threadPoolAnalyzeQueueSize'] = true;
        $this->threadPoolAnalyzeQueueSize = $threadPoolAnalyzeQueueSize;
        return $this;
    }
    /**
     * Size of queue for operations in the write thread pool.
     *
     * @return int
     */
    public function getThreadPoolWriteQueueSize(): int
    {
        return $this->threadPoolWriteQueueSize;
    }
    /**
     * Size of queue for operations in the write thread pool.
     *
     * @param int $threadPoolWriteQueueSize
     *
     * @return self
     */
    public function setThreadPoolWriteQueueSize(int $threadPoolWriteQueueSize): self
    {
        $this->initialized['threadPoolWriteQueueSize'] = true;
        $this->threadPoolWriteQueueSize = $threadPoolWriteQueueSize;
        return $this;
    }
    /**
     * Specifies whether ISM is enabled or not.
     *
     * @return bool
     */
    public function getIsmEnabled(): bool
    {
        return $this->ismEnabled;
    }
    /**
     * Specifies whether ISM is enabled or not.
     *
     * @param bool $ismEnabled
     *
     * @return self
     */
    public function setIsmEnabled(bool $ismEnabled): self
    {
        $this->initialized['ismEnabled'] = true;
        $this->ismEnabled = $ismEnabled;
        return $this;
    }
    /**
     * Specifies whether audit history is enabled or not. The logs from ISM are automatically indexed to a logs document.
     *
     * @return bool
     */
    public function getIsmHistoryEnabled(): bool
    {
        return $this->ismHistoryEnabled;
    }
    /**
     * Specifies whether audit history is enabled or not. The logs from ISM are automatically indexed to a logs document.
     *
     * @param bool $ismHistoryEnabled
     *
     * @return self
     */
    public function setIsmHistoryEnabled(bool $ismHistoryEnabled): self
    {
        $this->initialized['ismHistoryEnabled'] = true;
        $this->ismHistoryEnabled = $ismHistoryEnabled;
        return $this;
    }
    /**
     * Maximum age before rolling over the audit history index, in hours.
     *
     * @return int
     */
    public function getIsmHistoryMaxAgeHours(): int
    {
        return $this->ismHistoryMaxAgeHours;
    }
    /**
     * Maximum age before rolling over the audit history index, in hours.
     *
     * @param int $ismHistoryMaxAgeHours
     *
     * @return self
     */
    public function setIsmHistoryMaxAgeHours(int $ismHistoryMaxAgeHours): self
    {
        $this->initialized['ismHistoryMaxAgeHours'] = true;
        $this->ismHistoryMaxAgeHours = $ismHistoryMaxAgeHours;
        return $this;
    }
    /**
     * Maximum number of documents before rolling over the audit history index.
     *
     * @return int
     */
    public function getIsmHistoryMaxDocs(): int
    {
        return $this->ismHistoryMaxDocs;
    }
    /**
     * Maximum number of documents before rolling over the audit history index.
     *
     * @param int $ismHistoryMaxDocs
     *
     * @return self
     */
    public function setIsmHistoryMaxDocs(int $ismHistoryMaxDocs): self
    {
        $this->initialized['ismHistoryMaxDocs'] = true;
        $this->ismHistoryMaxDocs = $ismHistoryMaxDocs;
        return $this;
    }
    /**
     * The time between rollover checks for the audit history index, in hours.
     *
     * @return int
     */
    public function getIsmHistoryRolloverCheckPeriodHours(): int
    {
        return $this->ismHistoryRolloverCheckPeriodHours;
    }
    /**
     * The time between rollover checks for the audit history index, in hours.
     *
     * @param int $ismHistoryRolloverCheckPeriodHours
     *
     * @return self
     */
    public function setIsmHistoryRolloverCheckPeriodHours(int $ismHistoryRolloverCheckPeriodHours): self
    {
        $this->initialized['ismHistoryRolloverCheckPeriodHours'] = true;
        $this->ismHistoryRolloverCheckPeriodHours = $ismHistoryRolloverCheckPeriodHours;
        return $this;
    }
    /**
     * Length of time long audit history indices are kept, in days.
     *
     * @return int
     */
    public function getIsmHistoryRolloverRetentionPeriodDays(): int
    {
        return $this->ismHistoryRolloverRetentionPeriodDays;
    }
    /**
     * Length of time long audit history indices are kept, in days.
     *
     * @param int $ismHistoryRolloverRetentionPeriodDays
     *
     * @return self
     */
    public function setIsmHistoryRolloverRetentionPeriodDays(int $ismHistoryRolloverRetentionPeriodDays): self
    {
        $this->initialized['ismHistoryRolloverRetentionPeriodDays'] = true;
        $this->ismHistoryRolloverRetentionPeriodDays = $ismHistoryRolloverRetentionPeriodDays;
        return $this;
    }
    /**
     * Maximum number of aggregation buckets allowed in a single response.
     *
     * @return int
     */
    public function getSearchMaxBuckets(): int
    {
        return $this->searchMaxBuckets;
    }
    /**
     * Maximum number of aggregation buckets allowed in a single response.
     *
     * @param int $searchMaxBuckets
     *
     * @return self
     */
    public function setSearchMaxBuckets(int $searchMaxBuckets): self
    {
        $this->initialized['searchMaxBuckets'] = true;
        $this->searchMaxBuckets = $searchMaxBuckets;
        return $this;
    }
    /**
     * Specifices whether to allow automatic creation of indices.
     *
     * @return bool
     */
    public function getActionAutoCreateIndexEnabled(): bool
    {
        return $this->actionAutoCreateIndexEnabled;
    }
    /**
     * Specifices whether to allow automatic creation of indices.
     *
     * @param bool $actionAutoCreateIndexEnabled
     *
     * @return self
     */
    public function setActionAutoCreateIndexEnabled(bool $actionAutoCreateIndexEnabled): self
    {
        $this->initialized['actionAutoCreateIndexEnabled'] = true;
        $this->actionAutoCreateIndexEnabled = $actionAutoCreateIndexEnabled;
        return $this;
    }
    /**
     * Specifies whether to allow security audit logging.
     *
     * @return bool
     */
    public function getEnableSecurityAudit(): bool
    {
        return $this->enableSecurityAudit;
    }
    /**
     * Specifies whether to allow security audit logging.
     *
     * @param bool $enableSecurityAudit
     *
     * @return self
     */
    public function setEnableSecurityAudit(bool $enableSecurityAudit): self
    {
        $this->initialized['enableSecurityAudit'] = true;
        $this->enableSecurityAudit = $enableSecurityAudit;
        return $this;
    }
    /**
     * Specifies whether to require explicit index names when deleting indices.
     *
     * @return bool
     */
    public function getActionDestructiveRequiresName(): bool
    {
        return $this->actionDestructiveRequiresName;
    }
    /**
     * Specifies whether to require explicit index names when deleting indices.
     *
     * @param bool $actionDestructiveRequiresName
     *
     * @return self
     */
    public function setActionDestructiveRequiresName(bool $actionDestructiveRequiresName): self
    {
        $this->initialized['actionDestructiveRequiresName'] = true;
        $this->actionDestructiveRequiresName = $actionDestructiveRequiresName;
        return $this;
    }
    /**
     * Maximum number of shards allowed per data node.
     *
     * @return int
     */
    public function getClusterMaxShardsPerNode(): int
    {
        return $this->clusterMaxShardsPerNode;
    }
    /**
     * Maximum number of shards allowed per data node.
     *
     * @param int $clusterMaxShardsPerNode
     *
     * @return self
     */
    public function setClusterMaxShardsPerNode(int $clusterMaxShardsPerNode): self
    {
        $this->initialized['clusterMaxShardsPerNode'] = true;
        $this->clusterMaxShardsPerNode = $clusterMaxShardsPerNode;
        return $this;
    }
    /**
     * Compatibility mode sets OpenSearch to report its version as 7.10 so clients continue to work.
     *
     * @return bool
     */
    public function getOverrideMainResponseVersion(): bool
    {
        return $this->overrideMainResponseVersion;
    }
    /**
     * Compatibility mode sets OpenSearch to report its version as 7.10 so clients continue to work.
     *
     * @param bool $overrideMainResponseVersion
     *
     * @return self
     */
    public function setOverrideMainResponseVersion(bool $overrideMainResponseVersion): self
    {
        $this->initialized['overrideMainResponseVersion'] = true;
        $this->overrideMainResponseVersion = $overrideMainResponseVersion;
        return $this;
    }
    /**
     * Limits the number of inline script compilations within a period of time. Default is use-context
     *
     * @return string
     */
    public function getScriptMaxCompilationsRate(): string
    {
        return $this->scriptMaxCompilationsRate;
    }
    /**
     * Limits the number of inline script compilations within a period of time. Default is use-context
     *
     * @param string $scriptMaxCompilationsRate
     *
     * @return self
     */
    public function setScriptMaxCompilationsRate(string $scriptMaxCompilationsRate): self
    {
        $this->initialized['scriptMaxCompilationsRate'] = true;
        $this->scriptMaxCompilationsRate = $scriptMaxCompilationsRate;
        return $this;
    }
    /**
     * Maximum concurrent incoming/outgoing shard recoveries (normally replicas) are allowed to happen per node .
     *
     * @return int
     */
    public function getClusterRoutingAllocationNodeConcurrentRecoveries(): int
    {
        return $this->clusterRoutingAllocationNodeConcurrentRecoveries;
    }
    /**
     * Maximum concurrent incoming/outgoing shard recoveries (normally replicas) are allowed to happen per node .
     *
     * @param int $clusterRoutingAllocationNodeConcurrentRecoveries
     *
     * @return self
     */
    public function setClusterRoutingAllocationNodeConcurrentRecoveries(int $clusterRoutingAllocationNodeConcurrentRecoveries): self
    {
        $this->initialized['clusterRoutingAllocationNodeConcurrentRecoveries'] = true;
        $this->clusterRoutingAllocationNodeConcurrentRecoveries = $clusterRoutingAllocationNodeConcurrentRecoveries;
        return $this;
    }
    /**
     * Allowlist of remote IP addresses for reindexing. Changing this value will cause all OpenSearch instances to restart.
     *
     * @return list<string>
     */
    public function getReindexRemoteWhitelist(): array
    {
        return $this->reindexRemoteWhitelist;
    }
    /**
     * Allowlist of remote IP addresses for reindexing. Changing this value will cause all OpenSearch instances to restart.
     *
     * @param list<string> $reindexRemoteWhitelist
     *
     * @return self
     */
    public function setReindexRemoteWhitelist(array $reindexRemoteWhitelist): self
    {
        $this->initialized['reindexRemoteWhitelist'] = true;
        $this->reindexRemoteWhitelist = $reindexRemoteWhitelist;
        return $this;
    }
    /**
     * Enable or disable filtering of alerting by backend roles.
     *
     * @return bool
     */
    public function getPluginsAlertingFilterByBackendRolesEnabled(): bool
    {
        return $this->pluginsAlertingFilterByBackendRolesEnabled;
    }
    /**
     * Enable or disable filtering of alerting by backend roles.
     *
     * @param bool $pluginsAlertingFilterByBackendRolesEnabled
     *
     * @return self
     */
    public function setPluginsAlertingFilterByBackendRolesEnabled(bool $pluginsAlertingFilterByBackendRolesEnabled): self
    {
        $this->initialized['pluginsAlertingFilterByBackendRolesEnabled'] = true;
        $this->pluginsAlertingFilterByBackendRolesEnabled = $pluginsAlertingFilterByBackendRolesEnabled;
        return $this;
    }
    /**
     * Enable or disable KNN memory circuit breaker.
     *
     * @return bool
     */
    public function getKnnMemoryCircuitBreakerEnabled(): bool
    {
        return $this->knnMemoryCircuitBreakerEnabled;
    }
    /**
     * Enable or disable KNN memory circuit breaker.
     *
     * @param bool $knnMemoryCircuitBreakerEnabled
     *
     * @return self
     */
    public function setKnnMemoryCircuitBreakerEnabled(bool $knnMemoryCircuitBreakerEnabled): self
    {
        $this->initialized['knnMemoryCircuitBreakerEnabled'] = true;
        $this->knnMemoryCircuitBreakerEnabled = $knnMemoryCircuitBreakerEnabled;
        return $this;
    }
    /**
     * Maximum amount of memory in percentage that can be used for the KNN index. Defaults to 50% of the JVM heap size.  0 is used to set it to null which can be used to invalidate caches.
     *
     * @return int
     */
    public function getKnnMemoryCircuitBreakerLimit(): int
    {
        return $this->knnMemoryCircuitBreakerLimit;
    }
    /**
     * Maximum amount of memory in percentage that can be used for the KNN index. Defaults to 50% of the JVM heap size.  0 is used to set it to null which can be used to invalidate caches.
     *
     * @param int $knnMemoryCircuitBreakerLimit
     *
     * @return self
     */
    public function setKnnMemoryCircuitBreakerLimit(int $knnMemoryCircuitBreakerLimit): self
    {
        $this->initialized['knnMemoryCircuitBreakerLimit'] = true;
        $this->knnMemoryCircuitBreakerLimit = $knnMemoryCircuitBreakerLimit;
        return $this;
    }
    /**
     * DigitalOcean automatically resets the `index.refresh_interval` to the default value (once per second) to  ensure that new documents are quickly available for search queries. If you are setting your own refresh intervals,  you can disable this by setting this field to true.
     *
     * @return bool
     */
    public function getKeepIndexRefreshInterval(): bool
    {
        return $this->keepIndexRefreshInterval;
    }
    /**
     * DigitalOcean automatically resets the `index.refresh_interval` to the default value (once per second) to  ensure that new documents are quickly available for search queries. If you are setting your own refresh intervals,  you can disable this by setting this field to true.
     *
     * @param bool $keepIndexRefreshInterval
     *
     * @return self
     */
    public function setKeepIndexRefreshInterval(bool $keepIndexRefreshInterval): self
    {
        $this->initialized['keepIndexRefreshInterval'] = true;
        $this->keepIndexRefreshInterval = $keepIndexRefreshInterval;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['httpMaxContentLengthBytes' => ['http_max_content_length_bytes', 'getHttpMaxContentLengthBytes', 'setHttpMaxContentLengthBytes'], 'httpMaxHeaderSizeBytes' => ['http_max_header_size_bytes', 'getHttpMaxHeaderSizeBytes', 'setHttpMaxHeaderSizeBytes'], 'httpMaxInitialLineLengthBytes' => ['http_max_initial_line_length_bytes', 'getHttpMaxInitialLineLengthBytes', 'setHttpMaxInitialLineLengthBytes'], 'indicesQueryBoolMaxClauseCount' => ['indices_query_bool_max_clause_count', 'getIndicesQueryBoolMaxClauseCount', 'setIndicesQueryBoolMaxClauseCount'], 'indicesFielddataCacheSizePercentage' => ['indices_fielddata_cache_size_percentage', 'getIndicesFielddataCacheSizePercentage', 'setIndicesFielddataCacheSizePercentage'], 'indicesMemoryIndexBufferSizePercentage' => ['indices_memory_index_buffer_size_percentage', 'getIndicesMemoryIndexBufferSizePercentage', 'setIndicesMemoryIndexBufferSizePercentage'], 'indicesMemoryMinIndexBufferSizeMb' => ['indices_memory_min_index_buffer_size_mb', 'getIndicesMemoryMinIndexBufferSizeMb', 'setIndicesMemoryMinIndexBufferSizeMb'], 'indicesMemoryMaxIndexBufferSizeMb' => ['indices_memory_max_index_buffer_size_mb', 'getIndicesMemoryMaxIndexBufferSizeMb', 'setIndicesMemoryMaxIndexBufferSizeMb'], 'indicesQueriesCacheSizePercentage' => ['indices_queries_cache_size_percentage', 'getIndicesQueriesCacheSizePercentage', 'setIndicesQueriesCacheSizePercentage'], 'indicesRecoveryMaxMbPerSec' => ['indices_recovery_max_mb_per_sec', 'getIndicesRecoveryMaxMbPerSec', 'setIndicesRecoveryMaxMbPerSec'], 'indicesRecoveryMaxConcurrentFileChunks' => ['indices_recovery_max_concurrent_file_chunks', 'getIndicesRecoveryMaxConcurrentFileChunks', 'setIndicesRecoveryMaxConcurrentFileChunks'], 'threadPoolSearchSize' => ['thread_pool_search_size', 'getThreadPoolSearchSize', 'setThreadPoolSearchSize'], 'threadPoolSearchThrottledSize' => ['thread_pool_search_throttled_size', 'getThreadPoolSearchThrottledSize', 'setThreadPoolSearchThrottledSize'], 'threadPoolGetSize' => ['thread_pool_get_size', 'getThreadPoolGetSize', 'setThreadPoolGetSize'], 'threadPoolAnalyzeSize' => ['thread_pool_analyze_size', 'getThreadPoolAnalyzeSize', 'setThreadPoolAnalyzeSize'], 'threadPoolWriteSize' => ['thread_pool_write_size', 'getThreadPoolWriteSize', 'setThreadPoolWriteSize'], 'threadPoolForceMergeSize' => ['thread_pool_force_merge_size', 'getThreadPoolForceMergeSize', 'setThreadPoolForceMergeSize'], 'threadPoolSearchQueueSize' => ['thread_pool_search_queue_size', 'getThreadPoolSearchQueueSize', 'setThreadPoolSearchQueueSize'], 'threadPoolSearchThrottledQueueSize' => ['thread_pool_search_throttled_queue_size', 'getThreadPoolSearchThrottledQueueSize', 'setThreadPoolSearchThrottledQueueSize'], 'threadPoolGetQueueSize' => ['thread_pool_get_queue_size', 'getThreadPoolGetQueueSize', 'setThreadPoolGetQueueSize'], 'threadPoolAnalyzeQueueSize' => ['thread_pool_analyze_queue_size', 'getThreadPoolAnalyzeQueueSize', 'setThreadPoolAnalyzeQueueSize'], 'threadPoolWriteQueueSize' => ['thread_pool_write_queue_size', 'getThreadPoolWriteQueueSize', 'setThreadPoolWriteQueueSize'], 'ismEnabled' => ['ism_enabled', 'getIsmEnabled', 'setIsmEnabled'], 'ismHistoryEnabled' => ['ism_history_enabled', 'getIsmHistoryEnabled', 'setIsmHistoryEnabled'], 'ismHistoryMaxAgeHours' => ['ism_history_max_age_hours', 'getIsmHistoryMaxAgeHours', 'setIsmHistoryMaxAgeHours'], 'ismHistoryMaxDocs' => ['ism_history_max_docs', 'getIsmHistoryMaxDocs', 'setIsmHistoryMaxDocs'], 'ismHistoryRolloverCheckPeriodHours' => ['ism_history_rollover_check_period_hours', 'getIsmHistoryRolloverCheckPeriodHours', 'setIsmHistoryRolloverCheckPeriodHours'], 'ismHistoryRolloverRetentionPeriodDays' => ['ism_history_rollover_retention_period_days', 'getIsmHistoryRolloverRetentionPeriodDays', 'setIsmHistoryRolloverRetentionPeriodDays'], 'searchMaxBuckets' => ['search_max_buckets', 'getSearchMaxBuckets', 'setSearchMaxBuckets'], 'actionAutoCreateIndexEnabled' => ['action_auto_create_index_enabled', 'getActionAutoCreateIndexEnabled', 'setActionAutoCreateIndexEnabled'], 'enableSecurityAudit' => ['enable_security_audit', 'getEnableSecurityAudit', 'setEnableSecurityAudit'], 'actionDestructiveRequiresName' => ['action_destructive_requires_name', 'getActionDestructiveRequiresName', 'setActionDestructiveRequiresName'], 'clusterMaxShardsPerNode' => ['cluster_max_shards_per_node', 'getClusterMaxShardsPerNode', 'setClusterMaxShardsPerNode'], 'overrideMainResponseVersion' => ['override_main_response_version', 'getOverrideMainResponseVersion', 'setOverrideMainResponseVersion'], 'scriptMaxCompilationsRate' => ['script_max_compilations_rate', 'getScriptMaxCompilationsRate', 'setScriptMaxCompilationsRate'], 'clusterRoutingAllocationNodeConcurrentRecoveries' => ['cluster_routing_allocation_node_concurrent_recoveries', 'getClusterRoutingAllocationNodeConcurrentRecoveries', 'setClusterRoutingAllocationNodeConcurrentRecoveries'], 'reindexRemoteWhitelist' => ['reindex_remote_whitelist', 'getReindexRemoteWhitelist', 'setReindexRemoteWhitelist'], 'pluginsAlertingFilterByBackendRolesEnabled' => ['plugins_alerting_filter_by_backend_roles_enabled', 'getPluginsAlertingFilterByBackendRolesEnabled', 'setPluginsAlertingFilterByBackendRolesEnabled'], 'knnMemoryCircuitBreakerEnabled' => ['knn_memory_circuit_breaker_enabled', 'getKnnMemoryCircuitBreakerEnabled', 'setKnnMemoryCircuitBreakerEnabled'], 'knnMemoryCircuitBreakerLimit' => ['knn_memory_circuit_breaker_limit', 'getKnnMemoryCircuitBreakerLimit', 'setKnnMemoryCircuitBreakerLimit'], 'keepIndexRefreshInterval' => ['keep_index_refresh_interval', 'getKeepIndexRefreshInterval', 'setKeepIndexRefreshInterval']];
    }
}