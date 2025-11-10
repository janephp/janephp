<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class AdministrationRadiusServer
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
     * @var string
     */
    protected $ip;
    /**
     * Port number of RADIUS Server object
     *
     * @var int
     */
    protected $port;
    /**
     * @var string
     */
    protected $protocol = 'PAP';
    /**
     * Shared secret of RADIUS Server object
     *
     * @var string
     */
    protected $sharedSecret;
    /**
     * IP address or FQDN of RADIUS Server object
     *
     * @var string
     */
    protected $ipFqdn;
    /**
     * @var AdministrationSecondaryRadiusServer
     */
    protected $secondaryRadiusServer;
    /**
     * TLS Enabled
     *
     * @var bool
     */
    protected $tlsEnabled = false;
    /**
     * Client Certificate Id
     *
     * @var string
     */
    protected $clientCertId;
    /**
     * @var string
     */
    protected $cnSanIdentity;
    /**
     * @var string
     */
    protected $ocspUrl;
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
     * Port number of RADIUS Server object
     *
     * @return int
     */
    public function getPort(): int
    {
        return $this->port;
    }
    /**
     * Port number of RADIUS Server object
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
    public function getProtocol(): string
    {
        return $this->protocol;
    }
    /**
     * @param string $protocol
     *
     * @return self
     */
    public function setProtocol(string $protocol): self
    {
        $this->initialized['protocol'] = true;
        $this->protocol = $protocol;
        return $this;
    }
    /**
     * Shared secret of RADIUS Server object
     *
     * @return string
     */
    public function getSharedSecret(): string
    {
        return $this->sharedSecret;
    }
    /**
     * Shared secret of RADIUS Server object
     *
     * @param string $sharedSecret
     *
     * @return self
     */
    public function setSharedSecret(string $sharedSecret): self
    {
        $this->initialized['sharedSecret'] = true;
        $this->sharedSecret = $sharedSecret;
        return $this;
    }
    /**
     * IP address or FQDN of RADIUS Server object
     *
     * @return string
     */
    public function getIpFqdn(): string
    {
        return $this->ipFqdn;
    }
    /**
     * IP address or FQDN of RADIUS Server object
     *
     * @param string $ipFqdn
     *
     * @return self
     */
    public function setIpFqdn(string $ipFqdn): self
    {
        $this->initialized['ipFqdn'] = true;
        $this->ipFqdn = $ipFqdn;
        return $this;
    }
    /**
     * @return AdministrationSecondaryRadiusServer
     */
    public function getSecondaryRadiusServer(): AdministrationSecondaryRadiusServer
    {
        return $this->secondaryRadiusServer;
    }
    /**
     * @param AdministrationSecondaryRadiusServer $secondaryRadiusServer
     *
     * @return self
     */
    public function setSecondaryRadiusServer(AdministrationSecondaryRadiusServer $secondaryRadiusServer): self
    {
        $this->initialized['secondaryRadiusServer'] = true;
        $this->secondaryRadiusServer = $secondaryRadiusServer;
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
     * Client Certificate Id
     *
     * @return string
     */
    public function getClientCertId(): string
    {
        return $this->clientCertId;
    }
    /**
     * Client Certificate Id
     *
     * @param string $clientCertId
     *
     * @return self
     */
    public function setClientCertId(string $clientCertId): self
    {
        $this->initialized['clientCertId'] = true;
        $this->clientCertId = $clientCertId;
        return $this;
    }
    /**
     * @return string
     */
    public function getCnSanIdentity(): string
    {
        return $this->cnSanIdentity;
    }
    /**
     * @param string $cnSanIdentity
     *
     * @return self
     */
    public function setCnSanIdentity(string $cnSanIdentity): self
    {
        $this->initialized['cnSanIdentity'] = true;
        $this->cnSanIdentity = $cnSanIdentity;
        return $this;
    }
    /**
     * @return string
     */
    public function getOcspUrl(): string
    {
        return $this->ocspUrl;
    }
    /**
     * @param string $ocspUrl
     *
     * @return self
     */
    public function setOcspUrl(string $ocspUrl): self
    {
        $this->initialized['ocspUrl'] = true;
        $this->ocspUrl = $ocspUrl;
        return $this;
    }
}