<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class ApApListEntryListItem
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
     * Identifier of the zone to which the AP belongs
     *
     * @var string
     */
    protected $zoneId;
    /**
     * Identifier of the AP group to which the AP belongs
     *
     * @var string
     */
    protected $apGroupId;
    /**
     * Name of the AP
     *
     * @var string
     */
    protected $name;
    /**
     * Serial Number
     *
     * @var string
     */
    protected $serial;
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
     * Identifier of the zone to which the AP belongs
     *
     * @return string
     */
    public function getZoneId(): string
    {
        return $this->zoneId;
    }
    /**
     * Identifier of the zone to which the AP belongs
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
     * Identifier of the AP group to which the AP belongs
     *
     * @return string
     */
    public function getApGroupId(): string
    {
        return $this->apGroupId;
    }
    /**
     * Identifier of the AP group to which the AP belongs
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
    /**
     * Name of the AP
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * Name of the AP
     *
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
     * Serial Number
     *
     * @return string
     */
    public function getSerial(): string
    {
        return $this->serial;
    }
    /**
     * Serial Number
     *
     * @param string $serial
     *
     * @return self
     */
    public function setSerial(string $serial): self
    {
        $this->initialized['serial'] = true;
        $this->serial = $serial;
        return $this;
    }
}