<?php

namespace PicturePark\API\Exception;

class ContentDownloadPreconditionFailedException extends \RuntimeException implements ClientException
{
    public function __construct()
    {
        parent::__construct('', 412);
    }
}