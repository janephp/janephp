<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class AdministrationModifyLogLevel
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
     * Application name.
     *
     * @var string
     */
    protected $applicationName;
    /**
     * Log level.
     *
     * @var string
     */
    protected $logLevel;
    /**
     * Application name.
     *
     * @return string
     */
    public function getApplicationName(): string
    {
        return $this->applicationName;
    }
    /**
     * Application name.
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
     * Log level.
     *
     * @return string
     */
    public function getLogLevel(): string
    {
        return $this->logLevel;
    }
    /**
     * Log level.
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
}