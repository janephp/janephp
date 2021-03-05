<?php

namespace PicturePark\API\Exception;

class ShareDownloadSingleContentMethodNotAllowedException extends MethodNotAllowedException
{
    public function __construct()
    {
        parent::__construct('Method not allowed');
    }
}