<?php

namespace PicturePark\API\Exception;

class ContentUpdateFileMethodNotAllowedException extends MethodNotAllowedException
{
    public function __construct()
    {
        parent::__construct('Method not allowed');
    }
}