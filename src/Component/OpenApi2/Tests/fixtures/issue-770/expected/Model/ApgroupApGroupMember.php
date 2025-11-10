<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class ApgroupApGroupMember
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
     * Serial number of member AP
     *
     * @var string
     */
    protected $apSerial;
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
     * Serial number of member AP
     *
     * @return string
     */
    public function getApSerial(): string
    {
        return $this->apSerial;
    }
    /**
     * Serial number of member AP
     *
     * @param string $apSerial
     *
     * @return self
     */
    public function setApSerial(string $apSerial): self
    {
        $this->initialized['apSerial'] = true;
        $this->apSerial = $apSerial;
        return $this;
    }
}