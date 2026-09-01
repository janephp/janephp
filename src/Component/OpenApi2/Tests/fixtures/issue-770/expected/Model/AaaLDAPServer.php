<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class AaaLDAPServer
{
    /**
     * Identifier of the LDAP server
     *
     * @var string
     */
    public string $id;
    /**
     * Identifier of the zone which the LDAP server belongs to
     *
     * @var string
     */
    public string $zoneId;
    /**
     * Tenant UUID
     *
     * @var string
     */
    public string $mvnoId;
    /**
     * Name of the LDAP server
     *
     * @var string
     */
    public string $name;
    /**
     * Description of the LDAP server
     *
     * @var string
     */
    public string $description;
    /**
     * IP address
     *
     * @var string
     */
    public string $ip;
    /**
     * Port
     *
     * @var int
     */
    public int $port;
    /**
     * Base domain name
     *
     * @var string
     */
    public string $baseDomainName;
    /**
     * Admin domain name
     *
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
     * Key attribute
     *
     * @var string
     */
    public string $keyAttribute;
    /**
     * Search filter
     *
     * @var string
     */
    public string $searchFilter;
    /**
     * Group attribute and user traffic profile mapping
     *
     * @var list<AaaGroupAttrIdentityUserRoleMapping>
     */
    public array $mappings;
    /**
     * @var bool
     */
    public bool $standbyServerEnabled;
    /**
     * @var string
     */
    public string $standbyIp;
    /**
     * @var int
     */
    public int $standbyPort;
    /**
     * @var string
     */
    public string $standbyBaseDomainName;
    /**
     * @var string
     */
    public string $standbyAdminDomainName;
    /**
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