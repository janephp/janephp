<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class ServiceModifyLDAPAuthentication
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
     * Identifier of the authentication service
     *
     * @var string
     */
    protected $id;
    /**
     * Domain Id
     *
     * @var string
     */
    protected $domainId;
    /**
     * @var string
     */
    protected $name;
    /**
     * @var string
     */
    protected $friendlyName;
    /**
     * @var string
     */
    protected $description;
    /**
     * Authentication protocol same as protocol.
     *
     * @var string
     */
    protected $type;
    /**
     * LDAP over TLS Enabled
     *
     * @var bool
     */
    protected $tlsEnabled;
    /**
     * @var string
     */
    protected $cnIdentity;
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
     * @var list<ServiceModifyGroupAttrIdentityUserRoleMapping>
     */
    protected $mappings;
    /**
     * StandbyCluster different AAA Settings Enabled
     *
     * @var bool
     */
    protected $standbyServerEnabled;
    /**
     * LDAP over TLS Enabled - Standby Cluster settings
     *
     * @var bool
     */
    protected $standbyTlsEnabled;
    /**
     * CN Identify - Standby Cluster settings
     *
     * @var string
     */
    protected $standbyCnIdentity;
    /**
     * @var string
     */
    protected $standbyIp;
    /**
     * Port - Standby Cluster settings
     *
     * @var int
     */
    protected $standbyPort = 389;
    /**
     * @var string
     */
    protected $standbyBaseDomainName;
    /**
     * @var string
     */
    protected $standbyAdminDomainName;
    /**
     * Admin password - Standby Cluster settings
     *
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
     * Identifier of the authentication service
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    /**
     * Identifier of the authentication service
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
     * Domain Id
     *
     * @return string
     */
    public function getDomainId(): string
    {
        return $this->domainId;
    }
    /**
     * Domain Id
     *
     * @param string $domainId
     *
     * @return self
     */
    public function setDomainId(string $domainId): self
    {
        $this->initialized['domainId'] = true;
        $this->domainId = $domainId;
        return $this;
    }
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
    public function getFriendlyName(): string
    {
        return $this->friendlyName;
    }
    /**
     * @param string $friendlyName
     *
     * @return self
     */
    public function setFriendlyName(string $friendlyName): self
    {
        $this->initialized['friendlyName'] = true;
        $this->friendlyName = $friendlyName;
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
     * Authentication protocol same as protocol.
     *
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }
    /**
     * Authentication protocol same as protocol.
     *
     * @param string $type
     *
     * @return self
     */
    public function setType(string $type): self
    {
        $this->initialized['type'] = true;
        $this->type = $type;
        return $this;
    }
    /**
     * LDAP over TLS Enabled
     *
     * @return bool
     */
    public function getTlsEnabled(): bool
    {
        return $this->tlsEnabled;
    }
    /**
     * LDAP over TLS Enabled
     *
     * @param bool $tlsEnabled
     *
     * @return self
     */
    public function setTlsEnabled(bool $tlsEnabled): self
    {
        $this->initialized['tlsEnabled'] = true;
        $this->tlsEnabled = $tlsEnabled;
        return $this;
    }
    /**
     * @return string
     */
    public function getCnIdentity(): string
    {
        return $this->cnIdentity;
    }
    /**
     * @param string $cnIdentity
     *
     * @return self
     */
    public function setCnIdentity(string $cnIdentity): self
    {
        $this->initialized['cnIdentity'] = true;
        $this->cnIdentity = $cnIdentity;
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
     * @return list<ServiceModifyGroupAttrIdentityUserRoleMapping>
     */
    public function getMappings(): array
    {
        return $this->mappings;
    }
    /**
     * Group attribute and user traffic profile mapping
     *
     * @param list<ServiceModifyGroupAttrIdentityUserRoleMapping> $mappings
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
     * StandbyCluster different AAA Settings Enabled
     *
     * @return bool
     */
    public function getStandbyServerEnabled(): bool
    {
        return $this->standbyServerEnabled;
    }
    /**
     * StandbyCluster different AAA Settings Enabled
     *
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
     * LDAP over TLS Enabled - Standby Cluster settings
     *
     * @return bool
     */
    public function getStandbyTlsEnabled(): bool
    {
        return $this->standbyTlsEnabled;
    }
    /**
     * LDAP over TLS Enabled - Standby Cluster settings
     *
     * @param bool $standbyTlsEnabled
     *
     * @return self
     */
    public function setStandbyTlsEnabled(bool $standbyTlsEnabled): self
    {
        $this->initialized['standbyTlsEnabled'] = true;
        $this->standbyTlsEnabled = $standbyTlsEnabled;
        return $this;
    }
    /**
     * CN Identify - Standby Cluster settings
     *
     * @return string
     */
    public function getStandbyCnIdentity(): string
    {
        return $this->standbyCnIdentity;
    }
    /**
     * CN Identify - Standby Cluster settings
     *
     * @param string $standbyCnIdentity
     *
     * @return self
     */
    public function setStandbyCnIdentity(string $standbyCnIdentity): self
    {
        $this->initialized['standbyCnIdentity'] = true;
        $this->standbyCnIdentity = $standbyCnIdentity;
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
     * Port - Standby Cluster settings
     *
     * @return int
     */
    public function getStandbyPort(): int
    {
        return $this->standbyPort;
    }
    /**
     * Port - Standby Cluster settings
     *
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
     * Admin password - Standby Cluster settings
     *
     * @return string
     */
    public function getStandbyPassword(): string
    {
        return $this->standbyPassword;
    }
    /**
     * Admin password - Standby Cluster settings
     *
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