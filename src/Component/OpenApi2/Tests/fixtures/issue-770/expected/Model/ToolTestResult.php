<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class ToolTestResult
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
    protected $wcid;
    /**
     * Result ID
     *
     * @var int
     */
    protected $resultId;
    /**
     * Uplink
     *
     * @var int
     */
    protected $uplink;
    /**
     * Downlink
     *
     * @var int
     */
    protected $downlink;
    /**
     * Latency
     *
     * @var int
     */
    protected $latency;
    /**
     * Packet loss
     *
     * @var int
     */
    protected $packetLoss;
    /**
     * ETF
     *
     * @var int
     */
    protected $etf;
    /**
     * @return string
     */
    public function getWcid(): string
    {
        return $this->wcid;
    }
    /**
     * @param string $wcid
     *
     * @return self
     */
    public function setWcid(string $wcid): self
    {
        $this->initialized['wcid'] = true;
        $this->wcid = $wcid;
        return $this;
    }
    /**
     * Result ID
     *
     * @return int
     */
    public function getResultId(): int
    {
        return $this->resultId;
    }
    /**
     * Result ID
     *
     * @param int $resultId
     *
     * @return self
     */
    public function setResultId(int $resultId): self
    {
        $this->initialized['resultId'] = true;
        $this->resultId = $resultId;
        return $this;
    }
    /**
     * Uplink
     *
     * @return int
     */
    public function getUplink(): int
    {
        return $this->uplink;
    }
    /**
     * Uplink
     *
     * @param int $uplink
     *
     * @return self
     */
    public function setUplink(int $uplink): self
    {
        $this->initialized['uplink'] = true;
        $this->uplink = $uplink;
        return $this;
    }
    /**
     * Downlink
     *
     * @return int
     */
    public function getDownlink(): int
    {
        return $this->downlink;
    }
    /**
     * Downlink
     *
     * @param int $downlink
     *
     * @return self
     */
    public function setDownlink(int $downlink): self
    {
        $this->initialized['downlink'] = true;
        $this->downlink = $downlink;
        return $this;
    }
    /**
     * Latency
     *
     * @return int
     */
    public function getLatency(): int
    {
        return $this->latency;
    }
    /**
     * Latency
     *
     * @param int $latency
     *
     * @return self
     */
    public function setLatency(int $latency): self
    {
        $this->initialized['latency'] = true;
        $this->latency = $latency;
        return $this;
    }
    /**
     * Packet loss
     *
     * @return int
     */
    public function getPacketLoss(): int
    {
        return $this->packetLoss;
    }
    /**
     * Packet loss
     *
     * @param int $packetLoss
     *
     * @return self
     */
    public function setPacketLoss(int $packetLoss): self
    {
        $this->initialized['packetLoss'] = true;
        $this->packetLoss = $packetLoss;
        return $this;
    }
    /**
     * ETF
     *
     * @return int
     */
    public function getEtf(): int
    {
        return $this->etf;
    }
    /**
     * ETF
     *
     * @param int $etf
     *
     * @return self
     */
    public function setEtf(int $etf): self
    {
        $this->initialized['etf'] = true;
        $this->etf = $etf;
        return $this;
    }
}