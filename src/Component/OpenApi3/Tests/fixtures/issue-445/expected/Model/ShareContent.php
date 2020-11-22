<?php

namespace PicturePark\API\Model;

class ShareContent
{
    /**
     * Content ID to share.
     *
     * @var string
     */
    protected $contentId;
    /**
     * List of output formats for this content to share. If not specified outer OutputAccess is used.
     *
     * @var string[]|null
     */
    protected $outputFormatIds;
    /**
     * Content ID to share.
     *
     * @return string
     */
    public function getContentId() : string
    {
        return $this->contentId;
    }
    /**
     * Content ID to share.
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
     * List of output formats for this content to share. If not specified outer OutputAccess is used.
     *
     * @return string[]|null
     */
    public function getOutputFormatIds() : ?array
    {
        return $this->outputFormatIds;
    }
    /**
     * List of output formats for this content to share. If not specified outer OutputAccess is used.
     *
     * @param string[]|null $outputFormatIds
     *
     * @return self
     */
    public function setOutputFormatIds(?array $outputFormatIds) : self
    {
        $this->outputFormatIds = $outputFormatIds;
        return $this;
    }
}