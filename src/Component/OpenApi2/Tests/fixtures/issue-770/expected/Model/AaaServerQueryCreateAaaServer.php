<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class AaaServerQueryCreateAaaServer
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
    protected $secondaryRadiusPort;
    /**
     * @var string
     */
    protected $adminDomainName;
    /**
     * @var string
     */
    protected $creatorUUID;
    /**
     * @var string
     */
    protected $secondaryRadiusIP;
    /**
     * @var string
     */
    protected $description;
    /**
     * @var string
     */
    protected $type;
    /**
     * @var string
     */
    protected $secondaryRadiusIPv6;
    /**
     * @var int
     */
    protected $radiusPort;
    /**
     * @var string
     */
    protected $ipv6;
    /**
     * @var int
     */
    protected $modifiedDateTime;
    /**
     * @var string
     */
    protected $authType;
    /**
     * @var string
     */
    protected $radiusIP;
    /**
     * @var string
     */
    protected $radiusIPv6;
    /**
     * @var string
     */
    protected $key;
    /**
     * @var string
     */
    protected $id;
    /**
     * @var string
     */
    protected $tenantUUID;
    /**
     * @var int
     */
    protected $enableSecondaryRadius;
    /**
     * @var string
     */
    protected $modifierUsername;
    /**
     * @var string
     */
    protected $ip;
    /**
     * @var string
     */
    protected $zoneUUID;
    /**
     * @var string
     */
    protected $domainId;
    /**
     * @var string
     */
    protected $tacacsService;
    /**
     * @var int
     */
    protected $port;
    /**
     * @var string
     */
    protected $radiusRealm;
    /**
     * @var string
     */
    protected $domainName;
    /**
     * @var string
     */
    protected $name;
    /**
     * @var int
     */
    protected $isConflict;
    /**
     * @var int
     */
    protected $createOn;
    /**
     * @var bool
     */
    protected $globalCatalog;
    /**
     * @var string
     */
    protected $windowsDomainName;
    /**
     * @var string
     */
    protected $partnerName;
    /**
     * @var string
     */
    protected $token;
    /**
     * @var string
     */
    protected $authenticationApi;
    /**
     * @var string
     */
    protected $accountingApi;
    /**
     * @var string
     */
    protected $coaResponseApi;
    /**
     * @var string
     */
    protected $coaApi;
    /**
     * @var int
     */
    protected $sseTimeout;
    /**
     * @return int
     */
    public function getSecondaryRadiusPort(): int
    {
        return $this->secondaryRadiusPort;
    }
    /**
     * @param int $secondaryRadiusPort
     *
     * @return self
     */
    public function setSecondaryRadiusPort(int $secondaryRadiusPort): self
    {
        $this->initialized['secondaryRadiusPort'] = true;
        $this->secondaryRadiusPort = $secondaryRadiusPort;
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
     * @return string
     */
    public function getCreatorUUID(): string
    {
        return $this->creatorUUID;
    }
    /**
     * @param string $creatorUUID
     *
     * @return self
     */
    public function setCreatorUUID(string $creatorUUID): self
    {
        $this->initialized['creatorUUID'] = true;
        $this->creatorUUID = $creatorUUID;
        return $this;
    }
    /**
     * @return string
     */
    public function getSecondaryRadiusIP(): string
    {
        return $this->secondaryRadiusIP;
    }
    /**
     * @param string $secondaryRadiusIP
     *
     * @return self
     */
    public function setSecondaryRadiusIP(string $secondaryRadiusIP): self
    {
        $this->initialized['secondaryRadiusIP'] = true;
        $this->secondaryRadiusIP = $secondaryRadiusIP;
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
    public function getType(): string
    {
        return $this->type;
    }
    /**
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
     * @return string
     */
    public function getSecondaryRadiusIPv6(): string
    {
        return $this->secondaryRadiusIPv6;
    }
    /**
     * @param string $secondaryRadiusIPv6
     *
     * @return self
     */
    public function setSecondaryRadiusIPv6(string $secondaryRadiusIPv6): self
    {
        $this->initialized['secondaryRadiusIPv6'] = true;
        $this->secondaryRadiusIPv6 = $secondaryRadiusIPv6;
        return $this;
    }
    /**
     * @return int
     */
    public function getRadiusPort(): int
    {
        return $this->radiusPort;
    }
    /**
     * @param int $radiusPort
     *
     * @return self
     */
    public function setRadiusPort(int $radiusPort): self
    {
        $this->initialized['radiusPort'] = true;
        $this->radiusPort = $radiusPort;
        return $this;
    }
    /**
     * @return string
     */
    public function getIpv6(): string
    {
        return $this->ipv6;
    }
    /**
     * @param string $ipv6
     *
     * @return self
     */
    public function setIpv6(string $ipv6): self
    {
        $this->initialized['ipv6'] = true;
        $this->ipv6 = $ipv6;
        return $this;
    }
    /**
     * @return int
     */
    public function getModifiedDateTime(): int
    {
        return $this->modifiedDateTime;
    }
    /**
     * @param int $modifiedDateTime
     *
     * @return self
     */
    public function setModifiedDateTime(int $modifiedDateTime): self
    {
        $this->initialized['modifiedDateTime'] = true;
        $this->modifiedDateTime = $modifiedDateTime;
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
    public function getRadiusIP(): string
    {
        return $this->radiusIP;
    }
    /**
     * @param string $radiusIP
     *
     * @return self
     */
    public function setRadiusIP(string $radiusIP): self
    {
        $this->initialized['radiusIP'] = true;
        $this->radiusIP = $radiusIP;
        return $this;
    }
    /**
     * @return string
     */
    public function getRadiusIPv6(): string
    {
        return $this->radiusIPv6;
    }
    /**
     * @param string $radiusIPv6
     *
     * @return self
     */
    public function setRadiusIPv6(string $radiusIPv6): self
    {
        $this->initialized['radiusIPv6'] = true;
        $this->radiusIPv6 = $radiusIPv6;
        return $this;
    }
    /**
     * @return string
     */
    public function getKey(): string
    {
        return $this->key;
    }
    /**
     * @param string $key
     *
     * @return self
     */
    public function setKey(string $key): self
    {
        $this->initialized['key'] = true;
        $this->key = $key;
        return $this;
    }
    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    /**
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
     * @return string
     */
    public function getTenantUUID(): string
    {
        return $this->tenantUUID;
    }
    /**
     * @param string $tenantUUID
     *
     * @return self
     */
    public function setTenantUUID(string $tenantUUID): self
    {
        $this->initialized['tenantUUID'] = true;
        $this->tenantUUID = $tenantUUID;
        return $this;
    }
    /**
     * @return int
     */
    public function getEnableSecondaryRadius(): int
    {
        return $this->enableSecondaryRadius;
    }
    /**
     * @param int $enableSecondaryRadius
     *
     * @return self
     */
    public function setEnableSecondaryRadius(int $enableSecondaryRadius): self
    {
        $this->initialized['enableSecondaryRadius'] = true;
        $this->enableSecondaryRadius = $enableSecondaryRadius;
        return $this;
    }
    /**
     * @return string
     */
    public function getModifierUsername(): string
    {
        return $this->modifierUsername;
    }
    /**
     * @param string $modifierUsername
     *
     * @return self
     */
    public function setModifierUsername(string $modifierUsername): self
    {
        $this->initialized['modifierUsername'] = true;
        $this->modifierUsername = $modifierUsername;
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
     * @return string
     */
    public function getZoneUUID(): string
    {
        return $this->zoneUUID;
    }
    /**
     * @param string $zoneUUID
     *
     * @return self
     */
    public function setZoneUUID(string $zoneUUID): self
    {
        $this->initialized['zoneUUID'] = true;
        $this->zoneUUID = $zoneUUID;
        return $this;
    }
    /**
     * @return string
     */
    public function getDomainId(): string
    {
        return $this->domainId;
    }
    /**
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
    public function getTacacsService(): string
    {
        return $this->tacacsService;
    }
    /**
     * @param string $tacacsService
     *
     * @return self
     */
    public function setTacacsService(string $tacacsService): self
    {
        $this->initialized['tacacsService'] = true;
        $this->tacacsService = $tacacsService;
        return $this;
    }
    /**
     * @return int
     */
    public function getPort(): int
    {
        return $this->port;
    }
    /**
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
    public function getRadiusRealm(): string
    {
        return $this->radiusRealm;
    }
    /**
     * @param string $radiusRealm
     *
     * @return self
     */
    public function setRadiusRealm(string $radiusRealm): self
    {
        $this->initialized['radiusRealm'] = true;
        $this->radiusRealm = $radiusRealm;
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
     * @return int
     */
    public function getIsConflict(): int
    {
        return $this->isConflict;
    }
    /**
     * @param int $isConflict
     *
     * @return self
     */
    public function setIsConflict(int $isConflict): self
    {
        $this->initialized['isConflict'] = true;
        $this->isConflict = $isConflict;
        return $this;
    }
    /**
     * @return int
     */
    public function getCreateOn(): int
    {
        return $this->createOn;
    }
    /**
     * @param int $createOn
     *
     * @return self
     */
    public function setCreateOn(int $createOn): self
    {
        $this->initialized['createOn'] = true;
        $this->createOn = $createOn;
        return $this;
    }
    /**
     * @return bool
     */
    public function getGlobalCatalog(): bool
    {
        return $this->globalCatalog;
    }
    /**
     * @param bool $globalCatalog
     *
     * @return self
     */
    public function setGlobalCatalog(bool $globalCatalog): self
    {
        $this->initialized['globalCatalog'] = true;
        $this->globalCatalog = $globalCatalog;
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
    public function getPartnerName(): string
    {
        return $this->partnerName;
    }
    /**
     * @param string $partnerName
     *
     * @return self
     */
    public function setPartnerName(string $partnerName): self
    {
        $this->initialized['partnerName'] = true;
        $this->partnerName = $partnerName;
        return $this;
    }
    /**
     * @return string
     */
    public function getToken(): string
    {
        return $this->token;
    }
    /**
     * @param string $token
     *
     * @return self
     */
    public function setToken(string $token): self
    {
        $this->initialized['token'] = true;
        $this->token = $token;
        return $this;
    }
    /**
     * @return string
     */
    public function getAuthenticationApi(): string
    {
        return $this->authenticationApi;
    }
    /**
     * @param string $authenticationApi
     *
     * @return self
     */
    public function setAuthenticationApi(string $authenticationApi): self
    {
        $this->initialized['authenticationApi'] = true;
        $this->authenticationApi = $authenticationApi;
        return $this;
    }
    /**
     * @return string
     */
    public function getAccountingApi(): string
    {
        return $this->accountingApi;
    }
    /**
     * @param string $accountingApi
     *
     * @return self
     */
    public function setAccountingApi(string $accountingApi): self
    {
        $this->initialized['accountingApi'] = true;
        $this->accountingApi = $accountingApi;
        return $this;
    }
    /**
     * @return string
     */
    public function getCoaResponseApi(): string
    {
        return $this->coaResponseApi;
    }
    /**
     * @param string $coaResponseApi
     *
     * @return self
     */
    public function setCoaResponseApi(string $coaResponseApi): self
    {
        $this->initialized['coaResponseApi'] = true;
        $this->coaResponseApi = $coaResponseApi;
        return $this;
    }
    /**
     * @return string
     */
    public function getCoaApi(): string
    {
        return $this->coaApi;
    }
    /**
     * @param string $coaApi
     *
     * @return self
     */
    public function setCoaApi(string $coaApi): self
    {
        $this->initialized['coaApi'] = true;
        $this->coaApi = $coaApi;
        return $this;
    }
    /**
     * @return int
     */
    public function getSseTimeout(): int
    {
        return $this->sseTimeout;
    }
    /**
     * @param int $sseTimeout
     *
     * @return self
     */
    public function setSseTimeout(int $sseTimeout): self
    {
        $this->initialized['sseTimeout'] = true;
        $this->sseTimeout = $sseTimeout;
        return $this;
    }
}