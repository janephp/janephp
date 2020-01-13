<?php

namespace Jane\OpenApi\Tests\Expected\Model;

class CommonMediaFields
{
    /**
     * The Media Key identifier for this attachment.
     *
     * @var string
     */
    protected $mediaKey;
    /**
     * The height of the media in pixels
     *
     * @var int
     */
    protected $height;
    /**
     * The width of the media in pixels
     *
     * @var int
     */
    protected $width;
    /**
     * The Media Key identifier for this attachment.
     *
     * @return string
     */
    public function getMediaKey() : string
    {
        return $this->mediaKey;
    }
    /**
     * The Media Key identifier for this attachment.
     *
     * @param string $mediaKey
     *
     * @return self
     */
    public function setMediaKey(string $mediaKey) : self
    {
        $this->mediaKey = $mediaKey;
        return $this;
    }
    /**
     * The height of the media in pixels
     *
     * @return int
     */
    public function getHeight() : int
    {
        return $this->height;
    }
    /**
     * The height of the media in pixels
     *
     * @param int $height
     *
     * @return self
     */
    public function setHeight(int $height) : self
    {
        $this->height = $height;
        return $this;
    }
    /**
     * The width of the media in pixels
     *
     * @return int
     */
    public function getWidth() : int
    {
        return $this->width;
    }
    /**
     * The width of the media in pixels
     *
     * @param int $width
     *
     * @return self
     */
    public function setWidth(int $width) : self
    {
        $this->width = $width;
        return $this;
    }
}