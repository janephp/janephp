<?php

namespace PicturePark\API\Exception;

class ShareDownloadSingleContentPreconditionFailedException extends PreconditionFailedException
{
    public function __construct()
    {
        parent::__construct('');
    }
}