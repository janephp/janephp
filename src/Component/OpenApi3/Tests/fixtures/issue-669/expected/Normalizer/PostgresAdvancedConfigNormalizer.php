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
class PostgresAdvancedConfigNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Jane\Generated\DigitalOcean\Model\PostgresAdvancedConfig::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Jane\Generated\DigitalOcean\Model\PostgresAdvancedConfig::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Jane\Generated\DigitalOcean\Model\PostgresAdvancedConfig();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('autovacuum_vacuum_scale_factor', $data) && \is_int($data['autovacuum_vacuum_scale_factor'])) {
            $data['autovacuum_vacuum_scale_factor'] = (float) $data['autovacuum_vacuum_scale_factor'];
        }
        if (\array_key_exists('autovacuum_analyze_scale_factor', $data) && \is_int($data['autovacuum_analyze_scale_factor'])) {
            $data['autovacuum_analyze_scale_factor'] = (float) $data['autovacuum_analyze_scale_factor'];
        }
        if (\array_key_exists('bgwriter_lru_multiplier', $data) && \is_int($data['bgwriter_lru_multiplier'])) {
            $data['bgwriter_lru_multiplier'] = (float) $data['bgwriter_lru_multiplier'];
        }
        if (\array_key_exists('shared_buffers_percentage', $data) && \is_int($data['shared_buffers_percentage'])) {
            $data['shared_buffers_percentage'] = (float) $data['shared_buffers_percentage'];
        }
        if (\array_key_exists('jit', $data) && \is_int($data['jit'])) {
            $data['jit'] = (bool) $data['jit'];
        }
        if (\array_key_exists('stat_monitor_enable', $data) && \is_int($data['stat_monitor_enable'])) {
            $data['stat_monitor_enable'] = (bool) $data['stat_monitor_enable'];
        }
        if (\array_key_exists('autovacuum_freeze_max_age', $data)) {
            $object->autovacuumFreezeMaxAge = $data['autovacuum_freeze_max_age'];
            unset($data['autovacuum_freeze_max_age']);
        }
        if (\array_key_exists('autovacuum_max_workers', $data)) {
            $object->autovacuumMaxWorkers = $data['autovacuum_max_workers'];
            unset($data['autovacuum_max_workers']);
        }
        if (\array_key_exists('autovacuum_naptime', $data)) {
            $object->autovacuumNaptime = $data['autovacuum_naptime'];
            unset($data['autovacuum_naptime']);
        }
        if (\array_key_exists('autovacuum_vacuum_threshold', $data)) {
            $object->autovacuumVacuumThreshold = $data['autovacuum_vacuum_threshold'];
            unset($data['autovacuum_vacuum_threshold']);
        }
        if (\array_key_exists('autovacuum_analyze_threshold', $data)) {
            $object->autovacuumAnalyzeThreshold = $data['autovacuum_analyze_threshold'];
            unset($data['autovacuum_analyze_threshold']);
        }
        if (\array_key_exists('autovacuum_vacuum_scale_factor', $data)) {
            $object->autovacuumVacuumScaleFactor = $data['autovacuum_vacuum_scale_factor'];
            unset($data['autovacuum_vacuum_scale_factor']);
        }
        if (\array_key_exists('autovacuum_analyze_scale_factor', $data)) {
            $object->autovacuumAnalyzeScaleFactor = $data['autovacuum_analyze_scale_factor'];
            unset($data['autovacuum_analyze_scale_factor']);
        }
        if (\array_key_exists('autovacuum_vacuum_cost_delay', $data)) {
            $object->autovacuumVacuumCostDelay = $data['autovacuum_vacuum_cost_delay'];
            unset($data['autovacuum_vacuum_cost_delay']);
        }
        if (\array_key_exists('autovacuum_vacuum_cost_limit', $data)) {
            $object->autovacuumVacuumCostLimit = $data['autovacuum_vacuum_cost_limit'];
            unset($data['autovacuum_vacuum_cost_limit']);
        }
        if (\array_key_exists('backup_hour', $data)) {
            $object->backupHour = $data['backup_hour'];
            unset($data['backup_hour']);
        }
        if (\array_key_exists('backup_minute', $data)) {
            $object->backupMinute = $data['backup_minute'];
            unset($data['backup_minute']);
        }
        if (\array_key_exists('bgwriter_delay', $data)) {
            $object->bgwriterDelay = $data['bgwriter_delay'];
            unset($data['bgwriter_delay']);
        }
        if (\array_key_exists('bgwriter_flush_after', $data)) {
            $object->bgwriterFlushAfter = $data['bgwriter_flush_after'];
            unset($data['bgwriter_flush_after']);
        }
        if (\array_key_exists('bgwriter_lru_maxpages', $data)) {
            $object->bgwriterLruMaxpages = $data['bgwriter_lru_maxpages'];
            unset($data['bgwriter_lru_maxpages']);
        }
        if (\array_key_exists('bgwriter_lru_multiplier', $data)) {
            $object->bgwriterLruMultiplier = $data['bgwriter_lru_multiplier'];
            unset($data['bgwriter_lru_multiplier']);
        }
        if (\array_key_exists('deadlock_timeout', $data)) {
            $object->deadlockTimeout = $data['deadlock_timeout'];
            unset($data['deadlock_timeout']);
        }
        if (\array_key_exists('default_toast_compression', $data)) {
            $object->defaultToastCompression = $data['default_toast_compression'];
            unset($data['default_toast_compression']);
        }
        if (\array_key_exists('idle_in_transaction_session_timeout', $data)) {
            $object->idleInTransactionSessionTimeout = $data['idle_in_transaction_session_timeout'];
            unset($data['idle_in_transaction_session_timeout']);
        }
        if (\array_key_exists('jit', $data)) {
            $object->jit = $data['jit'];
            unset($data['jit']);
        }
        if (\array_key_exists('log_autovacuum_min_duration', $data)) {
            $object->logAutovacuumMinDuration = $data['log_autovacuum_min_duration'];
            unset($data['log_autovacuum_min_duration']);
        }
        if (\array_key_exists('log_error_verbosity', $data)) {
            $object->logErrorVerbosity = $data['log_error_verbosity'];
            unset($data['log_error_verbosity']);
        }
        if (\array_key_exists('log_line_prefix', $data)) {
            $object->logLinePrefix = $data['log_line_prefix'];
            unset($data['log_line_prefix']);
        }
        if (\array_key_exists('log_min_duration_statement', $data)) {
            $object->logMinDurationStatement = $data['log_min_duration_statement'];
            unset($data['log_min_duration_statement']);
        }
        if (\array_key_exists('max_files_per_process', $data)) {
            $object->maxFilesPerProcess = $data['max_files_per_process'];
            unset($data['max_files_per_process']);
        }
        if (\array_key_exists('max_prepared_transactions', $data)) {
            $object->maxPreparedTransactions = $data['max_prepared_transactions'];
            unset($data['max_prepared_transactions']);
        }
        if (\array_key_exists('max_pred_locks_per_transaction', $data)) {
            $object->maxPredLocksPerTransaction = $data['max_pred_locks_per_transaction'];
            unset($data['max_pred_locks_per_transaction']);
        }
        if (\array_key_exists('max_locks_per_transaction', $data)) {
            $object->maxLocksPerTransaction = $data['max_locks_per_transaction'];
            unset($data['max_locks_per_transaction']);
        }
        if (\array_key_exists('max_stack_depth', $data)) {
            $object->maxStackDepth = $data['max_stack_depth'];
            unset($data['max_stack_depth']);
        }
        if (\array_key_exists('max_standby_archive_delay', $data)) {
            $object->maxStandbyArchiveDelay = $data['max_standby_archive_delay'];
            unset($data['max_standby_archive_delay']);
        }
        if (\array_key_exists('max_standby_streaming_delay', $data)) {
            $object->maxStandbyStreamingDelay = $data['max_standby_streaming_delay'];
            unset($data['max_standby_streaming_delay']);
        }
        if (\array_key_exists('max_replication_slots', $data)) {
            $object->maxReplicationSlots = $data['max_replication_slots'];
            unset($data['max_replication_slots']);
        }
        if (\array_key_exists('max_logical_replication_workers', $data)) {
            $object->maxLogicalReplicationWorkers = $data['max_logical_replication_workers'];
            unset($data['max_logical_replication_workers']);
        }
        if (\array_key_exists('max_parallel_workers', $data)) {
            $object->maxParallelWorkers = $data['max_parallel_workers'];
            unset($data['max_parallel_workers']);
        }
        if (\array_key_exists('max_parallel_workers_per_gather', $data)) {
            $object->maxParallelWorkersPerGather = $data['max_parallel_workers_per_gather'];
            unset($data['max_parallel_workers_per_gather']);
        }
        if (\array_key_exists('max_worker_processes', $data)) {
            $object->maxWorkerProcesses = $data['max_worker_processes'];
            unset($data['max_worker_processes']);
        }
        if (\array_key_exists('pg_partman_bgw.role', $data)) {
            $object->pgPartmanBgwRole = $data['pg_partman_bgw.role'];
            unset($data['pg_partman_bgw.role']);
        }
        if (\array_key_exists('pg_partman_bgw.interval', $data)) {
            $object->pgPartmanBgwInterval = $data['pg_partman_bgw.interval'];
            unset($data['pg_partman_bgw.interval']);
        }
        if (\array_key_exists('pg_stat_statements.track', $data)) {
            $object->pgStatStatementsTrack = $data['pg_stat_statements.track'];
            unset($data['pg_stat_statements.track']);
        }
        if (\array_key_exists('temp_file_limit', $data)) {
            $object->tempFileLimit = $data['temp_file_limit'];
            unset($data['temp_file_limit']);
        }
        if (\array_key_exists('timezone', $data)) {
            $object->timezone = $data['timezone'];
            unset($data['timezone']);
        }
        if (\array_key_exists('track_activity_query_size', $data)) {
            $object->trackActivityQuerySize = $data['track_activity_query_size'];
            unset($data['track_activity_query_size']);
        }
        if (\array_key_exists('track_commit_timestamp', $data)) {
            $object->trackCommitTimestamp = $data['track_commit_timestamp'];
            unset($data['track_commit_timestamp']);
        }
        if (\array_key_exists('track_functions', $data)) {
            $object->trackFunctions = $data['track_functions'];
            unset($data['track_functions']);
        }
        if (\array_key_exists('track_io_timing', $data)) {
            $object->trackIoTiming = $data['track_io_timing'];
            unset($data['track_io_timing']);
        }
        if (\array_key_exists('max_wal_senders', $data)) {
            $object->maxWalSenders = $data['max_wal_senders'];
            unset($data['max_wal_senders']);
        }
        if (\array_key_exists('wal_sender_timeout', $data)) {
            $object->walSenderTimeout = $data['wal_sender_timeout'];
            unset($data['wal_sender_timeout']);
        }
        if (\array_key_exists('wal_writer_delay', $data)) {
            $object->walWriterDelay = $data['wal_writer_delay'];
            unset($data['wal_writer_delay']);
        }
        if (\array_key_exists('shared_buffers_percentage', $data)) {
            $object->sharedBuffersPercentage = $data['shared_buffers_percentage'];
            unset($data['shared_buffers_percentage']);
        }
        if (\array_key_exists('pgbouncer', $data)) {
            $object->pgbouncer = $this->denormalizer->denormalize($data['pgbouncer'], \Jane\Generated\DigitalOcean\Model\PgbouncerAdvancedConfig::class, 'json', $context);
            unset($data['pgbouncer']);
        }
        if (\array_key_exists('work_mem', $data)) {
            $object->workMem = $data['work_mem'];
            unset($data['work_mem']);
        }
        if (\array_key_exists('timescaledb', $data)) {
            $object->timescaledb = $this->denormalizer->denormalize($data['timescaledb'], \Jane\Generated\DigitalOcean\Model\TimescaledbAdvancedConfig::class, 'json', $context);
            unset($data['timescaledb']);
        }
        if (\array_key_exists('synchronous_replication', $data)) {
            $object->synchronousReplication = $data['synchronous_replication'];
            unset($data['synchronous_replication']);
        }
        if (\array_key_exists('stat_monitor_enable', $data)) {
            $object->statMonitorEnable = $data['stat_monitor_enable'];
            unset($data['stat_monitor_enable']);
        }
        if (\array_key_exists('max_failover_replication_time_lag', $data)) {
            $object->maxFailoverReplicationTimeLag = $data['max_failover_replication_time_lag'];
            unset($data['max_failover_replication_time_lag']);
        }
        if (\array_key_exists('max_connections', $data)) {
            $object->maxConnections = $data['max_connections'];
            unset($data['max_connections']);
        }
        if (\array_key_exists('max_slot_wal_keep_size', $data)) {
            $object->maxSlotWalKeepSize = $data['max_slot_wal_keep_size'];
            unset($data['max_slot_wal_keep_size']);
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
        if (array_key_exists('autovacuumFreezeMaxAge', get_object_vars($data)) && null !== ($data->autovacuumFreezeMaxAge ?? null)) {
            $dataArray['autovacuum_freeze_max_age'] = $data->autovacuumFreezeMaxAge ?? null;
        }
        if (array_key_exists('autovacuumMaxWorkers', get_object_vars($data)) && null !== ($data->autovacuumMaxWorkers ?? null)) {
            $dataArray['autovacuum_max_workers'] = $data->autovacuumMaxWorkers ?? null;
        }
        if (array_key_exists('autovacuumNaptime', get_object_vars($data)) && null !== ($data->autovacuumNaptime ?? null)) {
            $dataArray['autovacuum_naptime'] = $data->autovacuumNaptime ?? null;
        }
        if (array_key_exists('autovacuumVacuumThreshold', get_object_vars($data)) && null !== ($data->autovacuumVacuumThreshold ?? null)) {
            $dataArray['autovacuum_vacuum_threshold'] = $data->autovacuumVacuumThreshold ?? null;
        }
        if (array_key_exists('autovacuumAnalyzeThreshold', get_object_vars($data)) && null !== ($data->autovacuumAnalyzeThreshold ?? null)) {
            $dataArray['autovacuum_analyze_threshold'] = $data->autovacuumAnalyzeThreshold ?? null;
        }
        if (array_key_exists('autovacuumVacuumScaleFactor', get_object_vars($data)) && null !== ($data->autovacuumVacuumScaleFactor ?? null)) {
            $dataArray['autovacuum_vacuum_scale_factor'] = $data->autovacuumVacuumScaleFactor ?? null;
        }
        if (array_key_exists('autovacuumAnalyzeScaleFactor', get_object_vars($data)) && null !== ($data->autovacuumAnalyzeScaleFactor ?? null)) {
            $dataArray['autovacuum_analyze_scale_factor'] = $data->autovacuumAnalyzeScaleFactor ?? null;
        }
        if (array_key_exists('autovacuumVacuumCostDelay', get_object_vars($data)) && null !== ($data->autovacuumVacuumCostDelay ?? null)) {
            $dataArray['autovacuum_vacuum_cost_delay'] = $data->autovacuumVacuumCostDelay ?? null;
        }
        if (array_key_exists('autovacuumVacuumCostLimit', get_object_vars($data)) && null !== ($data->autovacuumVacuumCostLimit ?? null)) {
            $dataArray['autovacuum_vacuum_cost_limit'] = $data->autovacuumVacuumCostLimit ?? null;
        }
        if (array_key_exists('backupHour', get_object_vars($data)) && null !== ($data->backupHour ?? null)) {
            $dataArray['backup_hour'] = $data->backupHour ?? null;
        }
        if (array_key_exists('backupMinute', get_object_vars($data)) && null !== ($data->backupMinute ?? null)) {
            $dataArray['backup_minute'] = $data->backupMinute ?? null;
        }
        if (array_key_exists('bgwriterDelay', get_object_vars($data)) && null !== ($data->bgwriterDelay ?? null)) {
            $dataArray['bgwriter_delay'] = $data->bgwriterDelay ?? null;
        }
        if (array_key_exists('bgwriterFlushAfter', get_object_vars($data)) && null !== ($data->bgwriterFlushAfter ?? null)) {
            $dataArray['bgwriter_flush_after'] = $data->bgwriterFlushAfter ?? null;
        }
        if (array_key_exists('bgwriterLruMaxpages', get_object_vars($data)) && null !== ($data->bgwriterLruMaxpages ?? null)) {
            $dataArray['bgwriter_lru_maxpages'] = $data->bgwriterLruMaxpages ?? null;
        }
        if (array_key_exists('bgwriterLruMultiplier', get_object_vars($data)) && null !== ($data->bgwriterLruMultiplier ?? null)) {
            $dataArray['bgwriter_lru_multiplier'] = $data->bgwriterLruMultiplier ?? null;
        }
        if (array_key_exists('deadlockTimeout', get_object_vars($data)) && null !== ($data->deadlockTimeout ?? null)) {
            $dataArray['deadlock_timeout'] = $data->deadlockTimeout ?? null;
        }
        if (array_key_exists('defaultToastCompression', get_object_vars($data)) && null !== ($data->defaultToastCompression ?? null)) {
            $dataArray['default_toast_compression'] = $data->defaultToastCompression ?? null;
        }
        if (array_key_exists('idleInTransactionSessionTimeout', get_object_vars($data)) && null !== ($data->idleInTransactionSessionTimeout ?? null)) {
            $dataArray['idle_in_transaction_session_timeout'] = $data->idleInTransactionSessionTimeout ?? null;
        }
        if (array_key_exists('jit', get_object_vars($data)) && null !== ($data->jit ?? null)) {
            $dataArray['jit'] = $data->jit ?? null;
        }
        if (array_key_exists('logAutovacuumMinDuration', get_object_vars($data)) && null !== ($data->logAutovacuumMinDuration ?? null)) {
            $dataArray['log_autovacuum_min_duration'] = $data->logAutovacuumMinDuration ?? null;
        }
        if (array_key_exists('logErrorVerbosity', get_object_vars($data)) && null !== ($data->logErrorVerbosity ?? null)) {
            $dataArray['log_error_verbosity'] = $data->logErrorVerbosity ?? null;
        }
        if (array_key_exists('logLinePrefix', get_object_vars($data)) && null !== ($data->logLinePrefix ?? null)) {
            $dataArray['log_line_prefix'] = $data->logLinePrefix ?? null;
        }
        if (array_key_exists('logMinDurationStatement', get_object_vars($data)) && null !== ($data->logMinDurationStatement ?? null)) {
            $dataArray['log_min_duration_statement'] = $data->logMinDurationStatement ?? null;
        }
        if (array_key_exists('maxFilesPerProcess', get_object_vars($data)) && null !== ($data->maxFilesPerProcess ?? null)) {
            $dataArray['max_files_per_process'] = $data->maxFilesPerProcess ?? null;
        }
        if (array_key_exists('maxPreparedTransactions', get_object_vars($data)) && null !== ($data->maxPreparedTransactions ?? null)) {
            $dataArray['max_prepared_transactions'] = $data->maxPreparedTransactions ?? null;
        }
        if (array_key_exists('maxPredLocksPerTransaction', get_object_vars($data)) && null !== ($data->maxPredLocksPerTransaction ?? null)) {
            $dataArray['max_pred_locks_per_transaction'] = $data->maxPredLocksPerTransaction ?? null;
        }
        if (array_key_exists('maxLocksPerTransaction', get_object_vars($data)) && null !== ($data->maxLocksPerTransaction ?? null)) {
            $dataArray['max_locks_per_transaction'] = $data->maxLocksPerTransaction ?? null;
        }
        if (array_key_exists('maxStackDepth', get_object_vars($data)) && null !== ($data->maxStackDepth ?? null)) {
            $dataArray['max_stack_depth'] = $data->maxStackDepth ?? null;
        }
        if (array_key_exists('maxStandbyArchiveDelay', get_object_vars($data)) && null !== ($data->maxStandbyArchiveDelay ?? null)) {
            $dataArray['max_standby_archive_delay'] = $data->maxStandbyArchiveDelay ?? null;
        }
        if (array_key_exists('maxStandbyStreamingDelay', get_object_vars($data)) && null !== ($data->maxStandbyStreamingDelay ?? null)) {
            $dataArray['max_standby_streaming_delay'] = $data->maxStandbyStreamingDelay ?? null;
        }
        if (array_key_exists('maxReplicationSlots', get_object_vars($data)) && null !== ($data->maxReplicationSlots ?? null)) {
            $dataArray['max_replication_slots'] = $data->maxReplicationSlots ?? null;
        }
        if (array_key_exists('maxLogicalReplicationWorkers', get_object_vars($data)) && null !== ($data->maxLogicalReplicationWorkers ?? null)) {
            $dataArray['max_logical_replication_workers'] = $data->maxLogicalReplicationWorkers ?? null;
        }
        if (array_key_exists('maxParallelWorkers', get_object_vars($data)) && null !== ($data->maxParallelWorkers ?? null)) {
            $dataArray['max_parallel_workers'] = $data->maxParallelWorkers ?? null;
        }
        if (array_key_exists('maxParallelWorkersPerGather', get_object_vars($data)) && null !== ($data->maxParallelWorkersPerGather ?? null)) {
            $dataArray['max_parallel_workers_per_gather'] = $data->maxParallelWorkersPerGather ?? null;
        }
        if (array_key_exists('maxWorkerProcesses', get_object_vars($data)) && null !== ($data->maxWorkerProcesses ?? null)) {
            $dataArray['max_worker_processes'] = $data->maxWorkerProcesses ?? null;
        }
        if (array_key_exists('pgPartmanBgwRole', get_object_vars($data)) && null !== ($data->pgPartmanBgwRole ?? null)) {
            $dataArray['pg_partman_bgw.role'] = $data->pgPartmanBgwRole ?? null;
        }
        if (array_key_exists('pgPartmanBgwInterval', get_object_vars($data)) && null !== ($data->pgPartmanBgwInterval ?? null)) {
            $dataArray['pg_partman_bgw.interval'] = $data->pgPartmanBgwInterval ?? null;
        }
        if (array_key_exists('pgStatStatementsTrack', get_object_vars($data)) && null !== ($data->pgStatStatementsTrack ?? null)) {
            $dataArray['pg_stat_statements.track'] = $data->pgStatStatementsTrack ?? null;
        }
        if (array_key_exists('tempFileLimit', get_object_vars($data)) && null !== ($data->tempFileLimit ?? null)) {
            $dataArray['temp_file_limit'] = $data->tempFileLimit ?? null;
        }
        if (array_key_exists('timezone', get_object_vars($data)) && null !== ($data->timezone ?? null)) {
            $dataArray['timezone'] = $data->timezone ?? null;
        }
        if (array_key_exists('trackActivityQuerySize', get_object_vars($data)) && null !== ($data->trackActivityQuerySize ?? null)) {
            $dataArray['track_activity_query_size'] = $data->trackActivityQuerySize ?? null;
        }
        if (array_key_exists('trackCommitTimestamp', get_object_vars($data)) && null !== ($data->trackCommitTimestamp ?? null)) {
            $dataArray['track_commit_timestamp'] = $data->trackCommitTimestamp ?? null;
        }
        if (array_key_exists('trackFunctions', get_object_vars($data)) && null !== ($data->trackFunctions ?? null)) {
            $dataArray['track_functions'] = $data->trackFunctions ?? null;
        }
        if (array_key_exists('trackIoTiming', get_object_vars($data)) && null !== ($data->trackIoTiming ?? null)) {
            $dataArray['track_io_timing'] = $data->trackIoTiming ?? null;
        }
        if (array_key_exists('maxWalSenders', get_object_vars($data)) && null !== ($data->maxWalSenders ?? null)) {
            $dataArray['max_wal_senders'] = $data->maxWalSenders ?? null;
        }
        if (array_key_exists('walSenderTimeout', get_object_vars($data)) && null !== ($data->walSenderTimeout ?? null)) {
            $dataArray['wal_sender_timeout'] = $data->walSenderTimeout ?? null;
        }
        if (array_key_exists('walWriterDelay', get_object_vars($data)) && null !== ($data->walWriterDelay ?? null)) {
            $dataArray['wal_writer_delay'] = $data->walWriterDelay ?? null;
        }
        if (array_key_exists('sharedBuffersPercentage', get_object_vars($data)) && null !== ($data->sharedBuffersPercentage ?? null)) {
            $dataArray['shared_buffers_percentage'] = $data->sharedBuffersPercentage ?? null;
        }
        if (array_key_exists('pgbouncer', get_object_vars($data)) && null !== ($data->pgbouncer ?? null)) {
            $dataArray['pgbouncer'] = ($data->pgbouncer ?? null) === null ? null : new \Jane\Generated\DigitalOcean\Runtime\JsonObject($this->normalizer->normalize($data->pgbouncer ?? null, 'json', $context));
        }
        if (array_key_exists('workMem', get_object_vars($data)) && null !== ($data->workMem ?? null)) {
            $dataArray['work_mem'] = $data->workMem ?? null;
        }
        if (array_key_exists('timescaledb', get_object_vars($data)) && null !== ($data->timescaledb ?? null)) {
            $dataArray['timescaledb'] = ($data->timescaledb ?? null) === null ? null : new \Jane\Generated\DigitalOcean\Runtime\JsonObject($this->normalizer->normalize($data->timescaledb ?? null, 'json', $context));
        }
        if (array_key_exists('synchronousReplication', get_object_vars($data)) && null !== ($data->synchronousReplication ?? null)) {
            $dataArray['synchronous_replication'] = $data->synchronousReplication ?? null;
        }
        if (array_key_exists('statMonitorEnable', get_object_vars($data)) && null !== ($data->statMonitorEnable ?? null)) {
            $dataArray['stat_monitor_enable'] = $data->statMonitorEnable ?? null;
        }
        if (array_key_exists('maxFailoverReplicationTimeLag', get_object_vars($data)) && null !== ($data->maxFailoverReplicationTimeLag ?? null)) {
            $dataArray['max_failover_replication_time_lag'] = $data->maxFailoverReplicationTimeLag ?? null;
        }
        if (array_key_exists('maxConnections', get_object_vars($data)) && null !== ($data->maxConnections ?? null)) {
            $dataArray['max_connections'] = $data->maxConnections ?? null;
        }
        if (array_key_exists('maxSlotWalKeepSize', get_object_vars($data)) && null !== ($data->maxSlotWalKeepSize ?? null)) {
            $dataArray['max_slot_wal_keep_size'] = $data->maxSlotWalKeepSize ?? null;
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
        return [\Jane\Generated\DigitalOcean\Model\PostgresAdvancedConfig::class => false];
    }
}