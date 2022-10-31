<?php

namespace PicturePark\API\Model;

class ContentDownloadRequestItem
{
    /**
     * @var array
     */
    protected $initialized = array();
    public function isInitialized($property) : bool
    {
        return array_key_exists($property, $this->initialized);
    }
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
        $this->initialized['contentId'] = true;
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
        $this->initialized['outputFormatId'] = true;
        $this->outputFormatId = $outputFormatId;
        return $this;
    }
}