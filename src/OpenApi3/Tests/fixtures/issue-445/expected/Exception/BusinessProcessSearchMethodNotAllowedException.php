<?php

namespace PicturePark\API\Exception;

class BusinessProcessSearchMethodNotAllowedException extends MethodNotAllowedException
{
    public function __construct()
    {
        parent::__construct('Method not allowed');
    }
}