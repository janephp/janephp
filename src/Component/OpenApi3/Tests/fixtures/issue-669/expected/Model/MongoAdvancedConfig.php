<?php

namespace Jane\Generated\DigitalOcean\Model;

class MongoAdvancedConfig extends \ArrayObject
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
     * Specifies the default consistency behavior of reads from the database. Data that is returned from the query with may or may not have been acknowledged by all nodes in the replicaset depending on this value.  Learn more [here](https://www.mongodb.com/docs/manual/reference/read-concern/).
     *
     * @var string
     */
    protected $defaultReadConcern = 'local';
    /**
     * Describes the level of acknowledgment requested from MongoDB for write operations clusters. This field can set to either `majority` or a number `0...n` which will describe the number of nodes that must acknowledge the write operation before it is fully accepted. Setting to `0` will request no acknowledgement of the write operation.  Learn more [here](https://www.mongodb.com/docs/manual/reference/write-concern/).
     *
     * @var string
     */
    protected $defaultWriteConcern = 'majority';
    /**
     * Specifies the lifetime of multi-document transactions. Transactions that exceed this limit are considered expired and will be  aborted by a periodic cleanup process. The cleanup process runs every `transactionLifetimeLimitSeconds/2 seconds` or at least  once every 60 seconds. *Changing this parameter will lead to a restart of the MongoDB service.* Learn more [here](https://www.mongodb.com/docs/manual/reference/parameters/#mongodb-parameter-param.transactionLifetimeLimitSeconds).
     *
     * @var int
     */
    protected $transactionLifetimeLimitSeconds = 60;
    /**
     * Operations that run for longer than this threshold are considered slow which are then recorded to the diagnostic logs.  Higher log levels (verbosity) will record all operations regardless of this threshold on the primary node.  *Changing this parameter will lead to a restart of the MongoDB service.* Learn more [here](https://www.mongodb.com/docs/manual/reference/configuration-options/#mongodb-setting-operationProfiling.slowOpThresholdMs).
     *
     * @var int
     */
    protected $slowOpThresholdMs = 100;
    /**
     * The log message verbosity level. The verbosity level determines the amount of Informational and Debug messages MongoDB outputs. 0 includes informational messages while 1...5 increases the level to include debug messages. *Changing this parameter will lead to a restart of the MongoDB service.* Learn more [here](https://www.mongodb.com/docs/manual/reference/configuration-options/#mongodb-setting-systemLog.verbosity).
     *
     * @var int
     */
    protected $verbosity = 0;
    /**
     * Specifies the default consistency behavior of reads from the database. Data that is returned from the query with may or may not have been acknowledged by all nodes in the replicaset depending on this value.  Learn more [here](https://www.mongodb.com/docs/manual/reference/read-concern/).
     *
     * @return string
     */
    public function getDefaultReadConcern(): string
    {
        return $this->defaultReadConcern;
    }
    /**
     * Specifies the default consistency behavior of reads from the database. Data that is returned from the query with may or may not have been acknowledged by all nodes in the replicaset depending on this value.  Learn more [here](https://www.mongodb.com/docs/manual/reference/read-concern/).
     *
     * @param string $defaultReadConcern
     *
     * @return self
     */
    public function setDefaultReadConcern(string $defaultReadConcern): self
    {
        $this->initialized['defaultReadConcern'] = true;
        $this->defaultReadConcern = $defaultReadConcern;
        return $this;
    }
    /**
     * Describes the level of acknowledgment requested from MongoDB for write operations clusters. This field can set to either `majority` or a number `0...n` which will describe the number of nodes that must acknowledge the write operation before it is fully accepted. Setting to `0` will request no acknowledgement of the write operation.  Learn more [here](https://www.mongodb.com/docs/manual/reference/write-concern/).
     *
     * @return string
     */
    public function getDefaultWriteConcern(): string
    {
        return $this->defaultWriteConcern;
    }
    /**
     * Describes the level of acknowledgment requested from MongoDB for write operations clusters. This field can set to either `majority` or a number `0...n` which will describe the number of nodes that must acknowledge the write operation before it is fully accepted. Setting to `0` will request no acknowledgement of the write operation.  Learn more [here](https://www.mongodb.com/docs/manual/reference/write-concern/).
     *
     * @param string $defaultWriteConcern
     *
     * @return self
     */
    public function setDefaultWriteConcern(string $defaultWriteConcern): self
    {
        $this->initialized['defaultWriteConcern'] = true;
        $this->defaultWriteConcern = $defaultWriteConcern;
        return $this;
    }
    /**
     * Specifies the lifetime of multi-document transactions. Transactions that exceed this limit are considered expired and will be  aborted by a periodic cleanup process. The cleanup process runs every `transactionLifetimeLimitSeconds/2 seconds` or at least  once every 60 seconds. *Changing this parameter will lead to a restart of the MongoDB service.* Learn more [here](https://www.mongodb.com/docs/manual/reference/parameters/#mongodb-parameter-param.transactionLifetimeLimitSeconds).
     *
     * @return int
     */
    public function getTransactionLifetimeLimitSeconds(): int
    {
        return $this->transactionLifetimeLimitSeconds;
    }
    /**
     * Specifies the lifetime of multi-document transactions. Transactions that exceed this limit are considered expired and will be  aborted by a periodic cleanup process. The cleanup process runs every `transactionLifetimeLimitSeconds/2 seconds` or at least  once every 60 seconds. *Changing this parameter will lead to a restart of the MongoDB service.* Learn more [here](https://www.mongodb.com/docs/manual/reference/parameters/#mongodb-parameter-param.transactionLifetimeLimitSeconds).
     *
     * @param int $transactionLifetimeLimitSeconds
     *
     * @return self
     */
    public function setTransactionLifetimeLimitSeconds(int $transactionLifetimeLimitSeconds): self
    {
        $this->initialized['transactionLifetimeLimitSeconds'] = true;
        $this->transactionLifetimeLimitSeconds = $transactionLifetimeLimitSeconds;
        return $this;
    }
    /**
     * Operations that run for longer than this threshold are considered slow which are then recorded to the diagnostic logs.  Higher log levels (verbosity) will record all operations regardless of this threshold on the primary node.  *Changing this parameter will lead to a restart of the MongoDB service.* Learn more [here](https://www.mongodb.com/docs/manual/reference/configuration-options/#mongodb-setting-operationProfiling.slowOpThresholdMs).
     *
     * @return int
     */
    public function getSlowOpThresholdMs(): int
    {
        return $this->slowOpThresholdMs;
    }
    /**
     * Operations that run for longer than this threshold are considered slow which are then recorded to the diagnostic logs.  Higher log levels (verbosity) will record all operations regardless of this threshold on the primary node.  *Changing this parameter will lead to a restart of the MongoDB service.* Learn more [here](https://www.mongodb.com/docs/manual/reference/configuration-options/#mongodb-setting-operationProfiling.slowOpThresholdMs).
     *
     * @param int $slowOpThresholdMs
     *
     * @return self
     */
    public function setSlowOpThresholdMs(int $slowOpThresholdMs): self
    {
        $this->initialized['slowOpThresholdMs'] = true;
        $this->slowOpThresholdMs = $slowOpThresholdMs;
        return $this;
    }
    /**
     * The log message verbosity level. The verbosity level determines the amount of Informational and Debug messages MongoDB outputs. 0 includes informational messages while 1...5 increases the level to include debug messages. *Changing this parameter will lead to a restart of the MongoDB service.* Learn more [here](https://www.mongodb.com/docs/manual/reference/configuration-options/#mongodb-setting-systemLog.verbosity).
     *
     * @return int
     */
    public function getVerbosity(): int
    {
        return $this->verbosity;
    }
    /**
     * The log message verbosity level. The verbosity level determines the amount of Informational and Debug messages MongoDB outputs. 0 includes informational messages while 1...5 increases the level to include debug messages. *Changing this parameter will lead to a restart of the MongoDB service.* Learn more [here](https://www.mongodb.com/docs/manual/reference/configuration-options/#mongodb-setting-systemLog.verbosity).
     *
     * @param int $verbosity
     *
     * @return self
     */
    public function setVerbosity(int $verbosity): self
    {
        $this->initialized['verbosity'] = true;
        $this->verbosity = $verbosity;
        return $this;
    }
}