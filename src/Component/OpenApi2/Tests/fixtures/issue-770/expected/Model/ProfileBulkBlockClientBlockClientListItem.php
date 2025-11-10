<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class ProfileBulkBlockClientBlockClientListItem
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
    protected $mac;
    /**
     * @var string
     */
    protected $zoneId;
    /**
     * @var string
     */
    protected $description;
    /**
     * @var string
     */
    protected $apMac;
    /**
     * @return string
     */
    public function getMac(): string
    {
        return $this->mac;
    }
    /**
     * @param string $mac
     *
     * @return self
     */
    public function setMac(string $mac): self
    {
        $this->initialized['mac'] = true;
        $this->mac = $mac;
        return $this;
    }
    /**
     * @return string
     */
    public function getZoneId(): string
    {
        return $this->zoneId;
    }
    /**
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
}