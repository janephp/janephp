<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class AdministrationRadiusServer
{
    /**
     * @var string
     */
    public string $realm;
    /**
     * @var string
     */
    public string $ip;
    /**
     * Port number of RADIUS Server object
     *
     * @var int
     */
    public int $port;
    /**
     * @var string
     */
    public string $protocol = 'PAP';
    /**
     * Shared secret of RADIUS Server object
     *
     * @var string
     */
    public string $sharedSecret;
    /**
     * IP address or FQDN of RADIUS Server object
     *
     * @var string
     */
    public string $ipFqdn;
    /**
     * @var AdministrationSecondaryRadiusServer
     */
    public AdministrationSecondaryRadiusServer $secondaryRadiusServer;
    /**
     * TLS Enabled
     *
     * @var bool
     */
    public bool $tlsEnabled = false;
    /**
     * Client Certificate Id
     *
     * @var string
     */
    public string $clientCertId;
    /**
     * @var string
     */
    public string $cnSanIdentity;
    /**
     * @var string
     */
    public string $ocspUrl;
}