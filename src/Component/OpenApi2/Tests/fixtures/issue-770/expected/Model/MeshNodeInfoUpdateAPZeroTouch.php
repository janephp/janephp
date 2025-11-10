<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class MeshNodeInfoUpdateAPZeroTouch
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
    protected $apMac;
    /**
     * @var string
     */
    protected $status;
    /**
     * @var string
     */
    protected $helperZoneId;
    /**
     * @var string
     */
    protected $serialNumber;
    /**
     * @return string
     */
    public function getApMac(): string
    {
        return $this->apMac;
    }
    /**
     * @param string $apMac
     *
     * @return self
     */
    public function setApMac(string $apMac): self
    {
        $this->initialized['apMac'] = true;
        $this->apMac = $apMac;
        return $this;
    }
    /**
     * @return string
     */
    public function getStatus(): string
    {
        return $this->status;
    }
    /**
     * @param string $status
     *
     * @return self
     */
    public function setStatus(string $status): self
    {
        $this->initialized['status'] = true;
        $this->status = $status;
        return $this;
    }
    /**
     * @return string
     */
    public function getHelperZoneId(): string
    {
        return $this->helperZoneId;
    }
    /**
     * @param string $helperZoneId
     *
     * @return self
     */
    public function setHelperZoneId(string $helperZoneId): self
    {
        $this->initialized['helperZoneId'] = true;
        $this->helperZoneId = $helperZoneId;
        return $this;
    }
    /**
     * @return string
     */
    public function getSerialNumber(): string
    {
        return $this->serialNumber;
    }
    /**
     * @param string $serialNumber
     *
     * @return self
     */
    public function setSerialNumber(string $serialNumber): self
    {
        $this->initialized['serialNumber'] = true;
        $this->serialNumber = $serialNumber;
        return $this;
    }
}