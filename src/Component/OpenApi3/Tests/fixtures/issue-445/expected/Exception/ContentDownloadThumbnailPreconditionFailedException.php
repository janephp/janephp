<?php

namespace PicturePark\API\Exception;

class ContentDownloadThumbnailPreconditionFailedException extends PreconditionFailedException
{
    public function __construct()
    {
        parent::__construct('');
    }
}