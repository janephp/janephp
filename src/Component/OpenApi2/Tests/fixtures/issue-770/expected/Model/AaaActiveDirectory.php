<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class AaaActiveDirectory
{
    /**
     * Identifier of the active directory server
     *
     * @var string
     */
    public string $id;
    /**
     * Identifier of the zone which the active directory server belongs to
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
     * Name of the active directory server
     *
     * @var string
     */
    public string $name;
    /**
     * Description of the active directory server
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
     * Windows domain name
     *
     * @var string
     */
    public string $windowsDomainName;
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
     * Enable global catalog support
     *
     * @var bool
     */
    public bool $globalCatalogEnabled;
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
    public string $standbyWindowsDomainName;
    /**
     * @var string
     */
    public string $standbyAdminDomainName;
    /**
     * @var string
     */
    public string $standbyPassword;
    /**
     * @var bool
     */
    public bool $standbyGlobalCatalogEnabled;
}