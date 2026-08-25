<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class MysqlAdvancedConfig implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * The hour of day (in UTC) when backup for the service starts. New backup only starts if previous backup has already completed.
     *
     * @var int
     */
    protected $backupHour;
    /**
     * The minute of the backup hour when backup for the service starts. New backup  only starts if previous backup has already completed.
     *
     * @var int
     */
    protected $backupMinute;
    /**
     * Global SQL mode. If empty, uses MySQL server defaults. Must only include uppercase alphabetic characters, underscores, and commas.
     *
     * @var string
     */
    protected $sqlMode;
    /**
     * The number of seconds that the mysqld server waits for a connect packet before responding with bad handshake.
     *
     * @var int
     */
    protected $connectTimeout;
    /**
     * Default server time zone, in the form of an offset from UTC (from -12:00 to +12:00), a time zone name (EST), or 'SYSTEM' to use the MySQL server default.
     *
     * @var string
     */
    protected $defaultTimeZone;
    /**
     * The maximum permitted result length, in bytes, for the GROUP_CONCAT() function.
     *
     * @var int
     */
    protected $groupConcatMaxLen;
    /**
     * The time, in seconds, before cached statistics expire.
     *
     * @var int
     */
    protected $informationSchemaStatsExpiry;
    /**
     * The minimum length of words that an InnoDB FULLTEXT index stores.
     *
     * @var int
     */
    protected $innodbFtMinTokenSize;
    /**
     * The InnoDB FULLTEXT index stopword list for all InnoDB tables.
     *
     * @var string
     */
    protected $innodbFtServerStopwordTable;
    /**
     * The time, in seconds, that an InnoDB transaction waits for a row lock. before giving up.
     *
     * @var int
     */
    protected $innodbLockWaitTimeout;
    /**
     * The size of the buffer, in bytes, that InnoDB uses to write to the log files. on disk.
     *
     * @var int
     */
    protected $innodbLogBufferSize;
    /**
     * The upper limit, in bytes, of the size of the temporary log files used during online DDL operations for InnoDB tables.
     *
     * @var int
     */
    protected $innodbOnlineAlterLogMaxSize;
    /**
     * When enabled, records information about all deadlocks in InnoDB user transactions  in the error log. Disabled by default.
     *
     * @var bool
     */
    protected $innodbPrintAllDeadlocks;
    /**
     * When enabled, transaction timeouts cause InnoDB to abort and roll back the entire transaction.
     *
     * @var bool
     */
    protected $innodbRollbackOnTimeout;
    /**
     * The time, in seconds, the server waits for activity on an interactive. connection before closing it.
     *
     * @var int
     */
    protected $interactiveTimeout;
    /**
     * The storage engine for in-memory internal temporary tables.
     *
     * @var string
     */
    protected $internalTmpMemStorageEngine;
    /**
     * The time, in seconds, to wait for more data from an existing connection. aborting the read.
     *
     * @var int
     */
    protected $netReadTimeout;
    /**
     * The number of seconds to wait for a block to be written to a connection before aborting the write.
     *
     * @var int
     */
    protected $netWriteTimeout;
    /**
     * Require primary key to be defined for new tables or old tables modified with ALTER TABLE and fail if missing. It is recommended to always have primary keys because various functionality may break if any large table is missing them.
     *
     * @var bool
     */
    protected $sqlRequirePrimaryKey;
    /**
     * The number of seconds the server waits for activity on a noninteractive connection before closing it.
     *
     * @var int
     */
    protected $waitTimeout;
    /**
     * The size of the largest message, in bytes, that can be received by the server. Default is 67108864 (64M).
     *
     * @var int
     */
    protected $maxAllowedPacket;
    /**
     * The maximum size, in bytes, of internal in-memory tables. Also set tmp_table_size. Default is 16777216 (16M)
     *
     * @var int
     */
    protected $maxHeapTableSize;
    /**
     * The sort buffer size, in bytes, for ORDER BY optimization. Default is 262144. (256K).
     *
     * @var int
     */
    protected $sortBufferSize;
    /**
     * The maximum size, in bytes, of internal in-memory tables. Also set max_heap_table_size. Default is 16777216 (16M).
     *
     * @var int
     */
    protected $tmpTableSize;
    /**
     * When enabled, captures slow queries. When disabled, also truncates the mysql.slow_log table. Default is false.
     *
     * @var bool
     */
    protected $slowQueryLog;
    /**
     * The time, in seconds, for a query to take to execute before  being captured by slow_query_logs. Default is 10 seconds.
     *
     * @var float
     */
    protected $longQueryTime;
    /**
     * The minimum amount of time, in seconds, to keep binlog entries before deletion.  This may be extended for services that require binlog entries for longer than the default, for example if using the MySQL Debezium Kafka connector.
     *
     * @var float
     */
    protected $binlogRetentionPeriod;
    /**
     * Specifies the maximum size of the InnoDB change buffer as a percentage of the buffer pool.
     *
     * @var int
     */
    protected $innodbChangeBufferMaxSize;
    /**
     * Specifies whether flushing a page from the InnoDB buffer pool also flushes other dirty pages in the same extent.
     *   - 0 &mdash; disables this functionality, dirty pages in the same extent are not flushed.
     *   - 1 &mdash; flushes contiguous dirty pages in the same extent.
     *   - 2 &mdash; flushes dirty pages in the same extent.
     *
     * @var int
     */
    protected $innodbFlushNeighbors;
    /**
     * The number of I/O threads for read operations in InnoDB. Changing this parameter will lead to a restart of the MySQL service.
     *
     * @var int
     */
    protected $innodbReadIoThreads;
    /**
     * The number of I/O threads for write operations in InnoDB. Changing this parameter will lead to a restart of the MySQL service.
     *
     * @var int
     */
    protected $innodbWriteIoThreads;
    /**
     * Defines the maximum number of threads permitted inside of InnoDB. A value of 0 (the default) is interpreted as infinite concurrency (no limit). This variable is intended for performance  tuning on high concurrency systems.
     *
     * @var int
     */
    protected $innodbThreadConcurrency;
    /**
     * Start sizes of connection buffer and result buffer, must be multiple of 1024. Changing this parameter will lead to a restart of the MySQL service.
     *
     * @var int
     */
    protected $netBufferLength;
    /**
     * Defines the destination for logs. Can be `INSIGHTS`, `TABLE`, or both (`INSIGHTS,TABLE`), or `NONE` to disable logs. To specify both destinations, use `INSIGHTS,TABLE` (order matters). Default is NONE.
     *
     * @var string
     */
    protected $logOutput = 'NONE';
    /**
     * MySQL Incremental Backup configuration settings
     *
     * @var MysqlIncrementalBackup
     */
    protected $mysqlIncrementalBackup;
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
     * The minute of the backup hour when backup for the service starts. New backup  only starts if previous backup has already completed.
     *
     * @return int
     */
    public function getBackupMinute(): int
    {
        return $this->backupMinute;
    }
    /**
     * The minute of the backup hour when backup for the service starts. New backup  only starts if previous backup has already completed.
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
     * Global SQL mode. If empty, uses MySQL server defaults. Must only include uppercase alphabetic characters, underscores, and commas.
     *
     * @return string
     */
    public function getSqlMode(): string
    {
        return $this->sqlMode;
    }
    /**
     * Global SQL mode. If empty, uses MySQL server defaults. Must only include uppercase alphabetic characters, underscores, and commas.
     *
     * @param string $sqlMode
     *
     * @return self
     */
    public function setSqlMode(string $sqlMode): self
    {
        $this->initialized['sqlMode'] = true;
        $this->sqlMode = $sqlMode;
        return $this;
    }
    /**
     * The number of seconds that the mysqld server waits for a connect packet before responding with bad handshake.
     *
     * @return int
     */
    public function getConnectTimeout(): int
    {
        return $this->connectTimeout;
    }
    /**
     * The number of seconds that the mysqld server waits for a connect packet before responding with bad handshake.
     *
     * @param int $connectTimeout
     *
     * @return self
     */
    public function setConnectTimeout(int $connectTimeout): self
    {
        $this->initialized['connectTimeout'] = true;
        $this->connectTimeout = $connectTimeout;
        return $this;
    }
    /**
     * Default server time zone, in the form of an offset from UTC (from -12:00 to +12:00), a time zone name (EST), or 'SYSTEM' to use the MySQL server default.
     *
     * @return string
     */
    public function getDefaultTimeZone(): string
    {
        return $this->defaultTimeZone;
    }
    /**
     * Default server time zone, in the form of an offset from UTC (from -12:00 to +12:00), a time zone name (EST), or 'SYSTEM' to use the MySQL server default.
     *
     * @param string $defaultTimeZone
     *
     * @return self
     */
    public function setDefaultTimeZone(string $defaultTimeZone): self
    {
        $this->initialized['defaultTimeZone'] = true;
        $this->defaultTimeZone = $defaultTimeZone;
        return $this;
    }
    /**
     * The maximum permitted result length, in bytes, for the GROUP_CONCAT() function.
     *
     * @return int
     */
    public function getGroupConcatMaxLen(): int
    {
        return $this->groupConcatMaxLen;
    }
    /**
     * The maximum permitted result length, in bytes, for the GROUP_CONCAT() function.
     *
     * @param int $groupConcatMaxLen
     *
     * @return self
     */
    public function setGroupConcatMaxLen(int $groupConcatMaxLen): self
    {
        $this->initialized['groupConcatMaxLen'] = true;
        $this->groupConcatMaxLen = $groupConcatMaxLen;
        return $this;
    }
    /**
     * The time, in seconds, before cached statistics expire.
     *
     * @return int
     */
    public function getInformationSchemaStatsExpiry(): int
    {
        return $this->informationSchemaStatsExpiry;
    }
    /**
     * The time, in seconds, before cached statistics expire.
     *
     * @param int $informationSchemaStatsExpiry
     *
     * @return self
     */
    public function setInformationSchemaStatsExpiry(int $informationSchemaStatsExpiry): self
    {
        $this->initialized['informationSchemaStatsExpiry'] = true;
        $this->informationSchemaStatsExpiry = $informationSchemaStatsExpiry;
        return $this;
    }
    /**
     * The minimum length of words that an InnoDB FULLTEXT index stores.
     *
     * @return int
     */
    public function getInnodbFtMinTokenSize(): int
    {
        return $this->innodbFtMinTokenSize;
    }
    /**
     * The minimum length of words that an InnoDB FULLTEXT index stores.
     *
     * @param int $innodbFtMinTokenSize
     *
     * @return self
     */
    public function setInnodbFtMinTokenSize(int $innodbFtMinTokenSize): self
    {
        $this->initialized['innodbFtMinTokenSize'] = true;
        $this->innodbFtMinTokenSize = $innodbFtMinTokenSize;
        return $this;
    }
    /**
     * The InnoDB FULLTEXT index stopword list for all InnoDB tables.
     *
     * @return string
     */
    public function getInnodbFtServerStopwordTable(): string
    {
        return $this->innodbFtServerStopwordTable;
    }
    /**
     * The InnoDB FULLTEXT index stopword list for all InnoDB tables.
     *
     * @param string $innodbFtServerStopwordTable
     *
     * @return self
     */
    public function setInnodbFtServerStopwordTable(string $innodbFtServerStopwordTable): self
    {
        $this->initialized['innodbFtServerStopwordTable'] = true;
        $this->innodbFtServerStopwordTable = $innodbFtServerStopwordTable;
        return $this;
    }
    /**
     * The time, in seconds, that an InnoDB transaction waits for a row lock. before giving up.
     *
     * @return int
     */
    public function getInnodbLockWaitTimeout(): int
    {
        return $this->innodbLockWaitTimeout;
    }
    /**
     * The time, in seconds, that an InnoDB transaction waits for a row lock. before giving up.
     *
     * @param int $innodbLockWaitTimeout
     *
     * @return self
     */
    public function setInnodbLockWaitTimeout(int $innodbLockWaitTimeout): self
    {
        $this->initialized['innodbLockWaitTimeout'] = true;
        $this->innodbLockWaitTimeout = $innodbLockWaitTimeout;
        return $this;
    }
    /**
     * The size of the buffer, in bytes, that InnoDB uses to write to the log files. on disk.
     *
     * @return int
     */
    public function getInnodbLogBufferSize(): int
    {
        return $this->innodbLogBufferSize;
    }
    /**
     * The size of the buffer, in bytes, that InnoDB uses to write to the log files. on disk.
     *
     * @param int $innodbLogBufferSize
     *
     * @return self
     */
    public function setInnodbLogBufferSize(int $innodbLogBufferSize): self
    {
        $this->initialized['innodbLogBufferSize'] = true;
        $this->innodbLogBufferSize = $innodbLogBufferSize;
        return $this;
    }
    /**
     * The upper limit, in bytes, of the size of the temporary log files used during online DDL operations for InnoDB tables.
     *
     * @return int
     */
    public function getInnodbOnlineAlterLogMaxSize(): int
    {
        return $this->innodbOnlineAlterLogMaxSize;
    }
    /**
     * The upper limit, in bytes, of the size of the temporary log files used during online DDL operations for InnoDB tables.
     *
     * @param int $innodbOnlineAlterLogMaxSize
     *
     * @return self
     */
    public function setInnodbOnlineAlterLogMaxSize(int $innodbOnlineAlterLogMaxSize): self
    {
        $this->initialized['innodbOnlineAlterLogMaxSize'] = true;
        $this->innodbOnlineAlterLogMaxSize = $innodbOnlineAlterLogMaxSize;
        return $this;
    }
    /**
     * When enabled, records information about all deadlocks in InnoDB user transactions  in the error log. Disabled by default.
     *
     * @return bool
     */
    public function getInnodbPrintAllDeadlocks(): bool
    {
        return $this->innodbPrintAllDeadlocks;
    }
    /**
     * When enabled, records information about all deadlocks in InnoDB user transactions  in the error log. Disabled by default.
     *
     * @param bool $innodbPrintAllDeadlocks
     *
     * @return self
     */
    public function setInnodbPrintAllDeadlocks(bool $innodbPrintAllDeadlocks): self
    {
        $this->initialized['innodbPrintAllDeadlocks'] = true;
        $this->innodbPrintAllDeadlocks = $innodbPrintAllDeadlocks;
        return $this;
    }
    /**
     * When enabled, transaction timeouts cause InnoDB to abort and roll back the entire transaction.
     *
     * @return bool
     */
    public function getInnodbRollbackOnTimeout(): bool
    {
        return $this->innodbRollbackOnTimeout;
    }
    /**
     * When enabled, transaction timeouts cause InnoDB to abort and roll back the entire transaction.
     *
     * @param bool $innodbRollbackOnTimeout
     *
     * @return self
     */
    public function setInnodbRollbackOnTimeout(bool $innodbRollbackOnTimeout): self
    {
        $this->initialized['innodbRollbackOnTimeout'] = true;
        $this->innodbRollbackOnTimeout = $innodbRollbackOnTimeout;
        return $this;
    }
    /**
     * The time, in seconds, the server waits for activity on an interactive. connection before closing it.
     *
     * @return int
     */
    public function getInteractiveTimeout(): int
    {
        return $this->interactiveTimeout;
    }
    /**
     * The time, in seconds, the server waits for activity on an interactive. connection before closing it.
     *
     * @param int $interactiveTimeout
     *
     * @return self
     */
    public function setInteractiveTimeout(int $interactiveTimeout): self
    {
        $this->initialized['interactiveTimeout'] = true;
        $this->interactiveTimeout = $interactiveTimeout;
        return $this;
    }
    /**
     * The storage engine for in-memory internal temporary tables.
     *
     * @return string
     */
    public function getInternalTmpMemStorageEngine(): string
    {
        return $this->internalTmpMemStorageEngine;
    }
    /**
     * The storage engine for in-memory internal temporary tables.
     *
     * @param string $internalTmpMemStorageEngine
     *
     * @return self
     */
    public function setInternalTmpMemStorageEngine(string $internalTmpMemStorageEngine): self
    {
        $this->initialized['internalTmpMemStorageEngine'] = true;
        $this->internalTmpMemStorageEngine = $internalTmpMemStorageEngine;
        return $this;
    }
    /**
     * The time, in seconds, to wait for more data from an existing connection. aborting the read.
     *
     * @return int
     */
    public function getNetReadTimeout(): int
    {
        return $this->netReadTimeout;
    }
    /**
     * The time, in seconds, to wait for more data from an existing connection. aborting the read.
     *
     * @param int $netReadTimeout
     *
     * @return self
     */
    public function setNetReadTimeout(int $netReadTimeout): self
    {
        $this->initialized['netReadTimeout'] = true;
        $this->netReadTimeout = $netReadTimeout;
        return $this;
    }
    /**
     * The number of seconds to wait for a block to be written to a connection before aborting the write.
     *
     * @return int
     */
    public function getNetWriteTimeout(): int
    {
        return $this->netWriteTimeout;
    }
    /**
     * The number of seconds to wait for a block to be written to a connection before aborting the write.
     *
     * @param int $netWriteTimeout
     *
     * @return self
     */
    public function setNetWriteTimeout(int $netWriteTimeout): self
    {
        $this->initialized['netWriteTimeout'] = true;
        $this->netWriteTimeout = $netWriteTimeout;
        return $this;
    }
    /**
     * Require primary key to be defined for new tables or old tables modified with ALTER TABLE and fail if missing. It is recommended to always have primary keys because various functionality may break if any large table is missing them.
     *
     * @return bool
     */
    public function getSqlRequirePrimaryKey(): bool
    {
        return $this->sqlRequirePrimaryKey;
    }
    /**
     * Require primary key to be defined for new tables or old tables modified with ALTER TABLE and fail if missing. It is recommended to always have primary keys because various functionality may break if any large table is missing them.
     *
     * @param bool $sqlRequirePrimaryKey
     *
     * @return self
     */
    public function setSqlRequirePrimaryKey(bool $sqlRequirePrimaryKey): self
    {
        $this->initialized['sqlRequirePrimaryKey'] = true;
        $this->sqlRequirePrimaryKey = $sqlRequirePrimaryKey;
        return $this;
    }
    /**
     * The number of seconds the server waits for activity on a noninteractive connection before closing it.
     *
     * @return int
     */
    public function getWaitTimeout(): int
    {
        return $this->waitTimeout;
    }
    /**
     * The number of seconds the server waits for activity on a noninteractive connection before closing it.
     *
     * @param int $waitTimeout
     *
     * @return self
     */
    public function setWaitTimeout(int $waitTimeout): self
    {
        $this->initialized['waitTimeout'] = true;
        $this->waitTimeout = $waitTimeout;
        return $this;
    }
    /**
     * The size of the largest message, in bytes, that can be received by the server. Default is 67108864 (64M).
     *
     * @return int
     */
    public function getMaxAllowedPacket(): int
    {
        return $this->maxAllowedPacket;
    }
    /**
     * The size of the largest message, in bytes, that can be received by the server. Default is 67108864 (64M).
     *
     * @param int $maxAllowedPacket
     *
     * @return self
     */
    public function setMaxAllowedPacket(int $maxAllowedPacket): self
    {
        $this->initialized['maxAllowedPacket'] = true;
        $this->maxAllowedPacket = $maxAllowedPacket;
        return $this;
    }
    /**
     * The maximum size, in bytes, of internal in-memory tables. Also set tmp_table_size. Default is 16777216 (16M)
     *
     * @return int
     */
    public function getMaxHeapTableSize(): int
    {
        return $this->maxHeapTableSize;
    }
    /**
     * The maximum size, in bytes, of internal in-memory tables. Also set tmp_table_size. Default is 16777216 (16M)
     *
     * @param int $maxHeapTableSize
     *
     * @return self
     */
    public function setMaxHeapTableSize(int $maxHeapTableSize): self
    {
        $this->initialized['maxHeapTableSize'] = true;
        $this->maxHeapTableSize = $maxHeapTableSize;
        return $this;
    }
    /**
     * The sort buffer size, in bytes, for ORDER BY optimization. Default is 262144. (256K).
     *
     * @return int
     */
    public function getSortBufferSize(): int
    {
        return $this->sortBufferSize;
    }
    /**
     * The sort buffer size, in bytes, for ORDER BY optimization. Default is 262144. (256K).
     *
     * @param int $sortBufferSize
     *
     * @return self
     */
    public function setSortBufferSize(int $sortBufferSize): self
    {
        $this->initialized['sortBufferSize'] = true;
        $this->sortBufferSize = $sortBufferSize;
        return $this;
    }
    /**
     * The maximum size, in bytes, of internal in-memory tables. Also set max_heap_table_size. Default is 16777216 (16M).
     *
     * @return int
     */
    public function getTmpTableSize(): int
    {
        return $this->tmpTableSize;
    }
    /**
     * The maximum size, in bytes, of internal in-memory tables. Also set max_heap_table_size. Default is 16777216 (16M).
     *
     * @param int $tmpTableSize
     *
     * @return self
     */
    public function setTmpTableSize(int $tmpTableSize): self
    {
        $this->initialized['tmpTableSize'] = true;
        $this->tmpTableSize = $tmpTableSize;
        return $this;
    }
    /**
     * When enabled, captures slow queries. When disabled, also truncates the mysql.slow_log table. Default is false.
     *
     * @return bool
     */
    public function getSlowQueryLog(): bool
    {
        return $this->slowQueryLog;
    }
    /**
     * When enabled, captures slow queries. When disabled, also truncates the mysql.slow_log table. Default is false.
     *
     * @param bool $slowQueryLog
     *
     * @return self
     */
    public function setSlowQueryLog(bool $slowQueryLog): self
    {
        $this->initialized['slowQueryLog'] = true;
        $this->slowQueryLog = $slowQueryLog;
        return $this;
    }
    /**
     * The time, in seconds, for a query to take to execute before  being captured by slow_query_logs. Default is 10 seconds.
     *
     * @return float
     */
    public function getLongQueryTime(): float
    {
        return $this->longQueryTime;
    }
    /**
     * The time, in seconds, for a query to take to execute before  being captured by slow_query_logs. Default is 10 seconds.
     *
     * @param float $longQueryTime
     *
     * @return self
     */
    public function setLongQueryTime(float $longQueryTime): self
    {
        $this->initialized['longQueryTime'] = true;
        $this->longQueryTime = $longQueryTime;
        return $this;
    }
    /**
     * The minimum amount of time, in seconds, to keep binlog entries before deletion.  This may be extended for services that require binlog entries for longer than the default, for example if using the MySQL Debezium Kafka connector.
     *
     * @return float
     */
    public function getBinlogRetentionPeriod(): float
    {
        return $this->binlogRetentionPeriod;
    }
    /**
     * The minimum amount of time, in seconds, to keep binlog entries before deletion.  This may be extended for services that require binlog entries for longer than the default, for example if using the MySQL Debezium Kafka connector.
     *
     * @param float $binlogRetentionPeriod
     *
     * @return self
     */
    public function setBinlogRetentionPeriod(float $binlogRetentionPeriod): self
    {
        $this->initialized['binlogRetentionPeriod'] = true;
        $this->binlogRetentionPeriod = $binlogRetentionPeriod;
        return $this;
    }
    /**
     * Specifies the maximum size of the InnoDB change buffer as a percentage of the buffer pool.
     *
     * @return int
     */
    public function getInnodbChangeBufferMaxSize(): int
    {
        return $this->innodbChangeBufferMaxSize;
    }
    /**
     * Specifies the maximum size of the InnoDB change buffer as a percentage of the buffer pool.
     *
     * @param int $innodbChangeBufferMaxSize
     *
     * @return self
     */
    public function setInnodbChangeBufferMaxSize(int $innodbChangeBufferMaxSize): self
    {
        $this->initialized['innodbChangeBufferMaxSize'] = true;
        $this->innodbChangeBufferMaxSize = $innodbChangeBufferMaxSize;
        return $this;
    }
    /**
     * Specifies whether flushing a page from the InnoDB buffer pool also flushes other dirty pages in the same extent.
     *   - 0 &mdash; disables this functionality, dirty pages in the same extent are not flushed.
     *   - 1 &mdash; flushes contiguous dirty pages in the same extent.
     *   - 2 &mdash; flushes dirty pages in the same extent.
     *
     * @return int
     */
    public function getInnodbFlushNeighbors(): int
    {
        return $this->innodbFlushNeighbors;
    }
    /**
    * Specifies whether flushing a page from the InnoDB buffer pool also flushes other dirty pages in the same extent.
     - 0 &mdash; disables this functionality, dirty pages in the same extent are not flushed.
     - 1 &mdash; flushes contiguous dirty pages in the same extent.
     - 2 &mdash; flushes dirty pages in the same extent.
    *
    * @param int $innodbFlushNeighbors
    *
    * @return self
    */
    public function setInnodbFlushNeighbors(int $innodbFlushNeighbors): self
    {
        $this->initialized['innodbFlushNeighbors'] = true;
        $this->innodbFlushNeighbors = $innodbFlushNeighbors;
        return $this;
    }
    /**
     * The number of I/O threads for read operations in InnoDB. Changing this parameter will lead to a restart of the MySQL service.
     *
     * @return int
     */
    public function getInnodbReadIoThreads(): int
    {
        return $this->innodbReadIoThreads;
    }
    /**
     * The number of I/O threads for read operations in InnoDB. Changing this parameter will lead to a restart of the MySQL service.
     *
     * @param int $innodbReadIoThreads
     *
     * @return self
     */
    public function setInnodbReadIoThreads(int $innodbReadIoThreads): self
    {
        $this->initialized['innodbReadIoThreads'] = true;
        $this->innodbReadIoThreads = $innodbReadIoThreads;
        return $this;
    }
    /**
     * The number of I/O threads for write operations in InnoDB. Changing this parameter will lead to a restart of the MySQL service.
     *
     * @return int
     */
    public function getInnodbWriteIoThreads(): int
    {
        return $this->innodbWriteIoThreads;
    }
    /**
     * The number of I/O threads for write operations in InnoDB. Changing this parameter will lead to a restart of the MySQL service.
     *
     * @param int $innodbWriteIoThreads
     *
     * @return self
     */
    public function setInnodbWriteIoThreads(int $innodbWriteIoThreads): self
    {
        $this->initialized['innodbWriteIoThreads'] = true;
        $this->innodbWriteIoThreads = $innodbWriteIoThreads;
        return $this;
    }
    /**
     * Defines the maximum number of threads permitted inside of InnoDB. A value of 0 (the default) is interpreted as infinite concurrency (no limit). This variable is intended for performance  tuning on high concurrency systems.
     *
     * @return int
     */
    public function getInnodbThreadConcurrency(): int
    {
        return $this->innodbThreadConcurrency;
    }
    /**
     * Defines the maximum number of threads permitted inside of InnoDB. A value of 0 (the default) is interpreted as infinite concurrency (no limit). This variable is intended for performance  tuning on high concurrency systems.
     *
     * @param int $innodbThreadConcurrency
     *
     * @return self
     */
    public function setInnodbThreadConcurrency(int $innodbThreadConcurrency): self
    {
        $this->initialized['innodbThreadConcurrency'] = true;
        $this->innodbThreadConcurrency = $innodbThreadConcurrency;
        return $this;
    }
    /**
     * Start sizes of connection buffer and result buffer, must be multiple of 1024. Changing this parameter will lead to a restart of the MySQL service.
     *
     * @return int
     */
    public function getNetBufferLength(): int
    {
        return $this->netBufferLength;
    }
    /**
     * Start sizes of connection buffer and result buffer, must be multiple of 1024. Changing this parameter will lead to a restart of the MySQL service.
     *
     * @param int $netBufferLength
     *
     * @return self
     */
    public function setNetBufferLength(int $netBufferLength): self
    {
        $this->initialized['netBufferLength'] = true;
        $this->netBufferLength = $netBufferLength;
        return $this;
    }
    /**
     * Defines the destination for logs. Can be `INSIGHTS`, `TABLE`, or both (`INSIGHTS,TABLE`), or `NONE` to disable logs. To specify both destinations, use `INSIGHTS,TABLE` (order matters). Default is NONE.
     *
     * @return string
     */
    public function getLogOutput(): string
    {
        return $this->logOutput;
    }
    /**
     * Defines the destination for logs. Can be `INSIGHTS`, `TABLE`, or both (`INSIGHTS,TABLE`), or `NONE` to disable logs. To specify both destinations, use `INSIGHTS,TABLE` (order matters). Default is NONE.
     *
     * @param string $logOutput
     *
     * @return self
     */
    public function setLogOutput(string $logOutput): self
    {
        $this->initialized['logOutput'] = true;
        $this->logOutput = $logOutput;
        return $this;
    }
    /**
     * MySQL Incremental Backup configuration settings
     *
     * @return MysqlIncrementalBackup
     */
    public function getMysqlIncrementalBackup(): MysqlIncrementalBackup
    {
        return $this->mysqlIncrementalBackup;
    }
    /**
     * MySQL Incremental Backup configuration settings
     *
     * @param MysqlIncrementalBackup $mysqlIncrementalBackup
     *
     * @return self
     */
    public function setMysqlIncrementalBackup(MysqlIncrementalBackup $mysqlIncrementalBackup): self
    {
        $this->initialized['mysqlIncrementalBackup'] = true;
        $this->mysqlIncrementalBackup = $mysqlIncrementalBackup;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['backupHour' => ['backup_hour', 'getBackupHour', 'setBackupHour'], 'backupMinute' => ['backup_minute', 'getBackupMinute', 'setBackupMinute'], 'sqlMode' => ['sql_mode', 'getSqlMode', 'setSqlMode'], 'connectTimeout' => ['connect_timeout', 'getConnectTimeout', 'setConnectTimeout'], 'defaultTimeZone' => ['default_time_zone', 'getDefaultTimeZone', 'setDefaultTimeZone'], 'groupConcatMaxLen' => ['group_concat_max_len', 'getGroupConcatMaxLen', 'setGroupConcatMaxLen'], 'informationSchemaStatsExpiry' => ['information_schema_stats_expiry', 'getInformationSchemaStatsExpiry', 'setInformationSchemaStatsExpiry'], 'innodbFtMinTokenSize' => ['innodb_ft_min_token_size', 'getInnodbFtMinTokenSize', 'setInnodbFtMinTokenSize'], 'innodbFtServerStopwordTable' => ['innodb_ft_server_stopword_table', 'getInnodbFtServerStopwordTable', 'setInnodbFtServerStopwordTable'], 'innodbLockWaitTimeout' => ['innodb_lock_wait_timeout', 'getInnodbLockWaitTimeout', 'setInnodbLockWaitTimeout'], 'innodbLogBufferSize' => ['innodb_log_buffer_size', 'getInnodbLogBufferSize', 'setInnodbLogBufferSize'], 'innodbOnlineAlterLogMaxSize' => ['innodb_online_alter_log_max_size', 'getInnodbOnlineAlterLogMaxSize', 'setInnodbOnlineAlterLogMaxSize'], 'innodbPrintAllDeadlocks' => ['innodb_print_all_deadlocks', 'getInnodbPrintAllDeadlocks', 'setInnodbPrintAllDeadlocks'], 'innodbRollbackOnTimeout' => ['innodb_rollback_on_timeout', 'getInnodbRollbackOnTimeout', 'setInnodbRollbackOnTimeout'], 'interactiveTimeout' => ['interactive_timeout', 'getInteractiveTimeout', 'setInteractiveTimeout'], 'internalTmpMemStorageEngine' => ['internal_tmp_mem_storage_engine', 'getInternalTmpMemStorageEngine', 'setInternalTmpMemStorageEngine'], 'netReadTimeout' => ['net_read_timeout', 'getNetReadTimeout', 'setNetReadTimeout'], 'netWriteTimeout' => ['net_write_timeout', 'getNetWriteTimeout', 'setNetWriteTimeout'], 'sqlRequirePrimaryKey' => ['sql_require_primary_key', 'getSqlRequirePrimaryKey', 'setSqlRequirePrimaryKey'], 'waitTimeout' => ['wait_timeout', 'getWaitTimeout', 'setWaitTimeout'], 'maxAllowedPacket' => ['max_allowed_packet', 'getMaxAllowedPacket', 'setMaxAllowedPacket'], 'maxHeapTableSize' => ['max_heap_table_size', 'getMaxHeapTableSize', 'setMaxHeapTableSize'], 'sortBufferSize' => ['sort_buffer_size', 'getSortBufferSize', 'setSortBufferSize'], 'tmpTableSize' => ['tmp_table_size', 'getTmpTableSize', 'setTmpTableSize'], 'slowQueryLog' => ['slow_query_log', 'getSlowQueryLog', 'setSlowQueryLog'], 'longQueryTime' => ['long_query_time', 'getLongQueryTime', 'setLongQueryTime'], 'binlogRetentionPeriod' => ['binlog_retention_period', 'getBinlogRetentionPeriod', 'setBinlogRetentionPeriod'], 'innodbChangeBufferMaxSize' => ['innodb_change_buffer_max_size', 'getInnodbChangeBufferMaxSize', 'setInnodbChangeBufferMaxSize'], 'innodbFlushNeighbors' => ['innodb_flush_neighbors', 'getInnodbFlushNeighbors', 'setInnodbFlushNeighbors'], 'innodbReadIoThreads' => ['innodb_read_io_threads', 'getInnodbReadIoThreads', 'setInnodbReadIoThreads'], 'innodbWriteIoThreads' => ['innodb_write_io_threads', 'getInnodbWriteIoThreads', 'setInnodbWriteIoThreads'], 'innodbThreadConcurrency' => ['innodb_thread_concurrency', 'getInnodbThreadConcurrency', 'setInnodbThreadConcurrency'], 'netBufferLength' => ['net_buffer_length', 'getNetBufferLength', 'setNetBufferLength'], 'logOutput' => ['log_output', 'getLogOutput', 'setLogOutput'], 'mysqlIncrementalBackup' => ['mysql_incremental_backup', 'getMysqlIncrementalBackup', 'setMysqlIncrementalBackup']];
    }
}