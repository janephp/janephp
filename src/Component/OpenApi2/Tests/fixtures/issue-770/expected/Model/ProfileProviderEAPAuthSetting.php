<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class ProfileProviderEAPAuthSetting
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
     * EAP auth info
     *
     * @var string
     */
    protected $info;
    /**
     * EAP auth type
     *
     * @var string
     */
    protected $type;
    /**
     * EAP auth vendor ID
     *
     * @var int
     */
    protected $vendorId;
    /**
     * EAP auth vendor type
     *
     * @var int
     */
    protected $vendorType;
    /**
     * EAP auth info
     *
     * @return string
     */
    public function getInfo(): string
    {
        return $this->info;
    }
    /**
     * EAP auth info
     *
     * @param string $info
     *
     * @return self
     */
    public function setInfo(string $info): self
    {
        $this->initialized['info'] = true;
        $this->info = $info;
        return $this;
    }
    /**
     * EAP auth type
     *
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }
    /**
     * EAP auth type
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
     * EAP auth vendor ID
     *
     * @return int
     */
    public function getVendorId(): int
    {
        return $this->vendorId;
    }
    /**
     * EAP auth vendor ID
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
     * EAP auth vendor type
     *
     * @return int
     */
    public function getVendorType(): int
    {
        return $this->vendorType;
    }
    /**
     * EAP auth vendor type
     *
     * @param int $vendorType
     *
     * @return self
     */
    public function setVendorType(int $vendorType): self
    {
        $this->initialized['vendorType'] = true;
        $this->vendorType = $vendorType;
        return $this;
    }
}