<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Issue770\Model;

class AaaCreateLDAPServer
{
    /**
     * @var string
     */
    public string $name;
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
     * @var list<AaaModifyGroupAttrIdentityUserRoleMapping>
     */
    public array $mappings;
    /**
     * @var bool
     */
    public bool $standbyServerEnabled = false;
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