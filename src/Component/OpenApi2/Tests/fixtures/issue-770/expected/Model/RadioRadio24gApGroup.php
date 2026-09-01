<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class RadioRadio24gApGroup
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
     * @var string
     */
    public string $wlanGroupId;
    /**
     * @var string
     */
    public string $protectionMode = 'RTS_CTS';
    /**
     * @var RadioAutoChannelSelection
     */
    public RadioAutoChannelSelection $autoChannelSelection;
}