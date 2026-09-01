<?php

namespace PicturePark\API\Model;

class ContentDownloadRequestItem
{
    /**
     * ID of the content that is going to be downloaded.
     *
     * @var string
     */
    public string $contentId;
    /**
     * ID of the output format that is going to be downloaded.
     *
     * @var string
     */
    public string $outputFormatId;
}