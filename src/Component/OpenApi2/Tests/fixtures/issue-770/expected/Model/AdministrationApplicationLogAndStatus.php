<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class AdministrationApplicationLogAndStatus
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
     * Application name
     *
     * @var string
     */
    protected $applicationName;
    /**
     * Health status
     *
     * @var string
     */
    protected $healthStatus;
    /**
     * Log level
     *
     * @var string
     */
    protected $logLevel;
    /**
     * # of Logs
     *
     * @var int
     */
    protected $numOfLogs;
    /**
     * List of log file name
     *
     * @var list<string>
     */
    protected $logFileNames;
    /**
     * Application name
     *
     * @return string
     */
    public function getApplicationName(): string
    {
        return $this->applicationName;
    }
    /**
     * Application name
     *
     * @param string $applicationName
     *
     * @return self
     */
    public function setApplicationName(string $applicationName): self
    {
        $this->initialized['applicationName'] = true;
        $this->applicationName = $applicationName;
        return $this;
    }
    /**
     * Health status
     *
     * @return string
     */
    public function getHealthStatus(): string
    {
        return $this->healthStatus;
    }
    /**
     * Health status
     *
     * @param string $healthStatus
     *
     * @return self
     */
    public function setHealthStatus(string $healthStatus): self
    {
        $this->initialized['healthStatus'] = true;
        $this->healthStatus = $healthStatus;
        return $this;
    }
    /**
     * Log level
     *
     * @return string
     */
    public function getLogLevel(): string
    {
        return $this->logLevel;
    }
    /**
     * Log level
     *
     * @param string $logLevel
     *
     * @return self
     */
    public function setLogLevel(string $logLevel): self
    {
        $this->initialized['logLevel'] = true;
        $this->logLevel = $logLevel;
        return $this;
    }
    /**
     * # of Logs
     *
     * @return int
     */
    public function getNumOfLogs(): int
    {
        return $this->numOfLogs;
    }
    /**
     * # of Logs
     *
     * @param int $numOfLogs
     *
     * @return self
     */
    public function setNumOfLogs(int $numOfLogs): self
    {
        $this->initialized['numOfLogs'] = true;
        $this->numOfLogs = $numOfLogs;
        return $this;
    }
    /**
     * List of log file name
     *
     * @return list<string>
     */
    public function getLogFileNames(): array
    {
        return $this->logFileNames;
    }
    /**
     * List of log file name
     *
     * @param list<string> $logFileNames
     *
     * @return self
     */
    public function setLogFileNames(array $logFileNames): self
    {
        $this->initialized['logFileNames'] = true;
        $this->logFileNames = $logFileNames;
        return $this;
    }
}