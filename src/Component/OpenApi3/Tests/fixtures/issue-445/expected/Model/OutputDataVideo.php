<?php

namespace PicturePark\API\Model;

class OutputDataVideo extends OutputDataBase
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
     * Duration of the video in seconds.
     *
     * @var float
     */
    protected $durationInSeconds;
    /**
     * With of the video.
     *
     * @var int
     */
    protected $width;
    /**
     * Height of the video.
     *
     * @var int
     */
    protected $height;
    /**
     * The sprites making up the key frames of the video.
     *
     * @var Sprite[]|null
     */
    protected $sprites;
    /**
     * Duration of the video in seconds.
     *
     * @return float
     */
    public function getDurationInSeconds() : float
    {
        return $this->durationInSeconds;
    }
    /**
     * Duration of the video in seconds.
     *
     * @param float $durationInSeconds
     *
     * @return self
     */
    public function setDurationInSeconds(float $durationInSeconds) : self
    {
        $this->initialized['durationInSeconds'] = true;
        $this->durationInSeconds = $durationInSeconds;
        return $this;
    }
    /**
     * With of the video.
     *
     * @return int
     */
    public function getWidth() : int
    {
        return $this->width;
    }
    /**
     * With of the video.
     *
     * @param int $width
     *
     * @return self
     */
    public function setWidth(int $width) : self
    {
        $this->initialized['width'] = true;
        $this->width = $width;
        return $this;
    }
    /**
     * Height of the video.
     *
     * @return int
     */
    public function getHeight() : int
    {
        return $this->height;
    }
    /**
     * Height of the video.
     *
     * @param int $height
     *
     * @return self
     */
    public function setHeight(int $height) : self
    {
        $this->initialized['height'] = true;
        $this->height = $height;
        return $this;
    }
    /**
     * The sprites making up the key frames of the video.
     *
     * @return Sprite[]|null
     */
    public function getSprites() : ?array
    {
        return $this->sprites;
    }
    /**
     * The sprites making up the key frames of the video.
     *
     * @param Sprite[]|null $sprites
     *
     * @return self
     */
    public function setSprites(?array $sprites) : self
    {
        $this->initialized['sprites'] = true;
        $this->sprites = $sprites;
        return $this;
    }
}