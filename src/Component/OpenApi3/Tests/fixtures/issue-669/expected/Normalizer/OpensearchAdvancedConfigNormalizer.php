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
        $object = new \Jane\Generated\DigitalOcean\Model\OpensearchAdvancedConfig();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
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
        if (\array_key_exists('http_max_content_length_bytes', $data)) {
            $object->httpMaxContentLengthBytes = $data['http_max_content_length_bytes'];
            unset($data['http_max_content_length_bytes']);
        }
        if (\array_key_exists('http_max_header_size_bytes', $data)) {
            $object->httpMaxHeaderSizeBytes = $data['http_max_header_size_bytes'];
            unset($data['http_max_header_size_bytes']);
        }
        if (\array_key_exists('http_max_initial_line_length_bytes', $data)) {
            $object->httpMaxInitialLineLengthBytes = $data['http_max_initial_line_length_bytes'];
            unset($data['http_max_initial_line_length_bytes']);
        }
        if (\array_key_exists('indices_query_bool_max_clause_count', $data)) {
            $object->indicesQueryBoolMaxClauseCount = $data['indices_query_bool_max_clause_count'];
            unset($data['indices_query_bool_max_clause_count']);
        }
        if (\array_key_exists('indices_fielddata_cache_size_percentage', $data)) {
            $object->indicesFielddataCacheSizePercentage = $data['indices_fielddata_cache_size_percentage'];
            unset($data['indices_fielddata_cache_size_percentage']);
        }
        if (\array_key_exists('indices_memory_index_buffer_size_percentage', $data)) {
            $object->indicesMemoryIndexBufferSizePercentage = $data['indices_memory_index_buffer_size_percentage'];
            unset($data['indices_memory_index_buffer_size_percentage']);
        }
        if (\array_key_exists('indices_memory_min_index_buffer_size_mb', $data)) {
            $object->indicesMemoryMinIndexBufferSizeMb = $data['indices_memory_min_index_buffer_size_mb'];
            unset($data['indices_memory_min_index_buffer_size_mb']);
        }
        if (\array_key_exists('indices_memory_max_index_buffer_size_mb', $data)) {
            $object->indicesMemoryMaxIndexBufferSizeMb = $data['indices_memory_max_index_buffer_size_mb'];
            unset($data['indices_memory_max_index_buffer_size_mb']);
        }
        if (\array_key_exists('indices_queries_cache_size_percentage', $data)) {
            $object->indicesQueriesCacheSizePercentage = $data['indices_queries_cache_size_percentage'];
            unset($data['indices_queries_cache_size_percentage']);
        }
        if (\array_key_exists('indices_recovery_max_mb_per_sec', $data)) {
            $object->indicesRecoveryMaxMbPerSec = $data['indices_recovery_max_mb_per_sec'];
            unset($data['indices_recovery_max_mb_per_sec']);
        }
        if (\array_key_exists('indices_recovery_max_concurrent_file_chunks', $data)) {
            $object->indicesRecoveryMaxConcurrentFileChunks = $data['indices_recovery_max_concurrent_file_chunks'];
            unset($data['indices_recovery_max_concurrent_file_chunks']);
        }
        if (\array_key_exists('thread_pool_search_size', $data)) {
            $object->threadPoolSearchSize = $data['thread_pool_search_size'];
            unset($data['thread_pool_search_size']);
        }
        if (\array_key_exists('thread_pool_search_throttled_size', $data)) {
            $object->threadPoolSearchThrottledSize = $data['thread_pool_search_throttled_size'];
            unset($data['thread_pool_search_throttled_size']);
        }
        if (\array_key_exists('thread_pool_get_size', $data)) {
            $object->threadPoolGetSize = $data['thread_pool_get_size'];
            unset($data['thread_pool_get_size']);
        }
        if (\array_key_exists('thread_pool_analyze_size', $data)) {
            $object->threadPoolAnalyzeSize = $data['thread_pool_analyze_size'];
            unset($data['thread_pool_analyze_size']);
        }
        if (\array_key_exists('thread_pool_write_size', $data)) {
            $object->threadPoolWriteSize = $data['thread_pool_write_size'];
            unset($data['thread_pool_write_size']);
        }
        if (\array_key_exists('thread_pool_force_merge_size', $data)) {
            $object->threadPoolForceMergeSize = $data['thread_pool_force_merge_size'];
            unset($data['thread_pool_force_merge_size']);
        }
        if (\array_key_exists('thread_pool_search_queue_size', $data)) {
            $object->threadPoolSearchQueueSize = $data['thread_pool_search_queue_size'];
            unset($data['thread_pool_search_queue_size']);
        }
        if (\array_key_exists('thread_pool_search_throttled_queue_size', $data)) {
            $object->threadPoolSearchThrottledQueueSize = $data['thread_pool_search_throttled_queue_size'];
            unset($data['thread_pool_search_throttled_queue_size']);
        }
        if (\array_key_exists('thread_pool_get_queue_size', $data)) {
            $object->threadPoolGetQueueSize = $data['thread_pool_get_queue_size'];
            unset($data['thread_pool_get_queue_size']);
        }
        if (\array_key_exists('thread_pool_analyze_queue_size', $data)) {
            $object->threadPoolAnalyzeQueueSize = $data['thread_pool_analyze_queue_size'];
            unset($data['thread_pool_analyze_queue_size']);
        }
        if (\array_key_exists('thread_pool_write_queue_size', $data)) {
            $object->threadPoolWriteQueueSize = $data['thread_pool_write_queue_size'];
            unset($data['thread_pool_write_queue_size']);
        }
        if (\array_key_exists('ism_enabled', $data)) {
            $object->ismEnabled = $data['ism_enabled'];
            unset($data['ism_enabled']);
        }
        if (\array_key_exists('ism_history_enabled', $data)) {
            $object->ismHistoryEnabled = $data['ism_history_enabled'];
            unset($data['ism_history_enabled']);
        }
        if (\array_key_exists('ism_history_max_age_hours', $data)) {
            $object->ismHistoryMaxAgeHours = $data['ism_history_max_age_hours'];
            unset($data['ism_history_max_age_hours']);
        }
        if (\array_key_exists('ism_history_max_docs', $data)) {
            $object->ismHistoryMaxDocs = $data['ism_history_max_docs'];
            unset($data['ism_history_max_docs']);
        }
        if (\array_key_exists('ism_history_rollover_check_period_hours', $data)) {
            $object->ismHistoryRolloverCheckPeriodHours = $data['ism_history_rollover_check_period_hours'];
            unset($data['ism_history_rollover_check_period_hours']);
        }
        if (\array_key_exists('ism_history_rollover_retention_period_days', $data)) {
            $object->ismHistoryRolloverRetentionPeriodDays = $data['ism_history_rollover_retention_period_days'];
            unset($data['ism_history_rollover_retention_period_days']);
        }
        if (\array_key_exists('search_max_buckets', $data)) {
            $object->searchMaxBuckets = $data['search_max_buckets'];
            unset($data['search_max_buckets']);
        }
        if (\array_key_exists('action_auto_create_index_enabled', $data)) {
            $object->actionAutoCreateIndexEnabled = $data['action_auto_create_index_enabled'];
            unset($data['action_auto_create_index_enabled']);
        }
        if (\array_key_exists('enable_security_audit', $data)) {
            $object->enableSecurityAudit = $data['enable_security_audit'];
            unset($data['enable_security_audit']);
        }
        if (\array_key_exists('action_destructive_requires_name', $data)) {
            $object->actionDestructiveRequiresName = $data['action_destructive_requires_name'];
            unset($data['action_destructive_requires_name']);
        }
        if (\array_key_exists('cluster_max_shards_per_node', $data)) {
            $object->clusterMaxShardsPerNode = $data['cluster_max_shards_per_node'];
            unset($data['cluster_max_shards_per_node']);
        }
        if (\array_key_exists('override_main_response_version', $data)) {
            $object->overrideMainResponseVersion = $data['override_main_response_version'];
            unset($data['override_main_response_version']);
        }
        if (\array_key_exists('script_max_compilations_rate', $data)) {
            $object->scriptMaxCompilationsRate = $data['script_max_compilations_rate'];
            unset($data['script_max_compilations_rate']);
        }
        if (\array_key_exists('cluster_routing_allocation_node_concurrent_recoveries', $data)) {
            $object->clusterRoutingAllocationNodeConcurrentRecoveries = $data['cluster_routing_allocation_node_concurrent_recoveries'];
            unset($data['cluster_routing_allocation_node_concurrent_recoveries']);
        }
        if (\array_key_exists('reindex_remote_whitelist', $data)) {
            $values = [];
            foreach ($data['reindex_remote_whitelist'] as $value) {
                $values[] = $value;
            }
            $object->reindexRemoteWhitelist = $values;
            unset($data['reindex_remote_whitelist']);
        }
        if (\array_key_exists('plugins_alerting_filter_by_backend_roles_enabled', $data)) {
            $object->pluginsAlertingFilterByBackendRolesEnabled = $data['plugins_alerting_filter_by_backend_roles_enabled'];
            unset($data['plugins_alerting_filter_by_backend_roles_enabled']);
        }
        if (\array_key_exists('knn_memory_circuit_breaker_enabled', $data)) {
            $object->knnMemoryCircuitBreakerEnabled = $data['knn_memory_circuit_breaker_enabled'];
            unset($data['knn_memory_circuit_breaker_enabled']);
        }
        if (\array_key_exists('knn_memory_circuit_breaker_limit', $data)) {
            $object->knnMemoryCircuitBreakerLimit = $data['knn_memory_circuit_breaker_limit'];
            unset($data['knn_memory_circuit_breaker_limit']);
        }
        if (\array_key_exists('keep_index_refresh_interval', $data)) {
            $object->keepIndexRefreshInterval = $data['keep_index_refresh_interval'];
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
        if (array_key_exists('httpMaxContentLengthBytes', get_object_vars($data)) && null !== ($data->httpMaxContentLengthBytes ?? null)) {
            $dataArray['http_max_content_length_bytes'] = $data->httpMaxContentLengthBytes ?? null;
        }
        if (array_key_exists('httpMaxHeaderSizeBytes', get_object_vars($data)) && null !== ($data->httpMaxHeaderSizeBytes ?? null)) {
            $dataArray['http_max_header_size_bytes'] = $data->httpMaxHeaderSizeBytes ?? null;
        }
        if (array_key_exists('httpMaxInitialLineLengthBytes', get_object_vars($data)) && null !== ($data->httpMaxInitialLineLengthBytes ?? null)) {
            $dataArray['http_max_initial_line_length_bytes'] = $data->httpMaxInitialLineLengthBytes ?? null;
        }
        if (array_key_exists('indicesQueryBoolMaxClauseCount', get_object_vars($data)) && null !== ($data->indicesQueryBoolMaxClauseCount ?? null)) {
            $dataArray['indices_query_bool_max_clause_count'] = $data->indicesQueryBoolMaxClauseCount ?? null;
        }
        if (array_key_exists('indicesFielddataCacheSizePercentage', get_object_vars($data)) && null !== ($data->indicesFielddataCacheSizePercentage ?? null)) {
            $dataArray['indices_fielddata_cache_size_percentage'] = $data->indicesFielddataCacheSizePercentage ?? null;
        }
        if (array_key_exists('indicesMemoryIndexBufferSizePercentage', get_object_vars($data)) && null !== ($data->indicesMemoryIndexBufferSizePercentage ?? null)) {
            $dataArray['indices_memory_index_buffer_size_percentage'] = $data->indicesMemoryIndexBufferSizePercentage ?? null;
        }
        if (array_key_exists('indicesMemoryMinIndexBufferSizeMb', get_object_vars($data)) && null !== ($data->indicesMemoryMinIndexBufferSizeMb ?? null)) {
            $dataArray['indices_memory_min_index_buffer_size_mb'] = $data->indicesMemoryMinIndexBufferSizeMb ?? null;
        }
        if (array_key_exists('indicesMemoryMaxIndexBufferSizeMb', get_object_vars($data)) && null !== ($data->indicesMemoryMaxIndexBufferSizeMb ?? null)) {
            $dataArray['indices_memory_max_index_buffer_size_mb'] = $data->indicesMemoryMaxIndexBufferSizeMb ?? null;
        }
        if (array_key_exists('indicesQueriesCacheSizePercentage', get_object_vars($data)) && null !== ($data->indicesQueriesCacheSizePercentage ?? null)) {
            $dataArray['indices_queries_cache_size_percentage'] = $data->indicesQueriesCacheSizePercentage ?? null;
        }
        if (array_key_exists('indicesRecoveryMaxMbPerSec', get_object_vars($data)) && null !== ($data->indicesRecoveryMaxMbPerSec ?? null)) {
            $dataArray['indices_recovery_max_mb_per_sec'] = $data->indicesRecoveryMaxMbPerSec ?? null;
        }
        if (array_key_exists('indicesRecoveryMaxConcurrentFileChunks', get_object_vars($data)) && null !== ($data->indicesRecoveryMaxConcurrentFileChunks ?? null)) {
            $dataArray['indices_recovery_max_concurrent_file_chunks'] = $data->indicesRecoveryMaxConcurrentFileChunks ?? null;
        }
        if (array_key_exists('threadPoolSearchSize', get_object_vars($data)) && null !== ($data->threadPoolSearchSize ?? null)) {
            $dataArray['thread_pool_search_size'] = $data->threadPoolSearchSize ?? null;
        }
        if (array_key_exists('threadPoolSearchThrottledSize', get_object_vars($data)) && null !== ($data->threadPoolSearchThrottledSize ?? null)) {
            $dataArray['thread_pool_search_throttled_size'] = $data->threadPoolSearchThrottledSize ?? null;
        }
        if (array_key_exists('threadPoolGetSize', get_object_vars($data)) && null !== ($data->threadPoolGetSize ?? null)) {
            $dataArray['thread_pool_get_size'] = $data->threadPoolGetSize ?? null;
        }
        if (array_key_exists('threadPoolAnalyzeSize', get_object_vars($data)) && null !== ($data->threadPoolAnalyzeSize ?? null)) {
            $dataArray['thread_pool_analyze_size'] = $data->threadPoolAnalyzeSize ?? null;
        }
        if (array_key_exists('threadPoolWriteSize', get_object_vars($data)) && null !== ($data->threadPoolWriteSize ?? null)) {
            $dataArray['thread_pool_write_size'] = $data->threadPoolWriteSize ?? null;
        }
        if (array_key_exists('threadPoolForceMergeSize', get_object_vars($data)) && null !== ($data->threadPoolForceMergeSize ?? null)) {
            $dataArray['thread_pool_force_merge_size'] = $data->threadPoolForceMergeSize ?? null;
        }
        if (array_key_exists('threadPoolSearchQueueSize', get_object_vars($data)) && null !== ($data->threadPoolSearchQueueSize ?? null)) {
            $dataArray['thread_pool_search_queue_size'] = $data->threadPoolSearchQueueSize ?? null;
        }
        if (array_key_exists('threadPoolSearchThrottledQueueSize', get_object_vars($data)) && null !== ($data->threadPoolSearchThrottledQueueSize ?? null)) {
            $dataArray['thread_pool_search_throttled_queue_size'] = $data->threadPoolSearchThrottledQueueSize ?? null;
        }
        if (array_key_exists('threadPoolGetQueueSize', get_object_vars($data)) && null !== ($data->threadPoolGetQueueSize ?? null)) {
            $dataArray['thread_pool_get_queue_size'] = $data->threadPoolGetQueueSize ?? null;
        }
        if (array_key_exists('threadPoolAnalyzeQueueSize', get_object_vars($data)) && null !== ($data->threadPoolAnalyzeQueueSize ?? null)) {
            $dataArray['thread_pool_analyze_queue_size'] = $data->threadPoolAnalyzeQueueSize ?? null;
        }
        if (array_key_exists('threadPoolWriteQueueSize', get_object_vars($data)) && null !== ($data->threadPoolWriteQueueSize ?? null)) {
            $dataArray['thread_pool_write_queue_size'] = $data->threadPoolWriteQueueSize ?? null;
        }
        if (array_key_exists('ismEnabled', get_object_vars($data)) && null !== ($data->ismEnabled ?? null)) {
            $dataArray['ism_enabled'] = $data->ismEnabled ?? null;
        }
        if (array_key_exists('ismHistoryEnabled', get_object_vars($data)) && null !== ($data->ismHistoryEnabled ?? null)) {
            $dataArray['ism_history_enabled'] = $data->ismHistoryEnabled ?? null;
        }
        if (array_key_exists('ismHistoryMaxAgeHours', get_object_vars($data)) && null !== ($data->ismHistoryMaxAgeHours ?? null)) {
            $dataArray['ism_history_max_age_hours'] = $data->ismHistoryMaxAgeHours ?? null;
        }
        if (array_key_exists('ismHistoryMaxDocs', get_object_vars($data)) && null !== ($data->ismHistoryMaxDocs ?? null)) {
            $dataArray['ism_history_max_docs'] = $data->ismHistoryMaxDocs ?? null;
        }
        if (array_key_exists('ismHistoryRolloverCheckPeriodHours', get_object_vars($data)) && null !== ($data->ismHistoryRolloverCheckPeriodHours ?? null)) {
            $dataArray['ism_history_rollover_check_period_hours'] = $data->ismHistoryRolloverCheckPeriodHours ?? null;
        }
        if (array_key_exists('ismHistoryRolloverRetentionPeriodDays', get_object_vars($data)) && null !== ($data->ismHistoryRolloverRetentionPeriodDays ?? null)) {
            $dataArray['ism_history_rollover_retention_period_days'] = $data->ismHistoryRolloverRetentionPeriodDays ?? null;
        }
        if (array_key_exists('searchMaxBuckets', get_object_vars($data)) && null !== ($data->searchMaxBuckets ?? null)) {
            $dataArray['search_max_buckets'] = $data->searchMaxBuckets ?? null;
        }
        if (array_key_exists('actionAutoCreateIndexEnabled', get_object_vars($data)) && null !== ($data->actionAutoCreateIndexEnabled ?? null)) {
            $dataArray['action_auto_create_index_enabled'] = $data->actionAutoCreateIndexEnabled ?? null;
        }
        if (array_key_exists('enableSecurityAudit', get_object_vars($data)) && null !== ($data->enableSecurityAudit ?? null)) {
            $dataArray['enable_security_audit'] = $data->enableSecurityAudit ?? null;
        }
        if (array_key_exists('actionDestructiveRequiresName', get_object_vars($data)) && null !== ($data->actionDestructiveRequiresName ?? null)) {
            $dataArray['action_destructive_requires_name'] = $data->actionDestructiveRequiresName ?? null;
        }
        if (array_key_exists('clusterMaxShardsPerNode', get_object_vars($data)) && null !== ($data->clusterMaxShardsPerNode ?? null)) {
            $dataArray['cluster_max_shards_per_node'] = $data->clusterMaxShardsPerNode ?? null;
        }
        if (array_key_exists('overrideMainResponseVersion', get_object_vars($data)) && null !== ($data->overrideMainResponseVersion ?? null)) {
            $dataArray['override_main_response_version'] = $data->overrideMainResponseVersion ?? null;
        }
        if (array_key_exists('scriptMaxCompilationsRate', get_object_vars($data)) && null !== ($data->scriptMaxCompilationsRate ?? null)) {
            $dataArray['script_max_compilations_rate'] = $data->scriptMaxCompilationsRate ?? null;
        }
        if (array_key_exists('clusterRoutingAllocationNodeConcurrentRecoveries', get_object_vars($data)) && null !== ($data->clusterRoutingAllocationNodeConcurrentRecoveries ?? null)) {
            $dataArray['cluster_routing_allocation_node_concurrent_recoveries'] = $data->clusterRoutingAllocationNodeConcurrentRecoveries ?? null;
        }
        if (array_key_exists('reindexRemoteWhitelist', get_object_vars($data)) && null !== ($data->reindexRemoteWhitelist ?? null)) {
            $values = [];
            foreach ($data->reindexRemoteWhitelist ?? null as $value) {
                $values[] = $value;
            }
            $dataArray['reindex_remote_whitelist'] = $values;
        }
        if (array_key_exists('pluginsAlertingFilterByBackendRolesEnabled', get_object_vars($data)) && null !== ($data->pluginsAlertingFilterByBackendRolesEnabled ?? null)) {
            $dataArray['plugins_alerting_filter_by_backend_roles_enabled'] = $data->pluginsAlertingFilterByBackendRolesEnabled ?? null;
        }
        if (array_key_exists('knnMemoryCircuitBreakerEnabled', get_object_vars($data)) && null !== ($data->knnMemoryCircuitBreakerEnabled ?? null)) {
            $dataArray['knn_memory_circuit_breaker_enabled'] = $data->knnMemoryCircuitBreakerEnabled ?? null;
        }
        if (array_key_exists('knnMemoryCircuitBreakerLimit', get_object_vars($data)) && null !== ($data->knnMemoryCircuitBreakerLimit ?? null)) {
            $dataArray['knn_memory_circuit_breaker_limit'] = $data->knnMemoryCircuitBreakerLimit ?? null;
        }
        if (array_key_exists('keepIndexRefreshInterval', get_object_vars($data)) && null !== ($data->keepIndexRefreshInterval ?? null)) {
            $dataArray['keep_index_refresh_interval'] = $data->keepIndexRefreshInterval ?? null;
        }
        foreach ($data->additionalPropertyEntries() as $key => $value_1) {
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