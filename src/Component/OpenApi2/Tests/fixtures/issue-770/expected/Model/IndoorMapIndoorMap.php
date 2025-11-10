<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class IndoorMapIndoorMap
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
     * id
     *
     * @var string
     */
    protected $id;
    /**
     * zoneId
     *
     * @var string
     */
    protected $zoneId;
    /**
     * @var string
     */
    protected $name;
    /**
     * @var string
     */
    protected $description;
    /**
     * group Type
     *
     * @var string
     */
    protected $groupType;
    /**
     * address
     *
     * @var string
     */
    protected $address;
    /**
     * latitude
     *
     * @var float
     */
    protected $latitude;
    /**
     * longitude
     *
     * @var float
     */
    protected $longitude;
    /**
     * orientation
     *
     * @var string
     */
    protected $orientation;
    /**
     * imageData
     *
     * @var string
     */
    protected $imageData;
    /**
     * imageFileName
     *
     * @var string
     */
    protected $imageFileName;
    /**
     * domainId
     *
     * @var string
     */
    protected $domainId;
    /**
     * tenantId
     *
     * @var string
     */
    protected $tenantId;
    /**
     * @var IndoorMapScale
     */
    protected $scale;
    /**
     * apGroupId
     *
     * @var string
     */
    protected $apGroupId;
    /**
     * id
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    /**
     * id
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
     * zoneId
     *
     * @return string
     */
    public function getZoneId(): string
    {
        return $this->zoneId;
    }
    /**
     * zoneId
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
     * group Type
     *
     * @return string
     */
    public function getGroupType(): string
    {
        return $this->groupType;
    }
    /**
     * group Type
     *
     * @param string $groupType
     *
     * @return self
     */
    public function setGroupType(string $groupType): self
    {
        $this->initialized['groupType'] = true;
        $this->groupType = $groupType;
        return $this;
    }
    /**
     * address
     *
     * @return string
     */
    public function getAddress(): string
    {
        return $this->address;
    }
    /**
     * address
     *
     * @param string $address
     *
     * @return self
     */
    public function setAddress(string $address): self
    {
        $this->initialized['address'] = true;
        $this->address = $address;
        return $this;
    }
    /**
     * latitude
     *
     * @return float
     */
    public function getLatitude(): float
    {
        return $this->latitude;
    }
    /**
     * latitude
     *
     * @param float $latitude
     *
     * @return self
     */
    public function setLatitude(float $latitude): self
    {
        $this->initialized['latitude'] = true;
        $this->latitude = $latitude;
        return $this;
    }
    /**
     * longitude
     *
     * @return float
     */
    public function getLongitude(): float
    {
        return $this->longitude;
    }
    /**
     * longitude
     *
     * @param float $longitude
     *
     * @return self
     */
    public function setLongitude(float $longitude): self
    {
        $this->initialized['longitude'] = true;
        $this->longitude = $longitude;
        return $this;
    }
    /**
     * orientation
     *
     * @return string
     */
    public function getOrientation(): string
    {
        return $this->orientation;
    }
    /**
     * orientation
     *
     * @param string $orientation
     *
     * @return self
     */
    public function setOrientation(string $orientation): self
    {
        $this->initialized['orientation'] = true;
        $this->orientation = $orientation;
        return $this;
    }
    /**
     * imageData
     *
     * @return string
     */
    public function getImageData(): string
    {
        return $this->imageData;
    }
    /**
     * imageData
     *
     * @param string $imageData
     *
     * @return self
     */
    public function setImageData(string $imageData): self
    {
        $this->initialized['imageData'] = true;
        $this->imageData = $imageData;
        return $this;
    }
    /**
     * imageFileName
     *
     * @return string
     */
    public function getImageFileName(): string
    {
        return $this->imageFileName;
    }
    /**
     * imageFileName
     *
     * @param string $imageFileName
     *
     * @return self
     */
    public function setImageFileName(string $imageFileName): self
    {
        $this->initialized['imageFileName'] = true;
        $this->imageFileName = $imageFileName;
        return $this;
    }
    /**
     * domainId
     *
     * @return string
     */
    public function getDomainId(): string
    {
        return $this->domainId;
    }
    /**
     * domainId
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
     * tenantId
     *
     * @return string
     */
    public function getTenantId(): string
    {
        return $this->tenantId;
    }
    /**
     * tenantId
     *
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
     * @return IndoorMapScale
     */
    public function getScale(): IndoorMapScale
    {
        return $this->scale;
    }
    /**
     * @param IndoorMapScale $scale
     *
     * @return self
     */
    public function setScale(IndoorMapScale $scale): self
    {
        $this->initialized['scale'] = true;
        $this->scale = $scale;
        return $this;
    }
    /**
     * apGroupId
     *
     * @return string
     */
    public function getApGroupId(): string
    {
        return $this->apGroupId;
    }
    /**
     * apGroupId
     *
     * @param string $apGroupId
     *
     * @return self
     */
    public function setApGroupId(string $apGroupId): self
    {
        $this->initialized['apGroupId'] = true;
        $this->apGroupId = $apGroupId;
        return $this;
    }
}