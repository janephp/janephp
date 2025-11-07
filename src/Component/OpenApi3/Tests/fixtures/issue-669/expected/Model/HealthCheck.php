<?php

namespace Jane\Generated\DigitalOcean\Model;

class HealthCheck extends \ArrayObject
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
     * The protocol used for health checks sent to the backend Droplets. The possible values are `http`, `https`, or `tcp`.
     *
     * @var string
     */
    protected $protocol = 'http';
    /**
     * An integer representing the port on the backend Droplets on which the health check will attempt a connection.
     *
     * @var int
     */
    protected $port = 80;
    /**
     * The path on the backend Droplets to which the load balancer instance will send a request.
     *
     * @var string
     */
    protected $path = '/';
    /**
     * The number of seconds between between two consecutive health checks.
     *
     * @var int
     */
    protected $checkIntervalSeconds = 10;
    /**
     * The number of seconds the load balancer instance will wait for a response until marking a health check as failed.
     *
     * @var int
     */
    protected $responseTimeoutSeconds = 5;
    /**
     * The number of times a health check must fail for a backend Droplet to be marked "unhealthy" and be removed from the pool.
     *
     * @var int
     */
    protected $unhealthyThreshold = 5;
    /**
     * The number of times a health check must pass for a backend Droplet to be marked "healthy" and be re-added to the pool.
     *
     * @var int
     */
    protected $healthyThreshold = 3;
    /**
     * The protocol used for health checks sent to the backend Droplets. The possible values are `http`, `https`, or `tcp`.
     *
     * @return string
     */
    public function getProtocol(): string
    {
        return $this->protocol;
    }
    /**
     * The protocol used for health checks sent to the backend Droplets. The possible values are `http`, `https`, or `tcp`.
     *
     * @param string $protocol
     *
     * @return self
     */
    public function setProtocol(string $protocol): self
    {
        $this->initialized['protocol'] = true;
        $this->protocol = $protocol;
        return $this;
    }
    /**
     * An integer representing the port on the backend Droplets on which the health check will attempt a connection.
     *
     * @return int
     */
    public function getPort(): int
    {
        return $this->port;
    }
    /**
     * An integer representing the port on the backend Droplets on which the health check will attempt a connection.
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
     * The path on the backend Droplets to which the load balancer instance will send a request.
     *
     * @return string
     */
    public function getPath(): string
    {
        return $this->path;
    }
    /**
     * The path on the backend Droplets to which the load balancer instance will send a request.
     *
     * @param string $path
     *
     * @return self
     */
    public function setPath(string $path): self
    {
        $this->initialized['path'] = true;
        $this->path = $path;
        return $this;
    }
    /**
     * The number of seconds between between two consecutive health checks.
     *
     * @return int
     */
    public function getCheckIntervalSeconds(): int
    {
        return $this->checkIntervalSeconds;
    }
    /**
     * The number of seconds between between two consecutive health checks.
     *
     * @param int $checkIntervalSeconds
     *
     * @return self
     */
    public function setCheckIntervalSeconds(int $checkIntervalSeconds): self
    {
        $this->initialized['checkIntervalSeconds'] = true;
        $this->checkIntervalSeconds = $checkIntervalSeconds;
        return $this;
    }
    /**
     * The number of seconds the load balancer instance will wait for a response until marking a health check as failed.
     *
     * @return int
     */
    public function getResponseTimeoutSeconds(): int
    {
        return $this->responseTimeoutSeconds;
    }
    /**
     * The number of seconds the load balancer instance will wait for a response until marking a health check as failed.
     *
     * @param int $responseTimeoutSeconds
     *
     * @return self
     */
    public function setResponseTimeoutSeconds(int $responseTimeoutSeconds): self
    {
        $this->initialized['responseTimeoutSeconds'] = true;
        $this->responseTimeoutSeconds = $responseTimeoutSeconds;
        return $this;
    }
    /**
     * The number of times a health check must fail for a backend Droplet to be marked "unhealthy" and be removed from the pool.
     *
     * @return int
     */
    public function getUnhealthyThreshold(): int
    {
        return $this->unhealthyThreshold;
    }
    /**
     * The number of times a health check must fail for a backend Droplet to be marked "unhealthy" and be removed from the pool.
     *
     * @param int $unhealthyThreshold
     *
     * @return self
     */
    public function setUnhealthyThreshold(int $unhealthyThreshold): self
    {
        $this->initialized['unhealthyThreshold'] = true;
        $this->unhealthyThreshold = $unhealthyThreshold;
        return $this;
    }
    /**
     * The number of times a health check must pass for a backend Droplet to be marked "healthy" and be re-added to the pool.
     *
     * @return int
     */
    public function getHealthyThreshold(): int
    {
        return $this->healthyThreshold;
    }
    /**
     * The number of times a health check must pass for a backend Droplet to be marked "healthy" and be re-added to the pool.
     *
     * @param int $healthyThreshold
     *
     * @return self
     */
    public function setHealthyThreshold(int $healthyThreshold): self
    {
        $this->initialized['healthyThreshold'] = true;
        $this->healthyThreshold = $healthyThreshold;
        return $this;
    }
}