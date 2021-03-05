<?php

namespace PicturePark\API\Exception;

class ContentDownloadPreconditionFailedException extends PreconditionFailedException
{
    public function __construct()
    {
        parent::__construct('');
    }
}