<?php

namespace Jane\Generated\DigitalOcean\Model;

class KafkaAdvancedConfig extends \ArrayObject
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
     * Specify the final compression type for a given topic. This configuration accepts the standard compression codecs ('gzip', 'snappy', 'lz4', 'zstd'). It additionally accepts 'uncompressed' which is equivalent to no compression; and 'producer' which means retain the original compression codec set by the producer.
     *
     * @var string
     */
    protected $compressionType;
    /**
     * The amount of time, in milliseconds, the group coordinator will wait for more consumers to join a new group before performing the first rebalance. A longer delay means potentially fewer rebalances, but increases the time until processing begins. The default value for this is 3 seconds. During development and testing it might be desirable to set this to 0 in order to not delay test execution time.
     *
     * @var int
     */
    protected $groupInitialRebalanceDelayMs;
    /**
     * The minimum allowed session timeout for registered consumers. Longer timeouts give consumers more time to process messages in between heartbeats at the cost of a longer time to detect failures.
     *
     * @var int
     */
    protected $groupMinSessionTimeoutMs;
    /**
     * The maximum allowed session timeout for registered consumers. Longer timeouts give consumers more time to process messages in between heartbeats at the cost of a longer time to detect failures.
     *
     * @var int
     */
    protected $groupMaxSessionTimeoutMs;
    /**
     * Idle connections timeout: the server socket processor threads close the connections that idle for longer than this.
     *
     * @var int
     */
    protected $connectionsMaxIdleMs;
    /**
     * The maximum number of incremental fetch sessions that the broker will maintain.
     *
     * @var int
     */
    protected $maxIncrementalFetchSessionCacheSlots;
    /**
     * The maximum size of message that the server can receive.
     *
     * @var int
     */
    protected $messageMaxBytes;
    /**
     * Log retention window in minutes for offsets topic
     *
     * @var int
     */
    protected $offsetsRetentionMinutes;
    /**
     * How long are delete records retained?
     *
     * @var int
     */
    protected $logCleanerDeleteRetentionMs;
    /**
     * Controls log compactor frequency. Larger value means more frequent compactions but also more space wasted for logs. Consider setting log_cleaner_max_compaction_lag_ms to enforce compactions sooner, instead of setting a very high value for this option.
     *
     * @var float
     */
    protected $logCleanerMinCleanableRatio;
    /**
     * The maximum amount of time message will remain uncompacted. Only applicable for logs that are being compacted
     *
     * @var int
     */
    protected $logCleanerMaxCompactionLagMs;
    /**
     * The minimum time a message will remain uncompacted in the log. Only applicable for logs that are being compacted.
     *
     * @var int
     */
    protected $logCleanerMinCompactionLagMs;
    /**
     * The default cleanup policy for segments beyond the retention window
     *
     * @var string
     */
    protected $logCleanupPolicy;
    /**
     * The number of messages accumulated on a log partition before messages are flushed to disk
     *
     * @var int
     */
    protected $logFlushIntervalMessages;
    /**
     * The maximum time in ms that a message in any topic is kept in memory before flushed to disk. If not set, the value in log.flush.scheduler.interval.ms is used
     *
     * @var int
     */
    protected $logFlushIntervalMs;
    /**
     * The interval with which Kafka adds an entry to the offset index
     *
     * @var int
     */
    protected $logIndexIntervalBytes;
    /**
     * The maximum size in bytes of the offset index
     *
     * @var int
     */
    protected $logIndexSizeMaxBytes;
    /**
     * This configuration controls whether down-conversion of message formats is enabled to satisfy consume requests.
     *
     * @var bool
     */
    protected $logMessageDownconversionEnable;
    /**
     * Define whether the timestamp in the message is message create time or log append time.
     *
     * @var string
     */
    protected $logMessageTimestampType;
    /**
     * The maximum difference allowed between the timestamp when a broker receives a message and the timestamp specified in the message
     *
     * @var int
     */
    protected $logMessageTimestampDifferenceMaxMs;
    /**
     * Controls whether to preallocate a file when creating a new segment
     *
     * @var bool
     */
    protected $logPreallocate;
    /**
     * The maximum size of the log before deleting messages
     *
     * @var int
     */
    protected $logRetentionBytes;
    /**
     * The number of hours to keep a log file before deleting it
     *
     * @var int
     */
    protected $logRetentionHours;
    /**
     * The number of milliseconds to keep a log file before deleting it (in milliseconds), If not set, the value in log.retention.minutes is used. If set to -1, no time limit is applied.
     *
     * @var int
     */
    protected $logRetentionMs;
    /**
     * The maximum jitter to subtract from logRollTimeMillis (in milliseconds). If not set, the value in log.roll.jitter.hours is used
     *
     * @var int
     */
    protected $logRollJitterMs;
    /**
     * The maximum time before a new log segment is rolled out (in milliseconds).
     *
     * @var int
     */
    protected $logRollMs;
    /**
     * The maximum size of a single log file
     *
     * @var int
     */
    protected $logSegmentBytes;
    /**
     * The amount of time to wait before deleting a file from the filesystem
     *
     * @var int
     */
    protected $logSegmentDeleteDelayMs;
    /**
     * Enable auto creation of topics
     *
     * @var bool
     */
    protected $autoCreateTopicsEnable = false;
    /**
     * When a producer sets acks to 'all' (or '-1'), min_insync_replicas specifies the minimum number of replicas that must acknowledge a write for the write to be considered successful.
     *
     * @var int
     */
    protected $minInsyncReplicas;
    /**
     * Number of partitions for autocreated topics
     *
     * @var int
     */
    protected $numPartitions;
    /**
     * Replication factor for autocreated topics
     *
     * @var int
     */
    protected $defaultReplicationFactor;
    /**
     * The number of bytes of messages to attempt to fetch for each partition (defaults to 1048576). This is not an absolute maximum, if the first record batch in the first non-empty partition of the fetch is larger than this value, the record batch will still be returned to ensure that progress can be made.
     *
     * @var int
     */
    protected $replicaFetchMaxBytes;
    /**
     * Maximum bytes expected for the entire fetch response (defaults to 10485760). Records are fetched in batches, and if the first record batch in the first non-empty partition of the fetch is larger than this value, the record batch will still be returned to ensure that progress can be made. As such, this is not an absolute maximum.
     *
     * @var int
     */
    protected $replicaFetchResponseMaxBytes;
    /**
     * The maximum number of connections allowed from each ip address (defaults to 2147483647).
     *
     * @var int
     */
    protected $maxConnectionsPerIp;
    /**
     * The purge interval (in number of requests) of the producer request purgatory (defaults to 1000).
     *
     * @var int
     */
    protected $producerPurgatoryPurgeIntervalRequests;
    /**
     * The maximum number of bytes in a socket request (defaults to 104857600).
     *
     * @var int
     */
    protected $socketRequestMaxBytes;
    /**
     * The transaction topic segment bytes should be kept relatively small in order to facilitate faster log compaction and cache loads (defaults to 104857600 (100 mebibytes)).
     *
     * @var int
     */
    protected $transactionStateLogSegmentBytes;
    /**
     * The interval at which to remove transactions that have expired due to transactional.id.expiration.ms passing (defaults to 3600000 (1 hour)).
     *
     * @var int
     */
    protected $transactionRemoveExpiredTransactionCleanupIntervalMs;
    /**
     * Enable creation of schema registry for the Kafka cluster. Schema_registry only works with General Purpose - Dedicated CPU plans.
     *
     * @var bool
     */
    protected $schemaRegistry = false;
    /**
     * Specify the final compression type for a given topic. This configuration accepts the standard compression codecs ('gzip', 'snappy', 'lz4', 'zstd'). It additionally accepts 'uncompressed' which is equivalent to no compression; and 'producer' which means retain the original compression codec set by the producer.
     *
     * @return string
     */
    public function getCompressionType(): string
    {
        return $this->compressionType;
    }
    /**
     * Specify the final compression type for a given topic. This configuration accepts the standard compression codecs ('gzip', 'snappy', 'lz4', 'zstd'). It additionally accepts 'uncompressed' which is equivalent to no compression; and 'producer' which means retain the original compression codec set by the producer.
     *
     * @param string $compressionType
     *
     * @return self
     */
    public function setCompressionType(string $compressionType): self
    {
        $this->initialized['compressionType'] = true;
        $this->compressionType = $compressionType;
        return $this;
    }
    /**
     * The amount of time, in milliseconds, the group coordinator will wait for more consumers to join a new group before performing the first rebalance. A longer delay means potentially fewer rebalances, but increases the time until processing begins. The default value for this is 3 seconds. During development and testing it might be desirable to set this to 0 in order to not delay test execution time.
     *
     * @return int
     */
    public function getGroupInitialRebalanceDelayMs(): int
    {
        return $this->groupInitialRebalanceDelayMs;
    }
    /**
     * The amount of time, in milliseconds, the group coordinator will wait for more consumers to join a new group before performing the first rebalance. A longer delay means potentially fewer rebalances, but increases the time until processing begins. The default value for this is 3 seconds. During development and testing it might be desirable to set this to 0 in order to not delay test execution time.
     *
     * @param int $groupInitialRebalanceDelayMs
     *
     * @return self
     */
    public function setGroupInitialRebalanceDelayMs(int $groupInitialRebalanceDelayMs): self
    {
        $this->initialized['groupInitialRebalanceDelayMs'] = true;
        $this->groupInitialRebalanceDelayMs = $groupInitialRebalanceDelayMs;
        return $this;
    }
    /**
     * The minimum allowed session timeout for registered consumers. Longer timeouts give consumers more time to process messages in between heartbeats at the cost of a longer time to detect failures.
     *
     * @return int
     */
    public function getGroupMinSessionTimeoutMs(): int
    {
        return $this->groupMinSessionTimeoutMs;
    }
    /**
     * The minimum allowed session timeout for registered consumers. Longer timeouts give consumers more time to process messages in between heartbeats at the cost of a longer time to detect failures.
     *
     * @param int $groupMinSessionTimeoutMs
     *
     * @return self
     */
    public function setGroupMinSessionTimeoutMs(int $groupMinSessionTimeoutMs): self
    {
        $this->initialized['groupMinSessionTimeoutMs'] = true;
        $this->groupMinSessionTimeoutMs = $groupMinSessionTimeoutMs;
        return $this;
    }
    /**
     * The maximum allowed session timeout for registered consumers. Longer timeouts give consumers more time to process messages in between heartbeats at the cost of a longer time to detect failures.
     *
     * @return int
     */
    public function getGroupMaxSessionTimeoutMs(): int
    {
        return $this->groupMaxSessionTimeoutMs;
    }
    /**
     * The maximum allowed session timeout for registered consumers. Longer timeouts give consumers more time to process messages in between heartbeats at the cost of a longer time to detect failures.
     *
     * @param int $groupMaxSessionTimeoutMs
     *
     * @return self
     */
    public function setGroupMaxSessionTimeoutMs(int $groupMaxSessionTimeoutMs): self
    {
        $this->initialized['groupMaxSessionTimeoutMs'] = true;
        $this->groupMaxSessionTimeoutMs = $groupMaxSessionTimeoutMs;
        return $this;
    }
    /**
     * Idle connections timeout: the server socket processor threads close the connections that idle for longer than this.
     *
     * @return int
     */
    public function getConnectionsMaxIdleMs(): int
    {
        return $this->connectionsMaxIdleMs;
    }
    /**
     * Idle connections timeout: the server socket processor threads close the connections that idle for longer than this.
     *
     * @param int $connectionsMaxIdleMs
     *
     * @return self
     */
    public function setConnectionsMaxIdleMs(int $connectionsMaxIdleMs): self
    {
        $this->initialized['connectionsMaxIdleMs'] = true;
        $this->connectionsMaxIdleMs = $connectionsMaxIdleMs;
        return $this;
    }
    /**
     * The maximum number of incremental fetch sessions that the broker will maintain.
     *
     * @return int
     */
    public function getMaxIncrementalFetchSessionCacheSlots(): int
    {
        return $this->maxIncrementalFetchSessionCacheSlots;
    }
    /**
     * The maximum number of incremental fetch sessions that the broker will maintain.
     *
     * @param int $maxIncrementalFetchSessionCacheSlots
     *
     * @return self
     */
    public function setMaxIncrementalFetchSessionCacheSlots(int $maxIncrementalFetchSessionCacheSlots): self
    {
        $this->initialized['maxIncrementalFetchSessionCacheSlots'] = true;
        $this->maxIncrementalFetchSessionCacheSlots = $maxIncrementalFetchSessionCacheSlots;
        return $this;
    }
    /**
     * The maximum size of message that the server can receive.
     *
     * @return int
     */
    public function getMessageMaxBytes(): int
    {
        return $this->messageMaxBytes;
    }
    /**
     * The maximum size of message that the server can receive.
     *
     * @param int $messageMaxBytes
     *
     * @return self
     */
    public function setMessageMaxBytes(int $messageMaxBytes): self
    {
        $this->initialized['messageMaxBytes'] = true;
        $this->messageMaxBytes = $messageMaxBytes;
        return $this;
    }
    /**
     * Log retention window in minutes for offsets topic
     *
     * @return int
     */
    public function getOffsetsRetentionMinutes(): int
    {
        return $this->offsetsRetentionMinutes;
    }
    /**
     * Log retention window in minutes for offsets topic
     *
     * @param int $offsetsRetentionMinutes
     *
     * @return self
     */
    public function setOffsetsRetentionMinutes(int $offsetsRetentionMinutes): self
    {
        $this->initialized['offsetsRetentionMinutes'] = true;
        $this->offsetsRetentionMinutes = $offsetsRetentionMinutes;
        return $this;
    }
    /**
     * How long are delete records retained?
     *
     * @return int
     */
    public function getLogCleanerDeleteRetentionMs(): int
    {
        return $this->logCleanerDeleteRetentionMs;
    }
    /**
     * How long are delete records retained?
     *
     * @param int $logCleanerDeleteRetentionMs
     *
     * @return self
     */
    public function setLogCleanerDeleteRetentionMs(int $logCleanerDeleteRetentionMs): self
    {
        $this->initialized['logCleanerDeleteRetentionMs'] = true;
        $this->logCleanerDeleteRetentionMs = $logCleanerDeleteRetentionMs;
        return $this;
    }
    /**
     * Controls log compactor frequency. Larger value means more frequent compactions but also more space wasted for logs. Consider setting log_cleaner_max_compaction_lag_ms to enforce compactions sooner, instead of setting a very high value for this option.
     *
     * @return float
     */
    public function getLogCleanerMinCleanableRatio(): float
    {
        return $this->logCleanerMinCleanableRatio;
    }
    /**
     * Controls log compactor frequency. Larger value means more frequent compactions but also more space wasted for logs. Consider setting log_cleaner_max_compaction_lag_ms to enforce compactions sooner, instead of setting a very high value for this option.
     *
     * @param float $logCleanerMinCleanableRatio
     *
     * @return self
     */
    public function setLogCleanerMinCleanableRatio(float $logCleanerMinCleanableRatio): self
    {
        $this->initialized['logCleanerMinCleanableRatio'] = true;
        $this->logCleanerMinCleanableRatio = $logCleanerMinCleanableRatio;
        return $this;
    }
    /**
     * The maximum amount of time message will remain uncompacted. Only applicable for logs that are being compacted
     *
     * @return int
     */
    public function getLogCleanerMaxCompactionLagMs(): int
    {
        return $this->logCleanerMaxCompactionLagMs;
    }
    /**
     * The maximum amount of time message will remain uncompacted. Only applicable for logs that are being compacted
     *
     * @param int $logCleanerMaxCompactionLagMs
     *
     * @return self
     */
    public function setLogCleanerMaxCompactionLagMs(int $logCleanerMaxCompactionLagMs): self
    {
        $this->initialized['logCleanerMaxCompactionLagMs'] = true;
        $this->logCleanerMaxCompactionLagMs = $logCleanerMaxCompactionLagMs;
        return $this;
    }
    /**
     * The minimum time a message will remain uncompacted in the log. Only applicable for logs that are being compacted.
     *
     * @return int
     */
    public function getLogCleanerMinCompactionLagMs(): int
    {
        return $this->logCleanerMinCompactionLagMs;
    }
    /**
     * The minimum time a message will remain uncompacted in the log. Only applicable for logs that are being compacted.
     *
     * @param int $logCleanerMinCompactionLagMs
     *
     * @return self
     */
    public function setLogCleanerMinCompactionLagMs(int $logCleanerMinCompactionLagMs): self
    {
        $this->initialized['logCleanerMinCompactionLagMs'] = true;
        $this->logCleanerMinCompactionLagMs = $logCleanerMinCompactionLagMs;
        return $this;
    }
    /**
     * The default cleanup policy for segments beyond the retention window
     *
     * @return string
     */
    public function getLogCleanupPolicy(): string
    {
        return $this->logCleanupPolicy;
    }
    /**
     * The default cleanup policy for segments beyond the retention window
     *
     * @param string $logCleanupPolicy
     *
     * @return self
     */
    public function setLogCleanupPolicy(string $logCleanupPolicy): self
    {
        $this->initialized['logCleanupPolicy'] = true;
        $this->logCleanupPolicy = $logCleanupPolicy;
        return $this;
    }
    /**
     * The number of messages accumulated on a log partition before messages are flushed to disk
     *
     * @return int
     */
    public function getLogFlushIntervalMessages(): int
    {
        return $this->logFlushIntervalMessages;
    }
    /**
     * The number of messages accumulated on a log partition before messages are flushed to disk
     *
     * @param int $logFlushIntervalMessages
     *
     * @return self
     */
    public function setLogFlushIntervalMessages(int $logFlushIntervalMessages): self
    {
        $this->initialized['logFlushIntervalMessages'] = true;
        $this->logFlushIntervalMessages = $logFlushIntervalMessages;
        return $this;
    }
    /**
     * The maximum time in ms that a message in any topic is kept in memory before flushed to disk. If not set, the value in log.flush.scheduler.interval.ms is used
     *
     * @return int
     */
    public function getLogFlushIntervalMs(): int
    {
        return $this->logFlushIntervalMs;
    }
    /**
     * The maximum time in ms that a message in any topic is kept in memory before flushed to disk. If not set, the value in log.flush.scheduler.interval.ms is used
     *
     * @param int $logFlushIntervalMs
     *
     * @return self
     */
    public function setLogFlushIntervalMs(int $logFlushIntervalMs): self
    {
        $this->initialized['logFlushIntervalMs'] = true;
        $this->logFlushIntervalMs = $logFlushIntervalMs;
        return $this;
    }
    /**
     * The interval with which Kafka adds an entry to the offset index
     *
     * @return int
     */
    public function getLogIndexIntervalBytes(): int
    {
        return $this->logIndexIntervalBytes;
    }
    /**
     * The interval with which Kafka adds an entry to the offset index
     *
     * @param int $logIndexIntervalBytes
     *
     * @return self
     */
    public function setLogIndexIntervalBytes(int $logIndexIntervalBytes): self
    {
        $this->initialized['logIndexIntervalBytes'] = true;
        $this->logIndexIntervalBytes = $logIndexIntervalBytes;
        return $this;
    }
    /**
     * The maximum size in bytes of the offset index
     *
     * @return int
     */
    public function getLogIndexSizeMaxBytes(): int
    {
        return $this->logIndexSizeMaxBytes;
    }
    /**
     * The maximum size in bytes of the offset index
     *
     * @param int $logIndexSizeMaxBytes
     *
     * @return self
     */
    public function setLogIndexSizeMaxBytes(int $logIndexSizeMaxBytes): self
    {
        $this->initialized['logIndexSizeMaxBytes'] = true;
        $this->logIndexSizeMaxBytes = $logIndexSizeMaxBytes;
        return $this;
    }
    /**
     * This configuration controls whether down-conversion of message formats is enabled to satisfy consume requests.
     *
     * @return bool
     */
    public function getLogMessageDownconversionEnable(): bool
    {
        return $this->logMessageDownconversionEnable;
    }
    /**
     * This configuration controls whether down-conversion of message formats is enabled to satisfy consume requests.
     *
     * @param bool $logMessageDownconversionEnable
     *
     * @return self
     */
    public function setLogMessageDownconversionEnable(bool $logMessageDownconversionEnable): self
    {
        $this->initialized['logMessageDownconversionEnable'] = true;
        $this->logMessageDownconversionEnable = $logMessageDownconversionEnable;
        return $this;
    }
    /**
     * Define whether the timestamp in the message is message create time or log append time.
     *
     * @return string
     */
    public function getLogMessageTimestampType(): string
    {
        return $this->logMessageTimestampType;
    }
    /**
     * Define whether the timestamp in the message is message create time or log append time.
     *
     * @param string $logMessageTimestampType
     *
     * @return self
     */
    public function setLogMessageTimestampType(string $logMessageTimestampType): self
    {
        $this->initialized['logMessageTimestampType'] = true;
        $this->logMessageTimestampType = $logMessageTimestampType;
        return $this;
    }
    /**
     * The maximum difference allowed between the timestamp when a broker receives a message and the timestamp specified in the message
     *
     * @return int
     */
    public function getLogMessageTimestampDifferenceMaxMs(): int
    {
        return $this->logMessageTimestampDifferenceMaxMs;
    }
    /**
     * The maximum difference allowed between the timestamp when a broker receives a message and the timestamp specified in the message
     *
     * @param int $logMessageTimestampDifferenceMaxMs
     *
     * @return self
     */
    public function setLogMessageTimestampDifferenceMaxMs(int $logMessageTimestampDifferenceMaxMs): self
    {
        $this->initialized['logMessageTimestampDifferenceMaxMs'] = true;
        $this->logMessageTimestampDifferenceMaxMs = $logMessageTimestampDifferenceMaxMs;
        return $this;
    }
    /**
     * Controls whether to preallocate a file when creating a new segment
     *
     * @return bool
     */
    public function getLogPreallocate(): bool
    {
        return $this->logPreallocate;
    }
    /**
     * Controls whether to preallocate a file when creating a new segment
     *
     * @param bool $logPreallocate
     *
     * @return self
     */
    public function setLogPreallocate(bool $logPreallocate): self
    {
        $this->initialized['logPreallocate'] = true;
        $this->logPreallocate = $logPreallocate;
        return $this;
    }
    /**
     * The maximum size of the log before deleting messages
     *
     * @return int
     */
    public function getLogRetentionBytes(): int
    {
        return $this->logRetentionBytes;
    }
    /**
     * The maximum size of the log before deleting messages
     *
     * @param int $logRetentionBytes
     *
     * @return self
     */
    public function setLogRetentionBytes(int $logRetentionBytes): self
    {
        $this->initialized['logRetentionBytes'] = true;
        $this->logRetentionBytes = $logRetentionBytes;
        return $this;
    }
    /**
     * The number of hours to keep a log file before deleting it
     *
     * @return int
     */
    public function getLogRetentionHours(): int
    {
        return $this->logRetentionHours;
    }
    /**
     * The number of hours to keep a log file before deleting it
     *
     * @param int $logRetentionHours
     *
     * @return self
     */
    public function setLogRetentionHours(int $logRetentionHours): self
    {
        $this->initialized['logRetentionHours'] = true;
        $this->logRetentionHours = $logRetentionHours;
        return $this;
    }
    /**
     * The number of milliseconds to keep a log file before deleting it (in milliseconds), If not set, the value in log.retention.minutes is used. If set to -1, no time limit is applied.
     *
     * @return int
     */
    public function getLogRetentionMs(): int
    {
        return $this->logRetentionMs;
    }
    /**
     * The number of milliseconds to keep a log file before deleting it (in milliseconds), If not set, the value in log.retention.minutes is used. If set to -1, no time limit is applied.
     *
     * @param int $logRetentionMs
     *
     * @return self
     */
    public function setLogRetentionMs(int $logRetentionMs): self
    {
        $this->initialized['logRetentionMs'] = true;
        $this->logRetentionMs = $logRetentionMs;
        return $this;
    }
    /**
     * The maximum jitter to subtract from logRollTimeMillis (in milliseconds). If not set, the value in log.roll.jitter.hours is used
     *
     * @return int
     */
    public function getLogRollJitterMs(): int
    {
        return $this->logRollJitterMs;
    }
    /**
     * The maximum jitter to subtract from logRollTimeMillis (in milliseconds). If not set, the value in log.roll.jitter.hours is used
     *
     * @param int $logRollJitterMs
     *
     * @return self
     */
    public function setLogRollJitterMs(int $logRollJitterMs): self
    {
        $this->initialized['logRollJitterMs'] = true;
        $this->logRollJitterMs = $logRollJitterMs;
        return $this;
    }
    /**
     * The maximum time before a new log segment is rolled out (in milliseconds).
     *
     * @return int
     */
    public function getLogRollMs(): int
    {
        return $this->logRollMs;
    }
    /**
     * The maximum time before a new log segment is rolled out (in milliseconds).
     *
     * @param int $logRollMs
     *
     * @return self
     */
    public function setLogRollMs(int $logRollMs): self
    {
        $this->initialized['logRollMs'] = true;
        $this->logRollMs = $logRollMs;
        return $this;
    }
    /**
     * The maximum size of a single log file
     *
     * @return int
     */
    public function getLogSegmentBytes(): int
    {
        return $this->logSegmentBytes;
    }
    /**
     * The maximum size of a single log file
     *
     * @param int $logSegmentBytes
     *
     * @return self
     */
    public function setLogSegmentBytes(int $logSegmentBytes): self
    {
        $this->initialized['logSegmentBytes'] = true;
        $this->logSegmentBytes = $logSegmentBytes;
        return $this;
    }
    /**
     * The amount of time to wait before deleting a file from the filesystem
     *
     * @return int
     */
    public function getLogSegmentDeleteDelayMs(): int
    {
        return $this->logSegmentDeleteDelayMs;
    }
    /**
     * The amount of time to wait before deleting a file from the filesystem
     *
     * @param int $logSegmentDeleteDelayMs
     *
     * @return self
     */
    public function setLogSegmentDeleteDelayMs(int $logSegmentDeleteDelayMs): self
    {
        $this->initialized['logSegmentDeleteDelayMs'] = true;
        $this->logSegmentDeleteDelayMs = $logSegmentDeleteDelayMs;
        return $this;
    }
    /**
     * Enable auto creation of topics
     *
     * @return bool
     */
    public function getAutoCreateTopicsEnable(): bool
    {
        return $this->autoCreateTopicsEnable;
    }
    /**
     * Enable auto creation of topics
     *
     * @param bool $autoCreateTopicsEnable
     *
     * @return self
     */
    public function setAutoCreateTopicsEnable(bool $autoCreateTopicsEnable): self
    {
        $this->initialized['autoCreateTopicsEnable'] = true;
        $this->autoCreateTopicsEnable = $autoCreateTopicsEnable;
        return $this;
    }
    /**
     * When a producer sets acks to 'all' (or '-1'), min_insync_replicas specifies the minimum number of replicas that must acknowledge a write for the write to be considered successful.
     *
     * @return int
     */
    public function getMinInsyncReplicas(): int
    {
        return $this->minInsyncReplicas;
    }
    /**
     * When a producer sets acks to 'all' (or '-1'), min_insync_replicas specifies the minimum number of replicas that must acknowledge a write for the write to be considered successful.
     *
     * @param int $minInsyncReplicas
     *
     * @return self
     */
    public function setMinInsyncReplicas(int $minInsyncReplicas): self
    {
        $this->initialized['minInsyncReplicas'] = true;
        $this->minInsyncReplicas = $minInsyncReplicas;
        return $this;
    }
    /**
     * Number of partitions for autocreated topics
     *
     * @return int
     */
    public function getNumPartitions(): int
    {
        return $this->numPartitions;
    }
    /**
     * Number of partitions for autocreated topics
     *
     * @param int $numPartitions
     *
     * @return self
     */
    public function setNumPartitions(int $numPartitions): self
    {
        $this->initialized['numPartitions'] = true;
        $this->numPartitions = $numPartitions;
        return $this;
    }
    /**
     * Replication factor for autocreated topics
     *
     * @return int
     */
    public function getDefaultReplicationFactor(): int
    {
        return $this->defaultReplicationFactor;
    }
    /**
     * Replication factor for autocreated topics
     *
     * @param int $defaultReplicationFactor
     *
     * @return self
     */
    public function setDefaultReplicationFactor(int $defaultReplicationFactor): self
    {
        $this->initialized['defaultReplicationFactor'] = true;
        $this->defaultReplicationFactor = $defaultReplicationFactor;
        return $this;
    }
    /**
     * The number of bytes of messages to attempt to fetch for each partition (defaults to 1048576). This is not an absolute maximum, if the first record batch in the first non-empty partition of the fetch is larger than this value, the record batch will still be returned to ensure that progress can be made.
     *
     * @return int
     */
    public function getReplicaFetchMaxBytes(): int
    {
        return $this->replicaFetchMaxBytes;
    }
    /**
     * The number of bytes of messages to attempt to fetch for each partition (defaults to 1048576). This is not an absolute maximum, if the first record batch in the first non-empty partition of the fetch is larger than this value, the record batch will still be returned to ensure that progress can be made.
     *
     * @param int $replicaFetchMaxBytes
     *
     * @return self
     */
    public function setReplicaFetchMaxBytes(int $replicaFetchMaxBytes): self
    {
        $this->initialized['replicaFetchMaxBytes'] = true;
        $this->replicaFetchMaxBytes = $replicaFetchMaxBytes;
        return $this;
    }
    /**
     * Maximum bytes expected for the entire fetch response (defaults to 10485760). Records are fetched in batches, and if the first record batch in the first non-empty partition of the fetch is larger than this value, the record batch will still be returned to ensure that progress can be made. As such, this is not an absolute maximum.
     *
     * @return int
     */
    public function getReplicaFetchResponseMaxBytes(): int
    {
        return $this->replicaFetchResponseMaxBytes;
    }
    /**
     * Maximum bytes expected for the entire fetch response (defaults to 10485760). Records are fetched in batches, and if the first record batch in the first non-empty partition of the fetch is larger than this value, the record batch will still be returned to ensure that progress can be made. As such, this is not an absolute maximum.
     *
     * @param int $replicaFetchResponseMaxBytes
     *
     * @return self
     */
    public function setReplicaFetchResponseMaxBytes(int $replicaFetchResponseMaxBytes): self
    {
        $this->initialized['replicaFetchResponseMaxBytes'] = true;
        $this->replicaFetchResponseMaxBytes = $replicaFetchResponseMaxBytes;
        return $this;
    }
    /**
     * The maximum number of connections allowed from each ip address (defaults to 2147483647).
     *
     * @return int
     */
    public function getMaxConnectionsPerIp(): int
    {
        return $this->maxConnectionsPerIp;
    }
    /**
     * The maximum number of connections allowed from each ip address (defaults to 2147483647).
     *
     * @param int $maxConnectionsPerIp
     *
     * @return self
     */
    public function setMaxConnectionsPerIp(int $maxConnectionsPerIp): self
    {
        $this->initialized['maxConnectionsPerIp'] = true;
        $this->maxConnectionsPerIp = $maxConnectionsPerIp;
        return $this;
    }
    /**
     * The purge interval (in number of requests) of the producer request purgatory (defaults to 1000).
     *
     * @return int
     */
    public function getProducerPurgatoryPurgeIntervalRequests(): int
    {
        return $this->producerPurgatoryPurgeIntervalRequests;
    }
    /**
     * The purge interval (in number of requests) of the producer request purgatory (defaults to 1000).
     *
     * @param int $producerPurgatoryPurgeIntervalRequests
     *
     * @return self
     */
    public function setProducerPurgatoryPurgeIntervalRequests(int $producerPurgatoryPurgeIntervalRequests): self
    {
        $this->initialized['producerPurgatoryPurgeIntervalRequests'] = true;
        $this->producerPurgatoryPurgeIntervalRequests = $producerPurgatoryPurgeIntervalRequests;
        return $this;
    }
    /**
     * The maximum number of bytes in a socket request (defaults to 104857600).
     *
     * @return int
     */
    public function getSocketRequestMaxBytes(): int
    {
        return $this->socketRequestMaxBytes;
    }
    /**
     * The maximum number of bytes in a socket request (defaults to 104857600).
     *
     * @param int $socketRequestMaxBytes
     *
     * @return self
     */
    public function setSocketRequestMaxBytes(int $socketRequestMaxBytes): self
    {
        $this->initialized['socketRequestMaxBytes'] = true;
        $this->socketRequestMaxBytes = $socketRequestMaxBytes;
        return $this;
    }
    /**
     * The transaction topic segment bytes should be kept relatively small in order to facilitate faster log compaction and cache loads (defaults to 104857600 (100 mebibytes)).
     *
     * @return int
     */
    public function getTransactionStateLogSegmentBytes(): int
    {
        return $this->transactionStateLogSegmentBytes;
    }
    /**
     * The transaction topic segment bytes should be kept relatively small in order to facilitate faster log compaction and cache loads (defaults to 104857600 (100 mebibytes)).
     *
     * @param int $transactionStateLogSegmentBytes
     *
     * @return self
     */
    public function setTransactionStateLogSegmentBytes(int $transactionStateLogSegmentBytes): self
    {
        $this->initialized['transactionStateLogSegmentBytes'] = true;
        $this->transactionStateLogSegmentBytes = $transactionStateLogSegmentBytes;
        return $this;
    }
    /**
     * The interval at which to remove transactions that have expired due to transactional.id.expiration.ms passing (defaults to 3600000 (1 hour)).
     *
     * @return int
     */
    public function getTransactionRemoveExpiredTransactionCleanupIntervalMs(): int
    {
        return $this->transactionRemoveExpiredTransactionCleanupIntervalMs;
    }
    /**
     * The interval at which to remove transactions that have expired due to transactional.id.expiration.ms passing (defaults to 3600000 (1 hour)).
     *
     * @param int $transactionRemoveExpiredTransactionCleanupIntervalMs
     *
     * @return self
     */
    public function setTransactionRemoveExpiredTransactionCleanupIntervalMs(int $transactionRemoveExpiredTransactionCleanupIntervalMs): self
    {
        $this->initialized['transactionRemoveExpiredTransactionCleanupIntervalMs'] = true;
        $this->transactionRemoveExpiredTransactionCleanupIntervalMs = $transactionRemoveExpiredTransactionCleanupIntervalMs;
        return $this;
    }
    /**
     * Enable creation of schema registry for the Kafka cluster. Schema_registry only works with General Purpose - Dedicated CPU plans.
     *
     * @return bool
     */
    public function getSchemaRegistry(): bool
    {
        return $this->schemaRegistry;
    }
    /**
     * Enable creation of schema registry for the Kafka cluster. Schema_registry only works with General Purpose - Dedicated CPU plans.
     *
     * @param bool $schemaRegistry
     *
     * @return self
     */
    public function setSchemaRegistry(bool $schemaRegistry): self
    {
        $this->initialized['schemaRegistry'] = true;
        $this->schemaRegistry = $schemaRegistry;
        return $this;
    }
}