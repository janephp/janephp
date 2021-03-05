<?php

namespace PicturePark\API\Exception;

class ContentCreateDownloadLinkMethodNotAllowedException extends MethodNotAllowedException
{
    public function __construct()
    {
        parent::__construct('Method not allowed');
    }
}