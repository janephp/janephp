<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class ProfileBonjourFencingStatistic
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
     * @var int
     */
    protected $forwardedPackets;
    /**
     * @var int
     */
    protected $droppedPacketsDueToServiceType;
    /**
     * @var int
     */
    protected $droppedPacketsDueToNeighbor;
    /**
     * @var list<ProfileBonjourFencingService>
     */
    protected $serviceList;
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
     * @return int
     */
    public function getForwardedPackets(): int
    {
        return $this->forwardedPackets;
    }
    /**
     * @param int $forwardedPackets
     *
     * @return self
     */
    public function setForwardedPackets(int $forwardedPackets): self
    {
        $this->initialized['forwardedPackets'] = true;
        $this->forwardedPackets = $forwardedPackets;
        return $this;
    }
    /**
     * @return int
     */
    public function getDroppedPacketsDueToServiceType(): int
    {
        return $this->droppedPacketsDueToServiceType;
    }
    /**
     * @param int $droppedPacketsDueToServiceType
     *
     * @return self
     */
    public function setDroppedPacketsDueToServiceType(int $droppedPacketsDueToServiceType): self
    {
        $this->initialized['droppedPacketsDueToServiceType'] = true;
        $this->droppedPacketsDueToServiceType = $droppedPacketsDueToServiceType;
        return $this;
    }
    /**
     * @return int
     */
    public function getDroppedPacketsDueToNeighbor(): int
    {
        return $this->droppedPacketsDueToNeighbor;
    }
    /**
     * @param int $droppedPacketsDueToNeighbor
     *
     * @return self
     */
    public function setDroppedPacketsDueToNeighbor(int $droppedPacketsDueToNeighbor): self
    {
        $this->initialized['droppedPacketsDueToNeighbor'] = true;
        $this->droppedPacketsDueToNeighbor = $droppedPacketsDueToNeighbor;
        return $this;
    }
    /**
     * @return list<ProfileBonjourFencingService>
     */
    public function getServiceList(): array
    {
        return $this->serviceList;
    }
    /**
     * @param list<ProfileBonjourFencingService> $serviceList
     *
     * @return self
     */
    public function setServiceList(array $serviceList): self
    {
        $this->initialized['serviceList'] = true;
        $this->serviceList = $serviceList;
        return $this;
    }
}