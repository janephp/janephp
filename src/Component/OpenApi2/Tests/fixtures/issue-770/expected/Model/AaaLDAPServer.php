<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class AaaLDAPServer
{
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * Identifier of the LDAP server
     *
     * @var string
     */
    protected $id;
    /**
     * Identifier of the zone which the LDAP server belongs to
     *
     * @var string
     */
    protected $zoneId;
    /**
     * Tenant UUID
     *
     * @var string
     */
    protected $mvnoId;
    /**
     * Name of the LDAP server
     *
     * @var string
     */
    protected $name;
    /**
     * Description of the LDAP server
     *
     * @var string
     */
    protected $description;
    /**
     * IP address
     *
     * @var string
     */
    protected $ip;
    /**
     * Port
     *
     * @var int
     */
    protected $port;
    /**
     * Base domain name
     *
     * @var string
     */
    protected $baseDomainName;
    /**
     * Admin domain name
     *
     * @var string
     */
    protected $adminDomainName;
    /**
     * Admin password
     *
     * @var string
     */
    protected $password;
    /**
     * Key attribute
     *
     * @var string
     */
    protected $keyAttribute;
    /**
     * Search filter
     *
     * @var string
     */
    protected $searchFilter;
    /**
     * Group attribute and user traffic profile mapping
     *
     * @var list<AaaGroupAttrIdentityUserRoleMapping>
     */
    protected $mappings;
    /**
     * @var bool
     */
    protected $standbyServerEnabled;
    /**
     * @var string
     */
    protected $standbyIp;
    /**
     * @var int
     */
    protected $standbyPort;
    /**
     * @var string
     */
    protected $standbyBaseDomainName;
    /**
     * @var string
     */
    protected $standbyAdminDomainName;
    /**
     * @var string
     */
    protected $standbyPassword;
    /**
     * @var string
     */
    protected $standbyKeyAttribute;
    /**
     * @var string
     */
    protected $standbySearchFilter;
    /**
     * Identifier of the LDAP server
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    /**
     * Identifier of the LDAP server
     *
     * @param string $id
     *
     * @return self
     */
    public function setId(string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;
        return $this;
    }
    /**
     * Identifier of the zone which the LDAP server belongs to
     *
     * @return string
     */
    public function getZoneId(): string
    {
        return $this->zoneId;
    }
    /**
     * Identifier of the zone which the LDAP server belongs to
     *
     * @param string $zoneId
     *
     * @return self
     */
    public function setZoneId(string $zoneId): self
    {
        $this->initialized['zoneId'] = true;
        $this->zoneId = $zoneId;
        return $this;
    }
    /**
     * Tenant UUID
     *
     * @return string
     */
    public function getMvnoId(): string
    {
        return $this->mvnoId;
    }
    /**
     * Tenant UUID
     *
     * @param string $mvnoId
     *
     * @return self
     */
    public function setMvnoId(string $mvnoId): self
    {
        $this->initialized['mvnoId'] = true;
        $this->mvnoId = $mvnoId;
        return $this;
    }
    /**
     * Name of the LDAP server
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * Name of the LDAP server
     *
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;
        return $this;
    }
    /**
     * Description of the LDAP server
     *
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }
    /**
     * Description of the LDAP server
     *
     * @param string $description
     *
     * @return self
     */
    public function setDescription(string $description): self
    {
        $this->initialized['description'] = true;
        $this->description = $description;
        return $this;
    }
    /**
     * IP address
     *
     * @return string
     */
    public function getIp(): string
    {
        return $this->ip;
    }
    /**
     * IP address
     *
     * @param string $ip
     *
     * @return self
     */
    public function setIp(string $ip): self
    {
        $this->initialized['ip'] = true;
        $this->ip = $ip;
        return $this;
    }
    /**
     * Port
     *
     * @return int
     */
    public function getPort(): int
    {
        return $this->port;
    }
    /**
     * Port
     *
     * @param int $port
     *
     * @return self
     */
    public function setPort(int $port): self
    {
        $this->initialized['port'] = true;
        $this->port = $port;
        return $this;
    }
    /**
     * Base domain name
     *
     * @return string
     */
    public function getBaseDomainName(): string
    {
        return $this->baseDomainName;
    }
    /**
     * Base domain name
     *
     * @param string $baseDomainName
     *
     * @return self
     */
    public function setBaseDomainName(string $baseDomainName): self
    {
        $this->initialized['baseDomainName'] = true;
        $this->baseDomainName = $baseDomainName;
        return $this;
    }
    /**
     * Admin domain name
     *
     * @return string
     */
    public function getAdminDomainName(): string
    {
        return $this->adminDomainName;
    }
    /**
     * Admin domain name
     *
     * @param string $adminDomainName
     *
     * @return self
     */
    public function setAdminDomainName(string $adminDomainName): self
    {
        $this->initialized['adminDomainName'] = true;
        $this->adminDomainName = $adminDomainName;
        return $this;
    }
    /**
     * Admin password
     *
     * @return string
     */
    public function getPassword(): string
    {
        return $this->password;
    }
    /**
     * Admin password
     *
     * @param string $password
     *
     * @return self
     */
    public function setPassword(string $password): self
    {
        $this->initialized['password'] = true;
        $this->password = $password;
        return $this;
    }
    /**
     * Key attribute
     *
     * @return string
     */
    public function getKeyAttribute(): string
    {
        return $this->keyAttribute;
    }
    /**
     * Key attribute
     *
     * @param string $keyAttribute
     *
     * @return self
     */
    public function setKeyAttribute(string $keyAttribute): self
    {
        $this->initialized['keyAttribute'] = true;
        $this->keyAttribute = $keyAttribute;
        return $this;
    }
    /**
     * Search filter
     *
     * @return string
     */
    public function getSearchFilter(): string
    {
        return $this->searchFilter;
    }
    /**
     * Search filter
     *
     * @param string $searchFilter
     *
     * @return self
     */
    public function setSearchFilter(string $searchFilter): self
    {
        $this->initialized['searchFilter'] = true;
        $this->searchFilter = $searchFilter;
        return $this;
    }
    /**
     * Group attribute and user traffic profile mapping
     *
     * @return list<AaaGroupAttrIdentityUserRoleMapping>
     */
    public function getMappings(): array
    {
        return $this->mappings;
    }
    /**
     * Group attribute and user traffic profile mapping
     *
     * @param list<AaaGroupAttrIdentityUserRoleMapping> $mappings
     *
     * @return self
     */
    public function setMappings(array $mappings): self
    {
        $this->initialized['mappings'] = true;
        $this->mappings = $mappings;
        return $this;
    }
    /**
     * @return bool
     */
    public function getStandbyServerEnabled(): bool
    {
        return $this->standbyServerEnabled;
    }
    /**
     * @param bool $standbyServerEnabled
     *
     * @return self
     */
    public function setStandbyServerEnabled(bool $standbyServerEnabled): self
    {
        $this->initialized['standbyServerEnabled'] = true;
        $this->standbyServerEnabled = $standbyServerEnabled;
        return $this;
    }
    /**
     * @return string
     */
    public function getStandbyIp(): string
    {
        return $this->standbyIp;
    }
    /**
     * @param string $standbyIp
     *
     * @return self
     */
    public function setStandbyIp(string $standbyIp): self
    {
        $this->initialized['standbyIp'] = true;
        $this->standbyIp = $standbyIp;
        return $this;
    }
    /**
     * @return int
     */
    public function getStandbyPort(): int
    {
        return $this->standbyPort;
    }
    /**
     * @param int $standbyPort
     *
     * @return self
     */
    public function setStandbyPort(int $standbyPort): self
    {
        $this->initialized['standbyPort'] = true;
        $this->standbyPort = $standbyPort;
        return $this;
    }
    /**
     * @return string
     */
    public function getStandbyBaseDomainName(): string
    {
        return $this->standbyBaseDomainName;
    }
    /**
     * @param string $standbyBaseDomainName
     *
     * @return self
     */
    public function setStandbyBaseDomainName(string $standbyBaseDomainName): self
    {
        $this->initialized['standbyBaseDomainName'] = true;
        $this->standbyBaseDomainName = $standbyBaseDomainName;
        return $this;
    }
    /**
     * @return string
     */
    public function getStandbyAdminDomainName(): string
    {
        return $this->standbyAdminDomainName;
    }
    /**
     * @param string $standbyAdminDomainName
     *
     * @return self
     */
    public function setStandbyAdminDomainName(string $standbyAdminDomainName): self
    {
        $this->initialized['standbyAdminDomainName'] = true;
        $this->standbyAdminDomainName = $standbyAdminDomainName;
        return $this;
    }
    /**
     * @return string
     */
    public function getStandbyPassword(): string
    {
        return $this->standbyPassword;
    }
    /**
     * @param string $standbyPassword
     *
     * @return self
     */
    public function setStandbyPassword(string $standbyPassword): self
    {
        $this->initialized['standbyPassword'] = true;
        $this->standbyPassword = $standbyPassword;
        return $this;
    }
    /**
     * @return string
     */
    public function getStandbyKeyAttribute(): string
    {
        return $this->standbyKeyAttribute;
    }
    /**
     * @param string $standbyKeyAttribute
     *
     * @return self
     */
    public function setStandbyKeyAttribute(string $standbyKeyAttribute): self
    {
        $this->initialized['standbyKeyAttribute'] = true;
        $this->standbyKeyAttribute = $standbyKeyAttribute;
        return $this;
    }
    /**
     * @return string
     */
    public function getStandbySearchFilter(): string
    {
        return $this->standbySearchFilter;
    }
    /**
     * @param string $standbySearchFilter
     *
     * @return self
     */
    public function setStandbySearchFilter(string $standbySearchFilter): self
    {
        $this->initialized['standbySearchFilter'] = true;
        $this->standbySearchFilter = $standbySearchFilter;
        return $this;
    }
}