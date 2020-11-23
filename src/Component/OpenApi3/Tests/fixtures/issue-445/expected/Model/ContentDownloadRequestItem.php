<?php

namespace PicturePark\API\Model;

class ContentDownloadRequestItem
{
    /**
     * ID of the content that is going to be downloaded.
     *
     * @var string
     */
    protected $contentId;
    /**
     * ID of the output format that is going to be downloaded.
     *
     * @var string
     */
    protected $outputFormatId;
    /**
     * ID of the content that is going to be downloaded.
     *
     * @return string
     */
    public function getContentId() : string
    {
        return $this->contentId;
    }
    /**
     * ID of the content that is going to be downloaded.
     *
     * @param string $contentId
     *
     * @return self
     */
    public function setContentId(string $contentId) : self
    {
        $this->contentId = $contentId;
        return $this;
    }
    /**
     * ID of the output format that is going to be downloaded.
     *
     * @return string
     */
    public function getOutputFormatId() : string
    {
        return $this->outputFormatId;
    }
    /**
     * ID of the output format that is going to be downloaded.
     *
     * @param string $outputFormatId
     *
     * @return self
     */
    public function setOutputFormatId(string $outputFormatId) : self
    {
        $this->outputFormatId = $outputFormatId;
        return $this;
    }
}