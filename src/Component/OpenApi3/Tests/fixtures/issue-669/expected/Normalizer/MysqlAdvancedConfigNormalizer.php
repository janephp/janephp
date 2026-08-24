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
            $object->setBackupHour($data['backup_hour']);
            unset($data['backup_hour']);
        }
        if (\array_key_exists('backup_minute', $data)) {
            $object->setBackupMinute($data['backup_minute']);
            unset($data['backup_minute']);
        }
        if (\array_key_exists('sql_mode', $data)) {
            $object->setSqlMode($data['sql_mode']);
            unset($data['sql_mode']);
        }
        if (\array_key_exists('connect_timeout', $data)) {
            $object->setConnectTimeout($data['connect_timeout']);
            unset($data['connect_timeout']);
        }
        if (\array_key_exists('default_time_zone', $data)) {
            $object->setDefaultTimeZone($data['default_time_zone']);
            unset($data['default_time_zone']);
        }
        if (\array_key_exists('group_concat_max_len', $data)) {
            $object->setGroupConcatMaxLen($data['group_concat_max_len']);
            unset($data['group_concat_max_len']);
        }
        if (\array_key_exists('information_schema_stats_expiry', $data)) {
            $object->setInformationSchemaStatsExpiry($data['information_schema_stats_expiry']);
            unset($data['information_schema_stats_expiry']);
        }
        if (\array_key_exists('innodb_ft_min_token_size', $data)) {
            $object->setInnodbFtMinTokenSize($data['innodb_ft_min_token_size']);
            unset($data['innodb_ft_min_token_size']);
        }
        if (\array_key_exists('innodb_ft_server_stopword_table', $data)) {
            $object->setInnodbFtServerStopwordTable($data['innodb_ft_server_stopword_table']);
            unset($data['innodb_ft_server_stopword_table']);
        }
        if (\array_key_exists('innodb_lock_wait_timeout', $data)) {
            $object->setInnodbLockWaitTimeout($data['innodb_lock_wait_timeout']);
            unset($data['innodb_lock_wait_timeout']);
        }
        if (\array_key_exists('innodb_log_buffer_size', $data)) {
            $object->setInnodbLogBufferSize($data['innodb_log_buffer_size']);
            unset($data['innodb_log_buffer_size']);
        }
        if (\array_key_exists('innodb_online_alter_log_max_size', $data)) {
            $object->setInnodbOnlineAlterLogMaxSize($data['innodb_online_alter_log_max_size']);
            unset($data['innodb_online_alter_log_max_size']);
        }
        if (\array_key_exists('innodb_print_all_deadlocks', $data)) {
            $object->setInnodbPrintAllDeadlocks($data['innodb_print_all_deadlocks']);
            unset($data['innodb_print_all_deadlocks']);
        }
        if (\array_key_exists('innodb_rollback_on_timeout', $data)) {
            $object->setInnodbRollbackOnTimeout($data['innodb_rollback_on_timeout']);
            unset($data['innodb_rollback_on_timeout']);
        }
        if (\array_key_exists('interactive_timeout', $data)) {
            $object->setInteractiveTimeout($data['interactive_timeout']);
            unset($data['interactive_timeout']);
        }
        if (\array_key_exists('internal_tmp_mem_storage_engine', $data)) {
            $object->setInternalTmpMemStorageEngine($data['internal_tmp_mem_storage_engine']);
            unset($data['internal_tmp_mem_storage_engine']);
        }
        if (\array_key_exists('net_read_timeout', $data)) {
            $object->setNetReadTimeout($data['net_read_timeout']);
            unset($data['net_read_timeout']);
        }
        if (\array_key_exists('net_write_timeout', $data)) {
            $object->setNetWriteTimeout($data['net_write_timeout']);
            unset($data['net_write_timeout']);
        }
        if (\array_key_exists('sql_require_primary_key', $data)) {
            $object->setSqlRequirePrimaryKey($data['sql_require_primary_key']);
            unset($data['sql_require_primary_key']);
        }
        if (\array_key_exists('wait_timeout', $data)) {
            $object->setWaitTimeout($data['wait_timeout']);
            unset($data['wait_timeout']);
        }
        if (\array_key_exists('max_allowed_packet', $data)) {
            $object->setMaxAllowedPacket($data['max_allowed_packet']);
            unset($data['max_allowed_packet']);
        }
        if (\array_key_exists('max_heap_table_size', $data)) {
            $object->setMaxHeapTableSize($data['max_heap_table_size']);
            unset($data['max_heap_table_size']);
        }
        if (\array_key_exists('sort_buffer_size', $data)) {
            $object->setSortBufferSize($data['sort_buffer_size']);
            unset($data['sort_buffer_size']);
        }
        if (\array_key_exists('tmp_table_size', $data)) {
            $object->setTmpTableSize($data['tmp_table_size']);
            unset($data['tmp_table_size']);
        }
        if (\array_key_exists('slow_query_log', $data)) {
            $object->setSlowQueryLog($data['slow_query_log']);
            unset($data['slow_query_log']);
        }
        if (\array_key_exists('long_query_time', $data)) {
            $object->setLongQueryTime($data['long_query_time']);
            unset($data['long_query_time']);
        }
        if (\array_key_exists('binlog_retention_period', $data)) {
            $object->setBinlogRetentionPeriod($data['binlog_retention_period']);
            unset($data['binlog_retention_period']);
        }
        if (\array_key_exists('innodb_change_buffer_max_size', $data)) {
            $object->setInnodbChangeBufferMaxSize($data['innodb_change_buffer_max_size']);
            unset($data['innodb_change_buffer_max_size']);
        }
        if (\array_key_exists('innodb_flush_neighbors', $data)) {
            $object->setInnodbFlushNeighbors($data['innodb_flush_neighbors']);
            unset($data['innodb_flush_neighbors']);
        }
        if (\array_key_exists('innodb_read_io_threads', $data)) {
            $object->setInnodbReadIoThreads($data['innodb_read_io_threads']);
            unset($data['innodb_read_io_threads']);
        }
        if (\array_key_exists('innodb_write_io_threads', $data)) {
            $object->setInnodbWriteIoThreads($data['innodb_write_io_threads']);
            unset($data['innodb_write_io_threads']);
        }
        if (\array_key_exists('innodb_thread_concurrency', $data)) {
            $object->setInnodbThreadConcurrency($data['innodb_thread_concurrency']);
            unset($data['innodb_thread_concurrency']);
        }
        if (\array_key_exists('net_buffer_length', $data)) {
            $object->setNetBufferLength($data['net_buffer_length']);
            unset($data['net_buffer_length']);
        }
        if (\array_key_exists('log_output', $data)) {
            $object->setLogOutput($data['log_output']);
            unset($data['log_output']);
        }
        if (\array_key_exists('mysql_incremental_backup', $data)) {
            $object->setMysqlIncrementalBackup($this->denormalizer->denormalize($data['mysql_incremental_backup'], \Jane\Generated\DigitalOcean\Model\MysqlIncrementalBackup::class, 'json', $context));
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
        if ($data->isInitialized('backupHour') && null !== $data->getBackupHour()) {
            $dataArray['backup_hour'] = $data->getBackupHour();
        }
        if ($data->isInitialized('backupMinute') && null !== $data->getBackupMinute()) {
            $dataArray['backup_minute'] = $data->getBackupMinute();
        }
        if ($data->isInitialized('sqlMode') && null !== $data->getSqlMode()) {
            $dataArray['sql_mode'] = $data->getSqlMode();
        }
        if ($data->isInitialized('connectTimeout') && null !== $data->getConnectTimeout()) {
            $dataArray['connect_timeout'] = $data->getConnectTimeout();
        }
        if ($data->isInitialized('defaultTimeZone') && null !== $data->getDefaultTimeZone()) {
            $dataArray['default_time_zone'] = $data->getDefaultTimeZone();
        }
        if ($data->isInitialized('groupConcatMaxLen') && null !== $data->getGroupConcatMaxLen()) {
            $dataArray['group_concat_max_len'] = $data->getGroupConcatMaxLen();
        }
        if ($data->isInitialized('informationSchemaStatsExpiry') && null !== $data->getInformationSchemaStatsExpiry()) {
            $dataArray['information_schema_stats_expiry'] = $data->getInformationSchemaStatsExpiry();
        }
        if ($data->isInitialized('innodbFtMinTokenSize') && null !== $data->getInnodbFtMinTokenSize()) {
            $dataArray['innodb_ft_min_token_size'] = $data->getInnodbFtMinTokenSize();
        }
        if ($data->isInitialized('innodbFtServerStopwordTable') && null !== $data->getInnodbFtServerStopwordTable()) {
            $dataArray['innodb_ft_server_stopword_table'] = $data->getInnodbFtServerStopwordTable();
        }
        if ($data->isInitialized('innodbLockWaitTimeout') && null !== $data->getInnodbLockWaitTimeout()) {
            $dataArray['innodb_lock_wait_timeout'] = $data->getInnodbLockWaitTimeout();
        }
        if ($data->isInitialized('innodbLogBufferSize') && null !== $data->getInnodbLogBufferSize()) {
            $dataArray['innodb_log_buffer_size'] = $data->getInnodbLogBufferSize();
        }
        if ($data->isInitialized('innodbOnlineAlterLogMaxSize') && null !== $data->getInnodbOnlineAlterLogMaxSize()) {
            $dataArray['innodb_online_alter_log_max_size'] = $data->getInnodbOnlineAlterLogMaxSize();
        }
        if ($data->isInitialized('innodbPrintAllDeadlocks') && null !== $data->getInnodbPrintAllDeadlocks()) {
            $dataArray['innodb_print_all_deadlocks'] = $data->getInnodbPrintAllDeadlocks();
        }
        if ($data->isInitialized('innodbRollbackOnTimeout') && null !== $data->getInnodbRollbackOnTimeout()) {
            $dataArray['innodb_rollback_on_timeout'] = $data->getInnodbRollbackOnTimeout();
        }
        if ($data->isInitialized('interactiveTimeout') && null !== $data->getInteractiveTimeout()) {
            $dataArray['interactive_timeout'] = $data->getInteractiveTimeout();
        }
        if ($data->isInitialized('internalTmpMemStorageEngine') && null !== $data->getInternalTmpMemStorageEngine()) {
            $dataArray['internal_tmp_mem_storage_engine'] = $data->getInternalTmpMemStorageEngine();
        }
        if ($data->isInitialized('netReadTimeout') && null !== $data->getNetReadTimeout()) {
            $dataArray['net_read_timeout'] = $data->getNetReadTimeout();
        }
        if ($data->isInitialized('netWriteTimeout') && null !== $data->getNetWriteTimeout()) {
            $dataArray['net_write_timeout'] = $data->getNetWriteTimeout();
        }
        if ($data->isInitialized('sqlRequirePrimaryKey') && null !== $data->getSqlRequirePrimaryKey()) {
            $dataArray['sql_require_primary_key'] = $data->getSqlRequirePrimaryKey();
        }
        if ($data->isInitialized('waitTimeout') && null !== $data->getWaitTimeout()) {
            $dataArray['wait_timeout'] = $data->getWaitTimeout();
        }
        if ($data->isInitialized('maxAllowedPacket') && null !== $data->getMaxAllowedPacket()) {
            $dataArray['max_allowed_packet'] = $data->getMaxAllowedPacket();
        }
        if ($data->isInitialized('maxHeapTableSize') && null !== $data->getMaxHeapTableSize()) {
            $dataArray['max_heap_table_size'] = $data->getMaxHeapTableSize();
        }
        if ($data->isInitialized('sortBufferSize') && null !== $data->getSortBufferSize()) {
            $dataArray['sort_buffer_size'] = $data->getSortBufferSize();
        }
        if ($data->isInitialized('tmpTableSize') && null !== $data->getTmpTableSize()) {
            $dataArray['tmp_table_size'] = $data->getTmpTableSize();
        }
        if ($data->isInitialized('slowQueryLog') && null !== $data->getSlowQueryLog()) {
            $dataArray['slow_query_log'] = $data->getSlowQueryLog();
        }
        if ($data->isInitialized('longQueryTime') && null !== $data->getLongQueryTime()) {
            $dataArray['long_query_time'] = $data->getLongQueryTime();
        }
        if ($data->isInitialized('binlogRetentionPeriod') && null !== $data->getBinlogRetentionPeriod()) {
            $dataArray['binlog_retention_period'] = $data->getBinlogRetentionPeriod();
        }
        if ($data->isInitialized('innodbChangeBufferMaxSize') && null !== $data->getInnodbChangeBufferMaxSize()) {
            $dataArray['innodb_change_buffer_max_size'] = $data->getInnodbChangeBufferMaxSize();
        }
        if ($data->isInitialized('innodbFlushNeighbors') && null !== $data->getInnodbFlushNeighbors()) {
            $dataArray['innodb_flush_neighbors'] = $data->getInnodbFlushNeighbors();
        }
        if ($data->isInitialized('innodbReadIoThreads') && null !== $data->getInnodbReadIoThreads()) {
            $dataArray['innodb_read_io_threads'] = $data->getInnodbReadIoThreads();
        }
        if ($data->isInitialized('innodbWriteIoThreads') && null !== $data->getInnodbWriteIoThreads()) {
            $dataArray['innodb_write_io_threads'] = $data->getInnodbWriteIoThreads();
        }
        if ($data->isInitialized('innodbThreadConcurrency') && null !== $data->getInnodbThreadConcurrency()) {
            $dataArray['innodb_thread_concurrency'] = $data->getInnodbThreadConcurrency();
        }
        if ($data->isInitialized('netBufferLength') && null !== $data->getNetBufferLength()) {
            $dataArray['net_buffer_length'] = $data->getNetBufferLength();
        }
        if ($data->isInitialized('logOutput') && null !== $data->getLogOutput()) {
            $dataArray['log_output'] = $data->getLogOutput();
        }
        if ($data->isInitialized('mysqlIncrementalBackup') && null !== $data->getMysqlIncrementalBackup()) {
            $dataArray['mysql_incremental_backup'] = $data->getMysqlIncrementalBackup() === null ? null : new \Jane\Generated\DigitalOcean\Runtime\JsonObject($this->normalizer->normalize($data->getMysqlIncrementalBackup(), 'json', $context));
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
        return [\Jane\Generated\DigitalOcean\Model\MysqlAdvancedConfig::class => false];
    }
}