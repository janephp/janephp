<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class ProfileCreateAccountingProfile
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
     * Accounting service per realm
     *
     * @var list<ProfileAcctServiceRealmMapping>
     */
    protected $realmMappings;
    /**
     * Domain UUID
     *
     * @var string
     */
    protected $domainId;
    /**
     * Tenant UUID
     *
     * @var string
     */
    protected $mvnoId;
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
     * Accounting service per realm
     *
     * @return list<ProfileAcctServiceRealmMapping>
     */
    public function getRealmMappings(): array
    {
        return $this->realmMappings;
    }
    /**
     * Accounting service per realm
     *
     * @param list<ProfileAcctServiceRealmMapping> $realmMappings
     *
     * @return self
     */
    public function setRealmMappings(array $realmMappings): self
    {
        $this->initialized['realmMappings'] = true;
        $this->realmMappings = $realmMappings;
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
}