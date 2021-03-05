<?php

namespace PicturePark\API\Exception;

class ContentCreateMethodNotAllowedException extends MethodNotAllowedException
{
    public function __construct()
    {
        parent::__construct('Method not allowed');
    }
}