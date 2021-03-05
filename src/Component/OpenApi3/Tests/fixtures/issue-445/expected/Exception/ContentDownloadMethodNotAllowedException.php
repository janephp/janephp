<?php

namespace PicturePark\API\Exception;

class ContentDownloadMethodNotAllowedException extends MethodNotAllowedException
{
    public function __construct()
    {
        parent::__construct('Method not allowed');
    }
}