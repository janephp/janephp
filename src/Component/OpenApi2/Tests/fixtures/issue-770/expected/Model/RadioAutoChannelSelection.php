<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class RadioAutoChannelSelection
{
    /**
     * @var string
     */
    public string $channelSelectMode = 'BackgroundScanning';
    /**
     * @var int
     */
    public int $channelFlyMtbc = 480;
    /**
     * @var int
     */
    public int $channelFlyChangeFrequency = 33;
    /**
     * @var list<string>
     */
    public array $channelFlyOptimizationTimePeriod;
}