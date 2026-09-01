<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class ServiceCreateRadiusAuthentication
{
    /**
     * Identifier of the authentication service
     *
     * @var string
     */
    public string $id;
    /**
     * Domain Id
     *
     * @var string
     */
    public string $domainId;
    /**
     * @var string
     */
    public string $name;
    /**
     * @var string
     */
    public string $friendlyName;
    /**
     * @var string
     */
    public string $description;
    /**
     * RFC5580 out of band location delivery support(for Ruckus AP only)
     *
     * @var bool
     */
    public bool $locationDeliveryEnabled = false;
    /**
     * Authentication protocol
     *
     * @var string
     */
    public string $type = 'RADIUS';
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
     * Group attribute and user traffic profile mapping
     *
     * @var list<ServiceModifyGroupAttrIdentityUserRoleMapping>
     */
    public array $mappings;
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
     * TLS Enabled
     *
     * @var bool
     */
    public bool $tlsEnabled = false;
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