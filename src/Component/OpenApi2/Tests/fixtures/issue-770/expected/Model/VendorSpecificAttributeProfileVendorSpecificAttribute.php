<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class VendorSpecificAttributeProfileVendorSpecificAttribute
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
     * Vendor ID of vendor specific attribute
     *
     * @var int
     */
    protected $vendorId;
    /**
     * Key ID of vendor specific attribute
     *
     * @var int
     */
    protected $keyId;
    /**
     * Value of vendor specific attribute
     *
     * @var string
     */
    protected $value;
    /**
     * Type of vendor specific attribute
     *
     * @var string
     */
    protected $type;
    /**
     * The radius protocol to which this given vendor specific attribute will attach
     *
     * @var string
     */
    protected $supportedRadiusProtocol;
    /**
     * Vendor ID of vendor specific attribute
     *
     * @return int
     */
    public function getVendorId(): int
    {
        return $this->vendorId;
    }
    /**
     * Vendor ID of vendor specific attribute
     *
     * @param int $vendorId
     *
     * @return self
     */
    public function setVendorId(int $vendorId): self
    {
        $this->initialized['vendorId'] = true;
        $this->vendorId = $vendorId;
        return $this;
    }
    /**
     * Key ID of vendor specific attribute
     *
     * @return int
     */
    public function getKeyId(): int
    {
        return $this->keyId;
    }
    /**
     * Key ID of vendor specific attribute
     *
     * @param int $keyId
     *
     * @return self
     */
    public function setKeyId(int $keyId): self
    {
        $this->initialized['keyId'] = true;
        $this->keyId = $keyId;
        return $this;
    }
    /**
     * Value of vendor specific attribute
     *
     * @return string
     */
    public function getValue(): string
    {
        return $this->value;
    }
    /**
     * Value of vendor specific attribute
     *
     * @param string $value
     *
     * @return self
     */
    public function setValue(string $value): self
    {
        $this->initialized['value'] = true;
        $this->value = $value;
        return $this;
    }
    /**
     * Type of vendor specific attribute
     *
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }
    /**
     * Type of vendor specific attribute
     *
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
     * The radius protocol to which this given vendor specific attribute will attach
     *
     * @return string
     */
    public function getSupportedRadiusProtocol(): string
    {
        return $this->supportedRadiusProtocol;
    }
    /**
     * The radius protocol to which this given vendor specific attribute will attach
     *
     * @param string $supportedRadiusProtocol
     *
     * @return self
     */
    public function setSupportedRadiusProtocol(string $supportedRadiusProtocol): self
    {
        $this->initialized['supportedRadiusProtocol'] = true;
        $this->supportedRadiusProtocol = $supportedRadiusProtocol;
        return $this;
    }
}