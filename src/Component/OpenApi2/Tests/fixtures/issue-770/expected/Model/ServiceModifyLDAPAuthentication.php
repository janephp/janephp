<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class ServiceModifyLDAPAuthentication
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
     * Authentication protocol same as protocol.
     *
     * @var string
     */
    public string $type;
    /**
     * LDAP over TLS Enabled
     *
     * @var bool
     */
    public bool $tlsEnabled;
    /**
     * @var string
     */
    public string $cnIdentity;
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
    public string $baseDomainName;
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
     * @var string
     */
    public string $keyAttribute;
    /**
     * @var string
     */
    public string $searchFilter;
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
    public bool $standbyServerEnabled;
    /**
     * LDAP over TLS Enabled - Standby Cluster settings
     *
     * @var bool
     */
    public bool $standbyTlsEnabled;
    /**
     * CN Identify - Standby Cluster settings
     *
     * @var string
     */
    public string $standbyCnIdentity;
    /**
     * @var string
     */
    public string $standbyIp;
    /**
     * Port - Standby Cluster settings
     *
     * @var int
     */
    public int $standbyPort = 389;
    /**
     * @var string
     */
    public string $standbyBaseDomainName;
    /**
     * @var string
     */
    public string $standbyAdminDomainName;
    /**
     * Admin password - Standby Cluster settings
     *
     * @var string
     */
    public string $standbyPassword;
    /**
     * @var string
     */
    public string $standbyKeyAttribute;
    /**
     * @var string
     */
    public string $standbySearchFilter;
}