<?php

namespace Jane\Generated\DigitalOcean\Model;

class KafkaTopicConfig extends \ArrayObject
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
     * The cleanup_policy sets the retention policy to use on log segments. 'delete' will discard old segments when retention time/size limits are reached. 'compact' will enable log compaction, resulting in retention of the latest value for each key.
     *
     * @var string
     */
    protected $cleanupPolicy = 'delete';
    /**
     * The compression_type specifies the compression type of the topic.
     *
     * @var string
     */
    protected $compressionType = 'producer';
    /**
     * The delete_retention_ms specifies how long (in ms) to retain delete tombstone markers for topics.
     *
     * @var int
     */
    protected $deleteRetentionMs = 86400000;
    /**
     * The file_delete_delay_ms specifies the time (in ms) to wait before deleting a file from the filesystem.
     *
     * @var int
     */
    protected $fileDeleteDelayMs = 60000;
    /**
     * The flush_messages specifies the number of messages to accumulate on a log partition before messages are flushed to disk.
     *
     * @var int
     */
    protected $flushMessages = '9223372036854776000';
    /**
     * The flush_ms specifies the maximum time (in ms) that a message is kept in memory before being flushed to disk.
     *
     * @var int
     */
    protected $flushMs = '9223372036854776000';
    /**
     * The index_interval_bytes specifies the number of bytes between entries being added into te offset index.
     *
     * @var int
     */
    protected $indexIntervalBytes = 4096;
    /**
     * The max_compaction_lag_ms specifies the maximum amount of time (in ms) that a message will remain uncompacted. This is only applicable if the logs are have compaction enabled.
     *
     * @var int
     */
    protected $maxCompactionLagMs = '9223372036854776000';
    /**
     * The max_messages_bytes specifies the largest record batch size (in bytes) that can be sent to the server.  This is calculated after compression if compression is enabled.
     *
     * @var int
     */
    protected $maxMessageBytes = 1048588;
    /**
     * The message_down_conversion_enable specifies whether down-conversion of message formats is enabled to satisfy consumer requests. When 'false', the broker will not perform conversion for consumers expecting older message formats. The broker will respond with an `UNSUPPORTED_VERSION` error for consume requests from these older clients.
     *
     * @var bool
     */
    protected $messageDownConversionEnable = true;
    /**
     * The message_format_version specifies the message format version used by the broker to append messages to the logs. The value of this setting is assumed to be 3.0-IV1 if the broker protocol version is 3.0 or higher. By setting a  particular message format version, all existing messages on disk must be smaller or equal to the specified version.
     *
     * @var string
     */
    protected $messageFormatVersion = '3.0-IV1';
    /**
     * The message_timestamp_type specifies whether to use the message create time or log append time as the timestamp on a message.
     *
     * @var string
     */
    protected $messageTimestampType = 'create_time';
    /**
     * The min_cleanable_dirty_ratio specifies the frequency of log compaction (if enabled) in relation to duplicates present in the logs. For example, at 0.5, at most 50% of the log could be duplicates before compaction would begin.
     *
     * @var float
     */
    protected $minCleanableDirtyRatio = 0.5;
    /**
     * The min_compaction_lag_ms specifies the minimum time (in ms) that a message will remain uncompacted in the log. Only relevant if log compaction is enabled.
     *
     * @var int
     */
    protected $minCompactionLagMs = 0;
    /**
     * The min_insync_replicas specifies the number of replicas that must ACK a write for the write to be considered successful.
     *
     * @var int
     */
    protected $minInsyncReplicas = 1;
    /**
     * The preallocate specifies whether a file should be preallocated on disk when creating a new log segment.
     *
     * @var bool
     */
    protected $preallocate = false;
    /**
     * The retention_bytes specifies the maximum size of the log (in bytes) before deleting messages. -1 indicates that there is no limit.
     *
     * @var int
     */
    protected $retentionBytes = -1;
    /**
     * The retention_ms specifies the maximum amount of time (in ms) to keep a message before deleting it.
     *
     * @var int
     */
    protected $retentionMs = 604800000;
    /**
     * The segment_bytes specifies the maximum size of a single log file (in bytes).
     *
     * @var int
     */
    protected $segmentBytes = 209715200;
    /**
     * The segment_jitter_ms specifies the maximum random jitter subtracted from the scheduled segment roll time to avoid thundering herds of segment rolling.
     *
     * @var int
     */
    protected $segmentJitterMs = 0;
    /**
     * The segment_ms specifies the period of time after which the log will be forced to roll if the segment file isn't full. This ensures that retention can delete or compact old data.
     *
     * @var int
     */
    protected $segmentMs = 604800000;
    /**
     * The cleanup_policy sets the retention policy to use on log segments. 'delete' will discard old segments when retention time/size limits are reached. 'compact' will enable log compaction, resulting in retention of the latest value for each key.
     *
     * @return string
     */
    public function getCleanupPolicy(): string
    {
        return $this->cleanupPolicy;
    }
    /**
     * The cleanup_policy sets the retention policy to use on log segments. 'delete' will discard old segments when retention time/size limits are reached. 'compact' will enable log compaction, resulting in retention of the latest value for each key.
     *
     * @param string $cleanupPolicy
     *
     * @return self
     */
    public function setCleanupPolicy(string $cleanupPolicy): self
    {
        $this->initialized['cleanupPolicy'] = true;
        $this->cleanupPolicy = $cleanupPolicy;
        return $this;
    }
    /**
     * The compression_type specifies the compression type of the topic.
     *
     * @return string
     */
    public function getCompressionType(): string
    {
        return $this->compressionType;
    }
    /**
     * The compression_type specifies the compression type of the topic.
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
     * The delete_retention_ms specifies how long (in ms) to retain delete tombstone markers for topics.
     *
     * @return int
     */
    public function getDeleteRetentionMs(): int
    {
        return $this->deleteRetentionMs;
    }
    /**
     * The delete_retention_ms specifies how long (in ms) to retain delete tombstone markers for topics.
     *
     * @param int $deleteRetentionMs
     *
     * @return self
     */
    public function setDeleteRetentionMs(int $deleteRetentionMs): self
    {
        $this->initialized['deleteRetentionMs'] = true;
        $this->deleteRetentionMs = $deleteRetentionMs;
        return $this;
    }
    /**
     * The file_delete_delay_ms specifies the time (in ms) to wait before deleting a file from the filesystem.
     *
     * @return int
     */
    public function getFileDeleteDelayMs(): int
    {
        return $this->fileDeleteDelayMs;
    }
    /**
     * The file_delete_delay_ms specifies the time (in ms) to wait before deleting a file from the filesystem.
     *
     * @param int $fileDeleteDelayMs
     *
     * @return self
     */
    public function setFileDeleteDelayMs(int $fileDeleteDelayMs): self
    {
        $this->initialized['fileDeleteDelayMs'] = true;
        $this->fileDeleteDelayMs = $fileDeleteDelayMs;
        return $this;
    }
    /**
     * The flush_messages specifies the number of messages to accumulate on a log partition before messages are flushed to disk.
     *
     * @return int
     */
    public function getFlushMessages(): int
    {
        return $this->flushMessages;
    }
    /**
     * The flush_messages specifies the number of messages to accumulate on a log partition before messages are flushed to disk.
     *
     * @param int $flushMessages
     *
     * @return self
     */
    public function setFlushMessages(int $flushMessages): self
    {
        $this->initialized['flushMessages'] = true;
        $this->flushMessages = $flushMessages;
        return $this;
    }
    /**
     * The flush_ms specifies the maximum time (in ms) that a message is kept in memory before being flushed to disk.
     *
     * @return int
     */
    public function getFlushMs(): int
    {
        return $this->flushMs;
    }
    /**
     * The flush_ms specifies the maximum time (in ms) that a message is kept in memory before being flushed to disk.
     *
     * @param int $flushMs
     *
     * @return self
     */
    public function setFlushMs(int $flushMs): self
    {
        $this->initialized['flushMs'] = true;
        $this->flushMs = $flushMs;
        return $this;
    }
    /**
     * The index_interval_bytes specifies the number of bytes between entries being added into te offset index.
     *
     * @return int
     */
    public function getIndexIntervalBytes(): int
    {
        return $this->indexIntervalBytes;
    }
    /**
     * The index_interval_bytes specifies the number of bytes between entries being added into te offset index.
     *
     * @param int $indexIntervalBytes
     *
     * @return self
     */
    public function setIndexIntervalBytes(int $indexIntervalBytes): self
    {
        $this->initialized['indexIntervalBytes'] = true;
        $this->indexIntervalBytes = $indexIntervalBytes;
        return $this;
    }
    /**
     * The max_compaction_lag_ms specifies the maximum amount of time (in ms) that a message will remain uncompacted. This is only applicable if the logs are have compaction enabled.
     *
     * @return int
     */
    public function getMaxCompactionLagMs(): int
    {
        return $this->maxCompactionLagMs;
    }
    /**
     * The max_compaction_lag_ms specifies the maximum amount of time (in ms) that a message will remain uncompacted. This is only applicable if the logs are have compaction enabled.
     *
     * @param int $maxCompactionLagMs
     *
     * @return self
     */
    public function setMaxCompactionLagMs(int $maxCompactionLagMs): self
    {
        $this->initialized['maxCompactionLagMs'] = true;
        $this->maxCompactionLagMs = $maxCompactionLagMs;
        return $this;
    }
    /**
     * The max_messages_bytes specifies the largest record batch size (in bytes) that can be sent to the server.  This is calculated after compression if compression is enabled.
     *
     * @return int
     */
    public function getMaxMessageBytes(): int
    {
        return $this->maxMessageBytes;
    }
    /**
     * The max_messages_bytes specifies the largest record batch size (in bytes) that can be sent to the server.  This is calculated after compression if compression is enabled.
     *
     * @param int $maxMessageBytes
     *
     * @return self
     */
    public function setMaxMessageBytes(int $maxMessageBytes): self
    {
        $this->initialized['maxMessageBytes'] = true;
        $this->maxMessageBytes = $maxMessageBytes;
        return $this;
    }
    /**
     * The message_down_conversion_enable specifies whether down-conversion of message formats is enabled to satisfy consumer requests. When 'false', the broker will not perform conversion for consumers expecting older message formats. The broker will respond with an `UNSUPPORTED_VERSION` error for consume requests from these older clients.
     *
     * @return bool
     */
    public function getMessageDownConversionEnable(): bool
    {
        return $this->messageDownConversionEnable;
    }
    /**
     * The message_down_conversion_enable specifies whether down-conversion of message formats is enabled to satisfy consumer requests. When 'false', the broker will not perform conversion for consumers expecting older message formats. The broker will respond with an `UNSUPPORTED_VERSION` error for consume requests from these older clients.
     *
     * @param bool $messageDownConversionEnable
     *
     * @return self
     */
    public function setMessageDownConversionEnable(bool $messageDownConversionEnable): self
    {
        $this->initialized['messageDownConversionEnable'] = true;
        $this->messageDownConversionEnable = $messageDownConversionEnable;
        return $this;
    }
    /**
     * The message_format_version specifies the message format version used by the broker to append messages to the logs. The value of this setting is assumed to be 3.0-IV1 if the broker protocol version is 3.0 or higher. By setting a  particular message format version, all existing messages on disk must be smaller or equal to the specified version.
     *
     * @return string
     */
    public function getMessageFormatVersion(): string
    {
        return $this->messageFormatVersion;
    }
    /**
     * The message_format_version specifies the message format version used by the broker to append messages to the logs. The value of this setting is assumed to be 3.0-IV1 if the broker protocol version is 3.0 or higher. By setting a  particular message format version, all existing messages on disk must be smaller or equal to the specified version.
     *
     * @param string $messageFormatVersion
     *
     * @return self
     */
    public function setMessageFormatVersion(string $messageFormatVersion): self
    {
        $this->initialized['messageFormatVersion'] = true;
        $this->messageFormatVersion = $messageFormatVersion;
        return $this;
    }
    /**
     * The message_timestamp_type specifies whether to use the message create time or log append time as the timestamp on a message.
     *
     * @return string
     */
    public function getMessageTimestampType(): string
    {
        return $this->messageTimestampType;
    }
    /**
     * The message_timestamp_type specifies whether to use the message create time or log append time as the timestamp on a message.
     *
     * @param string $messageTimestampType
     *
     * @return self
     */
    public function setMessageTimestampType(string $messageTimestampType): self
    {
        $this->initialized['messageTimestampType'] = true;
        $this->messageTimestampType = $messageTimestampType;
        return $this;
    }
    /**
     * The min_cleanable_dirty_ratio specifies the frequency of log compaction (if enabled) in relation to duplicates present in the logs. For example, at 0.5, at most 50% of the log could be duplicates before compaction would begin.
     *
     * @return float
     */
    public function getMinCleanableDirtyRatio(): float
    {
        return $this->minCleanableDirtyRatio;
    }
    /**
     * The min_cleanable_dirty_ratio specifies the frequency of log compaction (if enabled) in relation to duplicates present in the logs. For example, at 0.5, at most 50% of the log could be duplicates before compaction would begin.
     *
     * @param float $minCleanableDirtyRatio
     *
     * @return self
     */
    public function setMinCleanableDirtyRatio(float $minCleanableDirtyRatio): self
    {
        $this->initialized['minCleanableDirtyRatio'] = true;
        $this->minCleanableDirtyRatio = $minCleanableDirtyRatio;
        return $this;
    }
    /**
     * The min_compaction_lag_ms specifies the minimum time (in ms) that a message will remain uncompacted in the log. Only relevant if log compaction is enabled.
     *
     * @return int
     */
    public function getMinCompactionLagMs(): int
    {
        return $this->minCompactionLagMs;
    }
    /**
     * The min_compaction_lag_ms specifies the minimum time (in ms) that a message will remain uncompacted in the log. Only relevant if log compaction is enabled.
     *
     * @param int $minCompactionLagMs
     *
     * @return self
     */
    public function setMinCompactionLagMs(int $minCompactionLagMs): self
    {
        $this->initialized['minCompactionLagMs'] = true;
        $this->minCompactionLagMs = $minCompactionLagMs;
        return $this;
    }
    /**
     * The min_insync_replicas specifies the number of replicas that must ACK a write for the write to be considered successful.
     *
     * @return int
     */
    public function getMinInsyncReplicas(): int
    {
        return $this->minInsyncReplicas;
    }
    /**
     * The min_insync_replicas specifies the number of replicas that must ACK a write for the write to be considered successful.
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
     * The preallocate specifies whether a file should be preallocated on disk when creating a new log segment.
     *
     * @return bool
     */
    public function getPreallocate(): bool
    {
        return $this->preallocate;
    }
    /**
     * The preallocate specifies whether a file should be preallocated on disk when creating a new log segment.
     *
     * @param bool $preallocate
     *
     * @return self
     */
    public function setPreallocate(bool $preallocate): self
    {
        $this->initialized['preallocate'] = true;
        $this->preallocate = $preallocate;
        return $this;
    }
    /**
     * The retention_bytes specifies the maximum size of the log (in bytes) before deleting messages. -1 indicates that there is no limit.
     *
     * @return int
     */
    public function getRetentionBytes(): int
    {
        return $this->retentionBytes;
    }
    /**
     * The retention_bytes specifies the maximum size of the log (in bytes) before deleting messages. -1 indicates that there is no limit.
     *
     * @param int $retentionBytes
     *
     * @return self
     */
    public function setRetentionBytes(int $retentionBytes): self
    {
        $this->initialized['retentionBytes'] = true;
        $this->retentionBytes = $retentionBytes;
        return $this;
    }
    /**
     * The retention_ms specifies the maximum amount of time (in ms) to keep a message before deleting it.
     *
     * @return int
     */
    public function getRetentionMs(): int
    {
        return $this->retentionMs;
    }
    /**
     * The retention_ms specifies the maximum amount of time (in ms) to keep a message before deleting it.
     *
     * @param int $retentionMs
     *
     * @return self
     */
    public function setRetentionMs(int $retentionMs): self
    {
        $this->initialized['retentionMs'] = true;
        $this->retentionMs = $retentionMs;
        return $this;
    }
    /**
     * The segment_bytes specifies the maximum size of a single log file (in bytes).
     *
     * @return int
     */
    public function getSegmentBytes(): int
    {
        return $this->segmentBytes;
    }
    /**
     * The segment_bytes specifies the maximum size of a single log file (in bytes).
     *
     * @param int $segmentBytes
     *
     * @return self
     */
    public function setSegmentBytes(int $segmentBytes): self
    {
        $this->initialized['segmentBytes'] = true;
        $this->segmentBytes = $segmentBytes;
        return $this;
    }
    /**
     * The segment_jitter_ms specifies the maximum random jitter subtracted from the scheduled segment roll time to avoid thundering herds of segment rolling.
     *
     * @return int
     */
    public function getSegmentJitterMs(): int
    {
        return $this->segmentJitterMs;
    }
    /**
     * The segment_jitter_ms specifies the maximum random jitter subtracted from the scheduled segment roll time to avoid thundering herds of segment rolling.
     *
     * @param int $segmentJitterMs
     *
     * @return self
     */
    public function setSegmentJitterMs(int $segmentJitterMs): self
    {
        $this->initialized['segmentJitterMs'] = true;
        $this->segmentJitterMs = $segmentJitterMs;
        return $this;
    }
    /**
     * The segment_ms specifies the period of time after which the log will be forced to roll if the segment file isn't full. This ensures that retention can delete or compact old data.
     *
     * @return int
     */
    public function getSegmentMs(): int
    {
        return $this->segmentMs;
    }
    /**
     * The segment_ms specifies the period of time after which the log will be forced to roll if the segment file isn't full. This ensures that retention can delete or compact old data.
     *
     * @param int $segmentMs
     *
     * @return self
     */
    public function setSegmentMs(int $segmentMs): self
    {
        $this->initialized['segmentMs'] = true;
        $this->segmentMs = $segmentMs;
        return $this;
    }
}