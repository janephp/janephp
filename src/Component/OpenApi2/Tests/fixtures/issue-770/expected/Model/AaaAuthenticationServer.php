<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class AaaAuthenticationServer
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
     * Identify the RADIUS server is belong to Accounting or Authentication
     *
     * @var string
     */
    protected $serviceType;
    /**
     * Identifier of the RADIUS server
     *
     * @var string
     */
    protected $id;
    /**
     * Identifier of the zone which the RADIUS server belongs to
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
     * Identifier of the partner domain which the RADIUS server belongs to
     *
     * @var string
     */
    protected $partnerDomainId;
    /**
     * Name of the RADIUS server
     *
     * @var string
     */
    protected $name;
    /**
     * Description of the RADIUS server
     *
     * @var string
     */
    protected $description;
    /**
     * @var CommonRadiusServer
     */
    protected $primary;
    /**
     * @var CommonRadiusServer
     */
    protected $secondary;
    /**
     * Group attribute and user traffic profile mapping
     *
     * @var list<AaaGroupAttrIdentityUserRoleMapping>
     */
    protected $mappings;
    /**
     * @var CommonRadiusServer
     */
    protected $standbyPrimary;
    /**
     * @var bool
     */
    protected $standbyServerEnabled;
    /**
     * Identify the RADIUS server is belong to Accounting or Authentication
     *
     * @return string
     */
    public function getServiceType(): string
    {
        return $this->serviceType;
    }
    /**
     * Identify the RADIUS server is belong to Accounting or Authentication
     *
     * @param string $serviceType
     *
     * @return self
     */
    public function setServiceType(string $serviceType): self
    {
        $this->initialized['serviceType'] = true;
        $this->serviceType = $serviceType;
        return $this;
    }
    /**
     * Identifier of the RADIUS server
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    /**
     * Identifier of the RADIUS server
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
     * Identifier of the zone which the RADIUS server belongs to
     *
     * @return string
     */
    public function getZoneId(): string
    {
        return $this->zoneId;
    }
    /**
     * Identifier of the zone which the RADIUS server belongs to
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
     * Identifier of the partner domain which the RADIUS server belongs to
     *
     * @return string
     */
    public function getPartnerDomainId(): string
    {
        return $this->partnerDomainId;
    }
    /**
     * Identifier of the partner domain which the RADIUS server belongs to
     *
     * @param string $partnerDomainId
     *
     * @return self
     */
    public function setPartnerDomainId(string $partnerDomainId): self
    {
        $this->initialized['partnerDomainId'] = true;
        $this->partnerDomainId = $partnerDomainId;
        return $this;
    }
    /**
     * Name of the RADIUS server
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * Name of the RADIUS server
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
     * Description of the RADIUS server
     *
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }
    /**
     * Description of the RADIUS server
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
     * @return CommonRadiusServer
     */
    public function getPrimary(): CommonRadiusServer
    {
        return $this->primary;
    }
    /**
     * @param CommonRadiusServer $primary
     *
     * @return self
     */
    public function setPrimary(CommonRadiusServer $primary): self
    {
        $this->initialized['primary'] = true;
        $this->primary = $primary;
        return $this;
    }
    /**
     * @return CommonRadiusServer
     */
    public function getSecondary(): CommonRadiusServer
    {
        return $this->secondary;
    }
    /**
     * @param CommonRadiusServer $secondary
     *
     * @return self
     */
    public function setSecondary(CommonRadiusServer $secondary): self
    {
        $this->initialized['secondary'] = true;
        $this->secondary = $secondary;
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
     * @return CommonRadiusServer
     */
    public function getStandbyPrimary(): CommonRadiusServer
    {
        return $this->standbyPrimary;
    }
    /**
     * @param CommonRadiusServer $standbyPrimary
     *
     * @return self
     */
    public function setStandbyPrimary(CommonRadiusServer $standbyPrimary): self
    {
        $this->initialized['standbyPrimary'] = true;
        $this->standbyPrimary = $standbyPrimary;
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
}