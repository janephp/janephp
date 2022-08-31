<?php

namespace PicturePark\API\Model;

class VideoStillFormat extends FormatBase
{
    /**
     * 
     *
     * @var string
     */
    protected $kind;
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
     * @return string
     */
    public function getKind() : string
    {
        return $this->kind;
    }
    /**
     * 
     *
     * @param string $kind
     *
     * @return self
     */
    public function setKind(string $kind) : self
    {
        $this->kind = $kind;
        return $this;
    }
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
        $this->positionInSeconds = $positionInSeconds;
        return $this;
    }
}