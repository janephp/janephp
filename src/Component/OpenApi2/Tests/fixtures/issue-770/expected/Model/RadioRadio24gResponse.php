<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class RadioRadio24gResponse
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
}