<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class WlanQueryCreateWlanQuery
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
     * @var int
     */
    protected $clients;
    /**
     * @var string
     */
    protected $applicationVisibility;
    /**
     * @var string
     */
    protected $clientVirtualIdExtractionEnabled;
    /**
     * @var string
     */
    protected $zeroITOnboard;
    /**
     * @var int
     */
    protected $trafficUplink;
    /**
     * @var string
     */
    protected $description;
    /**
     * @var string
     */
    protected $zeroITEnabled;
    /**
     * @var string
     */
    protected $ssid;
    /**
     * @var string
     */
    protected $wlanId;
    /**
     * @var string
     */
    protected $encryptionMethod;
    /**
     * @var string
     */
    protected $enability11k;
    /**
     * @var int
     */
    protected $alerts;
    /**
     * @var string
     */
    protected $tunneled;
    /**
     * @var int
     */
    protected $vlan;
    /**
     * @var string
     */
    protected $enability11r;
    /**
     * @var string
     */
    protected $name;
    /**
     * @var string
     */
    protected $authMethod;
    /**
     * @var string
     */
    protected $authType;
    /**
     * @var string
     */
    protected $domainName;
    /**
     * @var string
     */
    protected $zoneName;
    /**
     * @var string
     */
    protected $zoneId;
    /**
     * @var int
     */
    protected $trafficDownlink;
    /**
     * @var string
     */
    protected $status;
    /**
     * @var int
     */
    protected $traffic;
    /**
     * @var string
     */
    protected $wpaVersion;
    /**
     * @var int
     */
    protected $wepEncryptionStrength;
    /**
     * @var int
     */
    protected $availability;
    /**
     * @var string
     */
    protected $tenantId;
    /**
     * @var string
     */
    protected $tenantDomainName;
    /**
     * @var string
     */
    protected $utp;
    /**
     * @var string
     */
    protected $firewallProfileId;
    /**
     * @var string
     */
    protected $firewallProfile;
    /**
     * @var string
     */
    protected $oweTransWlanId;
    /**
     * @return int
     */
    public function getClients(): int
    {
        return $this->clients;
    }
    /**
     * @param int $clients
     *
     * @return self
     */
    public function setClients(int $clients): self
    {
        $this->initialized['clients'] = true;
        $this->clients = $clients;
        return $this;
    }
    /**
     * @return string
     */
    public function getApplicationVisibility(): string
    {
        return $this->applicationVisibility;
    }
    /**
     * @param string $applicationVisibility
     *
     * @return self
     */
    public function setApplicationVisibility(string $applicationVisibility): self
    {
        $this->initialized['applicationVisibility'] = true;
        $this->applicationVisibility = $applicationVisibility;
        return $this;
    }
    /**
     * @return string
     */
    public function getClientVirtualIdExtractionEnabled(): string
    {
        return $this->clientVirtualIdExtractionEnabled;
    }
    /**
     * @param string $clientVirtualIdExtractionEnabled
     *
     * @return self
     */
    public function setClientVirtualIdExtractionEnabled(string $clientVirtualIdExtractionEnabled): self
    {
        $this->initialized['clientVirtualIdExtractionEnabled'] = true;
        $this->clientVirtualIdExtractionEnabled = $clientVirtualIdExtractionEnabled;
        return $this;
    }
    /**
     * @return string
     */
    public function getZeroITOnboard(): string
    {
        return $this->zeroITOnboard;
    }
    /**
     * @param string $zeroITOnboard
     *
     * @return self
     */
    public function setZeroITOnboard(string $zeroITOnboard): self
    {
        $this->initialized['zeroITOnboard'] = true;
        $this->zeroITOnboard = $zeroITOnboard;
        return $this;
    }
    /**
     * @return int
     */
    public function getTrafficUplink(): int
    {
        return $this->trafficUplink;
    }
    /**
     * @param int $trafficUplink
     *
     * @return self
     */
    public function setTrafficUplink(int $trafficUplink): self
    {
        $this->initialized['trafficUplink'] = true;
        $this->trafficUplink = $trafficUplink;
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
    public function getZeroITEnabled(): string
    {
        return $this->zeroITEnabled;
    }
    /**
     * @param string $zeroITEnabled
     *
     * @return self
     */
    public function setZeroITEnabled(string $zeroITEnabled): self
    {
        $this->initialized['zeroITEnabled'] = true;
        $this->zeroITEnabled = $zeroITEnabled;
        return $this;
    }
    /**
     * @return string
     */
    public function getSsid(): string
    {
        return $this->ssid;
    }
    /**
     * @param string $ssid
     *
     * @return self
     */
    public function setSsid(string $ssid): self
    {
        $this->initialized['ssid'] = true;
        $this->ssid = $ssid;
        return $this;
    }
    /**
     * @return string
     */
    public function getWlanId(): string
    {
        return $this->wlanId;
    }
    /**
     * @param string $wlanId
     *
     * @return self
     */
    public function setWlanId(string $wlanId): self
    {
        $this->initialized['wlanId'] = true;
        $this->wlanId = $wlanId;
        return $this;
    }
    /**
     * @return string
     */
    public function getEncryptionMethod(): string
    {
        return $this->encryptionMethod;
    }
    /**
     * @param string $encryptionMethod
     *
     * @return self
     */
    public function setEncryptionMethod(string $encryptionMethod): self
    {
        $this->initialized['encryptionMethod'] = true;
        $this->encryptionMethod = $encryptionMethod;
        return $this;
    }
    /**
     * @return string
     */
    public function getEnability11k(): string
    {
        return $this->enability11k;
    }
    /**
     * @param string $enability11k
     *
     * @return self
     */
    public function setEnability11k(string $enability11k): self
    {
        $this->initialized['enability11k'] = true;
        $this->enability11k = $enability11k;
        return $this;
    }
    /**
     * @return int
     */
    public function getAlerts(): int
    {
        return $this->alerts;
    }
    /**
     * @param int $alerts
     *
     * @return self
     */
    public function setAlerts(int $alerts): self
    {
        $this->initialized['alerts'] = true;
        $this->alerts = $alerts;
        return $this;
    }
    /**
     * @return string
     */
    public function getTunneled(): string
    {
        return $this->tunneled;
    }
    /**
     * @param string $tunneled
     *
     * @return self
     */
    public function setTunneled(string $tunneled): self
    {
        $this->initialized['tunneled'] = true;
        $this->tunneled = $tunneled;
        return $this;
    }
    /**
     * @return int
     */
    public function getVlan(): int
    {
        return $this->vlan;
    }
    /**
     * @param int $vlan
     *
     * @return self
     */
    public function setVlan(int $vlan): self
    {
        $this->initialized['vlan'] = true;
        $this->vlan = $vlan;
        return $this;
    }
    /**
     * @return string
     */
    public function getEnability11r(): string
    {
        return $this->enability11r;
    }
    /**
     * @param string $enability11r
     *
     * @return self
     */
    public function setEnability11r(string $enability11r): self
    {
        $this->initialized['enability11r'] = true;
        $this->enability11r = $enability11r;
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
    public function getAuthMethod(): string
    {
        return $this->authMethod;
    }
    /**
     * @param string $authMethod
     *
     * @return self
     */
    public function setAuthMethod(string $authMethod): self
    {
        $this->initialized['authMethod'] = true;
        $this->authMethod = $authMethod;
        return $this;
    }
    /**
     * @return string
     */
    public function getAuthType(): string
    {
        return $this->authType;
    }
    /**
     * @param string $authType
     *
     * @return self
     */
    public function setAuthType(string $authType): self
    {
        $this->initialized['authType'] = true;
        $this->authType = $authType;
        return $this;
    }
    /**
     * @return string
     */
    public function getDomainName(): string
    {
        return $this->domainName;
    }
    /**
     * @param string $domainName
     *
     * @return self
     */
    public function setDomainName(string $domainName): self
    {
        $this->initialized['domainName'] = true;
        $this->domainName = $domainName;
        return $this;
    }
    /**
     * @return string
     */
    public function getZoneName(): string
    {
        return $this->zoneName;
    }
    /**
     * @param string $zoneName
     *
     * @return self
     */
    public function setZoneName(string $zoneName): self
    {
        $this->initialized['zoneName'] = true;
        $this->zoneName = $zoneName;
        return $this;
    }
    /**
     * @return string
     */
    public function getZoneId(): string
    {
        return $this->zoneId;
    }
    /**
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
     * @return int
     */
    public function getTrafficDownlink(): int
    {
        return $this->trafficDownlink;
    }
    /**
     * @param int $trafficDownlink
     *
     * @return self
     */
    public function setTrafficDownlink(int $trafficDownlink): self
    {
        $this->initialized['trafficDownlink'] = true;
        $this->trafficDownlink = $trafficDownlink;
        return $this;
    }
    /**
     * @return string
     */
    public function getStatus(): string
    {
        return $this->status;
    }
    /**
     * @param string $status
     *
     * @return self
     */
    public function setStatus(string $status): self
    {
        $this->initialized['status'] = true;
        $this->status = $status;
        return $this;
    }
    /**
     * @return int
     */
    public function getTraffic(): int
    {
        return $this->traffic;
    }
    /**
     * @param int $traffic
     *
     * @return self
     */
    public function setTraffic(int $traffic): self
    {
        $this->initialized['traffic'] = true;
        $this->traffic = $traffic;
        return $this;
    }
    /**
     * @return string
     */
    public function getWpaVersion(): string
    {
        return $this->wpaVersion;
    }
    /**
     * @param string $wpaVersion
     *
     * @return self
     */
    public function setWpaVersion(string $wpaVersion): self
    {
        $this->initialized['wpaVersion'] = true;
        $this->wpaVersion = $wpaVersion;
        return $this;
    }
    /**
     * @return int
     */
    public function getWepEncryptionStrength(): int
    {
        return $this->wepEncryptionStrength;
    }
    /**
     * @param int $wepEncryptionStrength
     *
     * @return self
     */
    public function setWepEncryptionStrength(int $wepEncryptionStrength): self
    {
        $this->initialized['wepEncryptionStrength'] = true;
        $this->wepEncryptionStrength = $wepEncryptionStrength;
        return $this;
    }
    /**
     * @return int
     */
    public function getAvailability(): int
    {
        return $this->availability;
    }
    /**
     * @param int $availability
     *
     * @return self
     */
    public function setAvailability(int $availability): self
    {
        $this->initialized['availability'] = true;
        $this->availability = $availability;
        return $this;
    }
    /**
     * @return string
     */
    public function getTenantId(): string
    {
        return $this->tenantId;
    }
    /**
     * @param string $tenantId
     *
     * @return self
     */
    public function setTenantId(string $tenantId): self
    {
        $this->initialized['tenantId'] = true;
        $this->tenantId = $tenantId;
        return $this;
    }
    /**
     * @return string
     */
    public function getTenantDomainName(): string
    {
        return $this->tenantDomainName;
    }
    /**
     * @param string $tenantDomainName
     *
     * @return self
     */
    public function setTenantDomainName(string $tenantDomainName): self
    {
        $this->initialized['tenantDomainName'] = true;
        $this->tenantDomainName = $tenantDomainName;
        return $this;
    }
    /**
     * @return string
     */
    public function getUtp(): string
    {
        return $this->utp;
    }
    /**
     * @param string $utp
     *
     * @return self
     */
    public function setUtp(string $utp): self
    {
        $this->initialized['utp'] = true;
        $this->utp = $utp;
        return $this;
    }
    /**
     * @return string
     */
    public function getFirewallProfileId(): string
    {
        return $this->firewallProfileId;
    }
    /**
     * @param string $firewallProfileId
     *
     * @return self
     */
    public function setFirewallProfileId(string $firewallProfileId): self
    {
        $this->initialized['firewallProfileId'] = true;
        $this->firewallProfileId = $firewallProfileId;
        return $this;
    }
    /**
     * @return string
     */
    public function getFirewallProfile(): string
    {
        return $this->firewallProfile;
    }
    /**
     * @param string $firewallProfile
     *
     * @return self
     */
    public function setFirewallProfile(string $firewallProfile): self
    {
        $this->initialized['firewallProfile'] = true;
        $this->firewallProfile = $firewallProfile;
        return $this;
    }
    /**
     * @return string
     */
    public function getOweTransWlanId(): string
    {
        return $this->oweTransWlanId;
    }
    /**
     * @param string $oweTransWlanId
     *
     * @return self
     */
    public function setOweTransWlanId(string $oweTransWlanId): self
    {
        $this->initialized['oweTransWlanId'] = true;
        $this->oweTransWlanId = $oweTransWlanId;
        return $this;
    }
}