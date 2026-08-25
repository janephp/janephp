<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class AppHealthCheckSpec implements AdditionalPropertiesInterface
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
     * The number of failed health checks before considered unhealthy.
     *
     * @var int
     */
    protected $failureThreshold;
    /**
     * The port on which the health check will be performed.
     *
     * @var int
     */
    protected $port;
    /**
     * The route path used for the HTTP health check ping. If not set, the HTTP health check will be disabled and a TCP health check used instead.
     *
     * @var string
     */
    protected $httpPath;
    /**
     * The number of seconds to wait before beginning health checks.
     *
     * @var int
     */
    protected $initialDelaySeconds;
    /**
     * The number of seconds to wait between health checks.
     *
     * @var int
     */
    protected $periodSeconds;
    /**
     * The number of successful health checks before considered healthy.
     *
     * @var int
     */
    protected $successThreshold;
    /**
     * The number of seconds after which the check times out.
     *
     * @var int
     */
    protected $timeoutSeconds;
    /**
     * The number of failed health checks before considered unhealthy.
     *
     * @return int
     */
    public function getFailureThreshold(): int
    {
        return $this->failureThreshold;
    }
    /**
     * The number of failed health checks before considered unhealthy.
     *
     * @param int $failureThreshold
     *
     * @return self
     */
    public function setFailureThreshold(int $failureThreshold): self
    {
        $this->initialized['failureThreshold'] = true;
        $this->failureThreshold = $failureThreshold;
        return $this;
    }
    /**
     * The port on which the health check will be performed.
     *
     * @return int
     */
    public function getPort(): int
    {
        return $this->port;
    }
    /**
     * The port on which the health check will be performed.
     *
     * @param int $port
     *
     * @return self
     */
    public function setPort(int $port): self
    {
        $this->initialized['port'] = true;
        $this->port = $port;
        return $this;
    }
    /**
     * The route path used for the HTTP health check ping. If not set, the HTTP health check will be disabled and a TCP health check used instead.
     *
     * @return string
     */
    public function getHttpPath(): string
    {
        return $this->httpPath;
    }
    /**
     * The route path used for the HTTP health check ping. If not set, the HTTP health check will be disabled and a TCP health check used instead.
     *
     * @param string $httpPath
     *
     * @return self
     */
    public function setHttpPath(string $httpPath): self
    {
        $this->initialized['httpPath'] = true;
        $this->httpPath = $httpPath;
        return $this;
    }
    /**
     * The number of seconds to wait before beginning health checks.
     *
     * @return int
     */
    public function getInitialDelaySeconds(): int
    {
        return $this->initialDelaySeconds;
    }
    /**
     * The number of seconds to wait before beginning health checks.
     *
     * @param int $initialDelaySeconds
     *
     * @return self
     */
    public function setInitialDelaySeconds(int $initialDelaySeconds): self
    {
        $this->initialized['initialDelaySeconds'] = true;
        $this->initialDelaySeconds = $initialDelaySeconds;
        return $this;
    }
    /**
     * The number of seconds to wait between health checks.
     *
     * @return int
     */
    public function getPeriodSeconds(): int
    {
        return $this->periodSeconds;
    }
    /**
     * The number of seconds to wait between health checks.
     *
     * @param int $periodSeconds
     *
     * @return self
     */
    public function setPeriodSeconds(int $periodSeconds): self
    {
        $this->initialized['periodSeconds'] = true;
        $this->periodSeconds = $periodSeconds;
        return $this;
    }
    /**
     * The number of successful health checks before considered healthy.
     *
     * @return int
     */
    public function getSuccessThreshold(): int
    {
        return $this->successThreshold;
    }
    /**
     * The number of successful health checks before considered healthy.
     *
     * @param int $successThreshold
     *
     * @return self
     */
    public function setSuccessThreshold(int $successThreshold): self
    {
        $this->initialized['successThreshold'] = true;
        $this->successThreshold = $successThreshold;
        return $this;
    }
    /**
     * The number of seconds after which the check times out.
     *
     * @return int
     */
    public function getTimeoutSeconds(): int
    {
        return $this->timeoutSeconds;
    }
    /**
     * The number of seconds after which the check times out.
     *
     * @param int $timeoutSeconds
     *
     * @return self
     */
    public function setTimeoutSeconds(int $timeoutSeconds): self
    {
        $this->initialized['timeoutSeconds'] = true;
        $this->timeoutSeconds = $timeoutSeconds;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['failureThreshold' => ['failure_threshold', 'getFailureThreshold', 'setFailureThreshold'], 'port' => ['port', 'getPort', 'setPort'], 'httpPath' => ['http_path', 'getHttpPath', 'setHttpPath'], 'initialDelaySeconds' => ['initial_delay_seconds', 'getInitialDelaySeconds', 'setInitialDelaySeconds'], 'periodSeconds' => ['period_seconds', 'getPeriodSeconds', 'setPeriodSeconds'], 'successThreshold' => ['success_threshold', 'getSuccessThreshold', 'setSuccessThreshold'], 'timeoutSeconds' => ['timeout_seconds', 'getTimeoutSeconds', 'setTimeoutSeconds']];
    }
}