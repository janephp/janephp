<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class VendorSpecificAttributeProfileGet
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
     * Identifier of the vendor specific attribute profile
     *
     * @var string
     */
    protected $id;
    /**
     * @var string
     */
    protected $name;
    /**
     * @var string
     */
    protected $description;
    /**
     * Domain Id
     *
     * @var string
     */
    protected $domainId;
    /**
     * Zone Id
     *
     * @var string
     */
    protected $zoneId;
    /**
     * Vendor specific attribute list for Radius protocol
     *
     * @var list<VendorSpecificAttributeProfileVendorSpecificAttribute>
     */
    protected $attributes;
    /**
     * Identifier of the vendor specific attribute profile
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    /**
     * Identifier of the vendor specific attribute profile
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
     * Zone Id
     *
     * @return string
     */
    public function getZoneId(): string
    {
        return $this->zoneId;
    }
    /**
     * Zone Id
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
     * Vendor specific attribute list for Radius protocol
     *
     * @return list<VendorSpecificAttributeProfileVendorSpecificAttribute>
     */
    public function getAttributes(): array
    {
        return $this->attributes;
    }
    /**
     * Vendor specific attribute list for Radius protocol
     *
     * @param list<VendorSpecificAttributeProfileVendorSpecificAttribute> $attributes
     *
     * @return self
     */
    public function setAttributes(array $attributes): self
    {
        $this->initialized['attributes'] = true;
        $this->attributes = $attributes;
        return $this;
    }
}