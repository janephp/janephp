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
class MysqlAdvancedConfigNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Generated\DigitalOcean\Model\MysqlAdvancedConfig::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Generated\DigitalOcean\Model\MysqlAdvancedConfig::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Generated\DigitalOcean\Model\MysqlAdvancedConfig();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('long_query_time', $data) && \is_int($data['long_query_time'])) {
            $data['long_query_time'] = (float) $data['long_query_time'];
        }
        if (\array_key_exists('binlog_retention_period', $data) && \is_int($data['binlog_retention_period'])) {
            $data['binlog_retention_period'] = (float) $data['binlog_retention_period'];
        }
        if (\array_key_exists('innodb_print_all_deadlocks', $data) && \is_int($data['innodb_print_all_deadlocks'])) {
            $data['innodb_print_all_deadlocks'] = (bool) $data['innodb_print_all_deadlocks'];
        }
        if (\array_key_exists('innodb_rollback_on_timeout', $data) && \is_int($data['innodb_rollback_on_timeout'])) {
            $data['innodb_rollback_on_timeout'] = (bool) $data['innodb_rollback_on_timeout'];
        }
        if (\array_key_exists('sql_require_primary_key', $data) && \is_int($data['sql_require_primary_key'])) {
            $data['sql_require_primary_key'] = (bool) $data['sql_require_primary_key'];
        }
        if (\array_key_exists('slow_query_log', $data) && \is_int($data['slow_query_log'])) {
            $data['slow_query_log'] = (bool) $data['slow_query_log'];
        }
        if (\array_key_exists('backup_hour', $data)) {
            $object->backupHour = $data['backup_hour'];
            unset($data['backup_hour']);
        }
        if (\array_key_exists('backup_minute', $data)) {
            $object->backupMinute = $data['backup_minute'];
            unset($data['backup_minute']);
        }
        if (\array_key_exists('sql_mode', $data)) {
            $object->sqlMode = $data['sql_mode'];
            unset($data['sql_mode']);
        }
        if (\array_key_exists('connect_timeout', $data)) {
            $object->connectTimeout = $data['connect_timeout'];
            unset($data['connect_timeout']);
        }
        if (\array_key_exists('default_time_zone', $data)) {
            $object->defaultTimeZone = $data['default_time_zone'];
            unset($data['default_time_zone']);
        }
        if (\array_key_exists('group_concat_max_len', $data)) {
            $object->groupConcatMaxLen = $data['group_concat_max_len'];
            unset($data['group_concat_max_len']);
        }
        if (\array_key_exists('information_schema_stats_expiry', $data)) {
            $object->informationSchemaStatsExpiry = $data['information_schema_stats_expiry'];
            unset($data['information_schema_stats_expiry']);
        }
        if (\array_key_exists('innodb_ft_min_token_size', $data)) {
            $object->innodbFtMinTokenSize = $data['innodb_ft_min_token_size'];
            unset($data['innodb_ft_min_token_size']);
        }
        if (\array_key_exists('innodb_ft_server_stopword_table', $data)) {
            $object->innodbFtServerStopwordTable = $data['innodb_ft_server_stopword_table'];
            unset($data['innodb_ft_server_stopword_table']);
        }
        if (\array_key_exists('innodb_lock_wait_timeout', $data)) {
            $object->innodbLockWaitTimeout = $data['innodb_lock_wait_timeout'];
            unset($data['innodb_lock_wait_timeout']);
        }
        if (\array_key_exists('innodb_log_buffer_size', $data)) {
            $object->innodbLogBufferSize = $data['innodb_log_buffer_size'];
            unset($data['innodb_log_buffer_size']);
        }
        if (\array_key_exists('innodb_online_alter_log_max_size', $data)) {
            $object->innodbOnlineAlterLogMaxSize = $data['innodb_online_alter_log_max_size'];
            unset($data['innodb_online_alter_log_max_size']);
        }
        if (\array_key_exists('innodb_print_all_deadlocks', $data)) {
            $object->innodbPrintAllDeadlocks = $data['innodb_print_all_deadlocks'];
            unset($data['innodb_print_all_deadlocks']);
        }
        if (\array_key_exists('innodb_rollback_on_timeout', $data)) {
            $object->innodbRollbackOnTimeout = $data['innodb_rollback_on_timeout'];
            unset($data['innodb_rollback_on_timeout']);
        }
        if (\array_key_exists('interactive_timeout', $data)) {
            $object->interactiveTimeout = $data['interactive_timeout'];
            unset($data['interactive_timeout']);
        }
        if (\array_key_exists('internal_tmp_mem_storage_engine', $data)) {
            $object->internalTmpMemStorageEngine = $data['internal_tmp_mem_storage_engine'];
            unset($data['internal_tmp_mem_storage_engine']);
        }
        if (\array_key_exists('net_read_timeout', $data)) {
            $object->netReadTimeout = $data['net_read_timeout'];
            unset($data['net_read_timeout']);
        }
        if (\array_key_exists('net_write_timeout', $data)) {
            $object->netWriteTimeout = $data['net_write_timeout'];
            unset($data['net_write_timeout']);
        }
        if (\array_key_exists('sql_require_primary_key', $data)) {
            $object->sqlRequirePrimaryKey = $data['sql_require_primary_key'];
            unset($data['sql_require_primary_key']);
        }
        if (\array_key_exists('wait_timeout', $data)) {
            $object->waitTimeout = $data['wait_timeout'];
            unset($data['wait_timeout']);
        }
        if (\array_key_exists('max_allowed_packet', $data)) {
            $object->maxAllowedPacket = $data['max_allowed_packet'];
            unset($data['max_allowed_packet']);
        }
        if (\array_key_exists('max_heap_table_size', $data)) {
            $object->maxHeapTableSize = $data['max_heap_table_size'];
            unset($data['max_heap_table_size']);
        }
        if (\array_key_exists('sort_buffer_size', $data)) {
            $object->sortBufferSize = $data['sort_buffer_size'];
            unset($data['sort_buffer_size']);
        }
        if (\array_key_exists('tmp_table_size', $data)) {
            $object->tmpTableSize = $data['tmp_table_size'];
            unset($data['tmp_table_size']);
        }
        if (\array_key_exists('slow_query_log', $data)) {
            $object->slowQueryLog = $data['slow_query_log'];
            unset($data['slow_query_log']);
        }
        if (\array_key_exists('long_query_time', $data)) {
            $object->longQueryTime = $data['long_query_time'];
            unset($data['long_query_time']);
        }
        if (\array_key_exists('binlog_retention_period', $data)) {
            $object->binlogRetentionPeriod = $data['binlog_retention_period'];
            unset($data['binlog_retention_period']);
        }
        if (\array_key_exists('innodb_change_buffer_max_size', $data)) {
            $object->innodbChangeBufferMaxSize = $data['innodb_change_buffer_max_size'];
            unset($data['innodb_change_buffer_max_size']);
        }
        if (\array_key_exists('innodb_flush_neighbors', $data)) {
            $object->innodbFlushNeighbors = $data['innodb_flush_neighbors'];
            unset($data['innodb_flush_neighbors']);
        }
        if (\array_key_exists('innodb_read_io_threads', $data)) {
            $object->innodbReadIoThreads = $data['innodb_read_io_threads'];
            unset($data['innodb_read_io_threads']);
        }
        if (\array_key_exists('innodb_write_io_threads', $data)) {
            $object->innodbWriteIoThreads = $data['innodb_write_io_threads'];
            unset($data['innodb_write_io_threads']);
        }
        if (\array_key_exists('innodb_thread_concurrency', $data)) {
            $object->innodbThreadConcurrency = $data['innodb_thread_concurrency'];
            unset($data['innodb_thread_concurrency']);
        }
        if (\array_key_exists('net_buffer_length', $data)) {
            $object->netBufferLength = $data['net_buffer_length'];
            unset($data['net_buffer_length']);
        }
        if (\array_key_exists('log_output', $data)) {
            $object->logOutput = $data['log_output'];
            unset($data['log_output']);
        }
        if (\array_key_exists('mysql_incremental_backup', $data)) {
            $object->mysqlIncrementalBackup = $this->denormalizer->denormalize($data['mysql_incremental_backup'], \Jane\Generated\DigitalOcean\Model\MysqlIncrementalBackup::class, 'json', $context);
            unset($data['mysql_incremental_backup']);
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
        if (array_key_exists('backupHour', get_object_vars($data)) && null !== ($data->backupHour ?? null)) {
            $dataArray['backup_hour'] = $data->backupHour ?? null;
        }
        if (array_key_exists('backupMinute', get_object_vars($data)) && null !== ($data->backupMinute ?? null)) {
            $dataArray['backup_minute'] = $data->backupMinute ?? null;
        }
        if (array_key_exists('sqlMode', get_object_vars($data)) && null !== ($data->sqlMode ?? null)) {
            $dataArray['sql_mode'] = $data->sqlMode ?? null;
        }
        if (array_key_exists('connectTimeout', get_object_vars($data)) && null !== ($data->connectTimeout ?? null)) {
            $dataArray['connect_timeout'] = $data->connectTimeout ?? null;
        }
        if (array_key_exists('defaultTimeZone', get_object_vars($data)) && null !== ($data->defaultTimeZone ?? null)) {
            $dataArray['default_time_zone'] = $data->defaultTimeZone ?? null;
        }
        if (array_key_exists('groupConcatMaxLen', get_object_vars($data)) && null !== ($data->groupConcatMaxLen ?? null)) {
            $dataArray['group_concat_max_len'] = $data->groupConcatMaxLen ?? null;
        }
        if (array_key_exists('informationSchemaStatsExpiry', get_object_vars($data)) && null !== ($data->informationSchemaStatsExpiry ?? null)) {
            $dataArray['information_schema_stats_expiry'] = $data->informationSchemaStatsExpiry ?? null;
        }
        if (array_key_exists('innodbFtMinTokenSize', get_object_vars($data)) && null !== ($data->innodbFtMinTokenSize ?? null)) {
            $dataArray['innodb_ft_min_token_size'] = $data->innodbFtMinTokenSize ?? null;
        }
        if (array_key_exists('innodbFtServerStopwordTable', get_object_vars($data)) && null !== ($data->innodbFtServerStopwordTable ?? null)) {
            $dataArray['innodb_ft_server_stopword_table'] = $data->innodbFtServerStopwordTable ?? null;
        }
        if (array_key_exists('innodbLockWaitTimeout', get_object_vars($data)) && null !== ($data->innodbLockWaitTimeout ?? null)) {
            $dataArray['innodb_lock_wait_timeout'] = $data->innodbLockWaitTimeout ?? null;
        }
        if (array_key_exists('innodbLogBufferSize', get_object_vars($data)) && null !== ($data->innodbLogBufferSize ?? null)) {
            $dataArray['innodb_log_buffer_size'] = $data->innodbLogBufferSize ?? null;
        }
        if (array_key_exists('innodbOnlineAlterLogMaxSize', get_object_vars($data)) && null !== ($data->innodbOnlineAlterLogMaxSize ?? null)) {
            $dataArray['innodb_online_alter_log_max_size'] = $data->innodbOnlineAlterLogMaxSize ?? null;
        }
        if (array_key_exists('innodbPrintAllDeadlocks', get_object_vars($data)) && null !== ($data->innodbPrintAllDeadlocks ?? null)) {
            $dataArray['innodb_print_all_deadlocks'] = $data->innodbPrintAllDeadlocks ?? null;
        }
        if (array_key_exists('innodbRollbackOnTimeout', get_object_vars($data)) && null !== ($data->innodbRollbackOnTimeout ?? null)) {
            $dataArray['innodb_rollback_on_timeout'] = $data->innodbRollbackOnTimeout ?? null;
        }
        if (array_key_exists('interactiveTimeout', get_object_vars($data)) && null !== ($data->interactiveTimeout ?? null)) {
            $dataArray['interactive_timeout'] = $data->interactiveTimeout ?? null;
        }
        if (array_key_exists('internalTmpMemStorageEngine', get_object_vars($data)) && null !== ($data->internalTmpMemStorageEngine ?? null)) {
            $dataArray['internal_tmp_mem_storage_engine'] = $data->internalTmpMemStorageEngine ?? null;
        }
        if (array_key_exists('netReadTimeout', get_object_vars($data)) && null !== ($data->netReadTimeout ?? null)) {
            $dataArray['net_read_timeout'] = $data->netReadTimeout ?? null;
        }
        if (array_key_exists('netWriteTimeout', get_object_vars($data)) && null !== ($data->netWriteTimeout ?? null)) {
            $dataArray['net_write_timeout'] = $data->netWriteTimeout ?? null;
        }
        if (array_key_exists('sqlRequirePrimaryKey', get_object_vars($data)) && null !== ($data->sqlRequirePrimaryKey ?? null)) {
            $dataArray['sql_require_primary_key'] = $data->sqlRequirePrimaryKey ?? null;
        }
        if (array_key_exists('waitTimeout', get_object_vars($data)) && null !== ($data->waitTimeout ?? null)) {
            $dataArray['wait_timeout'] = $data->waitTimeout ?? null;
        }
        if (array_key_exists('maxAllowedPacket', get_object_vars($data)) && null !== ($data->maxAllowedPacket ?? null)) {
            $dataArray['max_allowed_packet'] = $data->maxAllowedPacket ?? null;
        }
        if (array_key_exists('maxHeapTableSize', get_object_vars($data)) && null !== ($data->maxHeapTableSize ?? null)) {
            $dataArray['max_heap_table_size'] = $data->maxHeapTableSize ?? null;
        }
        if (array_key_exists('sortBufferSize', get_object_vars($data)) && null !== ($data->sortBufferSize ?? null)) {
            $dataArray['sort_buffer_size'] = $data->sortBufferSize ?? null;
        }
        if (array_key_exists('tmpTableSize', get_object_vars($data)) && null !== ($data->tmpTableSize ?? null)) {
            $dataArray['tmp_table_size'] = $data->tmpTableSize ?? null;
        }
        if (array_key_exists('slowQueryLog', get_object_vars($data)) && null !== ($data->slowQueryLog ?? null)) {
            $dataArray['slow_query_log'] = $data->slowQueryLog ?? null;
        }
        if (array_key_exists('longQueryTime', get_object_vars($data)) && null !== ($data->longQueryTime ?? null)) {
            $dataArray['long_query_time'] = $data->longQueryTime ?? null;
        }
        if (array_key_exists('binlogRetentionPeriod', get_object_vars($data)) && null !== ($data->binlogRetentionPeriod ?? null)) {
            $dataArray['binlog_retention_period'] = $data->binlogRetentionPeriod ?? null;
        }
        if (array_key_exists('innodbChangeBufferMaxSize', get_object_vars($data)) && null !== ($data->innodbChangeBufferMaxSize ?? null)) {
            $dataArray['innodb_change_buffer_max_size'] = $data->innodbChangeBufferMaxSize ?? null;
        }
        if (array_key_exists('innodbFlushNeighbors', get_object_vars($data)) && null !== ($data->innodbFlushNeighbors ?? null)) {
            $dataArray['innodb_flush_neighbors'] = $data->innodbFlushNeighbors ?? null;
        }
        if (array_key_exists('innodbReadIoThreads', get_object_vars($data)) && null !== ($data->innodbReadIoThreads ?? null)) {
            $dataArray['innodb_read_io_threads'] = $data->innodbReadIoThreads ?? null;
        }
        if (array_key_exists('innodbWriteIoThreads', get_object_vars($data)) && null !== ($data->innodbWriteIoThreads ?? null)) {
            $dataArray['innodb_write_io_threads'] = $data->innodbWriteIoThreads ?? null;
        }
        if (array_key_exists('innodbThreadConcurrency', get_object_vars($data)) && null !== ($data->innodbThreadConcurrency ?? null)) {
            $dataArray['innodb_thread_concurrency'] = $data->innodbThreadConcurrency ?? null;
        }
        if (array_key_exists('netBufferLength', get_object_vars($data)) && null !== ($data->netBufferLength ?? null)) {
            $dataArray['net_buffer_length'] = $data->netBufferLength ?? null;
        }
        if (array_key_exists('logOutput', get_object_vars($data)) && null !== ($data->logOutput ?? null)) {
            $dataArray['log_output'] = $data->logOutput ?? null;
        }
        if (array_key_exists('mysqlIncrementalBackup', get_object_vars($data)) && null !== ($data->mysqlIncrementalBackup ?? null)) {
            $dataArray['mysql_incremental_backup'] = ($data->mysqlIncrementalBackup ?? null) === null ? null : new \Jane\Generated\DigitalOcean\Runtime\JsonObject($this->normalizer->normalize($data->mysqlIncrementalBackup ?? null, 'json', $context));
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
        return [\Jane\Generated\DigitalOcean\Model\MysqlAdvancedConfig::class => false];
    }
}