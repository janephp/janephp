<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class AaaCreateLDAPServer
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
     * @var string
     */
    protected $name;
    /**
     * @var string
     */
    protected $description;
    /**
     * @var string
     */
    protected $ip;
    /**
     * Port
     *
     * @var int
     */
    protected $port = 389;
    /**
     * @var string
     */
    protected $baseDomainName;
    /**
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
     * @var string
     */
    protected $keyAttribute;
    /**
     * @var string
     */
    protected $searchFilter;
    /**
     * Group attribute and user traffic profile mapping
     *
     * @var list<AaaModifyGroupAttrIdentityUserRoleMapping>
     */
    protected $mappings;
    /**
     * @var bool
     */
    protected $standbyServerEnabled = false;
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
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
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
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }
    /**
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
     * @return string
     */
    public function getIp(): string
    {
        return $this->ip;
    }
    /**
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
     * @return string
     */
    public function getBaseDomainName(): string
    {
        return $this->baseDomainName;
    }
    /**
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
     * @return string
     */
    public function getAdminDomainName(): string
    {
        return $this->adminDomainName;
    }
    /**
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
     * @return string
     */
    public function getKeyAttribute(): string
    {
        return $this->keyAttribute;
    }
    /**
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
     * @return string
     */
    public function getSearchFilter(): string
    {
        return $this->searchFilter;
    }
    /**
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
     * @return list<AaaModifyGroupAttrIdentityUserRoleMapping>
     */
    public function getMappings(): array
    {
        return $this->mappings;
    }
    /**
     * Group attribute and user traffic profile mapping
     *
     * @param list<AaaModifyGroupAttrIdentityUserRoleMapping> $mappings
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