<?php

namespace PicturePark\API\Model;

class OutputFormatRenderPreviewRequest
{
    /**
     * The content for which the format should be rendered
     *
     * @var string|null
     */
    protected $contentId;
    /**
     * The format which should be rendered.
     *
     * @var mixed|null
     */
    protected $outputFormat;
    /**
     * The content for which the format should be rendered
     *
     * @return string|null
     */
    public function getContentId() : ?string
    {
        return $this->contentId;
    }
    /**
     * The content for which the format should be rendered
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
     * The format which should be rendered.
     *
     * @return mixed
     */
    public function getOutputFormat()
    {
        return $this->outputFormat;
    }
    /**
     * The format which should be rendered.
     *
     * @param mixed $outputFormat
     *
     * @return self
     */
    public function setOutputFormat($outputFormat) : self
    {
        $this->outputFormat = $outputFormat;
        return $this;
    }
}