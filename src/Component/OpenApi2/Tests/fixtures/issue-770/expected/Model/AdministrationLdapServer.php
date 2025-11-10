<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class AdministrationLdapServer
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
    protected $realm;
    /**
     * TLS Enabled
     *
     * @var bool
     */
    protected $tlsEnabled = false;
    /**
     * @var string
     */
    protected $cnIdentity;
    /**
     * @var string
     */
    protected $ip;
    /**
     * Port number of LDAP Server object
     *
     * @var int
     */
    protected $port;
    /**
     * Base Domain Name of LDAP Server object
     *
     * @var string
     */
    protected $baseDomainName;
    /**
     * Admin Domain Name of LDAP Server object
     *
     * @var string
     */
    protected $adminDomainName;
    /**
     * Admin password of LDAP Server object
     *
     * @var string
     */
    protected $adminPassword;
    /**
     * Key attribute of LDAP Server object
     *
     * @var string
     */
    protected $keyAttribute;
    /**
     * Search filter of LDAP Server object
     *
     * @var string
     */
    protected $searchFilter;
    /**
     * @return string
     */
    public function getRealm(): string
    {
        return $this->realm;
    }
    /**
     * @param string $realm
     *
     * @return self
     */
    public function setRealm(string $realm): self
    {
        $this->initialized['realm'] = true;
        $this->realm = $realm;
        return $this;
    }
    /**
     * TLS Enabled
     *
     * @return bool
     */
    public function getTlsEnabled(): bool
    {
        return $this->tlsEnabled;
    }
    /**
     * TLS Enabled
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
     * Port number of LDAP Server object
     *
     * @return int
     */
    public function getPort(): int
    {
        return $this->port;
    }
    /**
     * Port number of LDAP Server object
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
     * Base Domain Name of LDAP Server object
     *
     * @return string
     */
    public function getBaseDomainName(): string
    {
        return $this->baseDomainName;
    }
    /**
     * Base Domain Name of LDAP Server object
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
     * Admin Domain Name of LDAP Server object
     *
     * @return string
     */
    public function getAdminDomainName(): string
    {
        return $this->adminDomainName;
    }
    /**
     * Admin Domain Name of LDAP Server object
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
     * Admin password of LDAP Server object
     *
     * @return string
     */
    public function getAdminPassword(): string
    {
        return $this->adminPassword;
    }
    /**
     * Admin password of LDAP Server object
     *
     * @param string $adminPassword
     *
     * @return self
     */
    public function setAdminPassword(string $adminPassword): self
    {
        $this->initialized['adminPassword'] = true;
        $this->adminPassword = $adminPassword;
        return $this;
    }
    /**
     * Key attribute of LDAP Server object
     *
     * @return string
     */
    public function getKeyAttribute(): string
    {
        return $this->keyAttribute;
    }
    /**
     * Key attribute of LDAP Server object
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
     * Search filter of LDAP Server object
     *
     * @return string
     */
    public function getSearchFilter(): string
    {
        return $this->searchFilter;
    }
    /**
     * Search filter of LDAP Server object
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
}