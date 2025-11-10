<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class RadioRadio24gAp
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
     * @var bool
     */
    protected $wlanServiceEnabled;
    /**
     * @var string
     */
    protected $protectionMode = 'RTS_CTS';
    /**
     * @var RadioAutoChannelSelection
     */
    protected $autoChannelSelection;
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
     * @return bool
     */
    public function getWlanServiceEnabled(): bool
    {
        return $this->wlanServiceEnabled;
    }
    /**
     * @param bool $wlanServiceEnabled
     *
     * @return self
     */
    public function setWlanServiceEnabled(bool $wlanServiceEnabled): self
    {
        $this->initialized['wlanServiceEnabled'] = true;
        $this->wlanServiceEnabled = $wlanServiceEnabled;
        return $this;
    }
    /**
     * @return string
     */
    public function getProtectionMode(): string
    {
        return $this->protectionMode;
    }
    /**
     * @param string $protectionMode
     *
     * @return self
     */
    public function setProtectionMode(string $protectionMode): self
    {
        $this->initialized['protectionMode'] = true;
        $this->protectionMode = $protectionMode;
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
}