<?php

namespace PicturePark\API\Exception;

class ShareDownloadPreconditionFailedException extends PreconditionFailedException
{
    public function __construct()
    {
        parent::__construct('');
    }
}