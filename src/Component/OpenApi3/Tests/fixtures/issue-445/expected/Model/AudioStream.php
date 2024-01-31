<?php

namespace PicturePark\API\Model;

class AudioStream
{
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property) : bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * 
     *
     * @var string|null
     */
    protected $bitRate;
    /**
     * 
     *
     * @var string|null
     */
    protected $bitRateMode;
    /**
     * 
     *
     * @var string|null
     */
    protected $channels;
    /**
     * 
     *
     * @var string|null
     */
    protected $channelPositions;
    /**
     * 
     *
     * @var string|null
     */
    protected $codec;
    /**
     * 
     *
     * @var float|null
     */
    protected $durationInSeconds;
    /**
     * 
     *
     * @var string|null
     */
    protected $format;
    /**
     * 
     *
     * @var string|null
     */
    protected $language;
    /**
     * 
     *
     * @var int|null
     */
    protected $resolution;
    /**
     * 
     *
     * @var int|null
     */
    protected $samplingRate;
    /**
     * 
     *
     * @var int|null
     */
    protected $streamSize;
    /**
     * 
     *
     * @return string|null
     */
    public function getBitRate() : ?string
    {
        return $this->bitRate;
    }
    /**
     * 
     *
     * @param string|null $bitRate
     *
     * @return self
     */
    public function setBitRate(?string $bitRate) : self
    {
        $this->initialized['bitRate'] = true;
        $this->bitRate = $bitRate;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getBitRateMode() : ?string
    {
        return $this->bitRateMode;
    }
    /**
     * 
     *
     * @param string|null $bitRateMode
     *
     * @return self
     */
    public function setBitRateMode(?string $bitRateMode) : self
    {
        $this->initialized['bitRateMode'] = true;
        $this->bitRateMode = $bitRateMode;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getChannels() : ?string
    {
        return $this->channels;
    }
    /**
     * 
     *
     * @param string|null $channels
     *
     * @return self
     */
    public function setChannels(?string $channels) : self
    {
        $this->initialized['channels'] = true;
        $this->channels = $channels;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getChannelPositions() : ?string
    {
        return $this->channelPositions;
    }
    /**
     * 
     *
     * @param string|null $channelPositions
     *
     * @return self
     */
    public function setChannelPositions(?string $channelPositions) : self
    {
        $this->initialized['channelPositions'] = true;
        $this->channelPositions = $channelPositions;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getCodec() : ?string
    {
        return $this->codec;
    }
    /**
     * 
     *
     * @param string|null $codec
     *
     * @return self
     */
    public function setCodec(?string $codec) : self
    {
        $this->initialized['codec'] = true;
        $this->codec = $codec;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getDurationInSeconds() : ?float
    {
        return $this->durationInSeconds;
    }
    /**
     * 
     *
     * @param float|null $durationInSeconds
     *
     * @return self
     */
    public function setDurationInSeconds(?float $durationInSeconds) : self
    {
        $this->initialized['durationInSeconds'] = true;
        $this->durationInSeconds = $durationInSeconds;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getFormat() : ?string
    {
        return $this->format;
    }
    /**
     * 
     *
     * @param string|null $format
     *
     * @return self
     */
    public function setFormat(?string $format) : self
    {
        $this->initialized['format'] = true;
        $this->format = $format;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getLanguage() : ?string
    {
        return $this->language;
    }
    /**
     * 
     *
     * @param string|null $language
     *
     * @return self
     */
    public function setLanguage(?string $language) : self
    {
        $this->initialized['language'] = true;
        $this->language = $language;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getResolution() : ?int
    {
        return $this->resolution;
    }
    /**
     * 
     *
     * @param int|null $resolution
     *
     * @return self
     */
    public function setResolution(?int $resolution) : self
    {
        $this->initialized['resolution'] = true;
        $this->resolution = $resolution;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getSamplingRate() : ?int
    {
        return $this->samplingRate;
    }
    /**
     * 
     *
     * @param int|null $samplingRate
     *
     * @return self
     */
    public function setSamplingRate(?int $samplingRate) : self
    {
        $this->initialized['samplingRate'] = true;
        $this->samplingRate = $samplingRate;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getStreamSize() : ?int
    {
        return $this->streamSize;
    }
    /**
     * 
     *
     * @param int|null $streamSize
     *
     * @return self
     */
    public function setStreamSize(?int $streamSize) : self
    {
        $this->initialized['streamSize'] = true;
        $this->streamSize = $streamSize;
        return $this;
    }
}