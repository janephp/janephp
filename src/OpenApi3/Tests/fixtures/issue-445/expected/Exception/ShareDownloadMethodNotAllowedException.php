<?php

namespace PicturePark\API\Exception;

class ShareDownloadMethodNotAllowedException extends MethodNotAllowedException
{
    public function __construct()
    {
        parent::__construct('Method not allowed');
    }
}