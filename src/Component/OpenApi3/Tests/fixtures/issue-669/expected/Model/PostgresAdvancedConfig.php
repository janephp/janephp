<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class PostgresAdvancedConfig implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * Specifies the maximum age (in transactions) that a table's pg_class.relfrozenxid field can attain before a VACUUM operation is forced to prevent transaction ID wraparound within the table. Note that the system will launch autovacuum processes to prevent wraparound even when autovacuum is otherwise disabled. This parameter will cause the server to be restarted.
     *
     * @var int
     */
    public int $autovacuumFreezeMaxAge;
    /**
     * Specifies the maximum number of autovacuum processes (other than the autovacuum launcher) that may be running at any one time. The default is three. This parameter can only be set at server start.
     *
     * @var int
     */
    public int $autovacuumMaxWorkers;
    /**
     * Specifies the minimum delay, in seconds, between autovacuum runs on any given database. The default is one minute.
     *
     * @var int
     */
    public int $autovacuumNaptime;
    /**
     * Specifies the minimum number of updated or deleted tuples needed to trigger a VACUUM in any one table. The default is 50 tuples.
     *
     * @var int
     */
    public int $autovacuumVacuumThreshold;
    /**
     * Specifies the minimum number of inserted, updated, or deleted tuples needed to trigger an ANALYZE in any one table. The default is 50 tuples.
     *
     * @var int
     */
    public int $autovacuumAnalyzeThreshold;
    /**
     * Specifies a fraction, in a decimal value, of the table size to add to autovacuum_vacuum_threshold when deciding whether to trigger a VACUUM. The default is 0.2 (20% of table size).
     *
     * @var float
     */
    public float $autovacuumVacuumScaleFactor;
    /**
     * Specifies a fraction, in a decimal value, of the table size to add to autovacuum_analyze_threshold when deciding whether to trigger an ANALYZE. The default is 0.2 (20% of table size).
     *
     * @var float
     */
    public float $autovacuumAnalyzeScaleFactor;
    /**
     * Specifies the cost delay value, in milliseconds, that will be used in automatic VACUUM operations. If -1, uses the regular vacuum_cost_delay value, which is 20 milliseconds.
     *
     * @var int
     */
    public int $autovacuumVacuumCostDelay;
    /**
     * Specifies the cost limit value that will be used in automatic VACUUM operations. If -1 is specified (which is the default), the regular vacuum_cost_limit value will be used.
     *
     * @var int
     */
    public int $autovacuumVacuumCostLimit;
    /**
     * The hour of day (in UTC) when backup for the service starts. New backup only starts if previous backup has already completed.
     *
     * @var int
     */
    public int $backupHour;
    /**
     * The minute of the backup hour when backup for the service starts. New backup is only started if previous backup has already completed.
     *
     * @var int
     */
    public int $backupMinute;
    /**
     * Specifies the delay, in milliseconds, between activity rounds for the background writer. Default is 200 ms.
     *
     * @var int
     */
    public int $bgwriterDelay;
    /**
     * The amount of kilobytes that need to be written by the background writer before attempting to force the OS to issue these writes to underlying storage. Specified in kilobytes, default is 512.  Setting of 0 disables forced writeback.
     *
     * @var int
     */
    public int $bgwriterFlushAfter;
    /**
     * The maximum number of buffers that the background writer can write. Setting this to zero disables background writing. Default is 100.
     *
     * @var int
     */
    public int $bgwriterLruMaxpages;
    /**
     * The average recent need for new buffers is multiplied by bgwriter_lru_multiplier to arrive at an estimate of the number that will be needed during the next round, (up to bgwriter_lru_maxpages). 1.0 represents a “just in time” policy of writing exactly the number of buffers predicted to be needed. Larger values provide some cushion against spikes in demand, while smaller values intentionally leave writes to be done by server processes. The default is 2.0.
     *
     * @var float
     */
    public float $bgwriterLruMultiplier;
    /**
     * The amount of time, in milliseconds, to wait on a lock before checking to see if there is a deadlock condition.
     *
     * @var int
     */
    public int $deadlockTimeout;
    /**
     * Specifies the default TOAST compression method for values of compressible columns (the default is lz4).
     *
     * @var string
     */
    public string $defaultToastCompression;
    /**
     * Time out sessions with open transactions after this number of milliseconds
     *
     * @var int
     */
    public int $idleInTransactionSessionTimeout;
    /**
     * Activates, in a boolean, the system-wide use of Just-in-Time Compilation (JIT).
     *
     * @var bool
     */
    public bool $jit;
    /**
     * Causes each action executed by autovacuum to be logged if it ran for at least the specified number of milliseconds. Setting this to zero logs all autovacuum actions. Minus-one (the default) disables logging autovacuum actions.
     *
     * @var int
     */
    public int $logAutovacuumMinDuration;
    /**
     * Controls the amount of detail written in the server log for each message that is logged.
     *
     * @var string
     */
    public string $logErrorVerbosity;
    /**
     * Selects one of the available log-formats. These can support popular log analyzers like pgbadger, pganalyze, etc.
     *
     * @var string
     */
    public string $logLinePrefix;
    /**
     * Log statements that take more than this number of milliseconds to run. If -1, disables.
     *
     * @var int
     */
    public int $logMinDurationStatement;
    /**
     * PostgreSQL maximum number of files that can be open per process.
     *
     * @var int
     */
    public int $maxFilesPerProcess;
    /**
     * PostgreSQL maximum prepared transactions. Once increased, this parameter cannot be lowered from its set value.
     *
     * @var int
     */
    public int $maxPreparedTransactions;
    /**
     * PostgreSQL maximum predicate locks per transaction.
     *
     * @var int
     */
    public int $maxPredLocksPerTransaction;
    /**
     * PostgreSQL maximum locks per transaction. Once increased, this parameter cannot be lowered from its set value.
     *
     * @var int
     */
    public int $maxLocksPerTransaction;
    /**
     * Maximum depth of the stack in bytes.
     *
     * @var int
     */
    public int $maxStackDepth;
    /**
     * Max standby archive delay in milliseconds.
     *
     * @var int
     */
    public int $maxStandbyArchiveDelay;
    /**
     * Max standby streaming delay in milliseconds.
     *
     * @var int
     */
    public int $maxStandbyStreamingDelay;
    /**
     * PostgreSQL maximum replication slots.
     *
     * @var int
     */
    public int $maxReplicationSlots;
    /**
     * PostgreSQL maximum logical replication workers (taken from the pool of max_parallel_workers).
     *
     * @var int
     */
    public int $maxLogicalReplicationWorkers;
    /**
     * Sets the maximum number of workers that the system can support for parallel queries.
     *
     * @var int
     */
    public int $maxParallelWorkers;
    /**
     * Sets the maximum number of workers that can be started by a single Gather or Gather Merge node.
     *
     * @var int
     */
    public int $maxParallelWorkersPerGather;
    /**
     * Sets the maximum number of background processes that the system can support. Once increased, this parameter cannot be lowered from its set value.
     *
     * @var int
     */
    public int $maxWorkerProcesses;
    /**
     * Controls which role to use for pg_partman's scheduled background tasks. Must consist of alpha-numeric characters, dots, underscores, or dashes. May not start with dash or dot. Maximum of 64 characters.
     *
     * @var string
     */
    public string $pgPartmanBgwRole;
    /**
     * Sets the time interval to run pg_partman's scheduled tasks.
     *
     * @var int
     */
    public int $pgPartmanBgwInterval;
    /**
     * Controls which statements are counted. Specify 'top' to track top-level statements (those issued directly by clients), 'all' to also track nested statements (such as statements invoked within functions), or 'none' to disable statement statistics collection. The default value is top.
     *
     * @var string
     */
    public string $pgStatStatementsTrack;
    /**
     * PostgreSQL temporary file limit in KiB. If -1, sets to unlimited.
     *
     * @var int
     */
    public int $tempFileLimit;
    /**
     * PostgreSQL service timezone
     *
     * @var string
     */
    public string $timezone;
    /**
     * Specifies the number of bytes reserved to track the currently executing command for each active session.
     *
     * @var int
     */
    public int $trackActivityQuerySize;
    /**
     * Record commit time of transactions.
     *
     * @var string
     */
    public string $trackCommitTimestamp;
    /**
     * Enables tracking of function call counts and time used.
     *
     * @var string
     */
    public string $trackFunctions;
    /**
     * Enables timing of database I/O calls. This parameter is off by default, because it will repeatedly query the operating system for the current time, which may cause significant overhead on some platforms.
     *
     * @var string
     */
    public string $trackIoTiming;
    /**
     * PostgreSQL maximum WAL senders. Once increased, this parameter cannot be lowered from its set value.
     *
     * @var int
     */
    public int $maxWalSenders;
    /**
     * Terminate replication connections that are inactive for longer than this amount of time, in milliseconds. Setting this value to zero disables the timeout. Must be either 0 or between 5000 and 10800000.
     *
     * @var int
     */
    public int $walSenderTimeout;
    /**
     * WAL flush interval in milliseconds. Note that setting this value to lower than the default 200ms may negatively impact performance
     *
     * @var int
     */
    public int $walWriterDelay;
    /**
     * Percentage of total RAM that the database server uses for shared memory buffers.  Valid range is 20-60 (float), which corresponds to 20% - 60%.  This setting adjusts the shared_buffers configuration value.
     *
     * @var float
     */
    public float $sharedBuffersPercentage;
    /**
     * PGBouncer connection pooling settings
     *
     * @var PgbouncerAdvancedConfig
     */
    public PgbouncerAdvancedConfig $pgbouncer;
    /**
     * The maximum amount of memory, in MB, used by a query operation (such as a sort or hash table) before writing to temporary disk files. Default is 1MB + 0.075% of total RAM (up to 32MB).
     *
     * @var int
     */
    public int $workMem;
    /**
     * TimescaleDB extension configuration values
     *
     * @var TimescaledbAdvancedConfig
     */
    public TimescaledbAdvancedConfig $timescaledb;
    /**
     * Synchronous replication type. Note that the service plan also needs to support synchronous replication.
     *
     * @var string
     */
    public string $synchronousReplication;
    /**
     * Enable the pg_stat_monitor extension. <b>Enabling this extension will cause the cluster to be restarted.</b> When this extension is enabled, pg_stat_statements results for utility commands are unreliable.
     *
     * @var bool
     */
    public bool $statMonitorEnable;
    /**
     * Number of seconds of master unavailability before triggering database failover to standby. The default value is 60.
     *
     * @var int
     */
    public int $maxFailoverReplicationTimeLag;
    /**
     * Sets the PostgreSQL maximum number of concurrent connections to the database server. This is a limited-release parameter. Contact your account team to confirm your eligibility. You cannot decrease this parameter value when set. For services with a read replica, first increase the read replica's value. After the change is applied to the replica, you can increase the primary service's value. Changing this parameter causes a service restart.
     *
     * @var int
     */
    public int $maxConnections;
    /**
     * PostgreSQL maximum WAL size (MB) reserved for replication slots. If -1 is specified, replication slots may retain an unlimited amount of WAL files. The default is -1 (upstream default). wal_keep_size minimum WAL size setting takes precedence over this.
     *
     * @var int
     */
    public int $maxSlotWalKeepSize;
    public function definedProperties(): array
    {
        return ['autovacuumFreezeMaxAge' => 'autovacuum_freeze_max_age', 'autovacuumMaxWorkers' => 'autovacuum_max_workers', 'autovacuumNaptime' => 'autovacuum_naptime', 'autovacuumVacuumThreshold' => 'autovacuum_vacuum_threshold', 'autovacuumAnalyzeThreshold' => 'autovacuum_analyze_threshold', 'autovacuumVacuumScaleFactor' => 'autovacuum_vacuum_scale_factor', 'autovacuumAnalyzeScaleFactor' => 'autovacuum_analyze_scale_factor', 'autovacuumVacuumCostDelay' => 'autovacuum_vacuum_cost_delay', 'autovacuumVacuumCostLimit' => 'autovacuum_vacuum_cost_limit', 'backupHour' => 'backup_hour', 'backupMinute' => 'backup_minute', 'bgwriterDelay' => 'bgwriter_delay', 'bgwriterFlushAfter' => 'bgwriter_flush_after', 'bgwriterLruMaxpages' => 'bgwriter_lru_maxpages', 'bgwriterLruMultiplier' => 'bgwriter_lru_multiplier', 'deadlockTimeout' => 'deadlock_timeout', 'defaultToastCompression' => 'default_toast_compression', 'idleInTransactionSessionTimeout' => 'idle_in_transaction_session_timeout', 'jit' => 'jit', 'logAutovacuumMinDuration' => 'log_autovacuum_min_duration', 'logErrorVerbosity' => 'log_error_verbosity', 'logLinePrefix' => 'log_line_prefix', 'logMinDurationStatement' => 'log_min_duration_statement', 'maxFilesPerProcess' => 'max_files_per_process', 'maxPreparedTransactions' => 'max_prepared_transactions', 'maxPredLocksPerTransaction' => 'max_pred_locks_per_transaction', 'maxLocksPerTransaction' => 'max_locks_per_transaction', 'maxStackDepth' => 'max_stack_depth', 'maxStandbyArchiveDelay' => 'max_standby_archive_delay', 'maxStandbyStreamingDelay' => 'max_standby_streaming_delay', 'maxReplicationSlots' => 'max_replication_slots', 'maxLogicalReplicationWorkers' => 'max_logical_replication_workers', 'maxParallelWorkers' => 'max_parallel_workers', 'maxParallelWorkersPerGather' => 'max_parallel_workers_per_gather', 'maxWorkerProcesses' => 'max_worker_processes', 'pgPartmanBgwRole' => 'pg_partman_bgw.role', 'pgPartmanBgwInterval' => 'pg_partman_bgw.interval', 'pgStatStatementsTrack' => 'pg_stat_statements.track', 'tempFileLimit' => 'temp_file_limit', 'timezone' => 'timezone', 'trackActivityQuerySize' => 'track_activity_query_size', 'trackCommitTimestamp' => 'track_commit_timestamp', 'trackFunctions' => 'track_functions', 'trackIoTiming' => 'track_io_timing', 'maxWalSenders' => 'max_wal_senders', 'walSenderTimeout' => 'wal_sender_timeout', 'walWriterDelay' => 'wal_writer_delay', 'sharedBuffersPercentage' => 'shared_buffers_percentage', 'pgbouncer' => 'pgbouncer', 'workMem' => 'work_mem', 'timescaledb' => 'timescaledb', 'synchronousReplication' => 'synchronous_replication', 'statMonitorEnable' => 'stat_monitor_enable', 'maxFailoverReplicationTimeLag' => 'max_failover_replication_time_lag', 'maxConnections' => 'max_connections', 'maxSlotWalKeepSize' => 'max_slot_wal_keep_size'];
    }
}