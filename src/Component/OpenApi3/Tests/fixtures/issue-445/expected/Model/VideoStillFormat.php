<?php

namespace PicturePark\API\Model;

class VideoStillFormat extends FormatBase
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
    protected $extension;
    /**
     * Specifies the position from which to produce the image.
     *
     * @var int
     */
    protected $positionInSeconds;
    /**
     * 
     *
     * @return string|null
     */
    public function getExtension() : ?string
    {
        return $this->extension;
    }
    /**
     * 
     *
     * @param string|null $extension
     *
     * @return self
     */
    public function setExtension(?string $extension) : self
    {
        $this->initialized['extension'] = true;
        $this->extension = $extension;
        return $this;
    }
    /**
     * Specifies the position from which to produce the image.
     *
     * @return int
     */
    public function getPositionInSeconds() : int
    {
        return $this->positionInSeconds;
    }
    /**
     * Specifies the position from which to produce the image.
     *
     * @param int $positionInSeconds
     *
     * @return self
     */
    public function setPositionInSeconds(int $positionInSeconds) : self
    {
        $this->initialized['positionInSeconds'] = true;
        $this->positionInSeconds = $positionInSeconds;
        return $this;
    }
}