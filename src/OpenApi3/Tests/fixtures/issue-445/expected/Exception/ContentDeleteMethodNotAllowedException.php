<?php

namespace PicturePark\API\Exception;

class ContentDeleteMethodNotAllowedException extends MethodNotAllowedException
{
    public function __construct()
    {
        parent::__construct('Method not allowed');
    }
}