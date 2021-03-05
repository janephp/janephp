<?php

namespace PicturePark\API\Exception;

class ContentGetMethodNotAllowedException extends MethodNotAllowedException
{
    public function __construct()
    {
        parent::__construct('Method not allowed');
    }
}