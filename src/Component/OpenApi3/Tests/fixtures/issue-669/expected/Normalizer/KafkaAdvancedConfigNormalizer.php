<?php

namespace Jane\Generated\DigitalOcean\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Jane\Generated\DigitalOcean\Runtime\Normalizer\CheckArray;
use Jane\Generated\DigitalOcean\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class KafkaAdvancedConfigNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Generated\DigitalOcean\Model\KafkaAdvancedConfig::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Generated\DigitalOcean\Model\KafkaAdvancedConfig::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Generated\DigitalOcean\Model\KafkaAdvancedConfig();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('log_cleaner_min_cleanable_ratio', $data) && \is_int($data['log_cleaner_min_cleanable_ratio'])) {
            $data['log_cleaner_min_cleanable_ratio'] = (float) $data['log_cleaner_min_cleanable_ratio'];
        }
        if (\array_key_exists('log_message_downconversion_enable', $data) && \is_int($data['log_message_downconversion_enable'])) {
            $data['log_message_downconversion_enable'] = (bool) $data['log_message_downconversion_enable'];
        }
        if (\array_key_exists('log_preallocate', $data) && \is_int($data['log_preallocate'])) {
            $data['log_preallocate'] = (bool) $data['log_preallocate'];
        }
        if (\array_key_exists('auto_create_topics_enable', $data) && \is_int($data['auto_create_topics_enable'])) {
            $data['auto_create_topics_enable'] = (bool) $data['auto_create_topics_enable'];
        }
        if (\array_key_exists('schema_registry', $data) && \is_int($data['schema_registry'])) {
            $data['schema_registry'] = (bool) $data['schema_registry'];
        }
        if (\array_key_exists('compression_type', $data)) {
            $object->compressionType = $data['compression_type'];
            unset($data['compression_type']);
        }
        if (\array_key_exists('group_initial_rebalance_delay_ms', $data)) {
            $object->groupInitialRebalanceDelayMs = $data['group_initial_rebalance_delay_ms'];
            unset($data['group_initial_rebalance_delay_ms']);
        }
        if (\array_key_exists('group_min_session_timeout_ms', $data)) {
            $object->groupMinSessionTimeoutMs = $data['group_min_session_timeout_ms'];
            unset($data['group_min_session_timeout_ms']);
        }
        if (\array_key_exists('group_max_session_timeout_ms', $data)) {
            $object->groupMaxSessionTimeoutMs = $data['group_max_session_timeout_ms'];
            unset($data['group_max_session_timeout_ms']);
        }
        if (\array_key_exists('connections_max_idle_ms', $data)) {
            $object->connectionsMaxIdleMs = $data['connections_max_idle_ms'];
            unset($data['connections_max_idle_ms']);
        }
        if (\array_key_exists('max_incremental_fetch_session_cache_slots', $data)) {
            $object->maxIncrementalFetchSessionCacheSlots = $data['max_incremental_fetch_session_cache_slots'];
            unset($data['max_incremental_fetch_session_cache_slots']);
        }
        if (\array_key_exists('message_max_bytes', $data)) {
            $object->messageMaxBytes = $data['message_max_bytes'];
            unset($data['message_max_bytes']);
        }
        if (\array_key_exists('offsets_retention_minutes', $data)) {
            $object->offsetsRetentionMinutes = $data['offsets_retention_minutes'];
            unset($data['offsets_retention_minutes']);
        }
        if (\array_key_exists('log_cleaner_delete_retention_ms', $data)) {
            $object->logCleanerDeleteRetentionMs = $data['log_cleaner_delete_retention_ms'];
            unset($data['log_cleaner_delete_retention_ms']);
        }
        if (\array_key_exists('log_cleaner_min_cleanable_ratio', $data)) {
            $object->logCleanerMinCleanableRatio = $data['log_cleaner_min_cleanable_ratio'];
            unset($data['log_cleaner_min_cleanable_ratio']);
        }
        if (\array_key_exists('log_cleaner_max_compaction_lag_ms', $data)) {
            $object->logCleanerMaxCompactionLagMs = $data['log_cleaner_max_compaction_lag_ms'];
            unset($data['log_cleaner_max_compaction_lag_ms']);
        }
        if (\array_key_exists('log_cleaner_min_compaction_lag_ms', $data)) {
            $object->logCleanerMinCompactionLagMs = $data['log_cleaner_min_compaction_lag_ms'];
            unset($data['log_cleaner_min_compaction_lag_ms']);
        }
        if (\array_key_exists('log_cleanup_policy', $data)) {
            $object->logCleanupPolicy = $data['log_cleanup_policy'];
            unset($data['log_cleanup_policy']);
        }
        if (\array_key_exists('log_flush_interval_messages', $data)) {
            $object->logFlushIntervalMessages = $data['log_flush_interval_messages'];
            unset($data['log_flush_interval_messages']);
        }
        if (\array_key_exists('log_flush_interval_ms', $data)) {
            $object->logFlushIntervalMs = $data['log_flush_interval_ms'];
            unset($data['log_flush_interval_ms']);
        }
        if (\array_key_exists('log_index_interval_bytes', $data)) {
            $object->logIndexIntervalBytes = $data['log_index_interval_bytes'];
            unset($data['log_index_interval_bytes']);
        }
        if (\array_key_exists('log_index_size_max_bytes', $data)) {
            $object->logIndexSizeMaxBytes = $data['log_index_size_max_bytes'];
            unset($data['log_index_size_max_bytes']);
        }
        if (\array_key_exists('log_message_downconversion_enable', $data)) {
            $object->logMessageDownconversionEnable = $data['log_message_downconversion_enable'];
            unset($data['log_message_downconversion_enable']);
        }
        if (\array_key_exists('log_message_timestamp_type', $data)) {
            $object->logMessageTimestampType = $data['log_message_timestamp_type'];
            unset($data['log_message_timestamp_type']);
        }
        if (\array_key_exists('log_message_timestamp_difference_max_ms', $data)) {
            $object->logMessageTimestampDifferenceMaxMs = $data['log_message_timestamp_difference_max_ms'];
            unset($data['log_message_timestamp_difference_max_ms']);
        }
        if (\array_key_exists('log_preallocate', $data)) {
            $object->logPreallocate = $data['log_preallocate'];
            unset($data['log_preallocate']);
        }
        if (\array_key_exists('log_retention_bytes', $data)) {
            $object->logRetentionBytes = $data['log_retention_bytes'];
            unset($data['log_retention_bytes']);
        }
        if (\array_key_exists('log_retention_hours', $data)) {
            $object->logRetentionHours = $data['log_retention_hours'];
            unset($data['log_retention_hours']);
        }
        if (\array_key_exists('log_retention_ms', $data)) {
            $object->logRetentionMs = $data['log_retention_ms'];
            unset($data['log_retention_ms']);
        }
        if (\array_key_exists('log_roll_jitter_ms', $data)) {
            $object->logRollJitterMs = $data['log_roll_jitter_ms'];
            unset($data['log_roll_jitter_ms']);
        }
        if (\array_key_exists('log_roll_ms', $data)) {
            $object->logRollMs = $data['log_roll_ms'];
            unset($data['log_roll_ms']);
        }
        if (\array_key_exists('log_segment_bytes', $data)) {
            $object->logSegmentBytes = $data['log_segment_bytes'];
            unset($data['log_segment_bytes']);
        }
        if (\array_key_exists('log_segment_delete_delay_ms', $data)) {
            $object->logSegmentDeleteDelayMs = $data['log_segment_delete_delay_ms'];
            unset($data['log_segment_delete_delay_ms']);
        }
        if (\array_key_exists('auto_create_topics_enable', $data)) {
            $object->autoCreateTopicsEnable = $data['auto_create_topics_enable'];
            unset($data['auto_create_topics_enable']);
        }
        if (\array_key_exists('min_insync_replicas', $data)) {
            $object->minInsyncReplicas = $data['min_insync_replicas'];
            unset($data['min_insync_replicas']);
        }
        if (\array_key_exists('num_partitions', $data)) {
            $object->numPartitions = $data['num_partitions'];
            unset($data['num_partitions']);
        }
        if (\array_key_exists('default_replication_factor', $data)) {
            $object->defaultReplicationFactor = $data['default_replication_factor'];
            unset($data['default_replication_factor']);
        }
        if (\array_key_exists('replica_fetch_max_bytes', $data)) {
            $object->replicaFetchMaxBytes = $data['replica_fetch_max_bytes'];
            unset($data['replica_fetch_max_bytes']);
        }
        if (\array_key_exists('replica_fetch_response_max_bytes', $data)) {
            $object->replicaFetchResponseMaxBytes = $data['replica_fetch_response_max_bytes'];
            unset($data['replica_fetch_response_max_bytes']);
        }
        if (\array_key_exists('max_connections_per_ip', $data)) {
            $object->maxConnectionsPerIp = $data['max_connections_per_ip'];
            unset($data['max_connections_per_ip']);
        }
        if (\array_key_exists('producer_purgatory_purge_interval_requests', $data)) {
            $object->producerPurgatoryPurgeIntervalRequests = $data['producer_purgatory_purge_interval_requests'];
            unset($data['producer_purgatory_purge_interval_requests']);
        }
        if (\array_key_exists('socket_request_max_bytes', $data)) {
            $object->socketRequestMaxBytes = $data['socket_request_max_bytes'];
            unset($data['socket_request_max_bytes']);
        }
        if (\array_key_exists('transaction_state_log_segment_bytes', $data)) {
            $object->transactionStateLogSegmentBytes = $data['transaction_state_log_segment_bytes'];
            unset($data['transaction_state_log_segment_bytes']);
        }
        if (\array_key_exists('transaction_remove_expired_transaction_cleanup_interval_ms', $data)) {
            $object->transactionRemoveExpiredTransactionCleanupIntervalMs = $data['transaction_remove_expired_transaction_cleanup_interval_ms'];
            unset($data['transaction_remove_expired_transaction_cleanup_interval_ms']);
        }
        if (\array_key_exists('schema_registry', $data)) {
            $object->schemaRegistry = $data['schema_registry'];
            unset($data['schema_registry']);
        }
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value;
            }
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if (array_key_exists('compressionType', get_object_vars($data)) && null !== ($data->compressionType ?? null)) {
            $dataArray['compression_type'] = $data->compressionType ?? null;
        }
        if (array_key_exists('groupInitialRebalanceDelayMs', get_object_vars($data)) && null !== ($data->groupInitialRebalanceDelayMs ?? null)) {
            $dataArray['group_initial_rebalance_delay_ms'] = $data->groupInitialRebalanceDelayMs ?? null;
        }
        if (array_key_exists('groupMinSessionTimeoutMs', get_object_vars($data)) && null !== ($data->groupMinSessionTimeoutMs ?? null)) {
            $dataArray['group_min_session_timeout_ms'] = $data->groupMinSessionTimeoutMs ?? null;
        }
        if (array_key_exists('groupMaxSessionTimeoutMs', get_object_vars($data)) && null !== ($data->groupMaxSessionTimeoutMs ?? null)) {
            $dataArray['group_max_session_timeout_ms'] = $data->groupMaxSessionTimeoutMs ?? null;
        }
        if (array_key_exists('connectionsMaxIdleMs', get_object_vars($data)) && null !== ($data->connectionsMaxIdleMs ?? null)) {
            $dataArray['connections_max_idle_ms'] = $data->connectionsMaxIdleMs ?? null;
        }
        if (array_key_exists('maxIncrementalFetchSessionCacheSlots', get_object_vars($data)) && null !== ($data->maxIncrementalFetchSessionCacheSlots ?? null)) {
            $dataArray['max_incremental_fetch_session_cache_slots'] = $data->maxIncrementalFetchSessionCacheSlots ?? null;
        }
        if (array_key_exists('messageMaxBytes', get_object_vars($data)) && null !== ($data->messageMaxBytes ?? null)) {
            $dataArray['message_max_bytes'] = $data->messageMaxBytes ?? null;
        }
        if (array_key_exists('offsetsRetentionMinutes', get_object_vars($data)) && null !== ($data->offsetsRetentionMinutes ?? null)) {
            $dataArray['offsets_retention_minutes'] = $data->offsetsRetentionMinutes ?? null;
        }
        if (array_key_exists('logCleanerDeleteRetentionMs', get_object_vars($data)) && null !== ($data->logCleanerDeleteRetentionMs ?? null)) {
            $dataArray['log_cleaner_delete_retention_ms'] = $data->logCleanerDeleteRetentionMs ?? null;
        }
        if (array_key_exists('logCleanerMinCleanableRatio', get_object_vars($data)) && null !== ($data->logCleanerMinCleanableRatio ?? null)) {
            $dataArray['log_cleaner_min_cleanable_ratio'] = $data->logCleanerMinCleanableRatio ?? null;
        }
        if (array_key_exists('logCleanerMaxCompactionLagMs', get_object_vars($data)) && null !== ($data->logCleanerMaxCompactionLagMs ?? null)) {
            $dataArray['log_cleaner_max_compaction_lag_ms'] = $data->logCleanerMaxCompactionLagMs ?? null;
        }
        if (array_key_exists('logCleanerMinCompactionLagMs', get_object_vars($data)) && null !== ($data->logCleanerMinCompactionLagMs ?? null)) {
            $dataArray['log_cleaner_min_compaction_lag_ms'] = $data->logCleanerMinCompactionLagMs ?? null;
        }
        if (array_key_exists('logCleanupPolicy', get_object_vars($data)) && null !== ($data->logCleanupPolicy ?? null)) {
            $dataArray['log_cleanup_policy'] = $data->logCleanupPolicy ?? null;
        }
        if (array_key_exists('logFlushIntervalMessages', get_object_vars($data)) && null !== ($data->logFlushIntervalMessages ?? null)) {
            $dataArray['log_flush_interval_messages'] = $data->logFlushIntervalMessages ?? null;
        }
        if (array_key_exists('logFlushIntervalMs', get_object_vars($data)) && null !== ($data->logFlushIntervalMs ?? null)) {
            $dataArray['log_flush_interval_ms'] = $data->logFlushIntervalMs ?? null;
        }
        if (array_key_exists('logIndexIntervalBytes', get_object_vars($data)) && null !== ($data->logIndexIntervalBytes ?? null)) {
            $dataArray['log_index_interval_bytes'] = $data->logIndexIntervalBytes ?? null;
        }
        if (array_key_exists('logIndexSizeMaxBytes', get_object_vars($data)) && null !== ($data->logIndexSizeMaxBytes ?? null)) {
            $dataArray['log_index_size_max_bytes'] = $data->logIndexSizeMaxBytes ?? null;
        }
        if (array_key_exists('logMessageDownconversionEnable', get_object_vars($data)) && null !== ($data->logMessageDownconversionEnable ?? null)) {
            $dataArray['log_message_downconversion_enable'] = $data->logMessageDownconversionEnable ?? null;
        }
        if (array_key_exists('logMessageTimestampType', get_object_vars($data)) && null !== ($data->logMessageTimestampType ?? null)) {
            $dataArray['log_message_timestamp_type'] = $data->logMessageTimestampType ?? null;
        }
        if (array_key_exists('logMessageTimestampDifferenceMaxMs', get_object_vars($data)) && null !== ($data->logMessageTimestampDifferenceMaxMs ?? null)) {
            $dataArray['log_message_timestamp_difference_max_ms'] = $data->logMessageTimestampDifferenceMaxMs ?? null;
        }
        if (array_key_exists('logPreallocate', get_object_vars($data)) && null !== ($data->logPreallocate ?? null)) {
            $dataArray['log_preallocate'] = $data->logPreallocate ?? null;
        }
        if (array_key_exists('logRetentionBytes', get_object_vars($data)) && null !== ($data->logRetentionBytes ?? null)) {
            $dataArray['log_retention_bytes'] = $data->logRetentionBytes ?? null;
        }
        if (array_key_exists('logRetentionHours', get_object_vars($data)) && null !== ($data->logRetentionHours ?? null)) {
            $dataArray['log_retention_hours'] = $data->logRetentionHours ?? null;
        }
        if (array_key_exists('logRetentionMs', get_object_vars($data)) && null !== ($data->logRetentionMs ?? null)) {
            $dataArray['log_retention_ms'] = $data->logRetentionMs ?? null;
        }
        if (array_key_exists('logRollJitterMs', get_object_vars($data)) && null !== ($data->logRollJitterMs ?? null)) {
            $dataArray['log_roll_jitter_ms'] = $data->logRollJitterMs ?? null;
        }
        if (array_key_exists('logRollMs', get_object_vars($data)) && null !== ($data->logRollMs ?? null)) {
            $dataArray['log_roll_ms'] = $data->logRollMs ?? null;
        }
        if (array_key_exists('logSegmentBytes', get_object_vars($data)) && null !== ($data->logSegmentBytes ?? null)) {
            $dataArray['log_segment_bytes'] = $data->logSegmentBytes ?? null;
        }
        if (array_key_exists('logSegmentDeleteDelayMs', get_object_vars($data)) && null !== ($data->logSegmentDeleteDelayMs ?? null)) {
            $dataArray['log_segment_delete_delay_ms'] = $data->logSegmentDeleteDelayMs ?? null;
        }
        if (array_key_exists('autoCreateTopicsEnable', get_object_vars($data)) && null !== ($data->autoCreateTopicsEnable ?? null)) {
            $dataArray['auto_create_topics_enable'] = $data->autoCreateTopicsEnable ?? null;
        }
        if (array_key_exists('minInsyncReplicas', get_object_vars($data)) && null !== ($data->minInsyncReplicas ?? null)) {
            $dataArray['min_insync_replicas'] = $data->minInsyncReplicas ?? null;
        }
        if (array_key_exists('numPartitions', get_object_vars($data)) && null !== ($data->numPartitions ?? null)) {
            $dataArray['num_partitions'] = $data->numPartitions ?? null;
        }
        if (array_key_exists('defaultReplicationFactor', get_object_vars($data)) && null !== ($data->defaultReplicationFactor ?? null)) {
            $dataArray['default_replication_factor'] = $data->defaultReplicationFactor ?? null;
        }
        if (array_key_exists('replicaFetchMaxBytes', get_object_vars($data)) && null !== ($data->replicaFetchMaxBytes ?? null)) {
            $dataArray['replica_fetch_max_bytes'] = $data->replicaFetchMaxBytes ?? null;
        }
        if (array_key_exists('replicaFetchResponseMaxBytes', get_object_vars($data)) && null !== ($data->replicaFetchResponseMaxBytes ?? null)) {
            $dataArray['replica_fetch_response_max_bytes'] = $data->replicaFetchResponseMaxBytes ?? null;
        }
        if (array_key_exists('maxConnectionsPerIp', get_object_vars($data)) && null !== ($data->maxConnectionsPerIp ?? null)) {
            $dataArray['max_connections_per_ip'] = $data->maxConnectionsPerIp ?? null;
        }
        if (array_key_exists('producerPurgatoryPurgeIntervalRequests', get_object_vars($data)) && null !== ($data->producerPurgatoryPurgeIntervalRequests ?? null)) {
            $dataArray['producer_purgatory_purge_interval_requests'] = $data->producerPurgatoryPurgeIntervalRequests ?? null;
        }
        if (array_key_exists('socketRequestMaxBytes', get_object_vars($data)) && null !== ($data->socketRequestMaxBytes ?? null)) {
            $dataArray['socket_request_max_bytes'] = $data->socketRequestMaxBytes ?? null;
        }
        if (array_key_exists('transactionStateLogSegmentBytes', get_object_vars($data)) && null !== ($data->transactionStateLogSegmentBytes ?? null)) {
            $dataArray['transaction_state_log_segment_bytes'] = $data->transactionStateLogSegmentBytes ?? null;
        }
        if (array_key_exists('transactionRemoveExpiredTransactionCleanupIntervalMs', get_object_vars($data)) && null !== ($data->transactionRemoveExpiredTransactionCleanupIntervalMs ?? null)) {
            $dataArray['transaction_remove_expired_transaction_cleanup_interval_ms'] = $data->transactionRemoveExpiredTransactionCleanupIntervalMs ?? null;
        }
        if (array_key_exists('schemaRegistry', get_object_vars($data)) && null !== ($data->schemaRegistry ?? null)) {
            $dataArray['schema_registry'] = $data->schemaRegistry ?? null;
        }
        foreach ($data->additionalPropertyEntries() as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Generated\DigitalOcean\Model\KafkaAdvancedConfig::class => false];
    }
}