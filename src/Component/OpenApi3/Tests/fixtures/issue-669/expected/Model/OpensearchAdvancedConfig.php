<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class OpensearchAdvancedConfig implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * Maximum content length for HTTP requests to the OpenSearch HTTP API, in bytes.
     *
     * @var int
     */
    public int $httpMaxContentLengthBytes = 100000000;
    /**
     * Maximum size of allowed headers, in bytes.
     *
     * @var int
     */
    public int $httpMaxHeaderSizeBytes = 8192;
    /**
     * Maximum length of an HTTP URL, in bytes.
     *
     * @var int
     */
    public int $httpMaxInitialLineLengthBytes = 4096;
    /**
     * Maximum number of clauses Lucene BooleanQuery can have.  Only increase it if necessary, as it may cause performance issues.
     *
     * @var int
     */
    public int $indicesQueryBoolMaxClauseCount = 1024;
    /**
     * Maximum amount of heap memory used for field data cache, expressed as a percentage. Decreasing the value too much will increase overhead of loading field data. Increasing the value too much will decrease amount of heap available for other operations.
     *
     * @var int
     */
    public int $indicesFielddataCacheSizePercentage;
    /**
     * Total amount of heap used for indexing buffer before writing segments to disk, expressed as a percentage. Too low value will slow down indexing; too high value will increase indexing performance but causes performance issues for query performance.
     *
     * @var int
     */
    public int $indicesMemoryIndexBufferSizePercentage = 10;
    /**
     * Minimum amount of heap used for indexing buffer before writing segments to disk, in mb. Works in conjunction with indices_memory_index_buffer_size_percentage, each being enforced.
     *
     * @var int
     */
    public int $indicesMemoryMinIndexBufferSizeMb = 48;
    /**
     * Maximum amount of heap used for indexing buffer before writing segments to disk, in mb. Works in conjunction with indices_memory_index_buffer_size_percentage, each being enforced. The default is unbounded.
     *
     * @var int
     */
    public int $indicesMemoryMaxIndexBufferSizeMb;
    /**
     * Maximum amount of heap used for query cache.  Too low value will decrease query performance and increase performance for other operations; too high value will cause issues with other functionality.
     *
     * @var int
     */
    public int $indicesQueriesCacheSizePercentage = 10;
    /**
     * Limits total inbound and outbound recovery traffic for each node, expressed in mb per second. Applies to both peer recoveries as well as snapshot recoveries (i.e., restores from a snapshot).
     *
     * @var int
     */
    public int $indicesRecoveryMaxMbPerSec = 40;
    /**
     * Maximum number of file chunks sent in parallel for each recovery.
     *
     * @var int
     */
    public int $indicesRecoveryMaxConcurrentFileChunks = 2;
    /**
     * Number of workers in the search operation thread pool.  Do note this may have maximum value depending on CPU count - value is automatically lowered if set to higher than maximum value.
     *
     * @var int
     */
    public int $threadPoolSearchSize;
    /**
     * Number of workers in the search throttled operation thread pool. This pool is used for searching frozen indices. Do note this may have maximum value depending on CPU count - value is automatically lowered if set to higher than maximum value.
     *
     * @var int
     */
    public int $threadPoolSearchThrottledSize;
    /**
     * Number of workers in the get operation thread pool.  Do note this may have maximum value depending on CPU count - value is automatically lowered if set to higher than maximum value.
     *
     * @var int
     */
    public int $threadPoolGetSize;
    /**
     * Number of workers in the analyze operation thread pool.  Do note this may have maximum value depending on CPU count - value is automatically lowered if set to higher than maximum value.
     *
     * @var int
     */
    public int $threadPoolAnalyzeSize;
    /**
     * Number of workers in the write operation thread pool.  Do note this may have maximum value depending on CPU count - value is automatically lowered if set to higher than maximum value.
     *
     * @var int
     */
    public int $threadPoolWriteSize;
    /**
     * Number of workers in the force merge operation thread pool. This pool is used for forcing a merge between shards of one or more indices. Do note this may have maximum value depending on CPU count - value is automatically lowered if set to higher than maximum value.
     *
     * @var int
     */
    public int $threadPoolForceMergeSize;
    /**
     * Size of queue for operations in the search thread pool.
     *
     * @var int
     */
    public int $threadPoolSearchQueueSize;
    /**
     * Size of queue for operations in the search throttled thread pool.
     *
     * @var int
     */
    public int $threadPoolSearchThrottledQueueSize;
    /**
     * Size of queue for operations in the get thread pool.
     *
     * @var int
     */
    public int $threadPoolGetQueueSize;
    /**
     * Size of queue for operations in the analyze thread pool.
     *
     * @var int
     */
    public int $threadPoolAnalyzeQueueSize;
    /**
     * Size of queue for operations in the write thread pool.
     *
     * @var int
     */
    public int $threadPoolWriteQueueSize;
    /**
     * Specifies whether ISM is enabled or not.
     *
     * @var bool
     */
    public bool $ismEnabled = true;
    /**
     * Specifies whether audit history is enabled or not. The logs from ISM are automatically indexed to a logs document.
     *
     * @var bool
     */
    public bool $ismHistoryEnabled = true;
    /**
     * Maximum age before rolling over the audit history index, in hours.
     *
     * @var int
     */
    public int $ismHistoryMaxAgeHours = 24;
    /**
     * Maximum number of documents before rolling over the audit history index.
     *
     * @var int
     */
    public int $ismHistoryMaxDocs = 2500000;
    /**
     * The time between rollover checks for the audit history index, in hours.
     *
     * @var int
     */
    public int $ismHistoryRolloverCheckPeriodHours = 8;
    /**
     * Length of time long audit history indices are kept, in days.
     *
     * @var int
     */
    public int $ismHistoryRolloverRetentionPeriodDays = 30;
    /**
     * Maximum number of aggregation buckets allowed in a single response.
     *
     * @var int
     */
    public int $searchMaxBuckets = 10000;
    /**
     * Specifices whether to allow automatic creation of indices.
     *
     * @var bool
     */
    public bool $actionAutoCreateIndexEnabled = true;
    /**
     * Specifies whether to allow security audit logging.
     *
     * @var bool
     */
    public bool $enableSecurityAudit = false;
    /**
     * Specifies whether to require explicit index names when deleting indices.
     *
     * @var bool
     */
    public bool $actionDestructiveRequiresName;
    /**
     * Maximum number of shards allowed per data node.
     *
     * @var int
     */
    public int $clusterMaxShardsPerNode;
    /**
     * Compatibility mode sets OpenSearch to report its version as 7.10 so clients continue to work.
     *
     * @var bool
     */
    public bool $overrideMainResponseVersion = false;
    /**
     * Limits the number of inline script compilations within a period of time. Default is use-context
     *
     * @var string
     */
    public string $scriptMaxCompilationsRate = 'use-context';
    /**
     * Maximum concurrent incoming/outgoing shard recoveries (normally replicas) are allowed to happen per node .
     *
     * @var int
     */
    public int $clusterRoutingAllocationNodeConcurrentRecoveries = 2;
    /**
     * Allowlist of remote IP addresses for reindexing. Changing this value will cause all OpenSearch instances to restart.
     *
     * @var list<string>
     */
    public array $reindexRemoteWhitelist;
    /**
     * Enable or disable filtering of alerting by backend roles.
     *
     * @var bool
     */
    public bool $pluginsAlertingFilterByBackendRolesEnabled = false;
    /**
     * Enable or disable KNN memory circuit breaker.
     *
     * @var bool
     */
    public bool $knnMemoryCircuitBreakerEnabled = true;
    /**
     * Maximum amount of memory in percentage that can be used for the KNN index. Defaults to 50% of the JVM heap size.  0 is used to set it to null which can be used to invalidate caches.
     *
     * @var int
     */
    public int $knnMemoryCircuitBreakerLimit = 50;
    /**
     * DigitalOcean automatically resets the `index.refresh_interval` to the default value (once per second) to  ensure that new documents are quickly available for search queries. If you are setting your own refresh intervals,  you can disable this by setting this field to true.
     *
     * @var bool
     */
    public bool $keepIndexRefreshInterval = false;
    public function definedProperties(): array
    {
        return ['httpMaxContentLengthBytes' => 'http_max_content_length_bytes', 'httpMaxHeaderSizeBytes' => 'http_max_header_size_bytes', 'httpMaxInitialLineLengthBytes' => 'http_max_initial_line_length_bytes', 'indicesQueryBoolMaxClauseCount' => 'indices_query_bool_max_clause_count', 'indicesFielddataCacheSizePercentage' => 'indices_fielddata_cache_size_percentage', 'indicesMemoryIndexBufferSizePercentage' => 'indices_memory_index_buffer_size_percentage', 'indicesMemoryMinIndexBufferSizeMb' => 'indices_memory_min_index_buffer_size_mb', 'indicesMemoryMaxIndexBufferSizeMb' => 'indices_memory_max_index_buffer_size_mb', 'indicesQueriesCacheSizePercentage' => 'indices_queries_cache_size_percentage', 'indicesRecoveryMaxMbPerSec' => 'indices_recovery_max_mb_per_sec', 'indicesRecoveryMaxConcurrentFileChunks' => 'indices_recovery_max_concurrent_file_chunks', 'threadPoolSearchSize' => 'thread_pool_search_size', 'threadPoolSearchThrottledSize' => 'thread_pool_search_throttled_size', 'threadPoolGetSize' => 'thread_pool_get_size', 'threadPoolAnalyzeSize' => 'thread_pool_analyze_size', 'threadPoolWriteSize' => 'thread_pool_write_size', 'threadPoolForceMergeSize' => 'thread_pool_force_merge_size', 'threadPoolSearchQueueSize' => 'thread_pool_search_queue_size', 'threadPoolSearchThrottledQueueSize' => 'thread_pool_search_throttled_queue_size', 'threadPoolGetQueueSize' => 'thread_pool_get_queue_size', 'threadPoolAnalyzeQueueSize' => 'thread_pool_analyze_queue_size', 'threadPoolWriteQueueSize' => 'thread_pool_write_queue_size', 'ismEnabled' => 'ism_enabled', 'ismHistoryEnabled' => 'ism_history_enabled', 'ismHistoryMaxAgeHours' => 'ism_history_max_age_hours', 'ismHistoryMaxDocs' => 'ism_history_max_docs', 'ismHistoryRolloverCheckPeriodHours' => 'ism_history_rollover_check_period_hours', 'ismHistoryRolloverRetentionPeriodDays' => 'ism_history_rollover_retention_period_days', 'searchMaxBuckets' => 'search_max_buckets', 'actionAutoCreateIndexEnabled' => 'action_auto_create_index_enabled', 'enableSecurityAudit' => 'enable_security_audit', 'actionDestructiveRequiresName' => 'action_destructive_requires_name', 'clusterMaxShardsPerNode' => 'cluster_max_shards_per_node', 'overrideMainResponseVersion' => 'override_main_response_version', 'scriptMaxCompilationsRate' => 'script_max_compilations_rate', 'clusterRoutingAllocationNodeConcurrentRecoveries' => 'cluster_routing_allocation_node_concurrent_recoveries', 'reindexRemoteWhitelist' => 'reindex_remote_whitelist', 'pluginsAlertingFilterByBackendRolesEnabled' => 'plugins_alerting_filter_by_backend_roles_enabled', 'knnMemoryCircuitBreakerEnabled' => 'knn_memory_circuit_breaker_enabled', 'knnMemoryCircuitBreakerLimit' => 'knn_memory_circuit_breaker_limit', 'keepIndexRefreshInterval' => 'keep_index_refresh_interval'];
    }
}