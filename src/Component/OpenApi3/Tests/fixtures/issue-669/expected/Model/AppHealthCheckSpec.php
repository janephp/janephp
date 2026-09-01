<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class AppHealthCheckSpec implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * The number of failed health checks before considered unhealthy.
     *
     * @var int
     */
    public int $failureThreshold;
    /**
     * The port on which the health check will be performed.
     *
     * @var int
     */
    public int $port;
    /**
     * The route path used for the HTTP health check ping. If not set, the HTTP health check will be disabled and a TCP health check used instead.
     *
     * @var string
     */
    public string $httpPath;
    /**
     * The number of seconds to wait before beginning health checks.
     *
     * @var int
     */
    public int $initialDelaySeconds;
    /**
     * The number of seconds to wait between health checks.
     *
     * @var int
     */
    public int $periodSeconds;
    /**
     * The number of successful health checks before considered healthy.
     *
     * @var int
     */
    public int $successThreshold;
    /**
     * The number of seconds after which the check times out.
     *
     * @var int
     */
    public int $timeoutSeconds;
    public function definedProperties(): array
    {
        return ['failureThreshold' => 'failure_threshold', 'port' => 'port', 'httpPath' => 'http_path', 'initialDelaySeconds' => 'initial_delay_seconds', 'periodSeconds' => 'period_seconds', 'successThreshold' => 'success_threshold', 'timeoutSeconds' => 'timeout_seconds'];
    }
}