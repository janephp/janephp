<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Issue770\Model;

class ServiceCreateActiveDirectoryAuthentication
{
    /**
     * Identifier of the authentication service
     *
     * @var string
     */
    public string $id;
    /**
     * Authentication protocol.
     *
     * @var string
     */
    public string $type;
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
     * @var string
     */
    public string $ip;
    /**
     * Port
     *
     * @var int
     */
    public int $port = 389;
    /**
     * @var string
     */
    public string $windowsDomainName;
    /**
     * @var string
     */
    public string $adminDomainName;
    /**
     * Admin password
     *
     * @var string
     */
    public string $password;
    /**
     * AD over TLS Enabled
     *
     * @var bool
     */
    public bool $tlsEnabled;
    /**
     * @var string
     */
    public string $cnIdentity;
    /**
     * Global catalog support enabled or disabled
     *
     * @var bool
     */
    public bool $globalCatalogEnabled;
    /**
     * Group attribute and user traffic profile mapping
     *
     * @var list<ServiceModifyGroupAttrIdentityUserRoleMapping>
     */
    public array $mappings;
    /**
     * StandbyCluster different AAA Settings Enabled
     *
     * @var bool
     */
    public bool $standbyServerEnabled = false;
    /**
     * @var string
     */
    public string $standbyIp;
    /**
     * Port for standby cluster
     *
     * @var int
     */
    public int $standbyPort = 389;
    /**
     * @var string
     */
    public string $standbyWindowsDomainName;
    /**
     * @var string
     */
    public string $standbyAdminDomainName;
    /**
     * Admin password for standby cluster
     *
     * @var string
     */
    public string $standbyPassword;
    /**
     * AD over TLS Enabled for standby cluster
     *
     * @var bool
     */
    public bool $standbyTlsEnabled;
    /**
     * CN Identify for standby cluster
     *
     * @var string
     */
    public string $standbyCnIdentity;
    /**
     * Global catalog support enabled or disabled for standby cluster
     *
     * @var bool
     */
    public bool $standbyGlobalCatalogEnabled;
}