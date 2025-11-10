<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class ZoneSwitchGroupBindingCreateRecord
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
     * Zone ID for link
     *
     * @var string
     */
    protected $zoneId;
    /**
     * Switch Group ID for link
     *
     * @var string
     */
    protected $switchGroupId;
    /**
     * Is Zone and Switch Group link
     *
     * @var bool
     */
    protected $link;
    /**
     * Zone ID for link
     *
     * @return string
     */
    public function getZoneId(): string
    {
        return $this->zoneId;
    }
    /**
     * Zone ID for link
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
     * Switch Group ID for link
     *
     * @return string
     */
    public function getSwitchGroupId(): string
    {
        return $this->switchGroupId;
    }
    /**
     * Switch Group ID for link
     *
     * @param string $switchGroupId
     *
     * @return self
     */
    public function setSwitchGroupId(string $switchGroupId): self
    {
        $this->initialized['switchGroupId'] = true;
        $this->switchGroupId = $switchGroupId;
        return $this;
    }
    /**
     * Is Zone and Switch Group link
     *
     * @return bool
     */
    public function getLink(): bool
    {
        return $this->link;
    }
    /**
     * Is Zone and Switch Group link
     *
     * @param bool $link
     *
     * @return self
     */
    public function setLink(bool $link): self
    {
        $this->initialized['link'] = true;
        $this->link = $link;
        return $this;
    }
}