<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Issue770\Model;

class ServiceLDAPService
{
    /**
     * Identifier of the LDAP authentication service
     *
     * @var string
     */
    public string $id;
    /**
     * Tenant UUID
     *
     * @var string
     */
    public string $mvnoId;
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
     * Authentication protocol
     *
     * @var string
     */
    public string $protocol;
    /**
     * Authentication protocol same as protocol.
     *
     * @var string
     */
    public string $type;
    /**
     * @var string
     */
    public string $description;
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
     * @var list<ServiceGroupAttrIdentityUserRoleMapping>
     */
    public array $mappings;
    /**
     * Timestamp of being created
     *
     * @var int
     */
    public int $createDateTime;
    /**
     * Timestamp of being modified
     *
     * @var int
     */
    public int $modifiedDateTime;
    /**
     * Creator ID
     *
     * @var string
     */
    public string $creatorId;
    /**
     * Modifier ID
     *
     * @var string
     */
    public string $modifierId;
    /**
     * Creator Name
     *
     * @var string
     */
    public string $creatorUsername;
    /**
     * Modifier Name
     *
     * @var string
     */
    public string $modifierUsername;
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