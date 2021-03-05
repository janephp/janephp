<?php

namespace PicturePark\API\Exception;

class OutputGetMethodNotAllowedException extends MethodNotAllowedException
{
    public function __construct()
    {
        parent::__construct('Method not allowed');
    }
}