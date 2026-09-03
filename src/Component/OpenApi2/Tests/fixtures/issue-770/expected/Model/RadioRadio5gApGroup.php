<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Issue770\Model;

class RadioRadio5gApGroup
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
     * @var string
     */
    public string $wlanGroupId;
    /**
     * @var RadioAutoChannelSelection
     */
    public RadioAutoChannelSelection $autoChannelSelection;
}