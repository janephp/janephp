<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class ProfileCreateDnsServerProfile
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
     * Primary ip of DNS server service
     *
     * @var string
     */
    protected $primaryIp;
    /**
     * Secondary ip of DNS server service
     *
     * @var string
     */
    protected $secondaryIp;
    /**
     * Tertiary ip of DNS server service
     *
     * @var string
     */
    protected $tertiaryIp;
    /**
     * Tenant UUID
     *
     * @var string
     */
    protected $mvnoId;
    /**
     * Domain UUID
     *
     * @var string
     */
    protected $domainId;
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
     * Primary ip of DNS server service
     *
     * @return string
     */
    public function getPrimaryIp(): string
    {
        return $this->primaryIp;
    }
    /**
     * Primary ip of DNS server service
     *
     * @param string $primaryIp
     *
     * @return self
     */
    public function setPrimaryIp(string $primaryIp): self
    {
        $this->initialized['primaryIp'] = true;
        $this->primaryIp = $primaryIp;
        return $this;
    }
    /**
     * Secondary ip of DNS server service
     *
     * @return string
     */
    public function getSecondaryIp(): string
    {
        return $this->secondaryIp;
    }
    /**
     * Secondary ip of DNS server service
     *
     * @param string $secondaryIp
     *
     * @return self
     */
    public function setSecondaryIp(string $secondaryIp): self
    {
        $this->initialized['secondaryIp'] = true;
        $this->secondaryIp = $secondaryIp;
        return $this;
    }
    /**
     * Tertiary ip of DNS server service
     *
     * @return string
     */
    public function getTertiaryIp(): string
    {
        return $this->tertiaryIp;
    }
    /**
     * Tertiary ip of DNS server service
     *
     * @param string $tertiaryIp
     *
     * @return self
     */
    public function setTertiaryIp(string $tertiaryIp): self
    {
        $this->initialized['tertiaryIp'] = true;
        $this->tertiaryIp = $tertiaryIp;
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
     * Domain UUID
     *
     * @return string
     */
    public function getDomainId(): string
    {
        return $this->domainId;
    }
    /**
     * Domain UUID
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
}