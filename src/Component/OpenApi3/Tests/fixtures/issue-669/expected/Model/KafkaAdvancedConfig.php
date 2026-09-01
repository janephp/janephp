<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class KafkaAdvancedConfig implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * Specify the final compression type for a given topic. This configuration accepts the standard compression codecs ('gzip', 'snappy', 'lz4', 'zstd'). It additionally accepts 'uncompressed' which is equivalent to no compression; and 'producer' which means retain the original compression codec set by the producer.
     *
     * @var string
     */
    public string $compressionType;
    /**
     * The amount of time, in milliseconds, the group coordinator will wait for more consumers to join a new group before performing the first rebalance. A longer delay means potentially fewer rebalances, but increases the time until processing begins. The default value for this is 3 seconds. During development and testing it might be desirable to set this to 0 in order to not delay test execution time.
     *
     * @var int
     */
    public int $groupInitialRebalanceDelayMs;
    /**
     * The minimum allowed session timeout for registered consumers. Longer timeouts give consumers more time to process messages in between heartbeats at the cost of a longer time to detect failures.
     *
     * @var int
     */
    public int $groupMinSessionTimeoutMs;
    /**
     * The maximum allowed session timeout for registered consumers. Longer timeouts give consumers more time to process messages in between heartbeats at the cost of a longer time to detect failures.
     *
     * @var int
     */
    public int $groupMaxSessionTimeoutMs;
    /**
     * Idle connections timeout: the server socket processor threads close the connections that idle for longer than this.
     *
     * @var int
     */
    public int $connectionsMaxIdleMs;
    /**
     * The maximum number of incremental fetch sessions that the broker will maintain.
     *
     * @var int
     */
    public int $maxIncrementalFetchSessionCacheSlots;
    /**
     * The maximum size of message that the server can receive.
     *
     * @var int
     */
    public int $messageMaxBytes;
    /**
     * Log retention window in minutes for offsets topic
     *
     * @var int
     */
    public int $offsetsRetentionMinutes;
    /**
     * How long are delete records retained?
     *
     * @var int
     */
    public int $logCleanerDeleteRetentionMs;
    /**
     * Controls log compactor frequency. Larger value means more frequent compactions but also more space wasted for logs. Consider setting log_cleaner_max_compaction_lag_ms to enforce compactions sooner, instead of setting a very high value for this option.
     *
     * @var float
     */
    public float $logCleanerMinCleanableRatio;
    /**
     * The maximum amount of time message will remain uncompacted. Only applicable for logs that are being compacted
     *
     * @var int
     */
    public int $logCleanerMaxCompactionLagMs;
    /**
     * The minimum time a message will remain uncompacted in the log. Only applicable for logs that are being compacted.
     *
     * @var int
     */
    public int $logCleanerMinCompactionLagMs;
    /**
     * The default cleanup policy for segments beyond the retention window
     *
     * @var string
     */
    public string $logCleanupPolicy;
    /**
     * The number of messages accumulated on a log partition before messages are flushed to disk
     *
     * @var int
     */
    public int $logFlushIntervalMessages;
    /**
     * The maximum time in ms that a message in any topic is kept in memory before flushed to disk. If not set, the value in log.flush.scheduler.interval.ms is used
     *
     * @var int
     */
    public int $logFlushIntervalMs;
    /**
     * The interval with which Kafka adds an entry to the offset index
     *
     * @var int
     */
    public int $logIndexIntervalBytes;
    /**
     * The maximum size in bytes of the offset index
     *
     * @var int
     */
    public int $logIndexSizeMaxBytes;
    /**
     * This configuration controls whether down-conversion of message formats is enabled to satisfy consume requests.
     *
     * @var bool
     */
    public bool $logMessageDownconversionEnable;
    /**
     * Define whether the timestamp in the message is message create time or log append time.
     *
     * @var string
     */
    public string $logMessageTimestampType;
    /**
     * The maximum difference allowed between the timestamp when a broker receives a message and the timestamp specified in the message
     *
     * @var int
     */
    public int $logMessageTimestampDifferenceMaxMs;
    /**
     * Controls whether to preallocate a file when creating a new segment
     *
     * @var bool
     */
    public bool $logPreallocate;
    /**
     * The maximum size of the log before deleting messages
     *
     * @var int
     */
    public int $logRetentionBytes;
    /**
     * The number of hours to keep a log file before deleting it
     *
     * @var int
     */
    public int $logRetentionHours;
    /**
     * The number of milliseconds to keep a log file before deleting it (in milliseconds), If not set, the value in log.retention.minutes is used. If set to -1, no time limit is applied.
     *
     * @var int
     */
    public int $logRetentionMs;
    /**
     * The maximum jitter to subtract from logRollTimeMillis (in milliseconds). If not set, the value in log.roll.jitter.hours is used
     *
     * @var int
     */
    public int $logRollJitterMs;
    /**
     * The maximum time before a new log segment is rolled out (in milliseconds).
     *
     * @var int
     */
    public int $logRollMs;
    /**
     * The maximum size of a single log file
     *
     * @var int
     */
    public int $logSegmentBytes;
    /**
     * The amount of time to wait before deleting a file from the filesystem
     *
     * @var int
     */
    public int $logSegmentDeleteDelayMs;
    /**
     * Enable auto creation of topics
     *
     * @var bool
     */
    public bool $autoCreateTopicsEnable = false;
    /**
     * When a producer sets acks to 'all' (or '-1'), min_insync_replicas specifies the minimum number of replicas that must acknowledge a write for the write to be considered successful.
     *
     * @var int
     */
    public int $minInsyncReplicas;
    /**
     * Number of partitions for autocreated topics
     *
     * @var int
     */
    public int $numPartitions;
    /**
     * Replication factor for autocreated topics
     *
     * @var int
     */
    public int $defaultReplicationFactor;
    /**
     * The number of bytes of messages to attempt to fetch for each partition (defaults to 1048576). This is not an absolute maximum, if the first record batch in the first non-empty partition of the fetch is larger than this value, the record batch will still be returned to ensure that progress can be made.
     *
     * @var int
     */
    public int $replicaFetchMaxBytes;
    /**
     * Maximum bytes expected for the entire fetch response (defaults to 10485760). Records are fetched in batches, and if the first record batch in the first non-empty partition of the fetch is larger than this value, the record batch will still be returned to ensure that progress can be made. As such, this is not an absolute maximum.
     *
     * @var int
     */
    public int $replicaFetchResponseMaxBytes;
    /**
     * The maximum number of connections allowed from each ip address (defaults to 2147483647).
     *
     * @var int
     */
    public int $maxConnectionsPerIp;
    /**
     * The purge interval (in number of requests) of the producer request purgatory (defaults to 1000).
     *
     * @var int
     */
    public int $producerPurgatoryPurgeIntervalRequests;
    /**
     * The maximum number of bytes in a socket request (defaults to 104857600).
     *
     * @var int
     */
    public int $socketRequestMaxBytes;
    /**
     * The transaction topic segment bytes should be kept relatively small in order to facilitate faster log compaction and cache loads (defaults to 104857600 (100 mebibytes)).
     *
     * @var int
     */
    public int $transactionStateLogSegmentBytes;
    /**
     * The interval at which to remove transactions that have expired due to transactional.id.expiration.ms passing (defaults to 3600000 (1 hour)).
     *
     * @var int
     */
    public int $transactionRemoveExpiredTransactionCleanupIntervalMs;
    /**
     * Enable creation of schema registry for the Kafka cluster. Schema_registry only works with General Purpose - Dedicated CPU plans.
     *
     * @var bool
     */
    public bool $schemaRegistry = false;
    public function definedProperties(): array
    {
        return ['compressionType' => 'compression_type', 'groupInitialRebalanceDelayMs' => 'group_initial_rebalance_delay_ms', 'groupMinSessionTimeoutMs' => 'group_min_session_timeout_ms', 'groupMaxSessionTimeoutMs' => 'group_max_session_timeout_ms', 'connectionsMaxIdleMs' => 'connections_max_idle_ms', 'maxIncrementalFetchSessionCacheSlots' => 'max_incremental_fetch_session_cache_slots', 'messageMaxBytes' => 'message_max_bytes', 'offsetsRetentionMinutes' => 'offsets_retention_minutes', 'logCleanerDeleteRetentionMs' => 'log_cleaner_delete_retention_ms', 'logCleanerMinCleanableRatio' => 'log_cleaner_min_cleanable_ratio', 'logCleanerMaxCompactionLagMs' => 'log_cleaner_max_compaction_lag_ms', 'logCleanerMinCompactionLagMs' => 'log_cleaner_min_compaction_lag_ms', 'logCleanupPolicy' => 'log_cleanup_policy', 'logFlushIntervalMessages' => 'log_flush_interval_messages', 'logFlushIntervalMs' => 'log_flush_interval_ms', 'logIndexIntervalBytes' => 'log_index_interval_bytes', 'logIndexSizeMaxBytes' => 'log_index_size_max_bytes', 'logMessageDownconversionEnable' => 'log_message_downconversion_enable', 'logMessageTimestampType' => 'log_message_timestamp_type', 'logMessageTimestampDifferenceMaxMs' => 'log_message_timestamp_difference_max_ms', 'logPreallocate' => 'log_preallocate', 'logRetentionBytes' => 'log_retention_bytes', 'logRetentionHours' => 'log_retention_hours', 'logRetentionMs' => 'log_retention_ms', 'logRollJitterMs' => 'log_roll_jitter_ms', 'logRollMs' => 'log_roll_ms', 'logSegmentBytes' => 'log_segment_bytes', 'logSegmentDeleteDelayMs' => 'log_segment_delete_delay_ms', 'autoCreateTopicsEnable' => 'auto_create_topics_enable', 'minInsyncReplicas' => 'min_insync_replicas', 'numPartitions' => 'num_partitions', 'defaultReplicationFactor' => 'default_replication_factor', 'replicaFetchMaxBytes' => 'replica_fetch_max_bytes', 'replicaFetchResponseMaxBytes' => 'replica_fetch_response_max_bytes', 'maxConnectionsPerIp' => 'max_connections_per_ip', 'producerPurgatoryPurgeIntervalRequests' => 'producer_purgatory_purge_interval_requests', 'socketRequestMaxBytes' => 'socket_request_max_bytes', 'transactionStateLogSegmentBytes' => 'transaction_state_log_segment_bytes', 'transactionRemoveExpiredTransactionCleanupIntervalMs' => 'transaction_remove_expired_transaction_cleanup_interval_ms', 'schemaRegistry' => 'schema_registry'];
    }
}