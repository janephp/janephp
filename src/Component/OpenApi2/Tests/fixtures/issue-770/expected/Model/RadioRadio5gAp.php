<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class RadioRadio5gAp
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
    public int $secondaryChannel;
    /**
     * @var list<int>
     */
    public array $channelRange;
    /**
     * @var string
     */
    public string $wlanGroupId;
    /**
     * @var bool
     */
    public bool $wlanServiceEnabled;
    /**
     * @var RadioAutoChannelSelection
     */
    public RadioAutoChannelSelection $autoChannelSelection;
}