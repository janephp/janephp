<?php

namespace PicturePark\API\Exception;

class ShareGetShareJsonMethodNotAllowedException extends MethodNotAllowedException
{
    public function __construct()
    {
        parent::__construct('Method not allowed');
    }
}