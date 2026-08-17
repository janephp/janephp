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
            $object->setCompressionType($data['compression_type']);
            unset($data['compression_type']);
        }
        if (\array_key_exists('group_initial_rebalance_delay_ms', $data)) {
            $object->setGroupInitialRebalanceDelayMs($data['group_initial_rebalance_delay_ms']);
            unset($data['group_initial_rebalance_delay_ms']);
        }
        if (\array_key_exists('group_min_session_timeout_ms', $data)) {
            $object->setGroupMinSessionTimeoutMs($data['group_min_session_timeout_ms']);
            unset($data['group_min_session_timeout_ms']);
        }
        if (\array_key_exists('group_max_session_timeout_ms', $data)) {
            $object->setGroupMaxSessionTimeoutMs($data['group_max_session_timeout_ms']);
            unset($data['group_max_session_timeout_ms']);
        }
        if (\array_key_exists('connections_max_idle_ms', $data)) {
            $object->setConnectionsMaxIdleMs($data['connections_max_idle_ms']);
            unset($data['connections_max_idle_ms']);
        }
        if (\array_key_exists('max_incremental_fetch_session_cache_slots', $data)) {
            $object->setMaxIncrementalFetchSessionCacheSlots($data['max_incremental_fetch_session_cache_slots']);
            unset($data['max_incremental_fetch_session_cache_slots']);
        }
        if (\array_key_exists('message_max_bytes', $data)) {
            $object->setMessageMaxBytes($data['message_max_bytes']);
            unset($data['message_max_bytes']);
        }
        if (\array_key_exists('offsets_retention_minutes', $data)) {
            $object->setOffsetsRetentionMinutes($data['offsets_retention_minutes']);
            unset($data['offsets_retention_minutes']);
        }
        if (\array_key_exists('log_cleaner_delete_retention_ms', $data)) {
            $object->setLogCleanerDeleteRetentionMs($data['log_cleaner_delete_retention_ms']);
            unset($data['log_cleaner_delete_retention_ms']);
        }
        if (\array_key_exists('log_cleaner_min_cleanable_ratio', $data)) {
            $object->setLogCleanerMinCleanableRatio($data['log_cleaner_min_cleanable_ratio']);
            unset($data['log_cleaner_min_cleanable_ratio']);
        }
        if (\array_key_exists('log_cleaner_max_compaction_lag_ms', $data)) {
            $object->setLogCleanerMaxCompactionLagMs($data['log_cleaner_max_compaction_lag_ms']);
            unset($data['log_cleaner_max_compaction_lag_ms']);
        }
        if (\array_key_exists('log_cleaner_min_compaction_lag_ms', $data)) {
            $object->setLogCleanerMinCompactionLagMs($data['log_cleaner_min_compaction_lag_ms']);
            unset($data['log_cleaner_min_compaction_lag_ms']);
        }
        if (\array_key_exists('log_cleanup_policy', $data)) {
            $object->setLogCleanupPolicy($data['log_cleanup_policy']);
            unset($data['log_cleanup_policy']);
        }
        if (\array_key_exists('log_flush_interval_messages', $data)) {
            $object->setLogFlushIntervalMessages($data['log_flush_interval_messages']);
            unset($data['log_flush_interval_messages']);
        }
        if (\array_key_exists('log_flush_interval_ms', $data)) {
            $object->setLogFlushIntervalMs($data['log_flush_interval_ms']);
            unset($data['log_flush_interval_ms']);
        }
        if (\array_key_exists('log_index_interval_bytes', $data)) {
            $object->setLogIndexIntervalBytes($data['log_index_interval_bytes']);
            unset($data['log_index_interval_bytes']);
        }
        if (\array_key_exists('log_index_size_max_bytes', $data)) {
            $object->setLogIndexSizeMaxBytes($data['log_index_size_max_bytes']);
            unset($data['log_index_size_max_bytes']);
        }
        if (\array_key_exists('log_message_downconversion_enable', $data)) {
            $object->setLogMessageDownconversionEnable($data['log_message_downconversion_enable']);
            unset($data['log_message_downconversion_enable']);
        }
        if (\array_key_exists('log_message_timestamp_type', $data)) {
            $object->setLogMessageTimestampType($data['log_message_timestamp_type']);
            unset($data['log_message_timestamp_type']);
        }
        if (\array_key_exists('log_message_timestamp_difference_max_ms', $data)) {
            $object->setLogMessageTimestampDifferenceMaxMs($data['log_message_timestamp_difference_max_ms']);
            unset($data['log_message_timestamp_difference_max_ms']);
        }
        if (\array_key_exists('log_preallocate', $data)) {
            $object->setLogPreallocate($data['log_preallocate']);
            unset($data['log_preallocate']);
        }
        if (\array_key_exists('log_retention_bytes', $data)) {
            $object->setLogRetentionBytes($data['log_retention_bytes']);
            unset($data['log_retention_bytes']);
        }
        if (\array_key_exists('log_retention_hours', $data)) {
            $object->setLogRetentionHours($data['log_retention_hours']);
            unset($data['log_retention_hours']);
        }
        if (\array_key_exists('log_retention_ms', $data)) {
            $object->setLogRetentionMs($data['log_retention_ms']);
            unset($data['log_retention_ms']);
        }
        if (\array_key_exists('log_roll_jitter_ms', $data)) {
            $object->setLogRollJitterMs($data['log_roll_jitter_ms']);
            unset($data['log_roll_jitter_ms']);
        }
        if (\array_key_exists('log_roll_ms', $data)) {
            $object->setLogRollMs($data['log_roll_ms']);
            unset($data['log_roll_ms']);
        }
        if (\array_key_exists('log_segment_bytes', $data)) {
            $object->setLogSegmentBytes($data['log_segment_bytes']);
            unset($data['log_segment_bytes']);
        }
        if (\array_key_exists('log_segment_delete_delay_ms', $data)) {
            $object->setLogSegmentDeleteDelayMs($data['log_segment_delete_delay_ms']);
            unset($data['log_segment_delete_delay_ms']);
        }
        if (\array_key_exists('auto_create_topics_enable', $data)) {
            $object->setAutoCreateTopicsEnable($data['auto_create_topics_enable']);
            unset($data['auto_create_topics_enable']);
        }
        if (\array_key_exists('min_insync_replicas', $data)) {
            $object->setMinInsyncReplicas($data['min_insync_replicas']);
            unset($data['min_insync_replicas']);
        }
        if (\array_key_exists('num_partitions', $data)) {
            $object->setNumPartitions($data['num_partitions']);
            unset($data['num_partitions']);
        }
        if (\array_key_exists('default_replication_factor', $data)) {
            $object->setDefaultReplicationFactor($data['default_replication_factor']);
            unset($data['default_replication_factor']);
        }
        if (\array_key_exists('replica_fetch_max_bytes', $data)) {
            $object->setReplicaFetchMaxBytes($data['replica_fetch_max_bytes']);
            unset($data['replica_fetch_max_bytes']);
        }
        if (\array_key_exists('replica_fetch_response_max_bytes', $data)) {
            $object->setReplicaFetchResponseMaxBytes($data['replica_fetch_response_max_bytes']);
            unset($data['replica_fetch_response_max_bytes']);
        }
        if (\array_key_exists('max_connections_per_ip', $data)) {
            $object->setMaxConnectionsPerIp($data['max_connections_per_ip']);
            unset($data['max_connections_per_ip']);
        }
        if (\array_key_exists('producer_purgatory_purge_interval_requests', $data)) {
            $object->setProducerPurgatoryPurgeIntervalRequests($data['producer_purgatory_purge_interval_requests']);
            unset($data['producer_purgatory_purge_interval_requests']);
        }
        if (\array_key_exists('socket_request_max_bytes', $data)) {
            $object->setSocketRequestMaxBytes($data['socket_request_max_bytes']);
            unset($data['socket_request_max_bytes']);
        }
        if (\array_key_exists('transaction_state_log_segment_bytes', $data)) {
            $object->setTransactionStateLogSegmentBytes($data['transaction_state_log_segment_bytes']);
            unset($data['transaction_state_log_segment_bytes']);
        }
        if (\array_key_exists('transaction_remove_expired_transaction_cleanup_interval_ms', $data)) {
            $object->setTransactionRemoveExpiredTransactionCleanupIntervalMs($data['transaction_remove_expired_transaction_cleanup_interval_ms']);
            unset($data['transaction_remove_expired_transaction_cleanup_interval_ms']);
        }
        if (\array_key_exists('schema_registry', $data)) {
            $object->setSchemaRegistry($data['schema_registry']);
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
        if ($data->isInitialized('compressionType') && null !== $data->getCompressionType()) {
            $dataArray['compression_type'] = $data->getCompressionType();
        }
        if ($data->isInitialized('groupInitialRebalanceDelayMs') && null !== $data->getGroupInitialRebalanceDelayMs()) {
            $dataArray['group_initial_rebalance_delay_ms'] = $data->getGroupInitialRebalanceDelayMs();
        }
        if ($data->isInitialized('groupMinSessionTimeoutMs') && null !== $data->getGroupMinSessionTimeoutMs()) {
            $dataArray['group_min_session_timeout_ms'] = $data->getGroupMinSessionTimeoutMs();
        }
        if ($data->isInitialized('groupMaxSessionTimeoutMs') && null !== $data->getGroupMaxSessionTimeoutMs()) {
            $dataArray['group_max_session_timeout_ms'] = $data->getGroupMaxSessionTimeoutMs();
        }
        if ($data->isInitialized('connectionsMaxIdleMs') && null !== $data->getConnectionsMaxIdleMs()) {
            $dataArray['connections_max_idle_ms'] = $data->getConnectionsMaxIdleMs();
        }
        if ($data->isInitialized('maxIncrementalFetchSessionCacheSlots') && null !== $data->getMaxIncrementalFetchSessionCacheSlots()) {
            $dataArray['max_incremental_fetch_session_cache_slots'] = $data->getMaxIncrementalFetchSessionCacheSlots();
        }
        if ($data->isInitialized('messageMaxBytes') && null !== $data->getMessageMaxBytes()) {
            $dataArray['message_max_bytes'] = $data->getMessageMaxBytes();
        }
        if ($data->isInitialized('offsetsRetentionMinutes') && null !== $data->getOffsetsRetentionMinutes()) {
            $dataArray['offsets_retention_minutes'] = $data->getOffsetsRetentionMinutes();
        }
        if ($data->isInitialized('logCleanerDeleteRetentionMs') && null !== $data->getLogCleanerDeleteRetentionMs()) {
            $dataArray['log_cleaner_delete_retention_ms'] = $data->getLogCleanerDeleteRetentionMs();
        }
        if ($data->isInitialized('logCleanerMinCleanableRatio') && null !== $data->getLogCleanerMinCleanableRatio()) {
            $dataArray['log_cleaner_min_cleanable_ratio'] = $data->getLogCleanerMinCleanableRatio();
        }
        if ($data->isInitialized('logCleanerMaxCompactionLagMs') && null !== $data->getLogCleanerMaxCompactionLagMs()) {
            $dataArray['log_cleaner_max_compaction_lag_ms'] = $data->getLogCleanerMaxCompactionLagMs();
        }
        if ($data->isInitialized('logCleanerMinCompactionLagMs') && null !== $data->getLogCleanerMinCompactionLagMs()) {
            $dataArray['log_cleaner_min_compaction_lag_ms'] = $data->getLogCleanerMinCompactionLagMs();
        }
        if ($data->isInitialized('logCleanupPolicy') && null !== $data->getLogCleanupPolicy()) {
            $dataArray['log_cleanup_policy'] = $data->getLogCleanupPolicy();
        }
        if ($data->isInitialized('logFlushIntervalMessages') && null !== $data->getLogFlushIntervalMessages()) {
            $dataArray['log_flush_interval_messages'] = $data->getLogFlushIntervalMessages();
        }
        if ($data->isInitialized('logFlushIntervalMs') && null !== $data->getLogFlushIntervalMs()) {
            $dataArray['log_flush_interval_ms'] = $data->getLogFlushIntervalMs();
        }
        if ($data->isInitialized('logIndexIntervalBytes') && null !== $data->getLogIndexIntervalBytes()) {
            $dataArray['log_index_interval_bytes'] = $data->getLogIndexIntervalBytes();
        }
        if ($data->isInitialized('logIndexSizeMaxBytes') && null !== $data->getLogIndexSizeMaxBytes()) {
            $dataArray['log_index_size_max_bytes'] = $data->getLogIndexSizeMaxBytes();
        }
        if ($data->isInitialized('logMessageDownconversionEnable') && null !== $data->getLogMessageDownconversionEnable()) {
            $dataArray['log_message_downconversion_enable'] = $data->getLogMessageDownconversionEnable();
        }
        if ($data->isInitialized('logMessageTimestampType') && null !== $data->getLogMessageTimestampType()) {
            $dataArray['log_message_timestamp_type'] = $data->getLogMessageTimestampType();
        }
        if ($data->isInitialized('logMessageTimestampDifferenceMaxMs') && null !== $data->getLogMessageTimestampDifferenceMaxMs()) {
            $dataArray['log_message_timestamp_difference_max_ms'] = $data->getLogMessageTimestampDifferenceMaxMs();
        }
        if ($data->isInitialized('logPreallocate') && null !== $data->getLogPreallocate()) {
            $dataArray['log_preallocate'] = $data->getLogPreallocate();
        }
        if ($data->isInitialized('logRetentionBytes') && null !== $data->getLogRetentionBytes()) {
            $dataArray['log_retention_bytes'] = $data->getLogRetentionBytes();
        }
        if ($data->isInitialized('logRetentionHours') && null !== $data->getLogRetentionHours()) {
            $dataArray['log_retention_hours'] = $data->getLogRetentionHours();
        }
        if ($data->isInitialized('logRetentionMs') && null !== $data->getLogRetentionMs()) {
            $dataArray['log_retention_ms'] = $data->getLogRetentionMs();
        }
        if ($data->isInitialized('logRollJitterMs') && null !== $data->getLogRollJitterMs()) {
            $dataArray['log_roll_jitter_ms'] = $data->getLogRollJitterMs();
        }
        if ($data->isInitialized('logRollMs') && null !== $data->getLogRollMs()) {
            $dataArray['log_roll_ms'] = $data->getLogRollMs();
        }
        if ($data->isInitialized('logSegmentBytes') && null !== $data->getLogSegmentBytes()) {
            $dataArray['log_segment_bytes'] = $data->getLogSegmentBytes();
        }
        if ($data->isInitialized('logSegmentDeleteDelayMs') && null !== $data->getLogSegmentDeleteDelayMs()) {
            $dataArray['log_segment_delete_delay_ms'] = $data->getLogSegmentDeleteDelayMs();
        }
        if ($data->isInitialized('autoCreateTopicsEnable') && null !== $data->getAutoCreateTopicsEnable()) {
            $dataArray['auto_create_topics_enable'] = $data->getAutoCreateTopicsEnable();
        }
        if ($data->isInitialized('minInsyncReplicas') && null !== $data->getMinInsyncReplicas()) {
            $dataArray['min_insync_replicas'] = $data->getMinInsyncReplicas();
        }
        if ($data->isInitialized('numPartitions') && null !== $data->getNumPartitions()) {
            $dataArray['num_partitions'] = $data->getNumPartitions();
        }
        if ($data->isInitialized('defaultReplicationFactor') && null !== $data->getDefaultReplicationFactor()) {
            $dataArray['default_replication_factor'] = $data->getDefaultReplicationFactor();
        }
        if ($data->isInitialized('replicaFetchMaxBytes') && null !== $data->getReplicaFetchMaxBytes()) {
            $dataArray['replica_fetch_max_bytes'] = $data->getReplicaFetchMaxBytes();
        }
        if ($data->isInitialized('replicaFetchResponseMaxBytes') && null !== $data->getReplicaFetchResponseMaxBytes()) {
            $dataArray['replica_fetch_response_max_bytes'] = $data->getReplicaFetchResponseMaxBytes();
        }
        if ($data->isInitialized('maxConnectionsPerIp') && null !== $data->getMaxConnectionsPerIp()) {
            $dataArray['max_connections_per_ip'] = $data->getMaxConnectionsPerIp();
        }
        if ($data->isInitialized('producerPurgatoryPurgeIntervalRequests') && null !== $data->getProducerPurgatoryPurgeIntervalRequests()) {
            $dataArray['producer_purgatory_purge_interval_requests'] = $data->getProducerPurgatoryPurgeIntervalRequests();
        }
        if ($data->isInitialized('socketRequestMaxBytes') && null !== $data->getSocketRequestMaxBytes()) {
            $dataArray['socket_request_max_bytes'] = $data->getSocketRequestMaxBytes();
        }
        if ($data->isInitialized('transactionStateLogSegmentBytes') && null !== $data->getTransactionStateLogSegmentBytes()) {
            $dataArray['transaction_state_log_segment_bytes'] = $data->getTransactionStateLogSegmentBytes();
        }
        if ($data->isInitialized('transactionRemoveExpiredTransactionCleanupIntervalMs') && null !== $data->getTransactionRemoveExpiredTransactionCleanupIntervalMs()) {
            $dataArray['transaction_remove_expired_transaction_cleanup_interval_ms'] = $data->getTransactionRemoveExpiredTransactionCleanupIntervalMs();
        }
        if ($data->isInitialized('schemaRegistry') && null !== $data->getSchemaRegistry()) {
            $dataArray['schema_registry'] = $data->getSchemaRegistry();
        }
        foreach ($data as $key => $value) {
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