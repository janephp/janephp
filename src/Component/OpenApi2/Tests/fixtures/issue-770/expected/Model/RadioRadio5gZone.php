<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class RadioRadio5gZone
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
     * @var bool
     */
    protected $dfsChannelEnabled;
    /**
     * @var bool
     */
    protected $cbandChannelEnabled;
    /**
     * @var bool
     */
    protected $cbandChannelLicenseEnabled;
    /**
     * @var bool
     */
    protected $channel144Enabled;
    /**
     * @var bool
     */
    protected $channelModeEnabled;
    /**
     * @var RadioBackgroundScanning
     */
    protected $backgroundScanning;
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
     * @return bool
     */
    public function getDfsChannelEnabled(): bool
    {
        return $this->dfsChannelEnabled;
    }
    /**
     * @param bool $dfsChannelEnabled
     *
     * @return self
     */
    public function setDfsChannelEnabled(bool $dfsChannelEnabled): self
    {
        $this->initialized['dfsChannelEnabled'] = true;
        $this->dfsChannelEnabled = $dfsChannelEnabled;
        return $this;
    }
    /**
     * @return bool
     */
    public function getCbandChannelEnabled(): bool
    {
        return $this->cbandChannelEnabled;
    }
    /**
     * @param bool $cbandChannelEnabled
     *
     * @return self
     */
    public function setCbandChannelEnabled(bool $cbandChannelEnabled): self
    {
        $this->initialized['cbandChannelEnabled'] = true;
        $this->cbandChannelEnabled = $cbandChannelEnabled;
        return $this;
    }
    /**
     * @return bool
     */
    public function getCbandChannelLicenseEnabled(): bool
    {
        return $this->cbandChannelLicenseEnabled;
    }
    /**
     * @param bool $cbandChannelLicenseEnabled
     *
     * @return self
     */
    public function setCbandChannelLicenseEnabled(bool $cbandChannelLicenseEnabled): self
    {
        $this->initialized['cbandChannelLicenseEnabled'] = true;
        $this->cbandChannelLicenseEnabled = $cbandChannelLicenseEnabled;
        return $this;
    }
    /**
     * @return bool
     */
    public function getChannel144Enabled(): bool
    {
        return $this->channel144Enabled;
    }
    /**
     * @param bool $channel144Enabled
     *
     * @return self
     */
    public function setChannel144Enabled(bool $channel144Enabled): self
    {
        $this->initialized['channel144Enabled'] = true;
        $this->channel144Enabled = $channel144Enabled;
        return $this;
    }
    /**
     * @return bool
     */
    public function getChannelModeEnabled(): bool
    {
        return $this->channelModeEnabled;
    }
    /**
     * @param bool $channelModeEnabled
     *
     * @return self
     */
    public function setChannelModeEnabled(bool $channelModeEnabled): self
    {
        $this->initialized['channelModeEnabled'] = true;
        $this->channelModeEnabled = $channelModeEnabled;
        return $this;
    }
    /**
     * @return RadioBackgroundScanning
     */
    public function getBackgroundScanning(): RadioBackgroundScanning
    {
        return $this->backgroundScanning;
    }
    /**
     * @param RadioBackgroundScanning $backgroundScanning
     *
     * @return self
     */
    public function setBackgroundScanning(RadioBackgroundScanning $backgroundScanning): self
    {
        $this->initialized['backgroundScanning'] = true;
        $this->backgroundScanning = $backgroundScanning;
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