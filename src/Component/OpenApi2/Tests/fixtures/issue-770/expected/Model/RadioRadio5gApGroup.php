<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class RadioRadio5gApGroup
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
     * @var int
     */
    protected $channelIndoor;
    /**
     * @var list<int>
     */
    protected $channelRange;
    /**
     * @var list<int>
     */
    protected $channelRangeIndoor;
    /**
     * @var int
     */
    protected $secondaryChannel;
    /**
     * @var int
     */
    protected $secondaryChannelIndoor;
    /**
     * @var string
     */
    protected $wlanGroupId;
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
     * @return int
     */
    public function getChannelIndoor(): int
    {
        return $this->channelIndoor;
    }
    /**
     * @param int $channelIndoor
     *
     * @return self
     */
    public function setChannelIndoor(int $channelIndoor): self
    {
        $this->initialized['channelIndoor'] = true;
        $this->channelIndoor = $channelIndoor;
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
     * @return list<int>
     */
    public function getChannelRangeIndoor(): array
    {
        return $this->channelRangeIndoor;
    }
    /**
     * @param list<int> $channelRangeIndoor
     *
     * @return self
     */
    public function setChannelRangeIndoor(array $channelRangeIndoor): self
    {
        $this->initialized['channelRangeIndoor'] = true;
        $this->channelRangeIndoor = $channelRangeIndoor;
        return $this;
    }
    /**
     * @return int
     */
    public function getSecondaryChannel(): int
    {
        return $this->secondaryChannel;
    }
    /**
     * @param int $secondaryChannel
     *
     * @return self
     */
    public function setSecondaryChannel(int $secondaryChannel): self
    {
        $this->initialized['secondaryChannel'] = true;
        $this->secondaryChannel = $secondaryChannel;
        return $this;
    }
    /**
     * @return int
     */
    public function getSecondaryChannelIndoor(): int
    {
        return $this->secondaryChannelIndoor;
    }
    /**
     * @param int $secondaryChannelIndoor
     *
     * @return self
     */
    public function setSecondaryChannelIndoor(int $secondaryChannelIndoor): self
    {
        $this->initialized['secondaryChannelIndoor'] = true;
        $this->secondaryChannelIndoor = $secondaryChannelIndoor;
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
}