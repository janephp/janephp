<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class RadioRadio6gApGroup
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
    protected $autoCellSizing;
    /**
     * @var string
     */
    protected $txPower = 'Full';
    /**
     * @var int
     */
    protected $channelWidth = 0;
    /**
     * @var int
     */
    protected $channel;
    /**
     * @var list<int>
     */
    protected $channelRange;
    /**
     * @var string
     */
    protected $wlanGroupId;
    /**
     * @var RadioAutoChannelSelection
     */
    protected $autoChannelSelection;
    /**
     * 6G BSS minimum rate (mbps)
     *
     * @var string
     */
    protected $bssMinRate;
    /**
     * 6G management TX rate (mbps)
     *
     * @var string
     */
    protected $mgmtTxRate;
    /**
     * Multicast data rate limit for uplink (mbps), set to 0 to disable.
     *
     * @var int
     */
    protected $multicastUplinkRateLimit;
    /**
     * Multicast data rate limit for downlink (mbps), set to 0 to disable.
     *
     * @var int
     */
    protected $multicastDownlinkRateLimit;
    /**
     * @return bool
     */
    public function getAutoCellSizing(): bool
    {
        return $this->autoCellSizing;
    }
    /**
     * @param bool $autoCellSizing
     *
     * @return self
     */
    public function setAutoCellSizing(bool $autoCellSizing): self
    {
        $this->initialized['autoCellSizing'] = true;
        $this->autoCellSizing = $autoCellSizing;
        return $this;
    }
    /**
     * @return string
     */
    public function getTxPower(): string
    {
        return $this->txPower;
    }
    /**
     * @param string $txPower
     *
     * @return self
     */
    public function setTxPower(string $txPower): self
    {
        $this->initialized['txPower'] = true;
        $this->txPower = $txPower;
        return $this;
    }
    /**
     * @return int
     */
    public function getChannelWidth(): int
    {
        return $this->channelWidth;
    }
    /**
     * @param int $channelWidth
     *
     * @return self
     */
    public function setChannelWidth(int $channelWidth): self
    {
        $this->initialized['channelWidth'] = true;
        $this->channelWidth = $channelWidth;
        return $this;
    }
    /**
     * @return int
     */
    public function getChannel(): int
    {
        return $this->channel;
    }
    /**
     * @param int $channel
     *
     * @return self
     */
    public function setChannel(int $channel): self
    {
        $this->initialized['channel'] = true;
        $this->channel = $channel;
        return $this;
    }
    /**
     * @return list<int>
     */
    public function getChannelRange(): array
    {
        return $this->channelRange;
    }
    /**
     * @param list<int> $channelRange
     *
     * @return self
     */
    public function setChannelRange(array $channelRange): self
    {
        $this->initialized['channelRange'] = true;
        $this->channelRange = $channelRange;
        return $this;
    }
    /**
     * @return string
     */
    public function getWlanGroupId(): string
    {
        return $this->wlanGroupId;
    }
    /**
     * @param string $wlanGroupId
     *
     * @return self
     */
    public function setWlanGroupId(string $wlanGroupId): self
    {
        $this->initialized['wlanGroupId'] = true;
        $this->wlanGroupId = $wlanGroupId;
        return $this;
    }
    /**
     * @return RadioAutoChannelSelection
     */
    public function getAutoChannelSelection(): RadioAutoChannelSelection
    {
        return $this->autoChannelSelection;
    }
    /**
     * @param RadioAutoChannelSelection $autoChannelSelection
     *
     * @return self
     */
    public function setAutoChannelSelection(RadioAutoChannelSelection $autoChannelSelection): self
    {
        $this->initialized['autoChannelSelection'] = true;
        $this->autoChannelSelection = $autoChannelSelection;
        return $this;
    }
    /**
     * 6G BSS minimum rate (mbps)
     *
     * @return string
     */
    public function getBssMinRate(): string
    {
        return $this->bssMinRate;
    }
    /**
     * 6G BSS minimum rate (mbps)
     *
     * @param string $bssMinRate
     *
     * @return self
     */
    public function setBssMinRate(string $bssMinRate): self
    {
        $this->initialized['bssMinRate'] = true;
        $this->bssMinRate = $bssMinRate;
        return $this;
    }
    /**
     * 6G management TX rate (mbps)
     *
     * @return string
     */
    public function getMgmtTxRate(): string
    {
        return $this->mgmtTxRate;
    }
    /**
     * 6G management TX rate (mbps)
     *
     * @param string $mgmtTxRate
     *
     * @return self
     */
    public function setMgmtTxRate(string $mgmtTxRate): self
    {
        $this->initialized['mgmtTxRate'] = true;
        $this->mgmtTxRate = $mgmtTxRate;
        return $this;
    }
    /**
     * Multicast data rate limit for uplink (mbps), set to 0 to disable.
     *
     * @return int
     */
    public function getMulticastUplinkRateLimit(): int
    {
        return $this->multicastUplinkRateLimit;
    }
    /**
     * Multicast data rate limit for uplink (mbps), set to 0 to disable.
     *
     * @param int $multicastUplinkRateLimit
     *
     * @return self
     */
    public function setMulticastUplinkRateLimit(int $multicastUplinkRateLimit): self
    {
        $this->initialized['multicastUplinkRateLimit'] = true;
        $this->multicastUplinkRateLimit = $multicastUplinkRateLimit;
        return $this;
    }
    /**
     * Multicast data rate limit for downlink (mbps), set to 0 to disable.
     *
     * @return int
     */
    public function getMulticastDownlinkRateLimit(): int
    {
        return $this->multicastDownlinkRateLimit;
    }
    /**
     * Multicast data rate limit for downlink (mbps), set to 0 to disable.
     *
     * @param int $multicastDownlinkRateLimit
     *
     * @return self
     */
    public function setMulticastDownlinkRateLimit(int $multicastDownlinkRateLimit): self
    {
        $this->initialized['multicastDownlinkRateLimit'] = true;
        $this->multicastDownlinkRateLimit = $multicastDownlinkRateLimit;
        return $this;
    }
}