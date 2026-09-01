<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Issue770\Model;

class AdministrationActiveDirectoryServer
{
    /**
     * @var string
     */
    public string $realm;
    /**
     * TLS Enabled
     *
     * @var bool
     */
    public bool $tlsEnabled = false;
    /**
     * @var string
     */
    public string $cnIdentity;
    /**
     * @var string
     */
    public string $ip;
    /**
     * Port number of Active Directory Server object
     *
     * @var int
     */
    public int $port;
    /**
     * Windows Domain Name of Active Directory Server object
     *
     * @var string
     */
    public string $windowsDomainName;
    /**
     * The Active Directory proxy account that have permission to perform query operations.
     *
     * @var string
     */
    public string $proxyUserPrincipalName;
    /**
     * The Active Directory proxy password that have permission to perform query operations.
     *
     * @var string
     */
    public string $proxyUserPassword;
}