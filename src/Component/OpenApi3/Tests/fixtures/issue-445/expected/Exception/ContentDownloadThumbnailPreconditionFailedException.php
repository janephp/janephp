<?php

namespace PicturePark\API\Exception;

class ContentDownloadThumbnailPreconditionFailedException extends \RuntimeException implements ClientException
{
    public function __construct()
    {
        parent::__construct('', 412);
    }
}