<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class DomainDomainConfiguration
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
     * Identifier of the domain
     *
     * @var string
     */
    protected $id;
    /**
     * @var string
     */
    protected $name;
    /**
     * domain type
     *
     * @var string
     */
    protected $domainType;
    /**
     * @var string
     */
    protected $description;
    /**
     * Created by
     *
     * @var string
     */
    protected $createdBy;
    /**
     * Created by
     *
     * @var string
     */
    protected $createDatetime;
    /**
     * # of Zones
     *
     * @var int
     */
    protected $zoneCount;
    /**
     * # of Subdomains
     *
     * @var int
     */
    protected $subDomainCount;
    /**
     * # of Subdomains (Deprecated from v9 and will be removed on v12)
     *
     * @var int
     */
    protected $administratorCount;
    /**
     * # of Subdomains
     *
     * @var int
     */
    protected $apCount;
    /**
     * Parent Domain Id
     *
     * @var string
     */
    protected $parentDomainId;
    /**
     * @var bool
     */
    protected $zeroTouchStatus;
    /**
     * Identifier of the domain
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    /**
     * Identifier of the domain
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
     * domain type
     *
     * @return string
     */
    public function getDomainType(): string
    {
        return $this->domainType;
    }
    /**
     * domain type
     *
     * @param string $domainType
     *
     * @return self
     */
    public function setDomainType(string $domainType): self
    {
        $this->initialized['domainType'] = true;
        $this->domainType = $domainType;
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
     * Created by
     *
     * @return string
     */
    public function getCreatedBy(): string
    {
        return $this->createdBy;
    }
    /**
     * Created by
     *
     * @param string $createdBy
     *
     * @return self
     */
    public function setCreatedBy(string $createdBy): self
    {
        $this->initialized['createdBy'] = true;
        $this->createdBy = $createdBy;
        return $this;
    }
    /**
     * Created by
     *
     * @return string
     */
    public function getCreateDatetime(): string
    {
        return $this->createDatetime;
    }
    /**
     * Created by
     *
     * @param string $createDatetime
     *
     * @return self
     */
    public function setCreateDatetime(string $createDatetime): self
    {
        $this->initialized['createDatetime'] = true;
        $this->createDatetime = $createDatetime;
        return $this;
    }
    /**
     * # of Zones
     *
     * @return int
     */
    public function getZoneCount(): int
    {
        return $this->zoneCount;
    }
    /**
     * # of Zones
     *
     * @param int $zoneCount
     *
     * @return self
     */
    public function setZoneCount(int $zoneCount): self
    {
        $this->initialized['zoneCount'] = true;
        $this->zoneCount = $zoneCount;
        return $this;
    }
    /**
     * # of Subdomains
     *
     * @return int
     */
    public function getSubDomainCount(): int
    {
        return $this->subDomainCount;
    }
    /**
     * # of Subdomains
     *
     * @param int $subDomainCount
     *
     * @return self
     */
    public function setSubDomainCount(int $subDomainCount): self
    {
        $this->initialized['subDomainCount'] = true;
        $this->subDomainCount = $subDomainCount;
        return $this;
    }
    /**
     * # of Subdomains (Deprecated from v9 and will be removed on v12)
     *
     * @return int
     */
    public function getAdministratorCount(): int
    {
        return $this->administratorCount;
    }
    /**
     * # of Subdomains (Deprecated from v9 and will be removed on v12)
     *
     * @param int $administratorCount
     *
     * @return self
     */
    public function setAdministratorCount(int $administratorCount): self
    {
        $this->initialized['administratorCount'] = true;
        $this->administratorCount = $administratorCount;
        return $this;
    }
    /**
     * # of Subdomains
     *
     * @return int
     */
    public function getApCount(): int
    {
        return $this->apCount;
    }
    /**
     * # of Subdomains
     *
     * @param int $apCount
     *
     * @return self
     */
    public function setApCount(int $apCount): self
    {
        $this->initialized['apCount'] = true;
        $this->apCount = $apCount;
        return $this;
    }
    /**
     * Parent Domain Id
     *
     * @return string
     */
    public function getParentDomainId(): string
    {
        return $this->parentDomainId;
    }
    /**
     * Parent Domain Id
     *
     * @param string $parentDomainId
     *
     * @return self
     */
    public function setParentDomainId(string $parentDomainId): self
    {
        $this->initialized['parentDomainId'] = true;
        $this->parentDomainId = $parentDomainId;
        return $this;
    }
    /**
     * @return bool
     */
    public function getZeroTouchStatus(): bool
    {
        return $this->zeroTouchStatus;
    }
    /**
     * @param bool $zeroTouchStatus
     *
     * @return self
     */
    public function setZeroTouchStatus(bool $zeroTouchStatus): self
    {
        $this->initialized['zeroTouchStatus'] = true;
        $this->zeroTouchStatus = $zeroTouchStatus;
        return $this;
    }
}