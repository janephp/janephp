<?php

namespace Jane\OpenApi\Tests\Expected\Model;

class AnimatedGif
{
    /**
     * 
     *
     * @var string
     */
    protected $type;
    /**
     * 
     *
     * @var string
     */
    protected $previewImageUrl;
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
     * 
     *
     * @return string
     */
    public function getType() : string
    {
        return $this->type;
    }
    /**
     * 
     *
     * @param string $type
     *
     * @return self
     */
    public function setType(string $type) : self
    {
        $this->type = $type;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getPreviewImageUrl() : string
    {
        return $this->previewImageUrl;
    }
    /**
     * 
     *
     * @param string $previewImageUrl
     *
     * @return self
     */
    public function setPreviewImageUrl(string $previewImageUrl) : self
    {
        $this->previewImageUrl = $previewImageUrl;
        return $this;
    }
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