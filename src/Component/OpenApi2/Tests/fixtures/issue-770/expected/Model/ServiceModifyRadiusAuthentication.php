<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class ServiceModifyRadiusAuthentication
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
     * RFC5580 out of band location delivery support(for Ruckus AP only)
     *
     * @var bool
     */
    protected $locationDeliveryEnabled = false;
    /**
     * Authentication server type
     *
     * @var string
     */
    protected $type;
    /**
     * @var CommonRadiusServerWhenTlsEnabled
     */
    protected $primary;
    /**
     * @var ServiceSecondaryRadiusServer
     */
    protected $secondary;
    /**
     * @var CommonHealthCheckPolicy
     */
    protected $healthCheckPolicy;
    /**
     * @var CommonRateLimiting
     */
    protected $rateLimiting;
    /**
     * Group attribute and user traffic profile mapping
     *
     * @var list<ServiceModifyGroupAttrIdentityUserRoleMapping>
     */
    protected $mappings;
    /**
     * @var CommonRadiusServerWhenTlsEnabled
     */
    protected $standbyPrimary;
    /**
     * StandbyCluster different AAA Settings Enabled
     *
     * @var bool
     */
    protected $standbyServerEnabled;
    /**
     * TLS Enabled
     *
     * @var bool
     */
    protected $tlsEnabled;
    /**
     * @var string
     */
    protected $ocspUrl;
    /**
     * @var string
     */
    protected $cnSanIdentity;
    /**
     * @var string
     */
    protected $clientCertId;
    /**
     * @var string
     */
    protected $serverCertId;
    /**
     * @var bool
     */
    protected $standbyTlsEnabled;
    /**
     * @var string
     */
    protected $standbyOcspUrl;
    /**
     * @var string
     */
    protected $standbyCnSanIdentity;
    /**
     * @var string
     */
    protected $standbyClientCertId;
    /**
     * @var string
     */
    protected $standbyServerCertId;
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
     * RFC5580 out of band location delivery support(for Ruckus AP only)
     *
     * @return bool
     */
    public function getLocationDeliveryEnabled(): bool
    {
        return $this->locationDeliveryEnabled;
    }
    /**
     * RFC5580 out of band location delivery support(for Ruckus AP only)
     *
     * @param bool $locationDeliveryEnabled
     *
     * @return self
     */
    public function setLocationDeliveryEnabled(bool $locationDeliveryEnabled): self
    {
        $this->initialized['locationDeliveryEnabled'] = true;
        $this->locationDeliveryEnabled = $locationDeliveryEnabled;
        return $this;
    }
    /**
     * Authentication server type
     *
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }
    /**
     * Authentication server type
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
     * @return CommonRadiusServerWhenTlsEnabled
     */
    public function getPrimary(): CommonRadiusServerWhenTlsEnabled
    {
        return $this->primary;
    }
    /**
     * @param CommonRadiusServerWhenTlsEnabled $primary
     *
     * @return self
     */
    public function setPrimary(CommonRadiusServerWhenTlsEnabled $primary): self
    {
        $this->initialized['primary'] = true;
        $this->primary = $primary;
        return $this;
    }
    /**
     * @return ServiceSecondaryRadiusServer
     */
    public function getSecondary(): ServiceSecondaryRadiusServer
    {
        return $this->secondary;
    }
    /**
     * @param ServiceSecondaryRadiusServer $secondary
     *
     * @return self
     */
    public function setSecondary(ServiceSecondaryRadiusServer $secondary): self
    {
        $this->initialized['secondary'] = true;
        $this->secondary = $secondary;
        return $this;
    }
    /**
     * @return CommonHealthCheckPolicy
     */
    public function getHealthCheckPolicy(): CommonHealthCheckPolicy
    {
        return $this->healthCheckPolicy;
    }
    /**
     * @param CommonHealthCheckPolicy $healthCheckPolicy
     *
     * @return self
     */
    public function setHealthCheckPolicy(CommonHealthCheckPolicy $healthCheckPolicy): self
    {
        $this->initialized['healthCheckPolicy'] = true;
        $this->healthCheckPolicy = $healthCheckPolicy;
        return $this;
    }
    /**
     * @return CommonRateLimiting
     */
    public function getRateLimiting(): CommonRateLimiting
    {
        return $this->rateLimiting;
    }
    /**
     * @param CommonRateLimiting $rateLimiting
     *
     * @return self
     */
    public function setRateLimiting(CommonRateLimiting $rateLimiting): self
    {
        $this->initialized['rateLimiting'] = true;
        $this->rateLimiting = $rateLimiting;
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
     * @return CommonRadiusServerWhenTlsEnabled
     */
    public function getStandbyPrimary(): CommonRadiusServerWhenTlsEnabled
    {
        return $this->standbyPrimary;
    }
    /**
     * @param CommonRadiusServerWhenTlsEnabled $standbyPrimary
     *
     * @return self
     */
    public function setStandbyPrimary(CommonRadiusServerWhenTlsEnabled $standbyPrimary): self
    {
        $this->initialized['standbyPrimary'] = true;
        $this->standbyPrimary = $standbyPrimary;
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
    public function getClientCertId(): string
    {
        return $this->clientCertId;
    }
    /**
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
    public function getServerCertId(): string
    {
        return $this->serverCertId;
    }
    /**
     * @param string $serverCertId
     *
     * @return self
     */
    public function setServerCertId(string $serverCertId): self
    {
        $this->initialized['serverCertId'] = true;
        $this->serverCertId = $serverCertId;
        return $this;
    }
    /**
     * @return bool
     */
    public function getStandbyTlsEnabled(): bool
    {
        return $this->standbyTlsEnabled;
    }
    /**
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
     * @return string
     */
    public function getStandbyOcspUrl(): string
    {
        return $this->standbyOcspUrl;
    }
    /**
     * @param string $standbyOcspUrl
     *
     * @return self
     */
    public function setStandbyOcspUrl(string $standbyOcspUrl): self
    {
        $this->initialized['standbyOcspUrl'] = true;
        $this->standbyOcspUrl = $standbyOcspUrl;
        return $this;
    }
    /**
     * @return string
     */
    public function getStandbyCnSanIdentity(): string
    {
        return $this->standbyCnSanIdentity;
    }
    /**
     * @param string $standbyCnSanIdentity
     *
     * @return self
     */
    public function setStandbyCnSanIdentity(string $standbyCnSanIdentity): self
    {
        $this->initialized['standbyCnSanIdentity'] = true;
        $this->standbyCnSanIdentity = $standbyCnSanIdentity;
        return $this;
    }
    /**
     * @return string
     */
    public function getStandbyClientCertId(): string
    {
        return $this->standbyClientCertId;
    }
    /**
     * @param string $standbyClientCertId
     *
     * @return self
     */
    public function setStandbyClientCertId(string $standbyClientCertId): self
    {
        $this->initialized['standbyClientCertId'] = true;
        $this->standbyClientCertId = $standbyClientCertId;
        return $this;
    }
    /**
     * @return string
     */
    public function getStandbyServerCertId(): string
    {
        return $this->standbyServerCertId;
    }
    /**
     * @param string $standbyServerCertId
     *
     * @return self
     */
    public function setStandbyServerCertId(string $standbyServerCertId): self
    {
        $this->initialized['standbyServerCertId'] = true;
        $this->standbyServerCertId = $standbyServerCertId;
        return $this;
    }
}