<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class ApmodelLldpSetting
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
     * @var bool
     */
    protected $enabled = true;
    /**
     * @var int
     */
    protected $advertiseIntervalInSec;
    /**
     * @var int
     */
    protected $holdTimeInSec;
    /**
     * @var bool
     */
    protected $managementIPTLVEnabled;
    /**
     * @return bool
     */
    public function getEnabled(): bool
    {
        return $this->enabled;
    }
    /**
     * @param bool $enabled
     *
     * @return self
     */
    public function setEnabled(bool $enabled): self
    {
        $this->initialized['enabled'] = true;
        $this->enabled = $enabled;
        return $this;
    }
    /**
     * @return int
     */
    public function getAdvertiseIntervalInSec(): int
    {
        return $this->advertiseIntervalInSec;
    }
    /**
     * @param int $advertiseIntervalInSec
     *
     * @return self
     */
    public function setAdvertiseIntervalInSec(int $advertiseIntervalInSec): self
    {
        $this->initialized['advertiseIntervalInSec'] = true;
        $this->advertiseIntervalInSec = $advertiseIntervalInSec;
        return $this;
    }
    /**
     * @return int
     */
    public function getHoldTimeInSec(): int
    {
        return $this->holdTimeInSec;
    }
    /**
     * @param int $holdTimeInSec
     *
     * @return self
     */
    public function setHoldTimeInSec(int $holdTimeInSec): self
    {
        $this->initialized['holdTimeInSec'] = true;
        $this->holdTimeInSec = $holdTimeInSec;
        return $this;
    }
    /**
     * @return bool
     */
    public function getManagementIPTLVEnabled(): bool
    {
        return $this->managementIPTLVEnabled;
    }
    /**
     * @param bool $managementIPTLVEnabled
     *
     * @return self
     */
    public function setManagementIPTLVEnabled(bool $managementIPTLVEnabled): self
    {
        $this->initialized['managementIPTLVEnabled'] = true;
        $this->managementIPTLVEnabled = $managementIPTLVEnabled;
        return $this;
    }
}