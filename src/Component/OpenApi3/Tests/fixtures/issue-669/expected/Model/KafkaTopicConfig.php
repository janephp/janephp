<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class KafkaTopicConfig implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * The cleanup_policy sets the retention policy to use on log segments. 'delete' will discard old segments when retention time/size limits are reached. 'compact' will enable log compaction, resulting in retention of the latest value for each key.
     *
     * @var string
     */
    public string $cleanupPolicy = 'delete';
    /**
     * The compression_type specifies the compression type of the topic.
     *
     * @var string
     */
    public string $compressionType = 'producer';
    /**
     * The delete_retention_ms specifies how long (in ms) to retain delete tombstone markers for topics.
     *
     * @var int
     */
    public int $deleteRetentionMs = 86400000;
    /**
     * The file_delete_delay_ms specifies the time (in ms) to wait before deleting a file from the filesystem.
     *
     * @var int
     */
    public int $fileDeleteDelayMs = 60000;
    /**
     * The flush_messages specifies the number of messages to accumulate on a log partition before messages are flushed to disk.
     *
     * @var int
     */
    public int $flushMessages = 9223372036854775807;
    /**
     * The flush_ms specifies the maximum time (in ms) that a message is kept in memory before being flushed to disk.
     *
     * @var int
     */
    public int $flushMs = 9223372036854775807;
    /**
     * The index_interval_bytes specifies the number of bytes between entries being added into te offset index.
     *
     * @var int
     */
    public int $indexIntervalBytes = 4096;
    /**
     * The max_compaction_lag_ms specifies the maximum amount of time (in ms) that a message will remain uncompacted. This is only applicable if the logs are have compaction enabled.
     *
     * @var int
     */
    public int $maxCompactionLagMs = 9223372036854775807;
    /**
     * The max_messages_bytes specifies the largest record batch size (in bytes) that can be sent to the server.  This is calculated after compression if compression is enabled.
     *
     * @var int
     */
    public int $maxMessageBytes = 1048588;
    /**
     * The message_down_conversion_enable specifies whether down-conversion of message formats is enabled to satisfy consumer requests. When 'false', the broker will not perform conversion for consumers expecting older message formats. The broker will respond with an `UNSUPPORTED_VERSION` error for consume requests from these older clients.
     *
     * @var bool
     */
    public bool $messageDownConversionEnable = true;
    /**
     * The message_format_version specifies the message format version used by the broker to append messages to the logs. The value of this setting is assumed to be 3.0-IV1 if the broker protocol version is 3.0 or higher. By setting a  particular message format version, all existing messages on disk must be smaller or equal to the specified version.
     *
     * @var string
     */
    public string $messageFormatVersion = '3.0-IV1';
    /**
     * The message_timestamp_type specifies whether to use the message create time or log append time as the timestamp on a message.
     *
     * @var string
     */
    public string $messageTimestampType = 'create_time';
    /**
     * The min_cleanable_dirty_ratio specifies the frequency of log compaction (if enabled) in relation to duplicates present in the logs. For example, at 0.5, at most 50% of the log could be duplicates before compaction would begin.
     *
     * @var float
     */
    public float $minCleanableDirtyRatio = 0.5;
    /**
     * The min_compaction_lag_ms specifies the minimum time (in ms) that a message will remain uncompacted in the log. Only relevant if log compaction is enabled.
     *
     * @var int
     */
    public int $minCompactionLagMs = 0;
    /**
     * The min_insync_replicas specifies the number of replicas that must ACK a write for the write to be considered successful.
     *
     * @var int
     */
    public int $minInsyncReplicas = 1;
    /**
     * The preallocate specifies whether a file should be preallocated on disk when creating a new log segment.
     *
     * @var bool
     */
    public bool $preallocate = false;
    /**
     * The retention_bytes specifies the maximum size of the log (in bytes) before deleting messages. -1 indicates that there is no limit.
     *
     * @var int
     */
    public int $retentionBytes = -1;
    /**
     * The retention_ms specifies the maximum amount of time (in ms) to keep a message before deleting it.
     *
     * @var int
     */
    public int $retentionMs = 604800000;
    /**
     * The segment_bytes specifies the maximum size of a single log file (in bytes).
     *
     * @var int
     */
    public int $segmentBytes = 209715200;
    /**
     * The segment_jitter_ms specifies the maximum random jitter subtracted from the scheduled segment roll time to avoid thundering herds of segment rolling.
     *
     * @var int
     */
    public int $segmentJitterMs = 0;
    /**
     * The segment_ms specifies the period of time after which the log will be forced to roll if the segment file isn't full. This ensures that retention can delete or compact old data.
     *
     * @var int
     */
    public int $segmentMs = 604800000;
    public function definedProperties(): array
    {
        return ['cleanupPolicy' => 'cleanup_policy', 'compressionType' => 'compression_type', 'deleteRetentionMs' => 'delete_retention_ms', 'fileDeleteDelayMs' => 'file_delete_delay_ms', 'flushMessages' => 'flush_messages', 'flushMs' => 'flush_ms', 'indexIntervalBytes' => 'index_interval_bytes', 'maxCompactionLagMs' => 'max_compaction_lag_ms', 'maxMessageBytes' => 'max_message_bytes', 'messageDownConversionEnable' => 'message_down_conversion_enable', 'messageFormatVersion' => 'message_format_version', 'messageTimestampType' => 'message_timestamp_type', 'minCleanableDirtyRatio' => 'min_cleanable_dirty_ratio', 'minCompactionLagMs' => 'min_compaction_lag_ms', 'minInsyncReplicas' => 'min_insync_replicas', 'preallocate' => 'preallocate', 'retentionBytes' => 'retention_bytes', 'retentionMs' => 'retention_ms', 'segmentBytes' => 'segment_bytes', 'segmentJitterMs' => 'segment_jitter_ms', 'segmentMs' => 'segment_ms'];
    }
}