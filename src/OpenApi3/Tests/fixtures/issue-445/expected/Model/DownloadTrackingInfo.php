<?php

namespace PicturePark\API\Model;

class DownloadTrackingInfo
{
    /**
     * 
     *
     * @var string|null
     */
    protected $contentId;
    /**
     * 
     *
     * @var string|null
     */
    protected $outputFormatId;
    /**
     * 
     *
     * @var int|null
     */
    protected $width;
    /**
     * 
     *
     * @var int|null
     */
    protected $height;
    /**
     * 
     *
     * @var string
     */
    protected $contentDisposition;
    /**
     * 
     *
     * @return string|null
     */
    public function getContentId() : ?string
    {
        return $this->contentId;
    }
    /**
     * 
     *
     * @param string|null $contentId
     *
     * @return self
     */
    public function setContentId(?string $contentId) : self
    {
        $this->contentId = $contentId;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getOutputFormatId() : ?string
    {
        return $this->outputFormatId;
    }
    /**
     * 
     *
     * @param string|null $outputFormatId
     *
     * @return self
     */
    public function setOutputFormatId(?string $outputFormatId) : self
    {
        $this->outputFormatId = $outputFormatId;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getWidth() : ?int
    {
        return $this->width;
    }
    /**
     * 
     *
     * @param int|null $width
     *
     * @return self
     */
    public function setWidth(?int $width) : self
    {
        $this->width = $width;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getHeight() : ?int
    {
        return $this->height;
    }
    /**
     * 
     *
     * @param int|null $height
     *
     * @return self
     */
    public function setHeight(?int $height) : self
    {
        $this->height = $height;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getContentDisposition() : string
    {
        return $this->contentDisposition;
    }
    /**
     * 
     *
     * @param string $contentDisposition
     *
     * @return self
     */
    public function setContentDisposition(string $contentDisposition) : self
    {
        $this->contentDisposition = $contentDisposition;
        return $this;
    }
}