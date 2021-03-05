<?php

namespace PicturePark\API\Exception;

class BusinessProcessGetMethodNotAllowedException extends MethodNotAllowedException
{
    public function __construct()
    {
        parent::__construct('Method not allowed');
    }
}