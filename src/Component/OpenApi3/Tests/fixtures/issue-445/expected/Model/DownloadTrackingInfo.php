<?php

namespace PicturePark\API\Model;

class DownloadTrackingInfo
{
    /**
     * @var string|null
     */
    public ?string $contentId;
    /**
     * @var string|null
     */
    public ?string $outputFormatId;
    /**
     * @var int|null
     */
    public ?int $width;
    /**
     * @var int|null
     */
    public ?int $height;
    /**
     * @var string
     */
    public string $contentDisposition;
}