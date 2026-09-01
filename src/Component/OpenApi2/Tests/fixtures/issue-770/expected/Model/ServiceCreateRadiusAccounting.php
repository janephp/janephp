<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class ServiceCreateRadiusAccounting
{
    /**
     * @var string
     */
    public string $name;
    /**
     * Domain Id
     *
     * @var string
     */
    public string $domainId;
    /**
     * Accounting protocol.
     *
     * @var string
     */
    public string $protocol;
    /**
     * Accounting protocol.
     *
     * @var string
     */
    public string $type;
    /**
     * @var string
     */
    public string $description;
    /**
     * @var CommonRadiusServerWhenTlsEnabled
     */
    public CommonRadiusServerWhenTlsEnabled $primary;
    /**
     * @var ServiceSecondaryRadiusServer
     */
    public ServiceSecondaryRadiusServer $secondary;
    /**
     * @var CommonHealthCheckPolicy
     */
    public CommonHealthCheckPolicy $healthCheckPolicy;
    /**
     * @var CommonRateLimiting
     */
    public CommonRateLimiting $rateLimiting;
    /**
     * @var CommonRadiusServerWhenTlsEnabled
     */
    public CommonRadiusServerWhenTlsEnabled $standbyPrimary;
    /**
     * StandbyCluster different AAA Settings Enabled
     *
     * @var bool
     */
    public bool $standbyServerEnabled = false;
    /**
     * @var bool
     */
    public bool $tlsEnabled;
    /**
     * @var string
     */
    public string $ocspUrl;
    /**
     * @var string
     */
    public string $cnSanIdentity;
    /**
     * @var string
     */
    public string $clientCertId;
    /**
     * @var string
     */
    public string $serverCertId;
    /**
     * @var bool
     */
    public bool $standbyTlsEnabled;
    /**
     * @var string
     */
    public string $standbyOcspUrl;
    /**
     * @var string
     */
    public string $standbyCnSanIdentity;
    /**
     * @var string
     */
    public string $standbyClientCertId;
    /**
     * @var string
     */
    public string $standbyServerCertId;
}