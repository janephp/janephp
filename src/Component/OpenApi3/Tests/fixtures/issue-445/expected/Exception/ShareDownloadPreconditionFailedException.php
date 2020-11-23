<?php

namespace PicturePark\API\Exception;

class ShareDownloadPreconditionFailedException extends \RuntimeException implements ClientException
{
    public function __construct()
    {
        parent::__construct('', 412);
    }
}