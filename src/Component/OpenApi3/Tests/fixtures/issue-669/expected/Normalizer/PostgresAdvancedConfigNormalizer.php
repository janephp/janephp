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
            $data['autovacuum_vacuum_scale_factor'] = (double) $data['autovacuum_vacuum_scale_factor'];
        }
        if (\array_key_exists('autovacuum_analyze_scale_factor', $data) && \is_int($data['autovacuum_analyze_scale_factor'])) {
            $data['autovacuum_analyze_scale_factor'] = (double) $data['autovacuum_analyze_scale_factor'];
        }
        if (\array_key_exists('bgwriter_lru_multiplier', $data) && \is_int($data['bgwriter_lru_multiplier'])) {
            $data['bgwriter_lru_multiplier'] = (double) $data['bgwriter_lru_multiplier'];
        }
        if (\array_key_exists('shared_buffers_percentage', $data) && \is_int($data['shared_buffers_percentage'])) {
            $data['shared_buffers_percentage'] = (double) $data['shared_buffers_percentage'];
        }
        if (\array_key_exists('jit', $data) && \is_int($data['jit'])) {
            $data['jit'] = (bool) $data['jit'];
        }
        if (\array_key_exists('stat_monitor_enable', $data) && \is_int($data['stat_monitor_enable'])) {
            $data['stat_monitor_enable'] = (bool) $data['stat_monitor_enable'];
        }
        if (\array_key_exists('autovacuum_freeze_max_age', $data)) {
            $object->setAutovacuumFreezeMaxAge($data['autovacuum_freeze_max_age']);
            unset($data['autovacuum_freeze_max_age']);
        }
        if (\array_key_exists('autovacuum_max_workers', $data)) {
            $object->setAutovacuumMaxWorkers($data['autovacuum_max_workers']);
            unset($data['autovacuum_max_workers']);
        }
        if (\array_key_exists('autovacuum_naptime', $data)) {
            $object->setAutovacuumNaptime($data['autovacuum_naptime']);
            unset($data['autovacuum_naptime']);
        }
        if (\array_key_exists('autovacuum_vacuum_threshold', $data)) {
            $object->setAutovacuumVacuumThreshold($data['autovacuum_vacuum_threshold']);
            unset($data['autovacuum_vacuum_threshold']);
        }
        if (\array_key_exists('autovacuum_analyze_threshold', $data)) {
            $object->setAutovacuumAnalyzeThreshold($data['autovacuum_analyze_threshold']);
            unset($data['autovacuum_analyze_threshold']);
        }
        if (\array_key_exists('autovacuum_vacuum_scale_factor', $data)) {
            $object->setAutovacuumVacuumScaleFactor($data['autovacuum_vacuum_scale_factor']);
            unset($data['autovacuum_vacuum_scale_factor']);
        }
        if (\array_key_exists('autovacuum_analyze_scale_factor', $data)) {
            $object->setAutovacuumAnalyzeScaleFactor($data['autovacuum_analyze_scale_factor']);
            unset($data['autovacuum_analyze_scale_factor']);
        }
        if (\array_key_exists('autovacuum_vacuum_cost_delay', $data)) {
            $object->setAutovacuumVacuumCostDelay($data['autovacuum_vacuum_cost_delay']);
            unset($data['autovacuum_vacuum_cost_delay']);
        }
        if (\array_key_exists('autovacuum_vacuum_cost_limit', $data)) {
            $object->setAutovacuumVacuumCostLimit($data['autovacuum_vacuum_cost_limit']);
            unset($data['autovacuum_vacuum_cost_limit']);
        }
        if (\array_key_exists('backup_hour', $data)) {
            $object->setBackupHour($data['backup_hour']);
            unset($data['backup_hour']);
        }
        if (\array_key_exists('backup_minute', $data)) {
            $object->setBackupMinute($data['backup_minute']);
            unset($data['backup_minute']);
        }
        if (\array_key_exists('bgwriter_delay', $data)) {
            $object->setBgwriterDelay($data['bgwriter_delay']);
            unset($data['bgwriter_delay']);
        }
        if (\array_key_exists('bgwriter_flush_after', $data)) {
            $object->setBgwriterFlushAfter($data['bgwriter_flush_after']);
            unset($data['bgwriter_flush_after']);
        }
        if (\array_key_exists('bgwriter_lru_maxpages', $data)) {
            $object->setBgwriterLruMaxpages($data['bgwriter_lru_maxpages']);
            unset($data['bgwriter_lru_maxpages']);
        }
        if (\array_key_exists('bgwriter_lru_multiplier', $data)) {
            $object->setBgwriterLruMultiplier($data['bgwriter_lru_multiplier']);
            unset($data['bgwriter_lru_multiplier']);
        }
        if (\array_key_exists('deadlock_timeout', $data)) {
            $object->setDeadlockTimeout($data['deadlock_timeout']);
            unset($data['deadlock_timeout']);
        }
        if (\array_key_exists('default_toast_compression', $data)) {
            $object->setDefaultToastCompression($data['default_toast_compression']);
            unset($data['default_toast_compression']);
        }
        if (\array_key_exists('idle_in_transaction_session_timeout', $data)) {
            $object->setIdleInTransactionSessionTimeout($data['idle_in_transaction_session_timeout']);
            unset($data['idle_in_transaction_session_timeout']);
        }
        if (\array_key_exists('jit', $data)) {
            $object->setJit($data['jit']);
            unset($data['jit']);
        }
        if (\array_key_exists('log_autovacuum_min_duration', $data)) {
            $object->setLogAutovacuumMinDuration($data['log_autovacuum_min_duration']);
            unset($data['log_autovacuum_min_duration']);
        }
        if (\array_key_exists('log_error_verbosity', $data)) {
            $object->setLogErrorVerbosity($data['log_error_verbosity']);
            unset($data['log_error_verbosity']);
        }
        if (\array_key_exists('log_line_prefix', $data)) {
            $object->setLogLinePrefix($data['log_line_prefix']);
            unset($data['log_line_prefix']);
        }
        if (\array_key_exists('log_min_duration_statement', $data)) {
            $object->setLogMinDurationStatement($data['log_min_duration_statement']);
            unset($data['log_min_duration_statement']);
        }
        if (\array_key_exists('max_files_per_process', $data)) {
            $object->setMaxFilesPerProcess($data['max_files_per_process']);
            unset($data['max_files_per_process']);
        }
        if (\array_key_exists('max_prepared_transactions', $data)) {
            $object->setMaxPreparedTransactions($data['max_prepared_transactions']);
            unset($data['max_prepared_transactions']);
        }
        if (\array_key_exists('max_pred_locks_per_transaction', $data)) {
            $object->setMaxPredLocksPerTransaction($data['max_pred_locks_per_transaction']);
            unset($data['max_pred_locks_per_transaction']);
        }
        if (\array_key_exists('max_locks_per_transaction', $data)) {
            $object->setMaxLocksPerTransaction($data['max_locks_per_transaction']);
            unset($data['max_locks_per_transaction']);
        }
        if (\array_key_exists('max_stack_depth', $data)) {
            $object->setMaxStackDepth($data['max_stack_depth']);
            unset($data['max_stack_depth']);
        }
        if (\array_key_exists('max_standby_archive_delay', $data)) {
            $object->setMaxStandbyArchiveDelay($data['max_standby_archive_delay']);
            unset($data['max_standby_archive_delay']);
        }
        if (\array_key_exists('max_standby_streaming_delay', $data)) {
            $object->setMaxStandbyStreamingDelay($data['max_standby_streaming_delay']);
            unset($data['max_standby_streaming_delay']);
        }
        if (\array_key_exists('max_replication_slots', $data)) {
            $object->setMaxReplicationSlots($data['max_replication_slots']);
            unset($data['max_replication_slots']);
        }
        if (\array_key_exists('max_logical_replication_workers', $data)) {
            $object->setMaxLogicalReplicationWorkers($data['max_logical_replication_workers']);
            unset($data['max_logical_replication_workers']);
        }
        if (\array_key_exists('max_parallel_workers', $data)) {
            $object->setMaxParallelWorkers($data['max_parallel_workers']);
            unset($data['max_parallel_workers']);
        }
        if (\array_key_exists('max_parallel_workers_per_gather', $data)) {
            $object->setMaxParallelWorkersPerGather($data['max_parallel_workers_per_gather']);
            unset($data['max_parallel_workers_per_gather']);
        }
        if (\array_key_exists('max_worker_processes', $data)) {
            $object->setMaxWorkerProcesses($data['max_worker_processes']);
            unset($data['max_worker_processes']);
        }
        if (\array_key_exists('pg_partman_bgw.role', $data)) {
            $object->setPgPartmanBgwRole($data['pg_partman_bgw.role']);
            unset($data['pg_partman_bgw.role']);
        }
        if (\array_key_exists('pg_partman_bgw.interval', $data)) {
            $object->setPgPartmanBgwInterval($data['pg_partman_bgw.interval']);
            unset($data['pg_partman_bgw.interval']);
        }
        if (\array_key_exists('pg_stat_statements.track', $data)) {
            $object->setPgStatStatementsTrack($data['pg_stat_statements.track']);
            unset($data['pg_stat_statements.track']);
        }
        if (\array_key_exists('temp_file_limit', $data)) {
            $object->setTempFileLimit($data['temp_file_limit']);
            unset($data['temp_file_limit']);
        }
        if (\array_key_exists('timezone', $data)) {
            $object->setTimezone($data['timezone']);
            unset($data['timezone']);
        }
        if (\array_key_exists('track_activity_query_size', $data)) {
            $object->setTrackActivityQuerySize($data['track_activity_query_size']);
            unset($data['track_activity_query_size']);
        }
        if (\array_key_exists('track_commit_timestamp', $data)) {
            $object->setTrackCommitTimestamp($data['track_commit_timestamp']);
            unset($data['track_commit_timestamp']);
        }
        if (\array_key_exists('track_functions', $data)) {
            $object->setTrackFunctions($data['track_functions']);
            unset($data['track_functions']);
        }
        if (\array_key_exists('track_io_timing', $data)) {
            $object->setTrackIoTiming($data['track_io_timing']);
            unset($data['track_io_timing']);
        }
        if (\array_key_exists('max_wal_senders', $data)) {
            $object->setMaxWalSenders($data['max_wal_senders']);
            unset($data['max_wal_senders']);
        }
        if (\array_key_exists('wal_sender_timeout', $data)) {
            $object->setWalSenderTimeout($data['wal_sender_timeout']);
            unset($data['wal_sender_timeout']);
        }
        if (\array_key_exists('wal_writer_delay', $data)) {
            $object->setWalWriterDelay($data['wal_writer_delay']);
            unset($data['wal_writer_delay']);
        }
        if (\array_key_exists('shared_buffers_percentage', $data)) {
            $object->setSharedBuffersPercentage($data['shared_buffers_percentage']);
            unset($data['shared_buffers_percentage']);
        }
        if (\array_key_exists('pgbouncer', $data)) {
            $object->setPgbouncer($this->denormalizer->denormalize($data['pgbouncer'], \Jane\Generated\DigitalOcean\Model\PgbouncerAdvancedConfig::class, 'json', $context));
            unset($data['pgbouncer']);
        }
        if (\array_key_exists('work_mem', $data)) {
            $object->setWorkMem($data['work_mem']);
            unset($data['work_mem']);
        }
        if (\array_key_exists('timescaledb', $data)) {
            $object->setTimescaledb($this->denormalizer->denormalize($data['timescaledb'], \Jane\Generated\DigitalOcean\Model\TimescaledbAdvancedConfig::class, 'json', $context));
            unset($data['timescaledb']);
        }
        if (\array_key_exists('synchronous_replication', $data)) {
            $object->setSynchronousReplication($data['synchronous_replication']);
            unset($data['synchronous_replication']);
        }
        if (\array_key_exists('stat_monitor_enable', $data)) {
            $object->setStatMonitorEnable($data['stat_monitor_enable']);
            unset($data['stat_monitor_enable']);
        }
        if (\array_key_exists('max_failover_replication_time_lag', $data)) {
            $object->setMaxFailoverReplicationTimeLag($data['max_failover_replication_time_lag']);
            unset($data['max_failover_replication_time_lag']);
        }
        if (\array_key_exists('max_connections', $data)) {
            $object->setMaxConnections($data['max_connections']);
            unset($data['max_connections']);
        }
        if (\array_key_exists('max_slot_wal_keep_size', $data)) {
            $object->setMaxSlotWalKeepSize($data['max_slot_wal_keep_size']);
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
        if ($data->isInitialized('autovacuumFreezeMaxAge') && null !== $data->getAutovacuumFreezeMaxAge()) {
            $dataArray['autovacuum_freeze_max_age'] = $data->getAutovacuumFreezeMaxAge();
        }
        if ($data->isInitialized('autovacuumMaxWorkers') && null !== $data->getAutovacuumMaxWorkers()) {
            $dataArray['autovacuum_max_workers'] = $data->getAutovacuumMaxWorkers();
        }
        if ($data->isInitialized('autovacuumNaptime') && null !== $data->getAutovacuumNaptime()) {
            $dataArray['autovacuum_naptime'] = $data->getAutovacuumNaptime();
        }
        if ($data->isInitialized('autovacuumVacuumThreshold') && null !== $data->getAutovacuumVacuumThreshold()) {
            $dataArray['autovacuum_vacuum_threshold'] = $data->getAutovacuumVacuumThreshold();
        }
        if ($data->isInitialized('autovacuumAnalyzeThreshold') && null !== $data->getAutovacuumAnalyzeThreshold()) {
            $dataArray['autovacuum_analyze_threshold'] = $data->getAutovacuumAnalyzeThreshold();
        }
        if ($data->isInitialized('autovacuumVacuumScaleFactor') && null !== $data->getAutovacuumVacuumScaleFactor()) {
            $dataArray['autovacuum_vacuum_scale_factor'] = $data->getAutovacuumVacuumScaleFactor();
        }
        if ($data->isInitialized('autovacuumAnalyzeScaleFactor') && null !== $data->getAutovacuumAnalyzeScaleFactor()) {
            $dataArray['autovacuum_analyze_scale_factor'] = $data->getAutovacuumAnalyzeScaleFactor();
        }
        if ($data->isInitialized('autovacuumVacuumCostDelay') && null !== $data->getAutovacuumVacuumCostDelay()) {
            $dataArray['autovacuum_vacuum_cost_delay'] = $data->getAutovacuumVacuumCostDelay();
        }
        if ($data->isInitialized('autovacuumVacuumCostLimit') && null !== $data->getAutovacuumVacuumCostLimit()) {
            $dataArray['autovacuum_vacuum_cost_limit'] = $data->getAutovacuumVacuumCostLimit();
        }
        if ($data->isInitialized('backupHour') && null !== $data->getBackupHour()) {
            $dataArray['backup_hour'] = $data->getBackupHour();
        }
        if ($data->isInitialized('backupMinute') && null !== $data->getBackupMinute()) {
            $dataArray['backup_minute'] = $data->getBackupMinute();
        }
        if ($data->isInitialized('bgwriterDelay') && null !== $data->getBgwriterDelay()) {
            $dataArray['bgwriter_delay'] = $data->getBgwriterDelay();
        }
        if ($data->isInitialized('bgwriterFlushAfter') && null !== $data->getBgwriterFlushAfter()) {
            $dataArray['bgwriter_flush_after'] = $data->getBgwriterFlushAfter();
        }
        if ($data->isInitialized('bgwriterLruMaxpages') && null !== $data->getBgwriterLruMaxpages()) {
            $dataArray['bgwriter_lru_maxpages'] = $data->getBgwriterLruMaxpages();
        }
        if ($data->isInitialized('bgwriterLruMultiplier') && null !== $data->getBgwriterLruMultiplier()) {
            $dataArray['bgwriter_lru_multiplier'] = $data->getBgwriterLruMultiplier();
        }
        if ($data->isInitialized('deadlockTimeout') && null !== $data->getDeadlockTimeout()) {
            $dataArray['deadlock_timeout'] = $data->getDeadlockTimeout();
        }
        if ($data->isInitialized('defaultToastCompression') && null !== $data->getDefaultToastCompression()) {
            $dataArray['default_toast_compression'] = $data->getDefaultToastCompression();
        }
        if ($data->isInitialized('idleInTransactionSessionTimeout') && null !== $data->getIdleInTransactionSessionTimeout()) {
            $dataArray['idle_in_transaction_session_timeout'] = $data->getIdleInTransactionSessionTimeout();
        }
        if ($data->isInitialized('jit') && null !== $data->getJit()) {
            $dataArray['jit'] = $data->getJit();
        }
        if ($data->isInitialized('logAutovacuumMinDuration') && null !== $data->getLogAutovacuumMinDuration()) {
            $dataArray['log_autovacuum_min_duration'] = $data->getLogAutovacuumMinDuration();
        }
        if ($data->isInitialized('logErrorVerbosity') && null !== $data->getLogErrorVerbosity()) {
            $dataArray['log_error_verbosity'] = $data->getLogErrorVerbosity();
        }
        if ($data->isInitialized('logLinePrefix') && null !== $data->getLogLinePrefix()) {
            $dataArray['log_line_prefix'] = $data->getLogLinePrefix();
        }
        if ($data->isInitialized('logMinDurationStatement') && null !== $data->getLogMinDurationStatement()) {
            $dataArray['log_min_duration_statement'] = $data->getLogMinDurationStatement();
        }
        if ($data->isInitialized('maxFilesPerProcess') && null !== $data->getMaxFilesPerProcess()) {
            $dataArray['max_files_per_process'] = $data->getMaxFilesPerProcess();
        }
        if ($data->isInitialized('maxPreparedTransactions') && null !== $data->getMaxPreparedTransactions()) {
            $dataArray['max_prepared_transactions'] = $data->getMaxPreparedTransactions();
        }
        if ($data->isInitialized('maxPredLocksPerTransaction') && null !== $data->getMaxPredLocksPerTransaction()) {
            $dataArray['max_pred_locks_per_transaction'] = $data->getMaxPredLocksPerTransaction();
        }
        if ($data->isInitialized('maxLocksPerTransaction') && null !== $data->getMaxLocksPerTransaction()) {
            $dataArray['max_locks_per_transaction'] = $data->getMaxLocksPerTransaction();
        }
        if ($data->isInitialized('maxStackDepth') && null !== $data->getMaxStackDepth()) {
            $dataArray['max_stack_depth'] = $data->getMaxStackDepth();
        }
        if ($data->isInitialized('maxStandbyArchiveDelay') && null !== $data->getMaxStandbyArchiveDelay()) {
            $dataArray['max_standby_archive_delay'] = $data->getMaxStandbyArchiveDelay();
        }
        if ($data->isInitialized('maxStandbyStreamingDelay') && null !== $data->getMaxStandbyStreamingDelay()) {
            $dataArray['max_standby_streaming_delay'] = $data->getMaxStandbyStreamingDelay();
        }
        if ($data->isInitialized('maxReplicationSlots') && null !== $data->getMaxReplicationSlots()) {
            $dataArray['max_replication_slots'] = $data->getMaxReplicationSlots();
        }
        if ($data->isInitialized('maxLogicalReplicationWorkers') && null !== $data->getMaxLogicalReplicationWorkers()) {
            $dataArray['max_logical_replication_workers'] = $data->getMaxLogicalReplicationWorkers();
        }
        if ($data->isInitialized('maxParallelWorkers') && null !== $data->getMaxParallelWorkers()) {
            $dataArray['max_parallel_workers'] = $data->getMaxParallelWorkers();
        }
        if ($data->isInitialized('maxParallelWorkersPerGather') && null !== $data->getMaxParallelWorkersPerGather()) {
            $dataArray['max_parallel_workers_per_gather'] = $data->getMaxParallelWorkersPerGather();
        }
        if ($data->isInitialized('maxWorkerProcesses') && null !== $data->getMaxWorkerProcesses()) {
            $dataArray['max_worker_processes'] = $data->getMaxWorkerProcesses();
        }
        if ($data->isInitialized('pgPartmanBgwRole') && null !== $data->getPgPartmanBgwRole()) {
            $dataArray['pg_partman_bgw.role'] = $data->getPgPartmanBgwRole();
        }
        if ($data->isInitialized('pgPartmanBgwInterval') && null !== $data->getPgPartmanBgwInterval()) {
            $dataArray['pg_partman_bgw.interval'] = $data->getPgPartmanBgwInterval();
        }
        if ($data->isInitialized('pgStatStatementsTrack') && null !== $data->getPgStatStatementsTrack()) {
            $dataArray['pg_stat_statements.track'] = $data->getPgStatStatementsTrack();
        }
        if ($data->isInitialized('tempFileLimit') && null !== $data->getTempFileLimit()) {
            $dataArray['temp_file_limit'] = $data->getTempFileLimit();
        }
        if ($data->isInitialized('timezone') && null !== $data->getTimezone()) {
            $dataArray['timezone'] = $data->getTimezone();
        }
        if ($data->isInitialized('trackActivityQuerySize') && null !== $data->getTrackActivityQuerySize()) {
            $dataArray['track_activity_query_size'] = $data->getTrackActivityQuerySize();
        }
        if ($data->isInitialized('trackCommitTimestamp') && null !== $data->getTrackCommitTimestamp()) {
            $dataArray['track_commit_timestamp'] = $data->getTrackCommitTimestamp();
        }
        if ($data->isInitialized('trackFunctions') && null !== $data->getTrackFunctions()) {
            $dataArray['track_functions'] = $data->getTrackFunctions();
        }
        if ($data->isInitialized('trackIoTiming') && null !== $data->getTrackIoTiming()) {
            $dataArray['track_io_timing'] = $data->getTrackIoTiming();
        }
        if ($data->isInitialized('maxWalSenders') && null !== $data->getMaxWalSenders()) {
            $dataArray['max_wal_senders'] = $data->getMaxWalSenders();
        }
        if ($data->isInitialized('walSenderTimeout') && null !== $data->getWalSenderTimeout()) {
            $dataArray['wal_sender_timeout'] = $data->getWalSenderTimeout();
        }
        if ($data->isInitialized('walWriterDelay') && null !== $data->getWalWriterDelay()) {
            $dataArray['wal_writer_delay'] = $data->getWalWriterDelay();
        }
        if ($data->isInitialized('sharedBuffersPercentage') && null !== $data->getSharedBuffersPercentage()) {
            $dataArray['shared_buffers_percentage'] = $data->getSharedBuffersPercentage();
        }
        if ($data->isInitialized('pgbouncer') && null !== $data->getPgbouncer()) {
            $dataArray['pgbouncer'] = $this->normalizer->normalize($data->getPgbouncer(), 'json', $context);
        }
        if ($data->isInitialized('workMem') && null !== $data->getWorkMem()) {
            $dataArray['work_mem'] = $data->getWorkMem();
        }
        if ($data->isInitialized('timescaledb') && null !== $data->getTimescaledb()) {
            $dataArray['timescaledb'] = $this->normalizer->normalize($data->getTimescaledb(), 'json', $context);
        }
        if ($data->isInitialized('synchronousReplication') && null !== $data->getSynchronousReplication()) {
            $dataArray['synchronous_replication'] = $data->getSynchronousReplication();
        }
        if ($data->isInitialized('statMonitorEnable') && null !== $data->getStatMonitorEnable()) {
            $dataArray['stat_monitor_enable'] = $data->getStatMonitorEnable();
        }
        if ($data->isInitialized('maxFailoverReplicationTimeLag') && null !== $data->getMaxFailoverReplicationTimeLag()) {
            $dataArray['max_failover_replication_time_lag'] = $data->getMaxFailoverReplicationTimeLag();
        }
        if ($data->isInitialized('maxConnections') && null !== $data->getMaxConnections()) {
            $dataArray['max_connections'] = $data->getMaxConnections();
        }
        if ($data->isInitialized('maxSlotWalKeepSize') && null !== $data->getMaxSlotWalKeepSize()) {
            $dataArray['max_slot_wal_keep_size'] = $data->getMaxSlotWalKeepSize();
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
        return [\Jane\Generated\DigitalOcean\Model\PostgresAdvancedConfig::class => false];
    }
}