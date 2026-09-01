<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class MysqlAdvancedConfig implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * The hour of day (in UTC) when backup for the service starts. New backup only starts if previous backup has already completed.
     *
     * @var int
     */
    public int $backupHour;
    /**
     * The minute of the backup hour when backup for the service starts. New backup  only starts if previous backup has already completed.
     *
     * @var int
     */
    public int $backupMinute;
    /**
     * Global SQL mode. If empty, uses MySQL server defaults. Must only include uppercase alphabetic characters, underscores, and commas.
     *
     * @var string
     */
    public string $sqlMode;
    /**
     * The number of seconds that the mysqld server waits for a connect packet before responding with bad handshake.
     *
     * @var int
     */
    public int $connectTimeout;
    /**
     * Default server time zone, in the form of an offset from UTC (from -12:00 to +12:00), a time zone name (EST), or 'SYSTEM' to use the MySQL server default.
     *
     * @var string
     */
    public string $defaultTimeZone;
    /**
     * The maximum permitted result length, in bytes, for the GROUP_CONCAT() function.
     *
     * @var int
     */
    public int $groupConcatMaxLen;
    /**
     * The time, in seconds, before cached statistics expire.
     *
     * @var int
     */
    public int $informationSchemaStatsExpiry;
    /**
     * The minimum length of words that an InnoDB FULLTEXT index stores.
     *
     * @var int
     */
    public int $innodbFtMinTokenSize;
    /**
     * The InnoDB FULLTEXT index stopword list for all InnoDB tables.
     *
     * @var string
     */
    public string $innodbFtServerStopwordTable;
    /**
     * The time, in seconds, that an InnoDB transaction waits for a row lock. before giving up.
     *
     * @var int
     */
    public int $innodbLockWaitTimeout;
    /**
     * The size of the buffer, in bytes, that InnoDB uses to write to the log files. on disk.
     *
     * @var int
     */
    public int $innodbLogBufferSize;
    /**
     * The upper limit, in bytes, of the size of the temporary log files used during online DDL operations for InnoDB tables.
     *
     * @var int
     */
    public int $innodbOnlineAlterLogMaxSize;
    /**
     * When enabled, records information about all deadlocks in InnoDB user transactions  in the error log. Disabled by default.
     *
     * @var bool
     */
    public bool $innodbPrintAllDeadlocks;
    /**
     * When enabled, transaction timeouts cause InnoDB to abort and roll back the entire transaction.
     *
     * @var bool
     */
    public bool $innodbRollbackOnTimeout;
    /**
     * The time, in seconds, the server waits for activity on an interactive. connection before closing it.
     *
     * @var int
     */
    public int $interactiveTimeout;
    /**
     * The storage engine for in-memory internal temporary tables.
     *
     * @var string
     */
    public string $internalTmpMemStorageEngine;
    /**
     * The time, in seconds, to wait for more data from an existing connection. aborting the read.
     *
     * @var int
     */
    public int $netReadTimeout;
    /**
     * The number of seconds to wait for a block to be written to a connection before aborting the write.
     *
     * @var int
     */
    public int $netWriteTimeout;
    /**
     * Require primary key to be defined for new tables or old tables modified with ALTER TABLE and fail if missing. It is recommended to always have primary keys because various functionality may break if any large table is missing them.
     *
     * @var bool
     */
    public bool $sqlRequirePrimaryKey;
    /**
     * The number of seconds the server waits for activity on a noninteractive connection before closing it.
     *
     * @var int
     */
    public int $waitTimeout;
    /**
     * The size of the largest message, in bytes, that can be received by the server. Default is 67108864 (64M).
     *
     * @var int
     */
    public int $maxAllowedPacket;
    /**
     * The maximum size, in bytes, of internal in-memory tables. Also set tmp_table_size. Default is 16777216 (16M)
     *
     * @var int
     */
    public int $maxHeapTableSize;
    /**
     * The sort buffer size, in bytes, for ORDER BY optimization. Default is 262144. (256K).
     *
     * @var int
     */
    public int $sortBufferSize;
    /**
     * The maximum size, in bytes, of internal in-memory tables. Also set max_heap_table_size. Default is 16777216 (16M).
     *
     * @var int
     */
    public int $tmpTableSize;
    /**
     * When enabled, captures slow queries. When disabled, also truncates the mysql.slow_log table. Default is false.
     *
     * @var bool
     */
    public bool $slowQueryLog;
    /**
     * The time, in seconds, for a query to take to execute before  being captured by slow_query_logs. Default is 10 seconds.
     *
     * @var float
     */
    public float $longQueryTime;
    /**
     * The minimum amount of time, in seconds, to keep binlog entries before deletion.  This may be extended for services that require binlog entries for longer than the default, for example if using the MySQL Debezium Kafka connector.
     *
     * @var float
     */
    public float $binlogRetentionPeriod;
    /**
     * Specifies the maximum size of the InnoDB change buffer as a percentage of the buffer pool.
     *
     * @var int
     */
    public int $innodbChangeBufferMaxSize;
    /**
     * Specifies whether flushing a page from the InnoDB buffer pool also flushes other dirty pages in the same extent.
     *   - 0 &mdash; disables this functionality, dirty pages in the same extent are not flushed.
     *   - 1 &mdash; flushes contiguous dirty pages in the same extent.
     *   - 2 &mdash; flushes dirty pages in the same extent.
     *
     * @var int
     */
    public int $innodbFlushNeighbors;
    /**
     * The number of I/O threads for read operations in InnoDB. Changing this parameter will lead to a restart of the MySQL service.
     *
     * @var int
     */
    public int $innodbReadIoThreads;
    /**
     * The number of I/O threads for write operations in InnoDB. Changing this parameter will lead to a restart of the MySQL service.
     *
     * @var int
     */
    public int $innodbWriteIoThreads;
    /**
     * Defines the maximum number of threads permitted inside of InnoDB. A value of 0 (the default) is interpreted as infinite concurrency (no limit). This variable is intended for performance  tuning on high concurrency systems.
     *
     * @var int
     */
    public int $innodbThreadConcurrency;
    /**
     * Start sizes of connection buffer and result buffer, must be multiple of 1024. Changing this parameter will lead to a restart of the MySQL service.
     *
     * @var int
     */
    public int $netBufferLength;
    /**
     * Defines the destination for logs. Can be `INSIGHTS`, `TABLE`, or both (`INSIGHTS,TABLE`), or `NONE` to disable logs. To specify both destinations, use `INSIGHTS,TABLE` (order matters). Default is NONE.
     *
     * @var string
     */
    public string $logOutput = 'NONE';
    /**
     * MySQL Incremental Backup configuration settings
     *
     * @var MysqlIncrementalBackup
     */
    public MysqlIncrementalBackup $mysqlIncrementalBackup;
    public function definedProperties(): array
    {
        return ['backupHour' => 'backup_hour', 'backupMinute' => 'backup_minute', 'sqlMode' => 'sql_mode', 'connectTimeout' => 'connect_timeout', 'defaultTimeZone' => 'default_time_zone', 'groupConcatMaxLen' => 'group_concat_max_len', 'informationSchemaStatsExpiry' => 'information_schema_stats_expiry', 'innodbFtMinTokenSize' => 'innodb_ft_min_token_size', 'innodbFtServerStopwordTable' => 'innodb_ft_server_stopword_table', 'innodbLockWaitTimeout' => 'innodb_lock_wait_timeout', 'innodbLogBufferSize' => 'innodb_log_buffer_size', 'innodbOnlineAlterLogMaxSize' => 'innodb_online_alter_log_max_size', 'innodbPrintAllDeadlocks' => 'innodb_print_all_deadlocks', 'innodbRollbackOnTimeout' => 'innodb_rollback_on_timeout', 'interactiveTimeout' => 'interactive_timeout', 'internalTmpMemStorageEngine' => 'internal_tmp_mem_storage_engine', 'netReadTimeout' => 'net_read_timeout', 'netWriteTimeout' => 'net_write_timeout', 'sqlRequirePrimaryKey' => 'sql_require_primary_key', 'waitTimeout' => 'wait_timeout', 'maxAllowedPacket' => 'max_allowed_packet', 'maxHeapTableSize' => 'max_heap_table_size', 'sortBufferSize' => 'sort_buffer_size', 'tmpTableSize' => 'tmp_table_size', 'slowQueryLog' => 'slow_query_log', 'longQueryTime' => 'long_query_time', 'binlogRetentionPeriod' => 'binlog_retention_period', 'innodbChangeBufferMaxSize' => 'innodb_change_buffer_max_size', 'innodbFlushNeighbors' => 'innodb_flush_neighbors', 'innodbReadIoThreads' => 'innodb_read_io_threads', 'innodbWriteIoThreads' => 'innodb_write_io_threads', 'innodbThreadConcurrency' => 'innodb_thread_concurrency', 'netBufferLength' => 'net_buffer_length', 'logOutput' => 'log_output', 'mysqlIncrementalBackup' => 'mysql_incremental_backup'];
    }
}