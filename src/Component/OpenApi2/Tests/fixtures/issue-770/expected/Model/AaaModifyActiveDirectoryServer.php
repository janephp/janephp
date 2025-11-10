<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class AaaModifyActiveDirectoryServer
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
    protected $windowsDomainName;
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
     * Enable global catalog support
     *
     * @var bool
     */
    protected $globalCatalogEnabled;
    /**
     * Group attribute and user traffic profile mapping
     *
     * @var list<AaaModifyGroupAttrIdentityUserRoleMapping>
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
    protected $standbyWindowsDomainName;
    /**
     * @var string
     */
    protected $standbyAdminDomainName;
    /**
     * @var string
     */
    protected $standbyPassword;
    /**
     * @var bool
     */
    protected $standbyGlobalCatalogEnabled;
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
    public function getWindowsDomainName(): string
    {
        return $this->windowsDomainName;
    }
    /**
     * @param string $windowsDomainName
     *
     * @return self
     */
    public function setWindowsDomainName(string $windowsDomainName): self
    {
        $this->initialized['windowsDomainName'] = true;
        $this->windowsDomainName = $windowsDomainName;
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
     * Enable global catalog support
     *
     * @return bool
     */
    public function getGlobalCatalogEnabled(): bool
    {
        return $this->globalCatalogEnabled;
    }
    /**
     * Enable global catalog support
     *
     * @param bool $globalCatalogEnabled
     *
     * @return self
     */
    public function setGlobalCatalogEnabled(bool $globalCatalogEnabled): self
    {
        $this->initialized['globalCatalogEnabled'] = true;
        $this->globalCatalogEnabled = $globalCatalogEnabled;
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
    public function getStandbyWindowsDomainName(): string
    {
        return $this->standbyWindowsDomainName;
    }
    /**
     * @param string $standbyWindowsDomainName
     *
     * @return self
     */
    public function setStandbyWindowsDomainName(string $standbyWindowsDomainName): self
    {
        $this->initialized['standbyWindowsDomainName'] = true;
        $this->standbyWindowsDomainName = $standbyWindowsDomainName;
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
     * @return bool
     */
    public function getStandbyGlobalCatalogEnabled(): bool
    {
        return $this->standbyGlobalCatalogEnabled;
    }
    /**
     * @param bool $standbyGlobalCatalogEnabled
     *
     * @return self
     */
    public function setStandbyGlobalCatalogEnabled(bool $standbyGlobalCatalogEnabled): self
    {
        $this->initialized['standbyGlobalCatalogEnabled'] = true;
        $this->standbyGlobalCatalogEnabled = $standbyGlobalCatalogEnabled;
        return $this;
    }
}