<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class RadioAutoChannelSelection
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
     * @var string
     */
    protected $channelSelectMode = 'BackgroundScanning';
    /**
     * @var int
     */
    protected $channelFlyMtbc = 480;
    /**
     * @var int
     */
    protected $channelFlyChangeFrequency = 33;
    /**
     * @var list<string>
     */
    protected $channelFlyOptimizationTimePeriod;
    /**
     * @return string
     */
    public function getChannelSelectMode(): string
    {
        return $this->channelSelectMode;
    }
    /**
     * @param string $channelSelectMode
     *
     * @return self
     */
    public function setChannelSelectMode(string $channelSelectMode): self
    {
        $this->initialized['channelSelectMode'] = true;
        $this->channelSelectMode = $channelSelectMode;
        return $this;
    }
    /**
     * @return int
     */
    public function getChannelFlyMtbc(): int
    {
        return $this->channelFlyMtbc;
    }
    /**
     * @param int $channelFlyMtbc
     *
     * @return self
     */
    public function setChannelFlyMtbc(int $channelFlyMtbc): self
    {
        $this->initialized['channelFlyMtbc'] = true;
        $this->channelFlyMtbc = $channelFlyMtbc;
        return $this;
    }
    /**
     * @return int
     */
    public function getChannelFlyChangeFrequency(): int
    {
        return $this->channelFlyChangeFrequency;
    }
    /**
     * @param int $channelFlyChangeFrequency
     *
     * @return self
     */
    public function setChannelFlyChangeFrequency(int $channelFlyChangeFrequency): self
    {
        $this->initialized['channelFlyChangeFrequency'] = true;
        $this->channelFlyChangeFrequency = $channelFlyChangeFrequency;
        return $this;
    }
    /**
     * @return list<string>
     */
    public function getChannelFlyOptimizationTimePeriod(): array
    {
        return $this->channelFlyOptimizationTimePeriod;
    }
    /**
     * @param list<string> $channelFlyOptimizationTimePeriod
     *
     * @return self
     */
    public function setChannelFlyOptimizationTimePeriod(array $channelFlyOptimizationTimePeriod): self
    {
        $this->initialized['channelFlyOptimizationTimePeriod'] = true;
        $this->channelFlyOptimizationTimePeriod = $channelFlyOptimizationTimePeriod;
        return $this;
    }
}