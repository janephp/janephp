<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class VendorSpecificAttributeProfilePersist
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
     * Vendor specific attribute list for Radius protocol
     *
     * @var list<VendorSpecificAttributeProfileVendorSpecificAttribute>
     */
    protected $attributes;
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