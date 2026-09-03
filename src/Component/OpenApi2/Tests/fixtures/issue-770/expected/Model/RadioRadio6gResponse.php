<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Issue770\Model;

class RadioRadio6gResponse
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
     * @var list<int>
     */
    public array $channelRange;
    /**
     * @var bool
     */
    public bool $lowPowerIndoorModeEnabled;
    /**
     * @var list<int>
     */
    public array $availableChannelRange;
    /**
     * @var string
     */
    public string $wlanGroupId;
    /**
     * @var bool
     */
    public bool $wlanServiceEnabled;
    /**
     * @var string
     */
    public string $protectionMode = 'RTS_CTS';
    /**
     * @var RadioBackgroundScanning
     */
    public RadioBackgroundScanning $backgroundScanning;
    /**
     * @var RadioAutoChannelSelection
     */
    public RadioAutoChannelSelection $autoChannelSelection;
    /**
     * 6G BSS minimum rate (mbps)
     *
     * @var string
     */
    public string $bssMinRate;
    /**
     * 6G management TX rate (mbps)
     *
     * @var string
     */
    public string $mgmtTxRate;
    /**
     * Multicast data rate limit for uplink (mbps), set to 0 to disable.
     *
     * @var int
     */
    public int $multicastUplinkRateLimit;
    /**
     * Multicast data rate limit for downlink (mbps), set to 0 to disable.
     *
     * @var int
     */
    public int $multicastDownlinkRateLimit;
}