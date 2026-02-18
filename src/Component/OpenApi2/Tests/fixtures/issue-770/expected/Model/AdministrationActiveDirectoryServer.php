<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class AdministrationActiveDirectoryServer
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
     * Port number of Active Directory Server object
     *
     * @var int
     */
    protected $port;
    /**
     * Windows Domain Name of Active Directory Server object
     *
     * @var string
     */
    protected $windowsDomainName;
    /**
     * The Active Directory proxy account that have permission to perform query operations.
     *
     * @var string
     */
    protected $proxyUserPrincipalName;
    /**
     * The Active Directory proxy password that have permission to perform query operations.
     *
     * @var string
     */
    protected $proxyUserPassword;
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
     * Port number of Active Directory Server object
     *
     * @return int
     */
    public function getPort(): int
    {
        return $this->port;
    }
    /**
     * Port number of Active Directory Server object
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
     * Windows Domain Name of Active Directory Server object
     *
     * @return string
     */
    public function getWindowsDomainName(): string
    {
        return $this->windowsDomainName;
    }
    /**
     * Windows Domain Name of Active Directory Server object
     *
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
     * The Active Directory proxy account that have permission to perform query operations.
     *
     * @return string
     */
    public function getProxyUserPrincipalName(): string
    {
        return $this->proxyUserPrincipalName;
    }
    /**
     * The Active Directory proxy account that have permission to perform query operations.
     *
     * @param string $proxyUserPrincipalName
     *
     * @return self
     */
    public function setProxyUserPrincipalName(string $proxyUserPrincipalName): self
    {
        $this->initialized['proxyUserPrincipalName'] = true;
        $this->proxyUserPrincipalName = $proxyUserPrincipalName;
        return $this;
    }
    /**
     * The Active Directory proxy password that have permission to perform query operations.
     *
     * @return string
     */
    public function getProxyUserPassword(): string
    {
        return $this->proxyUserPassword;
    }
    /**
     * The Active Directory proxy password that have permission to perform query operations.
     *
     * @param string $proxyUserPassword
     *
     * @return self
     */
    public function setProxyUserPassword(string $proxyUserPassword): self
    {
        $this->initialized['proxyUserPassword'] = true;
        $this->proxyUserPassword = $proxyUserPassword;
        return $this;
    }
}