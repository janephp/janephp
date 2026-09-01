<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class HealthCheck implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * The protocol used for health checks sent to the backend Droplets. The possible values are `http`, `https`, or `tcp`.
     *
     * @var string
     */
    public string $protocol = 'http';
    /**
     * An integer representing the port on the backend Droplets on which the health check will attempt a connection.
     *
     * @var int
     */
    public int $port = 80;
    /**
     * The path on the backend Droplets to which the load balancer instance will send a request.
     *
     * @var string
     */
    public string $path = '/';
    /**
     * The number of seconds between between two consecutive health checks.
     *
     * @var int
     */
    public int $checkIntervalSeconds = 10;
    /**
     * The number of seconds the load balancer instance will wait for a response until marking a health check as failed.
     *
     * @var int
     */
    public int $responseTimeoutSeconds = 5;
    /**
     * The number of times a health check must fail for a backend Droplet to be marked "unhealthy" and be removed from the pool.
     *
     * @var int
     */
    public int $unhealthyThreshold = 5;
    /**
     * The number of times a health check must pass for a backend Droplet to be marked "healthy" and be re-added to the pool.
     *
     * @var int
     */
    public int $healthyThreshold = 3;
    public function definedProperties(): array
    {
        return ['protocol' => 'protocol', 'port' => 'port', 'path' => 'path', 'checkIntervalSeconds' => 'check_interval_seconds', 'responseTimeoutSeconds' => 'response_timeout_seconds', 'unhealthyThreshold' => 'unhealthy_threshold', 'healthyThreshold' => 'healthy_threshold'];
    }
}