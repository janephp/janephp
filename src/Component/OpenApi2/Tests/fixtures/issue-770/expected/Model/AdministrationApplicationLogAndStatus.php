<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Issue770\Model;

class AdministrationApplicationLogAndStatus
{
    /**
     * Application name
     *
     * @var string
     */
    public string $applicationName;
    /**
     * Health status
     *
     * @var string
     */
    public string $healthStatus;
    /**
     * Log level
     *
     * @var string
     */
    public string $logLevel;
    /**
     * # of Logs
     *
     * @var int
     */
    public int $numOfLogs;
    /**
     * List of log file name
     *
     * @var list<string>
     */
    public array $logFileNames;
}