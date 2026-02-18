<?php

namespace Jane\Generated\DigitalOcean\Model;

class PostgresAdvancedConfig extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * Specifies the maximum age (in transactions) that a table's pg_class.relfrozenxid field can attain before a VACUUM operation is forced to prevent transaction ID wraparound within the table. Note that the system will launch autovacuum processes to prevent wraparound even when autovacuum is otherwise disabled. This parameter will cause the server to be restarted.
     *
     * @var int
     */
    protected $autovacuumFreezeMaxAge;
    /**
     * Specifies the maximum number of autovacuum processes (other than the autovacuum launcher) that may be running at any one time. The default is three. This parameter can only be set at server start.
     *
     * @var int
     */
    protected $autovacuumMaxWorkers;
    /**
     * Specifies the minimum delay, in seconds, between autovacuum runs on any given database. The default is one minute.
     *
     * @var int
     */
    protected $autovacuumNaptime;
    /**
     * Specifies the minimum number of updated or deleted tuples needed to trigger a VACUUM in any one table. The default is 50 tuples.
     *
     * @var int
     */
    protected $autovacuumVacuumThreshold;
    /**
     * Specifies the minimum number of inserted, updated, or deleted tuples needed to trigger an ANALYZE in any one table. The default is 50 tuples.
     *
     * @var int
     */
    protected $autovacuumAnalyzeThreshold;
    /**
     * Specifies a fraction, in a decimal value, of the table size to add to autovacuum_vacuum_threshold when deciding whether to trigger a VACUUM. The default is 0.2 (20% of table size).
     *
     * @var float
     */
    protected $autovacuumVacuumScaleFactor;
    /**
     * Specifies a fraction, in a decimal value, of the table size to add to autovacuum_analyze_threshold when deciding whether to trigger an ANALYZE. The default is 0.2 (20% of table size).
     *
     * @var float
     */
    protected $autovacuumAnalyzeScaleFactor;
    /**
     * Specifies the cost delay value, in milliseconds, that will be used in automatic VACUUM operations. If -1, uses the regular vacuum_cost_delay value, which is 20 milliseconds.
     *
     * @var int
     */
    protected $autovacuumVacuumCostDelay;
    /**
     * Specifies the cost limit value that will be used in automatic VACUUM operations. If -1 is specified (which is the default), the regular vacuum_cost_limit value will be used.
     *
     * @var int
     */
    protected $autovacuumVacuumCostLimit;
    /**
     * The hour of day (in UTC) when backup for the service starts. New backup only starts if previous backup has already completed.
     *
     * @var int
     */
    protected $backupHour;
    /**
     * The minute of the backup hour when backup for the service starts. New backup is only started if previous backup has already completed.
     *
     * @var int
     */
    protected $backupMinute;
    /**
     * Specifies the delay, in milliseconds, between activity rounds for the background writer. Default is 200 ms.
     *
     * @var int
     */
    protected $bgwriterDelay;
    /**
     * The amount of kilobytes that need to be written by the background writer before attempting to force the OS to issue these writes to underlying storage. Specified in kilobytes, default is 512.  Setting of 0 disables forced writeback.
     *
     * @var int
     */
    protected $bgwriterFlushAfter;
    /**
     * The maximum number of buffers that the background writer can write. Setting this to zero disables background writing. Default is 100.
     *
     * @var int
     */
    protected $bgwriterLruMaxpages;
    /**
     * The average recent need for new buffers is multiplied by bgwriter_lru_multiplier to arrive at an estimate of the number that will be needed during the next round, (up to bgwriter_lru_maxpages). 1.0 represents a “just in time” policy of writing exactly the number of buffers predicted to be needed. Larger values provide some cushion against spikes in demand, while smaller values intentionally leave writes to be done by server processes. The default is 2.0.
     *
     * @var float
     */
    protected $bgwriterLruMultiplier;
    /**
     * The amount of time, in milliseconds, to wait on a lock before checking to see if there is a deadlock condition.
     *
     * @var int
     */
    protected $deadlockTimeout;
    /**
     * Specifies the default TOAST compression method for values of compressible columns (the default is lz4).
     *
     * @var string
     */
    protected $defaultToastCompression;
    /**
     * Time out sessions with open transactions after this number of milliseconds
     *
     * @var int
     */
    protected $idleInTransactionSessionTimeout;
    /**
     * Activates, in a boolean, the system-wide use of Just-in-Time Compilation (JIT).
     *
     * @var bool
     */
    protected $jit;
    /**
     * Causes each action executed by autovacuum to be logged if it ran for at least the specified number of milliseconds. Setting this to zero logs all autovacuum actions. Minus-one (the default) disables logging autovacuum actions.
     *
     * @var int
     */
    protected $logAutovacuumMinDuration;
    /**
     * Controls the amount of detail written in the server log for each message that is logged.
     *
     * @var string
     */
    protected $logErrorVerbosity;
    /**
     * Selects one of the available log-formats. These can support popular log analyzers like pgbadger, pganalyze, etc.
     *
     * @var string
     */
    protected $logLinePrefix;
    /**
     * Log statements that take more than this number of milliseconds to run. If -1, disables.
     *
     * @var int
     */
    protected $logMinDurationStatement;
    /**
     * PostgreSQL maximum number of files that can be open per process.
     *
     * @var int
     */
    protected $maxFilesPerProcess;
    /**
     * PostgreSQL maximum prepared transactions. Once increased, this parameter cannot be lowered from its set value.
     *
     * @var int
     */
    protected $maxPreparedTransactions;
    /**
     * PostgreSQL maximum predicate locks per transaction.
     *
     * @var int
     */
    protected $maxPredLocksPerTransaction;
    /**
     * PostgreSQL maximum locks per transaction. Once increased, this parameter cannot be lowered from its set value.
     *
     * @var int
     */
    protected $maxLocksPerTransaction;
    /**
     * Maximum depth of the stack in bytes.
     *
     * @var int
     */
    protected $maxStackDepth;
    /**
     * Max standby archive delay in milliseconds.
     *
     * @var int
     */
    protected $maxStandbyArchiveDelay;
    /**
     * Max standby streaming delay in milliseconds.
     *
     * @var int
     */
    protected $maxStandbyStreamingDelay;
    /**
     * PostgreSQL maximum replication slots.
     *
     * @var int
     */
    protected $maxReplicationSlots;
    /**
     * PostgreSQL maximum logical replication workers (taken from the pool of max_parallel_workers).
     *
     * @var int
     */
    protected $maxLogicalReplicationWorkers;
    /**
     * Sets the maximum number of workers that the system can support for parallel queries.
     *
     * @var int
     */
    protected $maxParallelWorkers;
    /**
     * Sets the maximum number of workers that can be started by a single Gather or Gather Merge node.
     *
     * @var int
     */
    protected $maxParallelWorkersPerGather;
    /**
     * Sets the maximum number of background processes that the system can support. Once increased, this parameter cannot be lowered from its set value.
     *
     * @var int
     */
    protected $maxWorkerProcesses;
    /**
     * Controls which role to use for pg_partman's scheduled background tasks. Must consist of alpha-numeric characters, dots, underscores, or dashes. May not start with dash or dot. Maximum of 64 characters.
     *
     * @var string
     */
    protected $pgPartmanBgwRole;
    /**
     * Sets the time interval to run pg_partman's scheduled tasks.
     *
     * @var int
     */
    protected $pgPartmanBgwInterval;
    /**
     * Controls which statements are counted. Specify 'top' to track top-level statements (those issued directly by clients), 'all' to also track nested statements (such as statements invoked within functions), or 'none' to disable statement statistics collection. The default value is top.
     *
     * @var string
     */
    protected $pgStatStatementsTrack;
    /**
     * PostgreSQL temporary file limit in KiB. If -1, sets to unlimited.
     *
     * @var int
     */
    protected $tempFileLimit;
    /**
     * PostgreSQL service timezone
     *
     * @var string
     */
    protected $timezone;
    /**
     * Specifies the number of bytes reserved to track the currently executing command for each active session.
     *
     * @var int
     */
    protected $trackActivityQuerySize;
    /**
     * Record commit time of transactions.
     *
     * @var string
     */
    protected $trackCommitTimestamp;
    /**
     * Enables tracking of function call counts and time used.
     *
     * @var string
     */
    protected $trackFunctions;
    /**
     * Enables timing of database I/O calls. This parameter is off by default, because it will repeatedly query the operating system for the current time, which may cause significant overhead on some platforms.
     *
     * @var string
     */
    protected $trackIoTiming;
    /**
     * PostgreSQL maximum WAL senders. Once increased, this parameter cannot be lowered from its set value.
     *
     * @var int
     */
    protected $maxWalSenders;
    /**
     * Terminate replication connections that are inactive for longer than this amount of time, in milliseconds. Setting this value to zero disables the timeout. Must be either 0 or between 5000 and 10800000.
     *
     * @var int
     */
    protected $walSenderTimeout;
    /**
     * WAL flush interval in milliseconds. Note that setting this value to lower than the default 200ms may negatively impact performance
     *
     * @var int
     */
    protected $walWriterDelay;
    /**
     * Percentage of total RAM that the database server uses for shared memory buffers.  Valid range is 20-60 (float), which corresponds to 20% - 60%.  This setting adjusts the shared_buffers configuration value.
     *
     * @var float
     */
    protected $sharedBuffersPercentage;
    /**
     * PGBouncer connection pooling settings
     *
     * @var PgbouncerAdvancedConfig
     */
    protected $pgbouncer;
    /**
     * The maximum amount of memory, in MB, used by a query operation (such as a sort or hash table) before writing to temporary disk files. Default is 1MB + 0.075% of total RAM (up to 32MB).
     *
     * @var int
     */
    protected $workMem;
    /**
     * TimescaleDB extension configuration values
     *
     * @var TimescaledbAdvancedConfig
     */
    protected $timescaledb;
    /**
     * Synchronous replication type. Note that the service plan also needs to support synchronous replication.
     *
     * @var string
     */
    protected $synchronousReplication;
    /**
     * Enable the pg_stat_monitor extension. <b>Enabling this extension will cause the cluster to be restarted.</b> When this extension is enabled, pg_stat_statements results for utility commands are unreliable.
     *
     * @var bool
     */
    protected $statMonitorEnable;
    /**
     * Number of seconds of master unavailability before triggering database failover to standby. The default value is 60.
     *
     * @var int
     */
    protected $maxFailoverReplicationTimeLag;
    /**
     * Sets the PostgreSQL maximum number of concurrent connections to the database server. This is a limited-release parameter. Contact your account team to confirm your eligibility. You cannot decrease this parameter value when set. For services with a read replica, first increase the read replica's value. After the change is applied to the replica, you can increase the primary service's value. Changing this parameter causes a service restart.
     *
     * @var int
     */
    protected $maxConnections;
    /**
     * PostgreSQL maximum WAL size (MB) reserved for replication slots. If -1 is specified, replication slots may retain an unlimited amount of WAL files. The default is -1 (upstream default). wal_keep_size minimum WAL size setting takes precedence over this.
     *
     * @var int
     */
    protected $maxSlotWalKeepSize;
    /**
     * Specifies the maximum age (in transactions) that a table's pg_class.relfrozenxid field can attain before a VACUUM operation is forced to prevent transaction ID wraparound within the table. Note that the system will launch autovacuum processes to prevent wraparound even when autovacuum is otherwise disabled. This parameter will cause the server to be restarted.
     *
     * @return int
     */
    public function getAutovacuumFreezeMaxAge(): int
    {
        return $this->autovacuumFreezeMaxAge;
    }
    /**
     * Specifies the maximum age (in transactions) that a table's pg_class.relfrozenxid field can attain before a VACUUM operation is forced to prevent transaction ID wraparound within the table. Note that the system will launch autovacuum processes to prevent wraparound even when autovacuum is otherwise disabled. This parameter will cause the server to be restarted.
     *
     * @param int $autovacuumFreezeMaxAge
     *
     * @return self
     */
    public function setAutovacuumFreezeMaxAge(int $autovacuumFreezeMaxAge): self
    {
        $this->initialized['autovacuumFreezeMaxAge'] = true;
        $this->autovacuumFreezeMaxAge = $autovacuumFreezeMaxAge;
        return $this;
    }
    /**
     * Specifies the maximum number of autovacuum processes (other than the autovacuum launcher) that may be running at any one time. The default is three. This parameter can only be set at server start.
     *
     * @return int
     */
    public function getAutovacuumMaxWorkers(): int
    {
        return $this->autovacuumMaxWorkers;
    }
    /**
     * Specifies the maximum number of autovacuum processes (other than the autovacuum launcher) that may be running at any one time. The default is three. This parameter can only be set at server start.
     *
     * @param int $autovacuumMaxWorkers
     *
     * @return self
     */
    public function setAutovacuumMaxWorkers(int $autovacuumMaxWorkers): self
    {
        $this->initialized['autovacuumMaxWorkers'] = true;
        $this->autovacuumMaxWorkers = $autovacuumMaxWorkers;
        return $this;
    }
    /**
     * Specifies the minimum delay, in seconds, between autovacuum runs on any given database. The default is one minute.
     *
     * @return int
     */
    public function getAutovacuumNaptime(): int
    {
        return $this->autovacuumNaptime;
    }
    /**
     * Specifies the minimum delay, in seconds, between autovacuum runs on any given database. The default is one minute.
     *
     * @param int $autovacuumNaptime
     *
     * @return self
     */
    public function setAutovacuumNaptime(int $autovacuumNaptime): self
    {
        $this->initialized['autovacuumNaptime'] = true;
        $this->autovacuumNaptime = $autovacuumNaptime;
        return $this;
    }
    /**
     * Specifies the minimum number of updated or deleted tuples needed to trigger a VACUUM in any one table. The default is 50 tuples.
     *
     * @return int
     */
    public function getAutovacuumVacuumThreshold(): int
    {
        return $this->autovacuumVacuumThreshold;
    }
    /**
     * Specifies the minimum number of updated or deleted tuples needed to trigger a VACUUM in any one table. The default is 50 tuples.
     *
     * @param int $autovacuumVacuumThreshold
     *
     * @return self
     */
    public function setAutovacuumVacuumThreshold(int $autovacuumVacuumThreshold): self
    {
        $this->initialized['autovacuumVacuumThreshold'] = true;
        $this->autovacuumVacuumThreshold = $autovacuumVacuumThreshold;
        return $this;
    }
    /**
     * Specifies the minimum number of inserted, updated, or deleted tuples needed to trigger an ANALYZE in any one table. The default is 50 tuples.
     *
     * @return int
     */
    public function getAutovacuumAnalyzeThreshold(): int
    {
        return $this->autovacuumAnalyzeThreshold;
    }
    /**
     * Specifies the minimum number of inserted, updated, or deleted tuples needed to trigger an ANALYZE in any one table. The default is 50 tuples.
     *
     * @param int $autovacuumAnalyzeThreshold
     *
     * @return self
     */
    public function setAutovacuumAnalyzeThreshold(int $autovacuumAnalyzeThreshold): self
    {
        $this->initialized['autovacuumAnalyzeThreshold'] = true;
        $this->autovacuumAnalyzeThreshold = $autovacuumAnalyzeThreshold;
        return $this;
    }
    /**
     * Specifies a fraction, in a decimal value, of the table size to add to autovacuum_vacuum_threshold when deciding whether to trigger a VACUUM. The default is 0.2 (20% of table size).
     *
     * @return float
     */
    public function getAutovacuumVacuumScaleFactor(): float
    {
        return $this->autovacuumVacuumScaleFactor;
    }
    /**
     * Specifies a fraction, in a decimal value, of the table size to add to autovacuum_vacuum_threshold when deciding whether to trigger a VACUUM. The default is 0.2 (20% of table size).
     *
     * @param float $autovacuumVacuumScaleFactor
     *
     * @return self
     */
    public function setAutovacuumVacuumScaleFactor(float $autovacuumVacuumScaleFactor): self
    {
        $this->initialized['autovacuumVacuumScaleFactor'] = true;
        $this->autovacuumVacuumScaleFactor = $autovacuumVacuumScaleFactor;
        return $this;
    }
    /**
     * Specifies a fraction, in a decimal value, of the table size to add to autovacuum_analyze_threshold when deciding whether to trigger an ANALYZE. The default is 0.2 (20% of table size).
     *
     * @return float
     */
    public function getAutovacuumAnalyzeScaleFactor(): float
    {
        return $this->autovacuumAnalyzeScaleFactor;
    }
    /**
     * Specifies a fraction, in a decimal value, of the table size to add to autovacuum_analyze_threshold when deciding whether to trigger an ANALYZE. The default is 0.2 (20% of table size).
     *
     * @param float $autovacuumAnalyzeScaleFactor
     *
     * @return self
     */
    public function setAutovacuumAnalyzeScaleFactor(float $autovacuumAnalyzeScaleFactor): self
    {
        $this->initialized['autovacuumAnalyzeScaleFactor'] = true;
        $this->autovacuumAnalyzeScaleFactor = $autovacuumAnalyzeScaleFactor;
        return $this;
    }
    /**
     * Specifies the cost delay value, in milliseconds, that will be used in automatic VACUUM operations. If -1, uses the regular vacuum_cost_delay value, which is 20 milliseconds.
     *
     * @return int
     */
    public function getAutovacuumVacuumCostDelay(): int
    {
        return $this->autovacuumVacuumCostDelay;
    }
    /**
     * Specifies the cost delay value, in milliseconds, that will be used in automatic VACUUM operations. If -1, uses the regular vacuum_cost_delay value, which is 20 milliseconds.
     *
     * @param int $autovacuumVacuumCostDelay
     *
     * @return self
     */
    public function setAutovacuumVacuumCostDelay(int $autovacuumVacuumCostDelay): self
    {
        $this->initialized['autovacuumVacuumCostDelay'] = true;
        $this->autovacuumVacuumCostDelay = $autovacuumVacuumCostDelay;
        return $this;
    }
    /**
     * Specifies the cost limit value that will be used in automatic VACUUM operations. If -1 is specified (which is the default), the regular vacuum_cost_limit value will be used.
     *
     * @return int
     */
    public function getAutovacuumVacuumCostLimit(): int
    {
        return $this->autovacuumVacuumCostLimit;
    }
    /**
     * Specifies the cost limit value that will be used in automatic VACUUM operations. If -1 is specified (which is the default), the regular vacuum_cost_limit value will be used.
     *
     * @param int $autovacuumVacuumCostLimit
     *
     * @return self
     */
    public function setAutovacuumVacuumCostLimit(int $autovacuumVacuumCostLimit): self
    {
        $this->initialized['autovacuumVacuumCostLimit'] = true;
        $this->autovacuumVacuumCostLimit = $autovacuumVacuumCostLimit;
        return $this;
    }
    /**
     * The hour of day (in UTC) when backup for the service starts. New backup only starts if previous backup has already completed.
     *
     * @return int
     */
    public function getBackupHour(): int
    {
        return $this->backupHour;
    }
    /**
     * The hour of day (in UTC) when backup for the service starts. New backup only starts if previous backup has already completed.
     *
     * @param int $backupHour
     *
     * @return self
     */
    public function setBackupHour(int $backupHour): self
    {
        $this->initialized['backupHour'] = true;
        $this->backupHour = $backupHour;
        return $this;
    }
    /**
     * The minute of the backup hour when backup for the service starts. New backup is only started if previous backup has already completed.
     *
     * @return int
     */
    public function getBackupMinute(): int
    {
        return $this->backupMinute;
    }
    /**
     * The minute of the backup hour when backup for the service starts. New backup is only started if previous backup has already completed.
     *
     * @param int $backupMinute
     *
     * @return self
     */
    public function setBackupMinute(int $backupMinute): self
    {
        $this->initialized['backupMinute'] = true;
        $this->backupMinute = $backupMinute;
        return $this;
    }
    /**
     * Specifies the delay, in milliseconds, between activity rounds for the background writer. Default is 200 ms.
     *
     * @return int
     */
    public function getBgwriterDelay(): int
    {
        return $this->bgwriterDelay;
    }
    /**
     * Specifies the delay, in milliseconds, between activity rounds for the background writer. Default is 200 ms.
     *
     * @param int $bgwriterDelay
     *
     * @return self
     */
    public function setBgwriterDelay(int $bgwriterDelay): self
    {
        $this->initialized['bgwriterDelay'] = true;
        $this->bgwriterDelay = $bgwriterDelay;
        return $this;
    }
    /**
     * The amount of kilobytes that need to be written by the background writer before attempting to force the OS to issue these writes to underlying storage. Specified in kilobytes, default is 512.  Setting of 0 disables forced writeback.
     *
     * @return int
     */
    public function getBgwriterFlushAfter(): int
    {
        return $this->bgwriterFlushAfter;
    }
    /**
     * The amount of kilobytes that need to be written by the background writer before attempting to force the OS to issue these writes to underlying storage. Specified in kilobytes, default is 512.  Setting of 0 disables forced writeback.
     *
     * @param int $bgwriterFlushAfter
     *
     * @return self
     */
    public function setBgwriterFlushAfter(int $bgwriterFlushAfter): self
    {
        $this->initialized['bgwriterFlushAfter'] = true;
        $this->bgwriterFlushAfter = $bgwriterFlushAfter;
        return $this;
    }
    /**
     * The maximum number of buffers that the background writer can write. Setting this to zero disables background writing. Default is 100.
     *
     * @return int
     */
    public function getBgwriterLruMaxpages(): int
    {
        return $this->bgwriterLruMaxpages;
    }
    /**
     * The maximum number of buffers that the background writer can write. Setting this to zero disables background writing. Default is 100.
     *
     * @param int $bgwriterLruMaxpages
     *
     * @return self
     */
    public function setBgwriterLruMaxpages(int $bgwriterLruMaxpages): self
    {
        $this->initialized['bgwriterLruMaxpages'] = true;
        $this->bgwriterLruMaxpages = $bgwriterLruMaxpages;
        return $this;
    }
    /**
     * The average recent need for new buffers is multiplied by bgwriter_lru_multiplier to arrive at an estimate of the number that will be needed during the next round, (up to bgwriter_lru_maxpages). 1.0 represents a “just in time” policy of writing exactly the number of buffers predicted to be needed. Larger values provide some cushion against spikes in demand, while smaller values intentionally leave writes to be done by server processes. The default is 2.0.
     *
     * @return float
     */
    public function getBgwriterLruMultiplier(): float
    {
        return $this->bgwriterLruMultiplier;
    }
    /**
     * The average recent need for new buffers is multiplied by bgwriter_lru_multiplier to arrive at an estimate of the number that will be needed during the next round, (up to bgwriter_lru_maxpages). 1.0 represents a “just in time” policy of writing exactly the number of buffers predicted to be needed. Larger values provide some cushion against spikes in demand, while smaller values intentionally leave writes to be done by server processes. The default is 2.0.
     *
     * @param float $bgwriterLruMultiplier
     *
     * @return self
     */
    public function setBgwriterLruMultiplier(float $bgwriterLruMultiplier): self
    {
        $this->initialized['bgwriterLruMultiplier'] = true;
        $this->bgwriterLruMultiplier = $bgwriterLruMultiplier;
        return $this;
    }
    /**
     * The amount of time, in milliseconds, to wait on a lock before checking to see if there is a deadlock condition.
     *
     * @return int
     */
    public function getDeadlockTimeout(): int
    {
        return $this->deadlockTimeout;
    }
    /**
     * The amount of time, in milliseconds, to wait on a lock before checking to see if there is a deadlock condition.
     *
     * @param int $deadlockTimeout
     *
     * @return self
     */
    public function setDeadlockTimeout(int $deadlockTimeout): self
    {
        $this->initialized['deadlockTimeout'] = true;
        $this->deadlockTimeout = $deadlockTimeout;
        return $this;
    }
    /**
     * Specifies the default TOAST compression method for values of compressible columns (the default is lz4).
     *
     * @return string
     */
    public function getDefaultToastCompression(): string
    {
        return $this->defaultToastCompression;
    }
    /**
     * Specifies the default TOAST compression method for values of compressible columns (the default is lz4).
     *
     * @param string $defaultToastCompression
     *
     * @return self
     */
    public function setDefaultToastCompression(string $defaultToastCompression): self
    {
        $this->initialized['defaultToastCompression'] = true;
        $this->defaultToastCompression = $defaultToastCompression;
        return $this;
    }
    /**
     * Time out sessions with open transactions after this number of milliseconds
     *
     * @return int
     */
    public function getIdleInTransactionSessionTimeout(): int
    {
        return $this->idleInTransactionSessionTimeout;
    }
    /**
     * Time out sessions with open transactions after this number of milliseconds
     *
     * @param int $idleInTransactionSessionTimeout
     *
     * @return self
     */
    public function setIdleInTransactionSessionTimeout(int $idleInTransactionSessionTimeout): self
    {
        $this->initialized['idleInTransactionSessionTimeout'] = true;
        $this->idleInTransactionSessionTimeout = $idleInTransactionSessionTimeout;
        return $this;
    }
    /**
     * Activates, in a boolean, the system-wide use of Just-in-Time Compilation (JIT).
     *
     * @return bool
     */
    public function getJit(): bool
    {
        return $this->jit;
    }
    /**
     * Activates, in a boolean, the system-wide use of Just-in-Time Compilation (JIT).
     *
     * @param bool $jit
     *
     * @return self
     */
    public function setJit(bool $jit): self
    {
        $this->initialized['jit'] = true;
        $this->jit = $jit;
        return $this;
    }
    /**
     * Causes each action executed by autovacuum to be logged if it ran for at least the specified number of milliseconds. Setting this to zero logs all autovacuum actions. Minus-one (the default) disables logging autovacuum actions.
     *
     * @return int
     */
    public function getLogAutovacuumMinDuration(): int
    {
        return $this->logAutovacuumMinDuration;
    }
    /**
     * Causes each action executed by autovacuum to be logged if it ran for at least the specified number of milliseconds. Setting this to zero logs all autovacuum actions. Minus-one (the default) disables logging autovacuum actions.
     *
     * @param int $logAutovacuumMinDuration
     *
     * @return self
     */
    public function setLogAutovacuumMinDuration(int $logAutovacuumMinDuration): self
    {
        $this->initialized['logAutovacuumMinDuration'] = true;
        $this->logAutovacuumMinDuration = $logAutovacuumMinDuration;
        return $this;
    }
    /**
     * Controls the amount of detail written in the server log for each message that is logged.
     *
     * @return string
     */
    public function getLogErrorVerbosity(): string
    {
        return $this->logErrorVerbosity;
    }
    /**
     * Controls the amount of detail written in the server log for each message that is logged.
     *
     * @param string $logErrorVerbosity
     *
     * @return self
     */
    public function setLogErrorVerbosity(string $logErrorVerbosity): self
    {
        $this->initialized['logErrorVerbosity'] = true;
        $this->logErrorVerbosity = $logErrorVerbosity;
        return $this;
    }
    /**
     * Selects one of the available log-formats. These can support popular log analyzers like pgbadger, pganalyze, etc.
     *
     * @return string
     */
    public function getLogLinePrefix(): string
    {
        return $this->logLinePrefix;
    }
    /**
     * Selects one of the available log-formats. These can support popular log analyzers like pgbadger, pganalyze, etc.
     *
     * @param string $logLinePrefix
     *
     * @return self
     */
    public function setLogLinePrefix(string $logLinePrefix): self
    {
        $this->initialized['logLinePrefix'] = true;
        $this->logLinePrefix = $logLinePrefix;
        return $this;
    }
    /**
     * Log statements that take more than this number of milliseconds to run. If -1, disables.
     *
     * @return int
     */
    public function getLogMinDurationStatement(): int
    {
        return $this->logMinDurationStatement;
    }
    /**
     * Log statements that take more than this number of milliseconds to run. If -1, disables.
     *
     * @param int $logMinDurationStatement
     *
     * @return self
     */
    public function setLogMinDurationStatement(int $logMinDurationStatement): self
    {
        $this->initialized['logMinDurationStatement'] = true;
        $this->logMinDurationStatement = $logMinDurationStatement;
        return $this;
    }
    /**
     * PostgreSQL maximum number of files that can be open per process.
     *
     * @return int
     */
    public function getMaxFilesPerProcess(): int
    {
        return $this->maxFilesPerProcess;
    }
    /**
     * PostgreSQL maximum number of files that can be open per process.
     *
     * @param int $maxFilesPerProcess
     *
     * @return self
     */
    public function setMaxFilesPerProcess(int $maxFilesPerProcess): self
    {
        $this->initialized['maxFilesPerProcess'] = true;
        $this->maxFilesPerProcess = $maxFilesPerProcess;
        return $this;
    }
    /**
     * PostgreSQL maximum prepared transactions. Once increased, this parameter cannot be lowered from its set value.
     *
     * @return int
     */
    public function getMaxPreparedTransactions(): int
    {
        return $this->maxPreparedTransactions;
    }
    /**
     * PostgreSQL maximum prepared transactions. Once increased, this parameter cannot be lowered from its set value.
     *
     * @param int $maxPreparedTransactions
     *
     * @return self
     */
    public function setMaxPreparedTransactions(int $maxPreparedTransactions): self
    {
        $this->initialized['maxPreparedTransactions'] = true;
        $this->maxPreparedTransactions = $maxPreparedTransactions;
        return $this;
    }
    /**
     * PostgreSQL maximum predicate locks per transaction.
     *
     * @return int
     */
    public function getMaxPredLocksPerTransaction(): int
    {
        return $this->maxPredLocksPerTransaction;
    }
    /**
     * PostgreSQL maximum predicate locks per transaction.
     *
     * @param int $maxPredLocksPerTransaction
     *
     * @return self
     */
    public function setMaxPredLocksPerTransaction(int $maxPredLocksPerTransaction): self
    {
        $this->initialized['maxPredLocksPerTransaction'] = true;
        $this->maxPredLocksPerTransaction = $maxPredLocksPerTransaction;
        return $this;
    }
    /**
     * PostgreSQL maximum locks per transaction. Once increased, this parameter cannot be lowered from its set value.
     *
     * @return int
     */
    public function getMaxLocksPerTransaction(): int
    {
        return $this->maxLocksPerTransaction;
    }
    /**
     * PostgreSQL maximum locks per transaction. Once increased, this parameter cannot be lowered from its set value.
     *
     * @param int $maxLocksPerTransaction
     *
     * @return self
     */
    public function setMaxLocksPerTransaction(int $maxLocksPerTransaction): self
    {
        $this->initialized['maxLocksPerTransaction'] = true;
        $this->maxLocksPerTransaction = $maxLocksPerTransaction;
        return $this;
    }
    /**
     * Maximum depth of the stack in bytes.
     *
     * @return int
     */
    public function getMaxStackDepth(): int
    {
        return $this->maxStackDepth;
    }
    /**
     * Maximum depth of the stack in bytes.
     *
     * @param int $maxStackDepth
     *
     * @return self
     */
    public function setMaxStackDepth(int $maxStackDepth): self
    {
        $this->initialized['maxStackDepth'] = true;
        $this->maxStackDepth = $maxStackDepth;
        return $this;
    }
    /**
     * Max standby archive delay in milliseconds.
     *
     * @return int
     */
    public function getMaxStandbyArchiveDelay(): int
    {
        return $this->maxStandbyArchiveDelay;
    }
    /**
     * Max standby archive delay in milliseconds.
     *
     * @param int $maxStandbyArchiveDelay
     *
     * @return self
     */
    public function setMaxStandbyArchiveDelay(int $maxStandbyArchiveDelay): self
    {
        $this->initialized['maxStandbyArchiveDelay'] = true;
        $this->maxStandbyArchiveDelay = $maxStandbyArchiveDelay;
        return $this;
    }
    /**
     * Max standby streaming delay in milliseconds.
     *
     * @return int
     */
    public function getMaxStandbyStreamingDelay(): int
    {
        return $this->maxStandbyStreamingDelay;
    }
    /**
     * Max standby streaming delay in milliseconds.
     *
     * @param int $maxStandbyStreamingDelay
     *
     * @return self
     */
    public function setMaxStandbyStreamingDelay(int $maxStandbyStreamingDelay): self
    {
        $this->initialized['maxStandbyStreamingDelay'] = true;
        $this->maxStandbyStreamingDelay = $maxStandbyStreamingDelay;
        return $this;
    }
    /**
     * PostgreSQL maximum replication slots.
     *
     * @return int
     */
    public function getMaxReplicationSlots(): int
    {
        return $this->maxReplicationSlots;
    }
    /**
     * PostgreSQL maximum replication slots.
     *
     * @param int $maxReplicationSlots
     *
     * @return self
     */
    public function setMaxReplicationSlots(int $maxReplicationSlots): self
    {
        $this->initialized['maxReplicationSlots'] = true;
        $this->maxReplicationSlots = $maxReplicationSlots;
        return $this;
    }
    /**
     * PostgreSQL maximum logical replication workers (taken from the pool of max_parallel_workers).
     *
     * @return int
     */
    public function getMaxLogicalReplicationWorkers(): int
    {
        return $this->maxLogicalReplicationWorkers;
    }
    /**
     * PostgreSQL maximum logical replication workers (taken from the pool of max_parallel_workers).
     *
     * @param int $maxLogicalReplicationWorkers
     *
     * @return self
     */
    public function setMaxLogicalReplicationWorkers(int $maxLogicalReplicationWorkers): self
    {
        $this->initialized['maxLogicalReplicationWorkers'] = true;
        $this->maxLogicalReplicationWorkers = $maxLogicalReplicationWorkers;
        return $this;
    }
    /**
     * Sets the maximum number of workers that the system can support for parallel queries.
     *
     * @return int
     */
    public function getMaxParallelWorkers(): int
    {
        return $this->maxParallelWorkers;
    }
    /**
     * Sets the maximum number of workers that the system can support for parallel queries.
     *
     * @param int $maxParallelWorkers
     *
     * @return self
     */
    public function setMaxParallelWorkers(int $maxParallelWorkers): self
    {
        $this->initialized['maxParallelWorkers'] = true;
        $this->maxParallelWorkers = $maxParallelWorkers;
        return $this;
    }
    /**
     * Sets the maximum number of workers that can be started by a single Gather or Gather Merge node.
     *
     * @return int
     */
    public function getMaxParallelWorkersPerGather(): int
    {
        return $this->maxParallelWorkersPerGather;
    }
    /**
     * Sets the maximum number of workers that can be started by a single Gather or Gather Merge node.
     *
     * @param int $maxParallelWorkersPerGather
     *
     * @return self
     */
    public function setMaxParallelWorkersPerGather(int $maxParallelWorkersPerGather): self
    {
        $this->initialized['maxParallelWorkersPerGather'] = true;
        $this->maxParallelWorkersPerGather = $maxParallelWorkersPerGather;
        return $this;
    }
    /**
     * Sets the maximum number of background processes that the system can support. Once increased, this parameter cannot be lowered from its set value.
     *
     * @return int
     */
    public function getMaxWorkerProcesses(): int
    {
        return $this->maxWorkerProcesses;
    }
    /**
     * Sets the maximum number of background processes that the system can support. Once increased, this parameter cannot be lowered from its set value.
     *
     * @param int $maxWorkerProcesses
     *
     * @return self
     */
    public function setMaxWorkerProcesses(int $maxWorkerProcesses): self
    {
        $this->initialized['maxWorkerProcesses'] = true;
        $this->maxWorkerProcesses = $maxWorkerProcesses;
        return $this;
    }
    /**
     * Controls which role to use for pg_partman's scheduled background tasks. Must consist of alpha-numeric characters, dots, underscores, or dashes. May not start with dash or dot. Maximum of 64 characters.
     *
     * @return string
     */
    public function getPgPartmanBgwRole(): string
    {
        return $this->pgPartmanBgwRole;
    }
    /**
     * Controls which role to use for pg_partman's scheduled background tasks. Must consist of alpha-numeric characters, dots, underscores, or dashes. May not start with dash or dot. Maximum of 64 characters.
     *
     * @param string $pgPartmanBgwRole
     *
     * @return self
     */
    public function setPgPartmanBgwRole(string $pgPartmanBgwRole): self
    {
        $this->initialized['pgPartmanBgwRole'] = true;
        $this->pgPartmanBgwRole = $pgPartmanBgwRole;
        return $this;
    }
    /**
     * Sets the time interval to run pg_partman's scheduled tasks.
     *
     * @return int
     */
    public function getPgPartmanBgwInterval(): int
    {
        return $this->pgPartmanBgwInterval;
    }
    /**
     * Sets the time interval to run pg_partman's scheduled tasks.
     *
     * @param int $pgPartmanBgwInterval
     *
     * @return self
     */
    public function setPgPartmanBgwInterval(int $pgPartmanBgwInterval): self
    {
        $this->initialized['pgPartmanBgwInterval'] = true;
        $this->pgPartmanBgwInterval = $pgPartmanBgwInterval;
        return $this;
    }
    /**
     * Controls which statements are counted. Specify 'top' to track top-level statements (those issued directly by clients), 'all' to also track nested statements (such as statements invoked within functions), or 'none' to disable statement statistics collection. The default value is top.
     *
     * @return string
     */
    public function getPgStatStatementsTrack(): string
    {
        return $this->pgStatStatementsTrack;
    }
    /**
     * Controls which statements are counted. Specify 'top' to track top-level statements (those issued directly by clients), 'all' to also track nested statements (such as statements invoked within functions), or 'none' to disable statement statistics collection. The default value is top.
     *
     * @param string $pgStatStatementsTrack
     *
     * @return self
     */
    public function setPgStatStatementsTrack(string $pgStatStatementsTrack): self
    {
        $this->initialized['pgStatStatementsTrack'] = true;
        $this->pgStatStatementsTrack = $pgStatStatementsTrack;
        return $this;
    }
    /**
     * PostgreSQL temporary file limit in KiB. If -1, sets to unlimited.
     *
     * @return int
     */
    public function getTempFileLimit(): int
    {
        return $this->tempFileLimit;
    }
    /**
     * PostgreSQL temporary file limit in KiB. If -1, sets to unlimited.
     *
     * @param int $tempFileLimit
     *
     * @return self
     */
    public function setTempFileLimit(int $tempFileLimit): self
    {
        $this->initialized['tempFileLimit'] = true;
        $this->tempFileLimit = $tempFileLimit;
        return $this;
    }
    /**
     * PostgreSQL service timezone
     *
     * @return string
     */
    public function getTimezone(): string
    {
        return $this->timezone;
    }
    /**
     * PostgreSQL service timezone
     *
     * @param string $timezone
     *
     * @return self
     */
    public function setTimezone(string $timezone): self
    {
        $this->initialized['timezone'] = true;
        $this->timezone = $timezone;
        return $this;
    }
    /**
     * Specifies the number of bytes reserved to track the currently executing command for each active session.
     *
     * @return int
     */
    public function getTrackActivityQuerySize(): int
    {
        return $this->trackActivityQuerySize;
    }
    /**
     * Specifies the number of bytes reserved to track the currently executing command for each active session.
     *
     * @param int $trackActivityQuerySize
     *
     * @return self
     */
    public function setTrackActivityQuerySize(int $trackActivityQuerySize): self
    {
        $this->initialized['trackActivityQuerySize'] = true;
        $this->trackActivityQuerySize = $trackActivityQuerySize;
        return $this;
    }
    /**
     * Record commit time of transactions.
     *
     * @return string
     */
    public function getTrackCommitTimestamp(): string
    {
        return $this->trackCommitTimestamp;
    }
    /**
     * Record commit time of transactions.
     *
     * @param string $trackCommitTimestamp
     *
     * @return self
     */
    public function setTrackCommitTimestamp(string $trackCommitTimestamp): self
    {
        $this->initialized['trackCommitTimestamp'] = true;
        $this->trackCommitTimestamp = $trackCommitTimestamp;
        return $this;
    }
    /**
     * Enables tracking of function call counts and time used.
     *
     * @return string
     */
    public function getTrackFunctions(): string
    {
        return $this->trackFunctions;
    }
    /**
     * Enables tracking of function call counts and time used.
     *
     * @param string $trackFunctions
     *
     * @return self
     */
    public function setTrackFunctions(string $trackFunctions): self
    {
        $this->initialized['trackFunctions'] = true;
        $this->trackFunctions = $trackFunctions;
        return $this;
    }
    /**
     * Enables timing of database I/O calls. This parameter is off by default, because it will repeatedly query the operating system for the current time, which may cause significant overhead on some platforms.
     *
     * @return string
     */
    public function getTrackIoTiming(): string
    {
        return $this->trackIoTiming;
    }
    /**
     * Enables timing of database I/O calls. This parameter is off by default, because it will repeatedly query the operating system for the current time, which may cause significant overhead on some platforms.
     *
     * @param string $trackIoTiming
     *
     * @return self
     */
    public function setTrackIoTiming(string $trackIoTiming): self
    {
        $this->initialized['trackIoTiming'] = true;
        $this->trackIoTiming = $trackIoTiming;
        return $this;
    }
    /**
     * PostgreSQL maximum WAL senders. Once increased, this parameter cannot be lowered from its set value.
     *
     * @return int
     */
    public function getMaxWalSenders(): int
    {
        return $this->maxWalSenders;
    }
    /**
     * PostgreSQL maximum WAL senders. Once increased, this parameter cannot be lowered from its set value.
     *
     * @param int $maxWalSenders
     *
     * @return self
     */
    public function setMaxWalSenders(int $maxWalSenders): self
    {
        $this->initialized['maxWalSenders'] = true;
        $this->maxWalSenders = $maxWalSenders;
        return $this;
    }
    /**
     * Terminate replication connections that are inactive for longer than this amount of time, in milliseconds. Setting this value to zero disables the timeout. Must be either 0 or between 5000 and 10800000.
     *
     * @return int
     */
    public function getWalSenderTimeout(): int
    {
        return $this->walSenderTimeout;
    }
    /**
     * Terminate replication connections that are inactive for longer than this amount of time, in milliseconds. Setting this value to zero disables the timeout. Must be either 0 or between 5000 and 10800000.
     *
     * @param int $walSenderTimeout
     *
     * @return self
     */
    public function setWalSenderTimeout(int $walSenderTimeout): self
    {
        $this->initialized['walSenderTimeout'] = true;
        $this->walSenderTimeout = $walSenderTimeout;
        return $this;
    }
    /**
     * WAL flush interval in milliseconds. Note that setting this value to lower than the default 200ms may negatively impact performance
     *
     * @return int
     */
    public function getWalWriterDelay(): int
    {
        return $this->walWriterDelay;
    }
    /**
     * WAL flush interval in milliseconds. Note that setting this value to lower than the default 200ms may negatively impact performance
     *
     * @param int $walWriterDelay
     *
     * @return self
     */
    public function setWalWriterDelay(int $walWriterDelay): self
    {
        $this->initialized['walWriterDelay'] = true;
        $this->walWriterDelay = $walWriterDelay;
        return $this;
    }
    /**
     * Percentage of total RAM that the database server uses for shared memory buffers.  Valid range is 20-60 (float), which corresponds to 20% - 60%.  This setting adjusts the shared_buffers configuration value.
     *
     * @return float
     */
    public function getSharedBuffersPercentage(): float
    {
        return $this->sharedBuffersPercentage;
    }
    /**
     * Percentage of total RAM that the database server uses for shared memory buffers.  Valid range is 20-60 (float), which corresponds to 20% - 60%.  This setting adjusts the shared_buffers configuration value.
     *
     * @param float $sharedBuffersPercentage
     *
     * @return self
     */
    public function setSharedBuffersPercentage(float $sharedBuffersPercentage): self
    {
        $this->initialized['sharedBuffersPercentage'] = true;
        $this->sharedBuffersPercentage = $sharedBuffersPercentage;
        return $this;
    }
    /**
     * PGBouncer connection pooling settings
     *
     * @return PgbouncerAdvancedConfig
     */
    public function getPgbouncer(): PgbouncerAdvancedConfig
    {
        return $this->pgbouncer;
    }
    /**
     * PGBouncer connection pooling settings
     *
     * @param PgbouncerAdvancedConfig $pgbouncer
     *
     * @return self
     */
    public function setPgbouncer(PgbouncerAdvancedConfig $pgbouncer): self
    {
        $this->initialized['pgbouncer'] = true;
        $this->pgbouncer = $pgbouncer;
        return $this;
    }
    /**
     * The maximum amount of memory, in MB, used by a query operation (such as a sort or hash table) before writing to temporary disk files. Default is 1MB + 0.075% of total RAM (up to 32MB).
     *
     * @return int
     */
    public function getWorkMem(): int
    {
        return $this->workMem;
    }
    /**
     * The maximum amount of memory, in MB, used by a query operation (such as a sort or hash table) before writing to temporary disk files. Default is 1MB + 0.075% of total RAM (up to 32MB).
     *
     * @param int $workMem
     *
     * @return self
     */
    public function setWorkMem(int $workMem): self
    {
        $this->initialized['workMem'] = true;
        $this->workMem = $workMem;
        return $this;
    }
    /**
     * TimescaleDB extension configuration values
     *
     * @return TimescaledbAdvancedConfig
     */
    public function getTimescaledb(): TimescaledbAdvancedConfig
    {
        return $this->timescaledb;
    }
    /**
     * TimescaleDB extension configuration values
     *
     * @param TimescaledbAdvancedConfig $timescaledb
     *
     * @return self
     */
    public function setTimescaledb(TimescaledbAdvancedConfig $timescaledb): self
    {
        $this->initialized['timescaledb'] = true;
        $this->timescaledb = $timescaledb;
        return $this;
    }
    /**
     * Synchronous replication type. Note that the service plan also needs to support synchronous replication.
     *
     * @return string
     */
    public function getSynchronousReplication(): string
    {
        return $this->synchronousReplication;
    }
    /**
     * Synchronous replication type. Note that the service plan also needs to support synchronous replication.
     *
     * @param string $synchronousReplication
     *
     * @return self
     */
    public function setSynchronousReplication(string $synchronousReplication): self
    {
        $this->initialized['synchronousReplication'] = true;
        $this->synchronousReplication = $synchronousReplication;
        return $this;
    }
    /**
     * Enable the pg_stat_monitor extension. <b>Enabling this extension will cause the cluster to be restarted.</b> When this extension is enabled, pg_stat_statements results for utility commands are unreliable.
     *
     * @return bool
     */
    public function getStatMonitorEnable(): bool
    {
        return $this->statMonitorEnable;
    }
    /**
     * Enable the pg_stat_monitor extension. <b>Enabling this extension will cause the cluster to be restarted.</b> When this extension is enabled, pg_stat_statements results for utility commands are unreliable.
     *
     * @param bool $statMonitorEnable
     *
     * @return self
     */
    public function setStatMonitorEnable(bool $statMonitorEnable): self
    {
        $this->initialized['statMonitorEnable'] = true;
        $this->statMonitorEnable = $statMonitorEnable;
        return $this;
    }
    /**
     * Number of seconds of master unavailability before triggering database failover to standby. The default value is 60.
     *
     * @return int
     */
    public function getMaxFailoverReplicationTimeLag(): int
    {
        return $this->maxFailoverReplicationTimeLag;
    }
    /**
     * Number of seconds of master unavailability before triggering database failover to standby. The default value is 60.
     *
     * @param int $maxFailoverReplicationTimeLag
     *
     * @return self
     */
    public function setMaxFailoverReplicationTimeLag(int $maxFailoverReplicationTimeLag): self
    {
        $this->initialized['maxFailoverReplicationTimeLag'] = true;
        $this->maxFailoverReplicationTimeLag = $maxFailoverReplicationTimeLag;
        return $this;
    }
    /**
     * Sets the PostgreSQL maximum number of concurrent connections to the database server. This is a limited-release parameter. Contact your account team to confirm your eligibility. You cannot decrease this parameter value when set. For services with a read replica, first increase the read replica's value. After the change is applied to the replica, you can increase the primary service's value. Changing this parameter causes a service restart.
     *
     * @return int
     */
    public function getMaxConnections(): int
    {
        return $this->maxConnections;
    }
    /**
     * Sets the PostgreSQL maximum number of concurrent connections to the database server. This is a limited-release parameter. Contact your account team to confirm your eligibility. You cannot decrease this parameter value when set. For services with a read replica, first increase the read replica's value. After the change is applied to the replica, you can increase the primary service's value. Changing this parameter causes a service restart.
     *
     * @param int $maxConnections
     *
     * @return self
     */
    public function setMaxConnections(int $maxConnections): self
    {
        $this->initialized['maxConnections'] = true;
        $this->maxConnections = $maxConnections;
        return $this;
    }
    /**
     * PostgreSQL maximum WAL size (MB) reserved for replication slots. If -1 is specified, replication slots may retain an unlimited amount of WAL files. The default is -1 (upstream default). wal_keep_size minimum WAL size setting takes precedence over this.
     *
     * @return int
     */
    public function getMaxSlotWalKeepSize(): int
    {
        return $this->maxSlotWalKeepSize;
    }
    /**
     * PostgreSQL maximum WAL size (MB) reserved for replication slots. If -1 is specified, replication slots may retain an unlimited amount of WAL files. The default is -1 (upstream default). wal_keep_size minimum WAL size setting takes precedence over this.
     *
     * @param int $maxSlotWalKeepSize
     *
     * @return self
     */
    public function setMaxSlotWalKeepSize(int $maxSlotWalKeepSize): self
    {
        $this->initialized['maxSlotWalKeepSize'] = true;
        $this->maxSlotWalKeepSize = $maxSlotWalKeepSize;
        return $this;
    }
}