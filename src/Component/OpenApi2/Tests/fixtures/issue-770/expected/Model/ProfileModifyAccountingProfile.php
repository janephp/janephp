<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class ProfileModifyAccountingProfile
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
     * ID of Accounting Profile
     *
     * @var string
     */
    protected $id;
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
    /**
     * ID of Accounting Profile
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    /**
     * ID of Accounting Profile
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
}