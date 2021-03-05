<?php

namespace PicturePark\API\Exception;

class ShareUpdateMethodNotAllowedException extends MethodNotAllowedException
{
    public function __construct()
    {
        parent::__construct('Method not allowed');
    }
}