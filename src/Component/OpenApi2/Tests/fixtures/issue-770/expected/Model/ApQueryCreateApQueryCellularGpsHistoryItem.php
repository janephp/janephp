<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class ApQueryCreateApQueryCellularGpsHistoryItem
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
     * @var int
     */
    protected $timestamp;
    /**
     * @var string
     */
    protected $latitude;
    /**
     * @var string
     */
    protected $longitude;
    /**
     * @return int
     */
    public function getTimestamp(): int
    {
        return $this->timestamp;
    }
    /**
     * @param int $timestamp
     *
     * @return self
     */
    public function setTimestamp(int $timestamp): self
    {
        $this->initialized['timestamp'] = true;
        $this->timestamp = $timestamp;
        return $this;
    }
    /**
     * @return string
     */
    public function getLatitude(): string
    {
        return $this->latitude;
    }
    /**
     * @param string $latitude
     *
     * @return self
     */
    public function setLatitude(string $latitude): self
    {
        $this->initialized['latitude'] = true;
        $this->latitude = $latitude;
        return $this;
    }
    /**
     * @return string
     */
    public function getLongitude(): string
    {
        return $this->longitude;
    }
    /**
     * @param string $longitude
     *
     * @return self
     */
    public function setLongitude(string $longitude): self
    {
        $this->initialized['longitude'] = true;
        $this->longitude = $longitude;
        return $this;
    }
}