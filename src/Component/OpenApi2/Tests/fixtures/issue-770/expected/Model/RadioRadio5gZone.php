<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class RadioRadio5gZone
{
    /**
     * @var bool
     */
    public bool $autoCellSizing;
    /**
     * @var string
     */
    public string $txPower = 'Full';
    /**
     * @var int
     */
    public int $channelWidth = 0;
    /**
     * @var int
     */
    public int $channel;
    /**
     * @var int
     */
    public int $channelIndoor;
    /**
     * @var list<int>
     */
    public array $channelRange;
    /**
     * @var list<int>
     */
    public array $channelRangeIndoor;
    /**
     * @var int
     */
    public int $secondaryChannel;
    /**
     * @var int
     */
    public int $secondaryChannelIndoor;
    /**
     * @var bool
     */
    public bool $dfsChannelEnabled;
    /**
     * @var bool
     */
    public bool $cbandChannelEnabled;
    /**
     * @var bool
     */
    public bool $cbandChannelLicenseEnabled;
    /**
     * @var bool
     */
    public bool $channel144Enabled;
    /**
     * @var bool
     */
    public bool $channelModeEnabled;
    /**
     * @var RadioBackgroundScanning
     */
    public RadioBackgroundScanning $backgroundScanning;
    /**
     * @var RadioAutoChannelSelection
     */
    public RadioAutoChannelSelection $autoChannelSelection;
}