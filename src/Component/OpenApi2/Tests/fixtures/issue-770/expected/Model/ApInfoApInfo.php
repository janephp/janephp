<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class ApInfoApInfo
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
    protected $apName;
    /**
     * RSSI of the rogue AP
     *
     * @var string
     */
    protected $rssi;
    /**
     * Timestamp of the AP
     *
     * @var int
     */
    protected $lastDetected;
    /**
     * Zone name
     *
     * @var string
     */
    protected $zoneName;
    /**
     * Rogue type
     *
     * @var string
     */
    protected $rogueType;
    /**
     * To identify whether this is main instance for UI
     *
     * @var bool
     */
    protected $mainDetector;
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
    public function getApName(): string
    {
        return $this->apName;
    }
    /**
     * @param string $apName
     *
     * @return self
     */
    public function setApName(string $apName): self
    {
        $this->initialized['apName'] = true;
        $this->apName = $apName;
        return $this;
    }
    /**
     * RSSI of the rogue AP
     *
     * @return string
     */
    public function getRssi(): string
    {
        return $this->rssi;
    }
    /**
     * RSSI of the rogue AP
     *
     * @param string $rssi
     *
     * @return self
     */
    public function setRssi(string $rssi): self
    {
        $this->initialized['rssi'] = true;
        $this->rssi = $rssi;
        return $this;
    }
    /**
     * Timestamp of the AP
     *
     * @return int
     */
    public function getLastDetected(): int
    {
        return $this->lastDetected;
    }
    /**
     * Timestamp of the AP
     *
     * @param int $lastDetected
     *
     * @return self
     */
    public function setLastDetected(int $lastDetected): self
    {
        $this->initialized['lastDetected'] = true;
        $this->lastDetected = $lastDetected;
        return $this;
    }
    /**
     * Zone name
     *
     * @return string
     */
    public function getZoneName(): string
    {
        return $this->zoneName;
    }
    /**
     * Zone name
     *
     * @param string $zoneName
     *
     * @return self
     */
    public function setZoneName(string $zoneName): self
    {
        $this->initialized['zoneName'] = true;
        $this->zoneName = $zoneName;
        return $this;
    }
    /**
     * Rogue type
     *
     * @return string
     */
    public function getRogueType(): string
    {
        return $this->rogueType;
    }
    /**
     * Rogue type
     *
     * @param string $rogueType
     *
     * @return self
     */
    public function setRogueType(string $rogueType): self
    {
        $this->initialized['rogueType'] = true;
        $this->rogueType = $rogueType;
        return $this;
    }
    /**
     * To identify whether this is main instance for UI
     *
     * @return bool
     */
    public function getMainDetector(): bool
    {
        return $this->mainDetector;
    }
    /**
     * To identify whether this is main instance for UI
     *
     * @param bool $mainDetector
     *
     * @return self
     */
    public function setMainDetector(bool $mainDetector): self
    {
        $this->initialized['mainDetector'] = true;
        $this->mainDetector = $mainDetector;
        return $this;
    }
}