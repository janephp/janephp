<?php

namespace PicturePark\API\Exception;

class ContentRestoreMethodNotAllowedException extends MethodNotAllowedException
{
    public function __construct()
    {
        parent::__construct('Method not allowed');
    }
}