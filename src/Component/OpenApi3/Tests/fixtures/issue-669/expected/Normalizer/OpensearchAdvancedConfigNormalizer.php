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
class OpensearchAdvancedConfigNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Generated\DigitalOcean\Model\OpensearchAdvancedConfig::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Generated\DigitalOcean\Model\OpensearchAdvancedConfig::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Jane\Generated\DigitalOcean\Model\OpensearchAdvancedConfig();
        if (\array_key_exists('ism_enabled', $data) && \is_int($data['ism_enabled'])) {
            $data['ism_enabled'] = (bool) $data['ism_enabled'];
        }
        if (\array_key_exists('ism_history_enabled', $data) && \is_int($data['ism_history_enabled'])) {
            $data['ism_history_enabled'] = (bool) $data['ism_history_enabled'];
        }
        if (\array_key_exists('action_auto_create_index_enabled', $data) && \is_int($data['action_auto_create_index_enabled'])) {
            $data['action_auto_create_index_enabled'] = (bool) $data['action_auto_create_index_enabled'];
        }
        if (\array_key_exists('enable_security_audit', $data) && \is_int($data['enable_security_audit'])) {
            $data['enable_security_audit'] = (bool) $data['enable_security_audit'];
        }
        if (\array_key_exists('action_destructive_requires_name', $data) && \is_int($data['action_destructive_requires_name'])) {
            $data['action_destructive_requires_name'] = (bool) $data['action_destructive_requires_name'];
        }
        if (\array_key_exists('override_main_response_version', $data) && \is_int($data['override_main_response_version'])) {
            $data['override_main_response_version'] = (bool) $data['override_main_response_version'];
        }
        if (\array_key_exists('plugins_alerting_filter_by_backend_roles_enabled', $data) && \is_int($data['plugins_alerting_filter_by_backend_roles_enabled'])) {
            $data['plugins_alerting_filter_by_backend_roles_enabled'] = (bool) $data['plugins_alerting_filter_by_backend_roles_enabled'];
        }
        if (\array_key_exists('knn_memory_circuit_breaker_enabled', $data) && \is_int($data['knn_memory_circuit_breaker_enabled'])) {
            $data['knn_memory_circuit_breaker_enabled'] = (bool) $data['knn_memory_circuit_breaker_enabled'];
        }
        if (\array_key_exists('keep_index_refresh_interval', $data) && \is_int($data['keep_index_refresh_interval'])) {
            $data['keep_index_refresh_interval'] = (bool) $data['keep_index_refresh_interval'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('http_max_content_length_bytes', $data)) {
            $object->setHttpMaxContentLengthBytes($data['http_max_content_length_bytes']);
            unset($data['http_max_content_length_bytes']);
        }
        if (\array_key_exists('http_max_header_size_bytes', $data)) {
            $object->setHttpMaxHeaderSizeBytes($data['http_max_header_size_bytes']);
            unset($data['http_max_header_size_bytes']);
        }
        if (\array_key_exists('http_max_initial_line_length_bytes', $data)) {
            $object->setHttpMaxInitialLineLengthBytes($data['http_max_initial_line_length_bytes']);
            unset($data['http_max_initial_line_length_bytes']);
        }
        if (\array_key_exists('indices_query_bool_max_clause_count', $data)) {
            $object->setIndicesQueryBoolMaxClauseCount($data['indices_query_bool_max_clause_count']);
            unset($data['indices_query_bool_max_clause_count']);
        }
        if (\array_key_exists('indices_fielddata_cache_size_percentage', $data)) {
            $object->setIndicesFielddataCacheSizePercentage($data['indices_fielddata_cache_size_percentage']);
            unset($data['indices_fielddata_cache_size_percentage']);
        }
        if (\array_key_exists('indices_memory_index_buffer_size_percentage', $data)) {
            $object->setIndicesMemoryIndexBufferSizePercentage($data['indices_memory_index_buffer_size_percentage']);
            unset($data['indices_memory_index_buffer_size_percentage']);
        }
        if (\array_key_exists('indices_memory_min_index_buffer_size_mb', $data)) {
            $object->setIndicesMemoryMinIndexBufferSizeMb($data['indices_memory_min_index_buffer_size_mb']);
            unset($data['indices_memory_min_index_buffer_size_mb']);
        }
        if (\array_key_exists('indices_memory_max_index_buffer_size_mb', $data)) {
            $object->setIndicesMemoryMaxIndexBufferSizeMb($data['indices_memory_max_index_buffer_size_mb']);
            unset($data['indices_memory_max_index_buffer_size_mb']);
        }
        if (\array_key_exists('indices_queries_cache_size_percentage', $data)) {
            $object->setIndicesQueriesCacheSizePercentage($data['indices_queries_cache_size_percentage']);
            unset($data['indices_queries_cache_size_percentage']);
        }
        if (\array_key_exists('indices_recovery_max_mb_per_sec', $data)) {
            $object->setIndicesRecoveryMaxMbPerSec($data['indices_recovery_max_mb_per_sec']);
            unset($data['indices_recovery_max_mb_per_sec']);
        }
        if (\array_key_exists('indices_recovery_max_concurrent_file_chunks', $data)) {
            $object->setIndicesRecoveryMaxConcurrentFileChunks($data['indices_recovery_max_concurrent_file_chunks']);
            unset($data['indices_recovery_max_concurrent_file_chunks']);
        }
        if (\array_key_exists('thread_pool_search_size', $data)) {
            $object->setThreadPoolSearchSize($data['thread_pool_search_size']);
            unset($data['thread_pool_search_size']);
        }
        if (\array_key_exists('thread_pool_search_throttled_size', $data)) {
            $object->setThreadPoolSearchThrottledSize($data['thread_pool_search_throttled_size']);
            unset($data['thread_pool_search_throttled_size']);
        }
        if (\array_key_exists('thread_pool_get_size', $data)) {
            $object->setThreadPoolGetSize($data['thread_pool_get_size']);
            unset($data['thread_pool_get_size']);
        }
        if (\array_key_exists('thread_pool_analyze_size', $data)) {
            $object->setThreadPoolAnalyzeSize($data['thread_pool_analyze_size']);
            unset($data['thread_pool_analyze_size']);
        }
        if (\array_key_exists('thread_pool_write_size', $data)) {
            $object->setThreadPoolWriteSize($data['thread_pool_write_size']);
            unset($data['thread_pool_write_size']);
        }
        if (\array_key_exists('thread_pool_force_merge_size', $data)) {
            $object->setThreadPoolForceMergeSize($data['thread_pool_force_merge_size']);
            unset($data['thread_pool_force_merge_size']);
        }
        if (\array_key_exists('thread_pool_search_queue_size', $data)) {
            $object->setThreadPoolSearchQueueSize($data['thread_pool_search_queue_size']);
            unset($data['thread_pool_search_queue_size']);
        }
        if (\array_key_exists('thread_pool_search_throttled_queue_size', $data)) {
            $object->setThreadPoolSearchThrottledQueueSize($data['thread_pool_search_throttled_queue_size']);
            unset($data['thread_pool_search_throttled_queue_size']);
        }
        if (\array_key_exists('thread_pool_get_queue_size', $data)) {
            $object->setThreadPoolGetQueueSize($data['thread_pool_get_queue_size']);
            unset($data['thread_pool_get_queue_size']);
        }
        if (\array_key_exists('thread_pool_analyze_queue_size', $data)) {
            $object->setThreadPoolAnalyzeQueueSize($data['thread_pool_analyze_queue_size']);
            unset($data['thread_pool_analyze_queue_size']);
        }
        if (\array_key_exists('thread_pool_write_queue_size', $data)) {
            $object->setThreadPoolWriteQueueSize($data['thread_pool_write_queue_size']);
            unset($data['thread_pool_write_queue_size']);
        }
        if (\array_key_exists('ism_enabled', $data)) {
            $object->setIsmEnabled($data['ism_enabled']);
            unset($data['ism_enabled']);
        }
        if (\array_key_exists('ism_history_enabled', $data)) {
            $object->setIsmHistoryEnabled($data['ism_history_enabled']);
            unset($data['ism_history_enabled']);
        }
        if (\array_key_exists('ism_history_max_age_hours', $data)) {
            $object->setIsmHistoryMaxAgeHours($data['ism_history_max_age_hours']);
            unset($data['ism_history_max_age_hours']);
        }
        if (\array_key_exists('ism_history_max_docs', $data)) {
            $object->setIsmHistoryMaxDocs($data['ism_history_max_docs']);
            unset($data['ism_history_max_docs']);
        }
        if (\array_key_exists('ism_history_rollover_check_period_hours', $data)) {
            $object->setIsmHistoryRolloverCheckPeriodHours($data['ism_history_rollover_check_period_hours']);
            unset($data['ism_history_rollover_check_period_hours']);
        }
        if (\array_key_exists('ism_history_rollover_retention_period_days', $data)) {
            $object->setIsmHistoryRolloverRetentionPeriodDays($data['ism_history_rollover_retention_period_days']);
            unset($data['ism_history_rollover_retention_period_days']);
        }
        if (\array_key_exists('search_max_buckets', $data)) {
            $object->setSearchMaxBuckets($data['search_max_buckets']);
            unset($data['search_max_buckets']);
        }
        if (\array_key_exists('action_auto_create_index_enabled', $data)) {
            $object->setActionAutoCreateIndexEnabled($data['action_auto_create_index_enabled']);
            unset($data['action_auto_create_index_enabled']);
        }
        if (\array_key_exists('enable_security_audit', $data)) {
            $object->setEnableSecurityAudit($data['enable_security_audit']);
            unset($data['enable_security_audit']);
        }
        if (\array_key_exists('action_destructive_requires_name', $data)) {
            $object->setActionDestructiveRequiresName($data['action_destructive_requires_name']);
            unset($data['action_destructive_requires_name']);
        }
        if (\array_key_exists('cluster_max_shards_per_node', $data)) {
            $object->setClusterMaxShardsPerNode($data['cluster_max_shards_per_node']);
            unset($data['cluster_max_shards_per_node']);
        }
        if (\array_key_exists('override_main_response_version', $data)) {
            $object->setOverrideMainResponseVersion($data['override_main_response_version']);
            unset($data['override_main_response_version']);
        }
        if (\array_key_exists('script_max_compilations_rate', $data)) {
            $object->setScriptMaxCompilationsRate($data['script_max_compilations_rate']);
            unset($data['script_max_compilations_rate']);
        }
        if (\array_key_exists('cluster_routing_allocation_node_concurrent_recoveries', $data)) {
            $object->setClusterRoutingAllocationNodeConcurrentRecoveries($data['cluster_routing_allocation_node_concurrent_recoveries']);
            unset($data['cluster_routing_allocation_node_concurrent_recoveries']);
        }
        if (\array_key_exists('reindex_remote_whitelist', $data)) {
            $values = [];
            foreach ($data['reindex_remote_whitelist'] as $value) {
                $values[] = $value;
            }
            $object->setReindexRemoteWhitelist($values);
            unset($data['reindex_remote_whitelist']);
        }
        if (\array_key_exists('plugins_alerting_filter_by_backend_roles_enabled', $data)) {
            $object->setPluginsAlertingFilterByBackendRolesEnabled($data['plugins_alerting_filter_by_backend_roles_enabled']);
            unset($data['plugins_alerting_filter_by_backend_roles_enabled']);
        }
        if (\array_key_exists('knn_memory_circuit_breaker_enabled', $data)) {
            $object->setKnnMemoryCircuitBreakerEnabled($data['knn_memory_circuit_breaker_enabled']);
            unset($data['knn_memory_circuit_breaker_enabled']);
        }
        if (\array_key_exists('knn_memory_circuit_breaker_limit', $data)) {
            $object->setKnnMemoryCircuitBreakerLimit($data['knn_memory_circuit_breaker_limit']);
            unset($data['knn_memory_circuit_breaker_limit']);
        }
        if (\array_key_exists('keep_index_refresh_interval', $data)) {
            $object->setKeepIndexRefreshInterval($data['keep_index_refresh_interval']);
            unset($data['keep_index_refresh_interval']);
        }
        foreach ($data as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_1;
            }
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('httpMaxContentLengthBytes') && null !== $data->getHttpMaxContentLengthBytes()) {
            $dataArray['http_max_content_length_bytes'] = $data->getHttpMaxContentLengthBytes();
        }
        if ($data->isInitialized('httpMaxHeaderSizeBytes') && null !== $data->getHttpMaxHeaderSizeBytes()) {
            $dataArray['http_max_header_size_bytes'] = $data->getHttpMaxHeaderSizeBytes();
        }
        if ($data->isInitialized('httpMaxInitialLineLengthBytes') && null !== $data->getHttpMaxInitialLineLengthBytes()) {
            $dataArray['http_max_initial_line_length_bytes'] = $data->getHttpMaxInitialLineLengthBytes();
        }
        if ($data->isInitialized('indicesQueryBoolMaxClauseCount') && null !== $data->getIndicesQueryBoolMaxClauseCount()) {
            $dataArray['indices_query_bool_max_clause_count'] = $data->getIndicesQueryBoolMaxClauseCount();
        }
        if ($data->isInitialized('indicesFielddataCacheSizePercentage') && null !== $data->getIndicesFielddataCacheSizePercentage()) {
            $dataArray['indices_fielddata_cache_size_percentage'] = $data->getIndicesFielddataCacheSizePercentage();
        }
        if ($data->isInitialized('indicesMemoryIndexBufferSizePercentage') && null !== $data->getIndicesMemoryIndexBufferSizePercentage()) {
            $dataArray['indices_memory_index_buffer_size_percentage'] = $data->getIndicesMemoryIndexBufferSizePercentage();
        }
        if ($data->isInitialized('indicesMemoryMinIndexBufferSizeMb') && null !== $data->getIndicesMemoryMinIndexBufferSizeMb()) {
            $dataArray['indices_memory_min_index_buffer_size_mb'] = $data->getIndicesMemoryMinIndexBufferSizeMb();
        }
        if ($data->isInitialized('indicesMemoryMaxIndexBufferSizeMb') && null !== $data->getIndicesMemoryMaxIndexBufferSizeMb()) {
            $dataArray['indices_memory_max_index_buffer_size_mb'] = $data->getIndicesMemoryMaxIndexBufferSizeMb();
        }
        if ($data->isInitialized('indicesQueriesCacheSizePercentage') && null !== $data->getIndicesQueriesCacheSizePercentage()) {
            $dataArray['indices_queries_cache_size_percentage'] = $data->getIndicesQueriesCacheSizePercentage();
        }
        if ($data->isInitialized('indicesRecoveryMaxMbPerSec') && null !== $data->getIndicesRecoveryMaxMbPerSec()) {
            $dataArray['indices_recovery_max_mb_per_sec'] = $data->getIndicesRecoveryMaxMbPerSec();
        }
        if ($data->isInitialized('indicesRecoveryMaxConcurrentFileChunks') && null !== $data->getIndicesRecoveryMaxConcurrentFileChunks()) {
            $dataArray['indices_recovery_max_concurrent_file_chunks'] = $data->getIndicesRecoveryMaxConcurrentFileChunks();
        }
        if ($data->isInitialized('threadPoolSearchSize') && null !== $data->getThreadPoolSearchSize()) {
            $dataArray['thread_pool_search_size'] = $data->getThreadPoolSearchSize();
        }
        if ($data->isInitialized('threadPoolSearchThrottledSize') && null !== $data->getThreadPoolSearchThrottledSize()) {
            $dataArray['thread_pool_search_throttled_size'] = $data->getThreadPoolSearchThrottledSize();
        }
        if ($data->isInitialized('threadPoolGetSize') && null !== $data->getThreadPoolGetSize()) {
            $dataArray['thread_pool_get_size'] = $data->getThreadPoolGetSize();
        }
        if ($data->isInitialized('threadPoolAnalyzeSize') && null !== $data->getThreadPoolAnalyzeSize()) {
            $dataArray['thread_pool_analyze_size'] = $data->getThreadPoolAnalyzeSize();
        }
        if ($data->isInitialized('threadPoolWriteSize') && null !== $data->getThreadPoolWriteSize()) {
            $dataArray['thread_pool_write_size'] = $data->getThreadPoolWriteSize();
        }
        if ($data->isInitialized('threadPoolForceMergeSize') && null !== $data->getThreadPoolForceMergeSize()) {
            $dataArray['thread_pool_force_merge_size'] = $data->getThreadPoolForceMergeSize();
        }
        if ($data->isInitialized('threadPoolSearchQueueSize') && null !== $data->getThreadPoolSearchQueueSize()) {
            $dataArray['thread_pool_search_queue_size'] = $data->getThreadPoolSearchQueueSize();
        }
        if ($data->isInitialized('threadPoolSearchThrottledQueueSize') && null !== $data->getThreadPoolSearchThrottledQueueSize()) {
            $dataArray['thread_pool_search_throttled_queue_size'] = $data->getThreadPoolSearchThrottledQueueSize();
        }
        if ($data->isInitialized('threadPoolGetQueueSize') && null !== $data->getThreadPoolGetQueueSize()) {
            $dataArray['thread_pool_get_queue_size'] = $data->getThreadPoolGetQueueSize();
        }
        if ($data->isInitialized('threadPoolAnalyzeQueueSize') && null !== $data->getThreadPoolAnalyzeQueueSize()) {
            $dataArray['thread_pool_analyze_queue_size'] = $data->getThreadPoolAnalyzeQueueSize();
        }
        if ($data->isInitialized('threadPoolWriteQueueSize') && null !== $data->getThreadPoolWriteQueueSize()) {
            $dataArray['thread_pool_write_queue_size'] = $data->getThreadPoolWriteQueueSize();
        }
        if ($data->isInitialized('ismEnabled') && null !== $data->getIsmEnabled()) {
            $dataArray['ism_enabled'] = $data->getIsmEnabled();
        }
        if ($data->isInitialized('ismHistoryEnabled') && null !== $data->getIsmHistoryEnabled()) {
            $dataArray['ism_history_enabled'] = $data->getIsmHistoryEnabled();
        }
        if ($data->isInitialized('ismHistoryMaxAgeHours') && null !== $data->getIsmHistoryMaxAgeHours()) {
            $dataArray['ism_history_max_age_hours'] = $data->getIsmHistoryMaxAgeHours();
        }
        if ($data->isInitialized('ismHistoryMaxDocs') && null !== $data->getIsmHistoryMaxDocs()) {
            $dataArray['ism_history_max_docs'] = $data->getIsmHistoryMaxDocs();
        }
        if ($data->isInitialized('ismHistoryRolloverCheckPeriodHours') && null !== $data->getIsmHistoryRolloverCheckPeriodHours()) {
            $dataArray['ism_history_rollover_check_period_hours'] = $data->getIsmHistoryRolloverCheckPeriodHours();
        }
        if ($data->isInitialized('ismHistoryRolloverRetentionPeriodDays') && null !== $data->getIsmHistoryRolloverRetentionPeriodDays()) {
            $dataArray['ism_history_rollover_retention_period_days'] = $data->getIsmHistoryRolloverRetentionPeriodDays();
        }
        if ($data->isInitialized('searchMaxBuckets') && null !== $data->getSearchMaxBuckets()) {
            $dataArray['search_max_buckets'] = $data->getSearchMaxBuckets();
        }
        if ($data->isInitialized('actionAutoCreateIndexEnabled') && null !== $data->getActionAutoCreateIndexEnabled()) {
            $dataArray['action_auto_create_index_enabled'] = $data->getActionAutoCreateIndexEnabled();
        }
        if ($data->isInitialized('enableSecurityAudit') && null !== $data->getEnableSecurityAudit()) {
            $dataArray['enable_security_audit'] = $data->getEnableSecurityAudit();
        }
        if ($data->isInitialized('actionDestructiveRequiresName') && null !== $data->getActionDestructiveRequiresName()) {
            $dataArray['action_destructive_requires_name'] = $data->getActionDestructiveRequiresName();
        }
        if ($data->isInitialized('clusterMaxShardsPerNode') && null !== $data->getClusterMaxShardsPerNode()) {
            $dataArray['cluster_max_shards_per_node'] = $data->getClusterMaxShardsPerNode();
        }
        if ($data->isInitialized('overrideMainResponseVersion') && null !== $data->getOverrideMainResponseVersion()) {
            $dataArray['override_main_response_version'] = $data->getOverrideMainResponseVersion();
        }
        if ($data->isInitialized('scriptMaxCompilationsRate') && null !== $data->getScriptMaxCompilationsRate()) {
            $dataArray['script_max_compilations_rate'] = $data->getScriptMaxCompilationsRate();
        }
        if ($data->isInitialized('clusterRoutingAllocationNodeConcurrentRecoveries') && null !== $data->getClusterRoutingAllocationNodeConcurrentRecoveries()) {
            $dataArray['cluster_routing_allocation_node_concurrent_recoveries'] = $data->getClusterRoutingAllocationNodeConcurrentRecoveries();
        }
        if ($data->isInitialized('reindexRemoteWhitelist') && null !== $data->getReindexRemoteWhitelist()) {
            $values = [];
            foreach ($data->getReindexRemoteWhitelist() as $value) {
                $values[] = $value;
            }
            $dataArray['reindex_remote_whitelist'] = $values;
        }
        if ($data->isInitialized('pluginsAlertingFilterByBackendRolesEnabled') && null !== $data->getPluginsAlertingFilterByBackendRolesEnabled()) {
            $dataArray['plugins_alerting_filter_by_backend_roles_enabled'] = $data->getPluginsAlertingFilterByBackendRolesEnabled();
        }
        if ($data->isInitialized('knnMemoryCircuitBreakerEnabled') && null !== $data->getKnnMemoryCircuitBreakerEnabled()) {
            $dataArray['knn_memory_circuit_breaker_enabled'] = $data->getKnnMemoryCircuitBreakerEnabled();
        }
        if ($data->isInitialized('knnMemoryCircuitBreakerLimit') && null !== $data->getKnnMemoryCircuitBreakerLimit()) {
            $dataArray['knn_memory_circuit_breaker_limit'] = $data->getKnnMemoryCircuitBreakerLimit();
        }
        if ($data->isInitialized('keepIndexRefreshInterval') && null !== $data->getKeepIndexRefreshInterval()) {
            $dataArray['keep_index_refresh_interval'] = $data->getKeepIndexRefreshInterval();
        }
        foreach ($data as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_1;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Jane\Generated\DigitalOcean\Model\OpensearchAdvancedConfig::class => false];
    }
}