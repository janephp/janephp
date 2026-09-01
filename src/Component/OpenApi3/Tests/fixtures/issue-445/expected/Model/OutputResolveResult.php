<?php

namespace PicturePark\API\Model;

class OutputResolveResult
{
    /**
     * ID of output.
     *
     * @var string|null
     */
    public ?string $id;
    /**
     * ID of output format.
     *
     * @var string
     */
    public string $outputFormatId;
    /**
     * ID of content.
     *
     * @var string
     */
    public string $contentId;
    /**
     * Rendering state of output.
     *
     * @var string
     */
    public string $renderingState;
    /**
     * Whether this Output belongs to a dynamic OutputFormat
     *
     * @var bool
     */
    public bool $dynamicRendering;
    /**
     * Size of file, if already known
     *
     * @var int|null
     */
    public ?int $fileSize;
}