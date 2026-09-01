<?php

namespace PicturePark\API\Model;

class OutputFormatRenderPreviewRequest
{
    /**
     * The content for which the format should be rendered
     *
     * @var string|null
     */
    public ?string $contentId;
    /**
     * The format which should be rendered.
     *
     * @var OutputFormatRenderingSpecification|null
     */
    public ?OutputFormatRenderingSpecification $outputFormat;
}