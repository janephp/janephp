<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Issue770\Model;

class RadioRadio24gZone
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
     * @var RadioBackgroundScanning
     */
    public RadioBackgroundScanning $backgroundScanning;
    /**
     * @var string
     */
    public string $protectionMode = 'RTS_CTS';
    /**
     * @var RadioAutoChannelSelection
     */
    public RadioAutoChannelSelection $autoChannelSelection;
}