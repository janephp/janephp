<?php

namespace PicturePark\API\Exception;

class DisplayValueGetStatusMethodNotAllowedException extends MethodNotAllowedException
{
    public function __construct()
    {
        parent::__construct('Method not allowed');
    }
}